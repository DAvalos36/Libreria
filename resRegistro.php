<?php
session_start();
if (isset($_SESSION["id"])){
    header("location: index.php");
    exit("IDK");
}
require_once("privado/configDB.php");
$nombre = filter_input(INPUT_POST,"nombre");
$apellido = filter_input(INPUT_POST,"apellido");
$usuario = filter_input(INPUT_POST,"usuario");
$contra = filter_input(INPUT_POST,"pass");

if (strlen($nombre) > 0 && strlen($apellido) > 0 && strlen($usuario) > 0 && strlen($contra) > 0 ){
    $usuario = $base->real_escape_string($usuario);
    $nombre = $base->real_escape_string($nombre);
    $apellido = $base->real_escape_string($apellido);
    $pass =  password_hash($contra, PASSWORD_DEFAULT);
    $query = "INSERT INTO `usuarios`(`nom_usuario`, `pass`, `nombre`, `apellido`) VALUES ('$usuario','$pass','$nombre','$apellido')";
    $consulta  = $base->query($query);
    if ($consulta == true){
        echo "Usuario registrado";
    }
    else{
        if ($base->errno == 1062){
            echo "Este usuario ya esta registrado";
        }
        else {
            echo "Error dosconocido!";
        }
    }
    $base->close();
}
else {
    echo "Parametros no reconocidos...";
}

?>