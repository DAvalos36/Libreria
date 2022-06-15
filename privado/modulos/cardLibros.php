<?php
function tarjeta($link_img, $titulo, $fecha, $link_drive)
{
?>
<a href= "verLibro.php">
    <div class="card">
        <img src="<?php echo $link_img ?>">
        <h4><?php echo $titulo ?></h4>
        <p><?php echo $fecha ?></p>
        <a href="<?php echo $link_drive ?>">Descargar</a>
    </div>
</a>
<?php
}



?>