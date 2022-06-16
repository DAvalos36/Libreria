<?php
    session_start();
    if (!isset($_SESSION["id"]) or $_SESSION["rango"] == 2){
        echo "No tienes permiso de estar aqui";
        exit(401);
    }
    require_once("privado/configDB.php");

    $id = $base->real_escape_string(filter_input(INPUT_POST, "id"));
    $opcion = filter_input(INPUT_POST, "opcion");

    // OPCIONES 
    // 0 - Volver usuario administrador
    // 1 - Quitar Administrador
    // 2 - Bloquear usuario
    // 3 - Desbloquear usuario
    switch($opcion){
        case 0:
            if($base->query("UPDATE `usuarios` SET `rango`= '1' WHERE `id` = $id")){
                echo "Bien! Privilegios actualizados para este usuario";
            }
            else{
                echo "Ocurrio un error";
            }
            break;
        case 1:
            if($base->query("UPDATE `usuarios` SET `rango`= '2' WHERE `id` = $id")){
                echo "Bien! Privilegios actualizados para este usuario";
            }
            else{
                echo "Ocurrio un error";
            }
            break;
        case 2:
            if($base->query("UPDATE `usuarios` SET `puede_entrar` = '0' WHERE `id` = $id")){
                echo "Bien! Este usuario ahora no podra ingresar.";
            }
            else{
                echo "Ocurrio un error";
            }
            break;
        case 3:
            if($base->query("UPDATE `usuarios` SET `puede_entrar` = '1' WHERE `id` = $id")){
                echo "Bien! Este usuario podra ingresar de nuevo.";
            }
            else{
                echo "Ocurrio un error";
            }
            break;
        default:
            echo "Opcion no valida";
            break;
    }
    $base->close();

?>