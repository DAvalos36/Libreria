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
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="header.js"></script>
</head>
<body background="img/libreria.jpg">
    <?php require_once("privado/modulos/navbar.php") ?>

    <div class="Centrar">

        <form action="" method="post">
            <input type="text" name="busqueda" onkeyup="buscar(this.value)" id="" required>
            <input type="submit" name="enviar" value="Buscar">
        </form>

    </div>
        

    <div class="Centrar" id="resultados" >

    </div>

    <h1 class="title">Libreria de vatos que hicieron su jale</h1>

    <div class="conteiner">
        <?php
            $resConsulta = $base->query("SELECT * FROM `libros` ");
            // print_r($resConsulta);
            if($resConsulta){
                if($resConsulta->num_rows > 0){
                    foreach ($resConsulta as $key => $value) {
                        // print_r($value);
                        tarjeta($value["link_imagen"], $value["titulo"], $value["fecha"], $value["link_google"] );
                    }
                }
                else{
                    echo "No se encontraron";
                }
            }
            else{
                echo "<h1> Error desconocido! </h1>";
                echo "$base->errno";
            }
        ?>


    </div>



    <script src="js/ajaxBuscar.js"></script>
</body>
</html>