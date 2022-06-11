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
    if ($consulta->num_rows > 0){
        foreach ($consulta->fetch_all() as $key => $resultado) {
            print_r($resultado);
            echo "<br>";
        }
    }
    else {
        echo "<h3> No se encontraron resultados en esta busqueda. </h3>";
    }
    $consulta->free_result();
    $base->close();
?>