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

        <form action="" method="post">
            <input type="text" name="busqueda" onkeyup="buscar(this.value)" id="" required>
            <input type="submit" name="enviar" value="Buscar">
        </form>

    </div>
        

    <div class="Centrar" id="resultados" >

    </div>

    <h1 class="title">Residencias profecionales</h1>

    <div class="conteiner">
        <?php
            $resConsulta = $base->query("SELECT * FROM `libros` ");
            // print_r($resConsulta);
            if($resConsulta){
                if($resConsulta->num_rows > 0){
                    foreach ($resConsulta as $key => $libro) {
                        // print_r($libro);
                        tarjeta($libro["id"],$libro["link_imagen"], $libro["titulo"], $libro["fecha"], $libro["link_google"] );
                    }
                }
                else{
                    echo "No se encontraron";
                }
                $resConsulta->free_result();
            }
            else{
                echo "<h1> Error desconocido! </h1>";
                echo "$base->errno";
            }
            $base->close();
        ?>


    </div>



    <script src="js/ajaxBuscar.js"></script>
    <script src="js/header.js"></script>
</body>
</html>