<?php
    include_once 'db_connect.php';
    include_once 'psl-config.php';
     
    $error_msg = "";
     
    if (isset($_POST['nom_usa'], $_POST['email'], $_POST['p'])) {
        // Sanear y validar los datos provistos.
        $nom_usa = filter_input(INPUT_POST, 'nom_usa', FILTER_SANITIZE_STRING);
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
        $email = filter_var($email, FILTER_VALIDATE_EMAIL);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            // No es un correo electrónico válido.
            $error_msg .= '<p class="error">The email address you entered is not valid</p>';
        }
     
        $password = filter_input(INPUT_POST, 'p', FILTER_SANITIZE_STRING);
        if (strlen($password) != 128) {
            // La contraseña con hash deberá ser de 128 caracteres.
            // De lo contrario, algo muy raro habrá sucedido. 
            $error_msg .= '<p class="error">Invalid password configuration.</p>';
        }
     
        // La validez del nombre de usuario y de la contraseña ha sido verificada en el cliente.
        // Esto será suficiente, ya que nadie se beneficiará de
        // violar estas reglas.
        //
     
        $prep_stmt = "SELECT id_usa FROM m01_usa WHERE email = ? LIMIT 1";
        $stmt = $mysqli->prepare($prep_stmt);
     
       // Verifica el correo electrónico existente.  
        if ($stmt) {
            $stmt->bind_param('s', $email);
            $stmt->execute();
            $stmt->store_result();
     
            if ($stmt->num_rows == 1) {
                // Ya existe otro usuario con este correo electrónico.
                $error_msg .= '<p class="error">A user with this email address already exists.</p>';
                            $stmt->close();
            }
                    $stmt->close();
        } else {
            $error_msg .= '<p class="error">Database error Line 39</p>';
                    $stmt->close();
        }
     
        // Verifica el nombre de usuario existente. 
        $prep_stmt = "SELECT id_usa FROM m01_usa WHERE nom_usa = ? LIMIT 1";
        $stmt = $mysqli->prepare($prep_stmt);
     
        if ($stmt) {
            $stmt->bind_param('s', $nom_usa);
            $stmt->execute();
            $stmt->store_result();
     
                    if ($stmt->num_rows == 1) {
                            // Ya existe otro usuario con este nombre de usuario.
                            $error_msg .= '<p class="error">A user with this nom_usa already exists</p>';
                            $stmt->close();
                    }
                    $stmt->close();
            } else {
                    $error_msg .= '<p class="error">Database error line 55</p>';
                    $stmt->close();
            }
        // Pendiente: 
        // También habrá que tener en cuenta la situación en la que el usuario no tenga
        // derechos para registrarse, al verificar qué tipo de usuario intenta
        // realizar la operación.
     
        if (empty($error_msg)) {
            // Crear una sal aleatoria.
            //$random_salt = hash('sha512', uniqid(openssl_random_pseudo_bytes(16), TRUE)); // Did not work
            $random_salt = hash('sha512', uniqid(mt_rand(1, mt_getrandmax()), true));
     
            // Crea una contraseña con sal. 
            $pas_usa = hash('sha512', $pas_usa . $random_salt);
     
            // Inserta el nuevo usuario a la base de datos.  
            if ($insert_stmt = $mysqli->prepare("INSERT INTO m01_usa (nom_usa, email_usa, pas_usa, salt) VALUES (?, ?, ?, ?)")) {
                $insert_stmt->bind_param('ssss', $nom_usa, $email_usa, $pas_usa, $random_salt);
                // Ejecuta la consulta preparada.
                if (! $insert_stmt->execute()) {
                    header('Location: ../error.php?err=Registration failure: INSERT');
                }
            }
            header('Location: ./register_success.php');
        }
    }
?>