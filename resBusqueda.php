<?php
    session_start();
    if(!isset($_SESSION["id"])){
        echo "No tienes permiso de estar aqui";
        exit(401);
    }
    require_once("privado/configDB.php");
    $busqueda = filter_input(INPUT_POST, 'busqueda');
    $busqueda = $base->real_escape_string($busqueda);
    $consulta = $base->query("SELECT * FROM usuarios WHERE nom_usuario LIKE '%$busqueda%'");
    foreach ($consulta->fetch_all() as $key => $resultado) {
        print_r($resultado);
        echo "<br>";
    }
?>