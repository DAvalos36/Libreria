<?php
    session_start();
    if (!isset($_SESSION["id"]) or $_SESSION["rango"] == 2){
        header("location: index.php");
        exit(401);
    }
    require_once("privado/configDB.php");
    require_once("privado/modulos/renglonUsuarios.php");
    $query = "SELECT `id`, `nom_usuario`, `rango`, `puede_entrar` FROM `usuarios`";
    $res = $base->query($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administracion de Usuarios</title>
    <link rel="stylesheet" href="css/si.css">
</head>
<body background="img/libreria.jpg">
    <?php require_once("privado/modulos/navbar.php") ?>
    <div id="main-container">
        <?php if($res->num_rows > 0){ ?>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Usuario</th>
                    <th>Permisos</th>
                    <th>Bloquear/Desbloquear</th>
                </tr>
            </thead>
            <?php
                foreach ($res as $key => $value) {
                    renglon($value["id"], $value["nom_usuario"], $value["rango"], $value["puede_entrar"]);
                }
            ?>
        </table>
        <?php }
        $res->free_result();
        $base->close();
        ?>
    </div>
    <script src="js/ajaxUsuarios.js"></script>
</body>
</html>