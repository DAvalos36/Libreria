<?php
ob_start();
session_start();
if (!isset($_SESSION["id"]) or $_SESSION["rango"] == 2) {
    header("location: login.php");
}
require_once("privado/configDB.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body >
    <style>
        table, td, th {
            border: 2px solid;
            text-align: center;
        }
        table {
            border-collapse: collapse;
            margin-bottom: 10px;
            width: 100%;
        }
        img{
            margin-bottom: 10px;
        }
        p {
            font-size: larger;
        }
    </style>
    <img src="https://i.ibb.co/CPMpK7Q/logo.png" height="150px" align="right">
    <!-- <img src="http://<?php echo $_SERVER['HTTP_HOST'];?>/Libreria/img/icon-book.png" width="200px" height="150px" align="left"> -->
    <img src="https://raw.githubusercontent.com/DAvalos36/Libreria/main/img/icon-book.png" width="200px" height="150px" align="left">
    <h1 align="center">REPORTE</h1>
    <div style="text-align: center; margin-top: 15px;">
        <br>
        <table>
            <caption><h3>Libros disponibles y mas vistos</h3></caption>
            <tr><th>ID</th><th>Titulo</th><th>Num. Lecturas</th></tr>
            <tbody>
                <?php
                $res = $base->query("SELECT l.`id`, l.`titulo`, COUNT(v.id_libro) as vistas FROM `libros` l LEFT JOIN visitas_libro v ON l.id = v.id_libro GROUP BY l.id ORDER BY vistas DESC");
                if($res){
                    foreach ($res as $key => $value) {
                        echo "<tr><td>$value[id]</td><td>$value[titulo]</td><td>$value[vistas]</td></tr>";
                    }
                    $res->free_result();
                }
                else{
                    echo "Ocurrio un error...";
                }
                ?>
            </tbody>
        </table>
        <!-- TABLA USUARIOS -->
        <table>
            <caption><h3>Informacion general sobre usuarios</h3></caption>
            <tr><th>Informacion</th><th>Cantidad</th></tr>
            <tbody>
                <?php
                $res = $base->query("SELECT (SELECT COUNT(id) FROM usuarios) as us_total, (SELECT COUNT(id) FROM usuarios WHERE rango = 1) as us_admin, (SELECT COUNT(id) FROM usuarios WHERE puede_entrar = 0) AS us_bloq");
                if($res){
                    $info = $res->fetch_assoc();
                    echo "<tr><td>Numero total de usuarios registrados</td><td>$info[us_total]</td></tr>";
                    echo "<tr><td>Numero total de administradores</td><td>$info[us_admin]</td></tr>";
                    echo "<tr><td>Numero total de usuarios bloqueados</td><td>$info[us_bloq]</td></tr>";
                    $res->free_result();
                }
                else{
                    echo "Ocurrio un error...";
                }
                ?>
            </tbody>
        </table>
        <p>Sitio web por <b>David Octavio Avalos Loya</b> y <b>Kevin Adrian Cereceres Barraza</b> para la materia de programacion web 1</p>
        <p>Codigo del proyecto disponible <a href="https://github.com/DAvalos36/Libreria"> AQUI </a></p>
    </div>
</body>
</html>
<?php
    $html = ob_get_clean();

    require_once('privado/_pdf/dompdf/autoload.inc.php');
    use Dompdf\Dompdf;

    $dompdf = new Dompdf;

    $options = $dompdf->getOptions();
    $options->set(array("isRemoteEnabled"=>true));
    $dompdf->setOptions($options);

    $dompdf->loadHtml($html);
    $dompdf->setPaper("letter");
    $dompdf->render();
    $dompdf->stream("ReporteUsuarios.pdf", array("Attachment"=>false));
?>