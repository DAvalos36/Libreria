<?php
function tarjeta($link_img, $titulo, $fecha, $link_drive)
{
?>
    <div class="card">
        <img src="<?php echo $link_img ?>">
        <h4><?php echo $titulo ?></h4>
        <p><?php echo $fecha ?></p>
        <a href="<?php echo $link_drive ?>">VER</a>
    </div>
<?php
}



?>