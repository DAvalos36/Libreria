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
    <title>Administracion de Usuarios</title>
    <link rel="stylesheet" href="css/si.css">
</head>
<body background="img/libreria.jpg">
    <?php require_once("privado/modulos/navbar.php") ?>
    <div class="Centrar">
        <?php
            $query = "SELECT * FROM usuarios";
            $res = $base->query($query);
            if( $res->num_rows > 0){
                foreach ($res as $key => $value) {
                    echo "$value[nombre] <br>";
                }
            }
            else{
                echo "<h1> No hay usuarios registrados... </h1>";
            }
        ?>
    </div>
    <div id="main-container">

        <table>
        <thead>
            <tr>
                <th>Descripción</th><th>Ira</th><th>we</th>
            </tr>
        </thead>

            <tr>
                <td>una</td><td>tabla</td><td>bien</td>
            </tr>
            <tr>
                <td>C</td><td>UU</td><td>UUU</td>
            </tr>
            <tr>
            <td>UU</td><td>UU</td><td>UUUUU</td>
            </tr>
            <tr>
            <td>UUU</td><td>UU</td><td>MMMMMMMM</td>
            </tr>
        </table>
    </div>
</body>
</html>