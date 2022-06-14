<?php
$host = "localhost";
$usuario = "root";
$pass = "";
$db = "libreria";

$base = new mysqli($host, $usuario, $pass, $db);
if ($base->connect_error){
    die("Error de conexion ". $base->connect_errno);
}
?>