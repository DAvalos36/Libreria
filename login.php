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
    <link rel="shortcut icon" href="img/icon-book.png">
    <link rel="stylesheet" href="css/si.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <section class="iniciar">
        <h5>Inicie sesion</h5>
        <form action="resLogin.php" method="post" onsubmit="login(event, this)">
            <input class="control" type="text" id="usuario" name="usuario" required minlength="6" class="redondo" placeholder="Usuario">
            <span id="respuesta"></span>
            <input class="control" type="password" name="pass" id="pass" required minlength="6" class="redondo" placeholder="Contraseña">
            <input class="boton" type="submit" value="Iniciar"> <input class="boton" type="reset" value="Cancelar">
        </form>
        <a href="registrarse.php">    
            <button class="boton">Registrarse</button>     
        </a>
    </section>

    <script src="js/ajaxLogin.js"></script>
</body>
</html>