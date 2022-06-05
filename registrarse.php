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
    <link rel="stylesheet" href="si.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrarse</title>
</head>
<body>
    <div class="Centrar">

        <form method="post" action="resRegistro.php">
            <label for="nombre">Nombre(s)</label><br>
            <input type="text" id="nombre" name="nombre" required minlength="4"><br>
            <label for="apellido">Apellidos</label><br>
            <input type="text" id="apellido" name="apellido" required minlength="4"><br>
            <label for="usuario">Nombre de Usuario:</label><br>
            <input type="text" id="usuario" name="usuario" required minlength="6"><br>
            <label for="contra">Contraseña</label><br>
            <input type="password" name="pass" id="contra" required minlength="6"><br>
            <input type="submit" value="Enviar"> <input type="reset" value="Cancelar">
    
    
            
        </form>


    </div>
</body>
</html>