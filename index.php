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
    <link rel="shortcut icon" href="img/icon-book.png">
    <link rel="stylesheet" href="css/si.css">   
    <meta charset="UTF-8">
    <title>Inicio</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="header.js"></script>
</head>
<body background="img/libreria.jpg">
    <header>

        <div class="wrapper">

            <div class="logo">
        
                <a href="index.php"><img src="img/icon-book.png"></a>
        
            </div>
    
            <nav>
                <a href="resCerrar.php">Cerrar Sesion</a>
            </nav>

        </div>

        
    </header>

    <div class="Centrar">

        <form action="" method="post">
            <input type="text" name="busqueda" id="" required>
            <input type="submit" name="enviar" value="Buscar">
        </form>

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

    <h1 class="title">Libreria de weyes que hicieron su jale</h1>

    <div class="conteiner">

        <div class="card">

            <img src="img/Captura1.png">
            <h4>Licenciatura en Informatica</h4>
            <p>Aqui iria una descripcion cum</p>
            <a href="https://drive.google.com/file/d/17oQmyEuZp6CaxDPj0iIKDRUtS0GVkoaf/view?usp=sharing">PDF</a>
        </div>

        <div class="card">

            <img src="img/Captura2.png">
            <h4>Licenciatura en Informatica</h4>
            <p>MACOPRE TEC 2009</p>
            <a href="https://drive.google.com/file/d/1kV2KeSbnJ3dROHfa0Cl_Z-wZXbeKN4Rx/view">PDF</a>
        </div>

        <div class="card">

            <img src="img/Captura3.png">
            <h4>Licenciatura en Informatica</h4>
            <p>La Computadora en la Educación</p>
            <a href="https://drive.google.com/file/d/1WzpI4xNn6nEv4HUKb4OWNMPrmuGTu8iz/view">PDF</a>
        </div>

        <div class="card">

            <img src="img/Captura4.png">
            <h4>Licenciatura en Informatica</h4>
            <p>DESARROLLO DE PÁGINA WEB EN EL CENTRO DE INFORMACION</p>
            <a href="https://drive.google.com/file/d/1HT_HXAElmmHP5T9INFghVIMqaluPNEeD/view">PDF</a>
        </div>

        <div class="card">

            <img src="img/Captura5.png">
            <h4>Licenciatura en Informatica</h4>
            <p>Sistema de Cafetería</p>
            <a href="https://drive.google.com/file/d/1pmAaQgeWs26xJAUXNrz4THOQiJD3Czal/view">PDF</a>
        </div>

        <div class="card">

            <img src="img/Captura6.png">
            <h4>Licenciatura en Informatica</h4>
            <p>Memoria Técnica de Red y Software de Inventario</p>
            <a href="https://drive.google.com/file/d/1TlUYd0VpfMDGMwdGqVLIbyXc3CykDALV/view">PDF</a>
        </div>

        <div class="card">

            <img src="img/Captura7.png">
            <h4>Ingeniero en Sistemas Computacionales</h4>
            <p>"SITIO WEB DEL DEPARTAMENTO DE SISTEMAS Y COMPUTACIÓN DEL INSTITUTO TECNOLÓGICO DE PARRAL"</p>
            <a href="https://drive.google.com/file/d/1DyzQD0Y78b1lFKxRG8MliD2EEW-XcJxd/view">PDF</a>
        </div>

        <div class="card">

            <img src="img/Captura8.png">
            <h4>Ingeniero en Sistemas Computacionales</h4>
            <p>"FESTIVAL CLUB PIWY KID'S FASE CINCO"</p>
            <a href="https://drive.google.com/file/d/1VomPWJ6MaNRCX8aYDkHHJ0x3S6xeCh1v/view">PDF</a>
        </div>

        <div class="card">

            <img src="img/Captura9.png">
            <h4>Ingeniero en Sistemas Computacionales</h4>
            <p>"HELP ME"</p>
            <a href="https://drive.google.com/file/d/1uzLX3I5Rm3fbV4b51OEkub5E7yfwm6sE/view">PDF</a>
        </div>

        <a href="https://drive.google.com/file/d/1f5dwyjB1_5Qs_qoIOrbkJjoSV9R8Z7mn/view">

            <div class="card">
    
                <img src="img/Captura10.png">
                <h4>Ingeniero en Sistemas Computacionales</h4>
                <p>"INNOVANDO LA EDUCACIÓN INFANTIL: WIKY PIWY SEGUNDA FASE"</p>
                <a href="https://drive.google.com/u/1/uc?id=1rnjAtGzXmwMjOUaj6OxGSax9shzeGEJk&export=download">Descargar</a>
            </div>

        </a>


        <div class="card">

            <img src="img/Captura11.png">
            <h4>Licenciatura en Informatica</h4>
            <p>"PROYECTO LESIONES RUTINARIAS Y NUTRICION EN EL LEVANTAMIENTO DE PESAS SYSGYM"</p>
            <a href="https://drive.google.com/file/d/1rnjAtGzXmwMjOUaj6OxGSax9shzeGEJk/view">PDF</a>
        </div>

        <div class="card">

            <img src="img/Captura12.png">
            <h4>Licenciatura en Informatica</h4>
            <p>"System Molduras"</p>
            <a href="https://drive.google.com/file/d/1qoRxLKjiA-csB_Z4W86wBpemqIZl__hq/view">PDF</a>
        </div>

    </div>



    <h1>Aqui va a haber mas cosas xd!</h1>
</body>
</html>