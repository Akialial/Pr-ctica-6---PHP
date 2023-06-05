<!DOCTYPE HTML>
<html>

    <head>
        <title>Samsung Desarrolladoras 2022/23 - Práctica 5</title>
        <meta charset="utf-8" />
        <link rel="stylesheet" type="text/css" href="style.css" />
        <script src="script.js"></script>
    </head>

    <body>
        <div class ="group">
        <form method="POST" action="" >
            <h1>Formulario de suscripción</h1>
                <label for="nombre">Nombre <span><em>(requerido)</em></span></label>
                    <input type="text" name="nombre" class="form-input" required/>

                <label for="apellido">Apellido <span><em>(requerido)</em></span></label>
                    <input type="text" name="apellido" class="form-input" required/>

                <label for="email">Email <span><em>(requerido)</em></span></label>
                    <input type="email" name="email" class="form-input" required/>
                    <input class="form-btn" name="submit" type="submit" value="Suscribirse" />

        <?php

        if ($_POST) {
        $nombre = $_POST['nombre'];    
        $apellido = $_POST['apellido'];
        $email = $_POST['email'];
        

        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "cursosql";

        $conn = new mysqli ($servername, $username, $password, $dbname);
        if ($conn -> connect_error) {
            die ("Conexión fallida: " .$conn->connect_error);
        }

        $sql = "INSERT INTO usuario (nombre, apellido, email)
        VALUES ('$nombre', '$apellido', '$email')";

        if ($conn->query($sql) === TRUE) {
            echo "Registro creado satisfactoriamente";
        } else {
            echo "Error: " .$sql . "br" . $conn->error;
        }

        $conn->close();
    }
    ?>
        
        </form>
        </div>
    </body>
</html>
