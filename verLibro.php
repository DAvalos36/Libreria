<?php
    session_start();
    if(!isset($_SESSION["id"])){
        header("location: login.php");
        exit();
    }
    require_once("privado/configDB.php");
    require_once("privado/modulos/cardLibros.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="shortcut icon" href="img/icon-book.png">
    <link rel="stylesheet" href="css/si.css">   
    <meta charset="UTF-8">
    <title>Inicio</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
</head>
<body background="img/libreria.jpg">
    
    <?php require_once("privado/modulos/navbar.php") ?>
    <div class="Centrar">

        <h1>Titulo</h1>

    </div>
    <iframe src="http://docs.google.com/gview?url=https://drive.google.com/file/d/17oQmyEuZp6CaxDPj0iIKDRUtS0GVkoaf/view&embedded=true"></iframe>
    
    <a href="">
        <button class="boton">Descargar</button>
    </a>

   


</body>
</html>