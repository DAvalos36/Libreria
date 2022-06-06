<?php
$host = "localhost";
$usuario = "root";
$pass = "";
$db = "libreriacum";

$base = new mysqli($host, $usuario, $pass, $db);
if ($base->connect_error){
    die("Error de conexion ". $base->connect_errno);
}

// $base = mysqli_connect($host, $usuario, $pass, $db) or die (mysqli_error());
// echo "Conectado";
?>