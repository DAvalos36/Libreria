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
    <title>Libros</title>
</head>
<body background="img/libreria.jpg">
    <?php require_once("privado/modulos/navbar.php") ?>
    <section class="guardar">

        <form action="resAdminAgregarLibro.php" method="post" enctype="multipart/form-data">
            <label for="titulo">Ingrese titulo de residencia:</label>
            <input class="controls" type="text" name="titulo" id="titulo">
            <label for="imagen">Adjunte imagen de archivo!</label>
            <input class="controls" type="file" name="imagen" id="imagen">
            <label for="link">Link del archivo en drive!</label>
            <input class="controls" type="url" name="link" id="link">
            <label for="fecha">Ingrese fecha que marca el trabajo!</label>
            <input class="controls" type="date" name="fecha" id="fecha">
            <input class="boton" type="submit" value="Enviar!">
        </form>
        <a href="index.php">
            <input class="boton" type="submit" value="Cancelar!">
        </a>
        
    </section>
</body>
</html>