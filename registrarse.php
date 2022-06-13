<?php
    session_start();
    if (isset($_SESSION["id"])){
        header("location: index.php");
        exit("IDK");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/si.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrarse</title>
</head>
<body>
    
    <section class="iniciar2">

        <form method="post" action="resRegistro.php" onsubmit="registro(event, this)">
            <label for="nombre">Nombre(s)</label><br>
            <input class="control" type="text" id="nombre" name="nombre" required minlength="4"><br>
            <label for="apellido">Apellidos</label><br>
            <input class="control" type="text" id="apellido" name="apellido" required minlength="4"><br>
            <label for="usuario">Nombre de Usuario:</label><br>
            <input class="control" type="text" id="usuario" name="usuario" required minlength="6"><br>
            <label for="contra">Contraseña</label><br>
            <input class="control" type="password" name="pass" id="contra" required minlength="6"><br>
            <span id="respuesta"></span>
            <input class="boton" type="submit" value="Enviar">
        </form>
        <a href="login.php">
            <button class="boton">Cancelar</button>
        </a>

    </section>
    <script src="js/ajaxLogin.js"></script>
</body>
</html>