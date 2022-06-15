<?php
function tarjeta($id, $link_img, $titulo, $fecha, $link_drive)
{
?>
<a href='<?php echo "verLibro.php?id=$id"?>'>
    <div class="card">
        <img src="<?php echo $link_img ?>">
        <h4><?php echo $titulo ?></h4>
        <p><?php echo $fecha ?></p>
        <a href="<?php echo $link_drive ?>">VER</a>
    </div>
</a>
<?php
}



?>