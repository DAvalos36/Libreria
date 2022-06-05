<?php
    session_start();
    if (isset($_SESSION["id"])){
        header("location: index.php");
        exit("IDK");
    }
    require_once("privado/configDB.php");
    $usuario = filter_input(INPUT_POST, "usuario");
    $pass = filter_input(INPUT_POST, "pass");

    if(strlen($usuario) > 0 && strlen($pass) > 0){
        $usuario = $base->real_escape_string($usuario);
        $query = "SELECT `id`, `nom_usuario`, `pass`, `nombre`, `apellido`, `rango` FROM `usuarios` WHERE `nom_usuario` = '$usuario'";
        $resUsuario = $base->query($query);
        if($resUsuario){
            if($resUsuario->num_rows == 1){
                $info = $resUsuario->fetch_assoc();
                if(password_verify($pass, $info["pass"])){
                    echo "Sesion iniciada";
                    $_SESSION["id"] = $info["id"];
                    header("location: index.php");
                }
                else {
                    echo "Contraseña incorrecta!";
                }
            }
            else{
                echo "Este usuario no existe!";
            }
        }
        else {
            echo "Error en consulta";
        }
        $base->close();
    }
    else {
        echo "Parametros incompletos!";
    }
?>