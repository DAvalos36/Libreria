<?php
session_start();
if (!isset($_SESSION["id"]) or $_SESSION["rango"] == 2) {
    header("location: index.php");
    exit(401);
}
require_once("privado/configDB.php");
$res = $base->query("SELECT `id`, `titulo` FROM `libros`");
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
        <form action="resAdminAgregarLibro.php" method="post" enctype="multipart/form-data" onsubmit="nuevoLibro(event,this)">
            <label for="titulo">Ingrese titulo de residencia:</label>
            <input class="controls" type="text" name="titulo" id="titulo" required minlength="1">
            <label for="imagen">Adjunte imagen de archivo!</label>
            <input class="controls" type="file" name="imagen" accept="image/*" id="imagen" required>
            <label for="link">Link del archivo en drive!</label>
            <input class="controls" type="url" name="link" id="link" required>
            <label for="fecha">Ingrese fecha que marca el trabajo!</label>
            <input class="controls" type="date" name="fecha" id="fecha" required>
            <input class="boton" type="submit" value="Enviar!">
        </form>
        <a href="index.php">
            <input class="boton" type="submit" value="Cancelar!">
        </a>
    </section>

    <div id="main-container">
        <?php if($res->num_rows > 0){ ?>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Borrar</th>
                </tr>
            </thead>
            <?php
                foreach ($res as $key => $value) {?>
                    <tr>
                        <td><?php echo $value["id"] ?></td>
                        <td><?php echo $value["titulo"] ?></td>
                        <td><button class="boton" onclick='eliminar(<?php echo "$value[id]" ?>)'>Eliminar</button></td>
                    </tr>
                <?php }
            ?>
        </table>
        <?php } ?>
    </div>
    <script src="js/ajaxLibros.js"></script>
</body>

</html>