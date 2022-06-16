<?php
    session_start();
    if (!isset($_SESSION["id"]) or $_SESSION["rango"] == 2){
        header("location: index.php");
        exit(401);
    }
    require_once("privado/configDB.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="shortcut icon" href="img/icon-book.png">
    <link rel="stylesheet" href="css/si.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrar</title>
</head>
<body background="img/libreria.jpg">
    <?php require_once("privado/modulos/navbar.php") ?>
    <div class="qhacer">

        <a href="administrarLibros.php">
            <button class="boton1">Libros</button>
        </a>
        <a href="administrarUsuarios.php">
            <button class="boton2">Usuarios</button>
        </a>
        <a href="resReporte.php">
            <button class="boton2">Reportes</button>
        </a>

    </div>
</body>
</html>