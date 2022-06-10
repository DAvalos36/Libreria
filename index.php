<?php
    require_once("privado/configDB.php");
    session_start();
    // if(!isset($_SESSION["id"])){
    //     header("location: login.php");
    //     exit();
    // }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/si.css">   
    <meta charset="UTF-8">
    <title>Inicio</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
</head>
<body>
    <div class="Centrar">

        <form action="resBusqueda.php" method="post">
            <input type="text" name="busqueda" onkeyup="buscar(this.value)" id="" required>
            <input type="submit" name="enviar" value="Buscar">
        </form>
        <br>
        <br>

    </div>

    <div class="Centrar">

    </div>

    <h1 class="title">Libreria de weyes que hicieron su jale</h1>

    <div class="conteiner">

        <div class="card">

            <img src="img/images.jpg">
            <h4>Libro :3</h4>
            <p>Aqui iria una descripcion cum</p>
            <a href="-link de drive">El link de drive</a>
        </div>

        <div class="card">

            <img src="img/images.jpg">
            <h4>Libro :3</h4>
            <p>Aqui iria una descripcion cum</p>
            <a href="-link de drive">El link de drive</a>
        </div>

        <div class="card">

            <img src="img/images.jpg">
            <h4>Libro :3</h4>
            <p>Aqui iria una descripcion cum</p>
            <a href="-link de drive">El link de drive</a>
        </div>

        <div class="card">

            <img src="img/images.jpg">
            <h4>Libro :3</h4>
            <p>Aqui iria una descripcion cum</p>
            <a href="-link de drive">El link de drive</a>
        </div>

        <div class="card">

            <img src="img/images.jpg">
            <h4>Libro :3</h4>
            <p>Aqui iria una descripcion cum</p>
            <a href="-link de drive">El link de drive</a>
        </div>

    </div>



    <h1>Aqui va a haber mas cosas xd!</h1>
    <a href="resCerrar.php"><button>Cerrar Sesion!</button></a>
    <script src="js/ajaxBuscar.js"></script>
</body>
</html>