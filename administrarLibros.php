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
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Libros</title>
</head>
<body>
    <form action="resAdminAgregarLibro.php" method="post" enctype="multipart/form-data">
        <label for="titulo">Ingrese titulo de residencia:</label>
        <input type="text" name="titulo" id="titulo">
        <label for="imagen">Adjunte imagen de archivo!</label>
        <input type="file" name="imagen" id="imagen">
        <label for="link">Link del archivo en drive!</label>
        <input type="url" name="link" id="link">
        <label for="fecha">Ingrese fecha que marca el trabajo!</label>
        <input type="date" name="fecha" id="fecha">
        <input type="submit" value="Enviar!">
    </form>
</body>
</html>