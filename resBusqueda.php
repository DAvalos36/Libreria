<?php
    session_start();
    if(!isset($_SESSION["id"])){
        echo "No tienes permiso de estar aqui";
        exit(401);
    }
    require_once("privado/configDB.php");
    require_once("privado/modulos/cardLibros.php");
    $busqueda = filter_input(INPUT_POST, 'busqueda');
    $busqueda = $base->real_escape_string($busqueda);
    $consulta = $base->query("SELECT * FROM `libros` WHERE titulo LIKE '%$busqueda%'");
    if ($consulta->num_rows > 0){
        foreach ($consulta as $key => $resultado) {
            tarjeta($resultado["id"],$resultado["link_imagen"], $resultado["titulo"], $resultado["fecha"], $resultado["link_google"] );
        }
    }
    else {
        echo "<h3> No se encontraron resultados en esta busqueda. </h3>";
    }
    $consulta->free_result();
    $base->close();
?>