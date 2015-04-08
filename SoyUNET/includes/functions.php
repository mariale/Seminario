<?php
    include_once 'psl-config.php';
    function sec_session_start() 
    {
        $session_name = 'sec_session_id';   // Configura un nombre de sesión personalizado.
        $secure = SECURE;
        // Esto detiene que JavaScript sea capaz de acceder a la identificación de la sesión.
        $httponly = true;
        // Obliga a las sesiones a solo utilizar cookies.
        if (ini_set('session.use_only_cookies', 1) === FALSE) 
        {
            header("Location: ../error.php?err=Could not initiate a safe session (ini_set)");
            exit();
        }
        // Obtiene los params de los cookies actuales.
        $cookieParams = session_get_cookie_params();
        session_set_cookie_params($cookieParams["lifetime"],
            $cookieParams["path"], 
            $cookieParams["domain"], 
            $secure,
            $httponly);
        // Configura el nombre de sesión al configurado arriba.
        session_name($session_name);
        session_start();            // Inicia la sesión PHP.
        session_regenerate_id();    // Regenera la sesión, borra la previa. 
    }
    function login($email_usa, $pas_usa, $mysqli) 
    {
        // Usar declaraciones preparadas significa que la inyección de SQL no será posible.
        if ($stmt = $mysqli->prepare("SELECT id_usa, nom_usa, pas_usa, salt FROM m01_usa WHERE email_usa = ?LIMIT 1")) 
        {
            $stmt->bind_param('s', $email_usa);  // Une “$email” al parámetro.
            $stmt->execute();    // Ejecuta la consulta preparada.
            $stmt->store_result();
            // Obtiene las variables del resultado.
            $stmt->bind_result($id_usa, $nom_usa, $db_pas_usa, $salt);
            $stmt->fetch();
            // Hace el hash de la contraseña con una sal única.
            $pas_usa = hash('sha512', $pas_usa . $salt);
            if ($stmt->num_rows == 1)
            {
                // Si el usuario existe, revisa si la cuenta está bloqueada
                // por muchos intentos de conexión.
                if (checkbrute($id_usa, $mysqli) == true) 
                {
                    // La cuenta está bloqueada.
                    // Envía un correo electrónico al usuario que le informa que su cuenta está bloqueada.
                    return false;
                } else 
                {
                    // Revisa que la contraseña en la base de datos coincida 
                    // con la contraseña que el usuario envió.
                    if ($db_pas_usa == $pas_usa) 
                    {
                        // ¡La contraseña es correcta!
                        // Obtén el agente de usuario del usuario.
                        $user_browser = $_SERVER['HTTP_USER_AGENT'];
                        //  Protección XSS ya que podríamos imprimir este valor.
                        $id_usa = preg_replace("/[^0-9]+/", "", $id_usa);
                        $_SESSION['id_usa'] = $id_usa;
                        // Protección XSS ya que podríamos imprimir este valor.
                        $nom_usa = preg_replace("/[^a-zA-Z0-9_\-]+/", 
                                                                  "", 
                                                                   $nom_usa);
                        $_SESSION['nom_usa'] = $nom_usa;
                        $_SESSION['login_string'] = hash('sha512', 
                                 $pas_usa . $user_browser);
                        // Inicio de sesión exitoso
                        return true;
                    } else 
                    {
                        // La contraseña no es correcta.
                        // Se graba este intento en la base de datos.
                        $now = time();
                        $mysqli->query("INSERT INTO login_attempts(id_usa, time)
                                       VALUES ('$id_usa', '$now')");
                        return false;
                    }
                }
            } else 
            {
                // El usuario no existe.
                return false;
            }
    }
    function checkbrute($id_usa, $mysqli) 
    {
        /* Obtiene el timestamp del tiempo actual.
        $now = time();
     
        // Todos los intentos de inicio de sesión se cuentan desde las 2 horas anteriores.
        $valid_attempts = $now - (2 * 60 * 60);
        if ($stmt = $mysqli->prepare("SELECT time 
                                 FROM login_attempts 
                                 WHERE id_usa = ? 
                                AND time > '$valid_attempts'")) 
        {
            $stmt->bind_param('i', $id_usa);
            // Ejecuta la consulta preparada.
            $stmt->execute();
            $stmt->store_result();
            // Si ha habido más de 5 intentos de inicio de sesión fallidos.
            if ($stmt->num_rows > 5) {
                return true;
            } else {
                return false;
            }
        }*/
    }
    function login_check($mysqli) 
    {
      /*  // Revisa si todas las variables de sesión están configuradas.
        if (isset($_SESSION['id_usa'], $_SESSION['nom_usa'], $_SESSION['login_string'])) 
        {
            $id_usa = $_SESSION['id_usa'];
            $login_string = $_SESSION['login_string'];
            $nom_usa = $_SESSION['nom_usa'];
            // Obtiene la cadena de agente de usuario del usuario.
            $user_browser = $_SERVER['HTTP_USER_AGENT'];
            if ($stmt = $mysqli->prepare("SELECT pas_usa  FROM m01_usa WHERE id_usa = ? LIMIT 1")) 
            {
                // Une “$id_usa” al parámetro.
                $stmt->bind_param('i', $id_usa);
                $stmt->execute();   // Ejecuta la consulta preparada.
                $stmt->store_result();
                if ($stmt->num_rows == 1) 
                {
                    // Si el usuario existe, obtiene las variables del resultado.
                    $stmt->bind_result($pas_usa);
                    $stmt->fetch();
                    $login_check = hash('sha512', $pas_usa . $user_browser);
                    if ($login_check == $login_string) 
                    {
                        // ¡¡Conectado!! 
                        return true;
                    } else
                     {
                        // No conectado.
                        return false;
                    }
                } else 
                {
                    // No conectado.
                    return false;
                }
            } else
            {
                // No conectado.
                return false;
            }
        } else 
        {
            // No conectado.
            return false;
        }*/
    }
    function esc_url($url) 
    {
      /*  if ('' == $url) 
        {
            return $url;
        }
        $url = preg_replace('|[^a-z0-9-~+_.?#=!&;,/:%@$\|*\'()\\x80-\\xff]|i', '', $url);
        $strip = array('%0d', '%0a', '%0D', '%0A');
        $url = (string) $url;
        $count = 1;
        while ($count) 
        {
            $url = str_replace($strip, '', $url, $count);
        }
        $url = str_replace(';//', '://', $url);
        $url = htmlentities($url);
        $url = str_replace('&amp;', '&#038;', $url);
        $url = str_replace("'", '&#039;', $url);
        if ($url[0] !== '/') 
        {
           // Solo nos interesan los enlaces relativos de 
             //$_SERVER['PHP_SELF']
            return '';
        } else 
        {
            return $url;
        }*/
    } 
?>