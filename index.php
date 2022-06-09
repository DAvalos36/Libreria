<?php
    require_once("privado/configDB.php");
    session_start();
    if(!isset($_SESSION["id"])){
        header("location: login.php");
        exit();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/si.css">   
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
</head>
<body>
    <div class="Centrar">

        <form action="" method="post">
            <input type="text" name="busqueda" id="" required>
            <input type="submit" name="enviar" value="Buscar">
        </form>
        <br>
        <br>

    </div>

    <div class="Centrar">

    <?php
    if (isset($_POST['enviar'])) {

        $busqueda = $_POST['busqueda'];  

        $consulta = $base->query("SELECT * FROM usuarios WHERE nom_usuario LIKE '%$busqueda%'");

        while ($row = $consulta->fetch_array()) {
            echo $row['nom_usuario']. '<br>';
        }

        
    }

    ?>

    </div>



    <h1>Aqui va a haber mas cosas xd!</h1>
    <a href="resCerrar.php"><button>Cerrar Sesion!</button></a>
</body>
</html>