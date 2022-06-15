<?php
session_start();
if (!isset($_SESSION["id"]) or $_SESSION["rango"] == 2){
    echo "No tienes permiso de hacer esto!";
    exit(401);
}
require_once("privado/configDB.php");

$id = $base->real_escape_string(filter_input(INPUT_POST, "id"));
$res = $base->query("SELECT `id`, `link_imagen` FROM `libros` WHERE `id` = $id");
if($res){
    if($res->num_rows == 1){
        $datos = $res->fetch_assoc();
        // Intenta eliminar la informacion de la base de datos
        if ($base->query("DELETE FROM `libros` WHERE `id` = $id")){
            // Si la logra eliminar... elimina la imagen asociada al libro
            unlink($datos["link_imagen"]);
            echo "Eliminado Correctamente!";
        }
        else{
            echo "Ocurrio un error: $base->errno";
        }  
    }
    else{
        echo "Este libro no existe...";
    }
    $res->free_result();
}
else{
    echo "Ocurrio un error!";
}

$base->close();
?>