<?php
    session_start();
    if (!isset($_SESSION["id"]) or $_SESSION["rango"] == 2){
        header("location: index.php");
        exit(401);
    }
    require_once("privado/configDB.php");
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
<body>
    <div class="Centrar">
        <?php
            $query = "SELECT * FROM usuarios";
            $res = $base->query($query);
            if( $res->num_rows > 0){
                foreach ($res as $key => $value) {
                    echo "$value[nombre] <br>";
                }
            }
            else{
                echo "<h1> No hay usuarios registrados... </h1>";
            }
        ?>
    </div>
    <table>
            <th>
                <td>asd</td>
                <td>asd</td>
                <td>asd</td>
            </th>
    </table>
</body>
</html>