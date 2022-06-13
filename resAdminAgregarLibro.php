<?php
    session_start();
    if (!isset($_SESSION["id"]) or $_SESSION["rango"] == 2){
        header("location: index.php");
        exit(401);
    }

    require_once("privado/configDB.php");

    if (strlen($_POST["titulo"]) > 1 && strlen($_POST["link"]) > 1 && strlen($_POST["fecha"]) > 1 && file_exists($_FILES["imagen"]["tmp_name"])){
        $titulo = $base->real_escape_string(filter_input(INPUT_POST, "titulo"));
        $link = $base->real_escape_string(filter_input(INPUT_POST, "link"));
        $fecha = $base->real_escape_string(filter_input(INPUT_POST, "fecha"));
        $nombreHash = md5_file($_FILES["imagen"]["tmp_name"]);
        $pre = explode(".", $_FILES["imagen"]["name"]);
        $extension = end($pre);

        $dirImagen = "img/$nombreHash.$extension";

        move_uploaded_file($_FILES["imagen"]["tmp_name"], $dirImagen);

        $query = "INSERT INTO `libros`(`titulo`, `link_google`, `link_imagen`, `fecha`) VALUES ('$titulo','$link','$dirImagen','$fecha')";
        $base->query($query);
        $base->close();
    }
    else{
        echo "No se recibieron todos los datos!";
    }


?>