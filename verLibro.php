<?php
session_start();
if (!isset($_SESSION["id"])) {
    header("location: login.php");
    exit();
}
require_once("privado/configDB.php");
if (!isset($_GET["id"])) {
    header("location: index.php");
    exit();
}
$id = $base->real_escape_string(filter_input(INPUT_GET, "id"));
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
    <?php require_once("privado/modulos/navbar.php");
    $res = $base->query("SELECT * FROM `libros` WHERE `id` = $id");
    if ($res) {
        if ($res->num_rows == 1) {
            $datos = $res->fetch_assoc();
            $linkVista = str_replace("/view", "/preview", $datos["link_google"]);
            $cadena = explode("/", $datos["link_google"]);
            $idGoogle = $cadena[5];
            $linkDescarga = "https://drive.google.com/u/1/uc?id=$idGoogle&export=download"
    ?>
            <div class="Centrar">
                <h1><?php echo $datos["titulo"] ?></h1>
            </div>
            <div class="Centrar">
                <h5><?php echo $datos["fecha"] ?></h5>
            </div>
            <div class="Centrar"><iframe src="<?php echo $linkVista?>"></iframe></div>
            <!-- <div class="Centrar"><a href="<?php echo $linkDescarga ?>"><button class="boton">Descargar</button></a></div> -->
            <a href="<?php echo $linkDescarga ?>"><button class="boton">Descargar</button></a>
    <?php
        $res->free_result();
        }
        else{ ?>
            <div class="Centrar">
                <h1>Libro No Encontado...</h1>
            </div>
        <?php }
    } 
    else {
        header("location: index.php");
    }
    $base->close();
    ?>
</body>

</html>