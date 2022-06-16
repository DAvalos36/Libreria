<?php
function renglon($id, $usuario, $rango, $iniciar)
{ 
    $msjBloq = ($iniciar == 1) ? "Bloquear" : "Desbloquear" ;
    $msjRango = ($rango == 2) ? "Volver Administrador" : "Quitar Privilegios de Administrador" ;
    ?>
    <tr>
        <td><?php echo $id ?></td>
        <td><?php echo $usuario ?></td>
        <td><button class="boton" onclick='eliminar(<?php echo "" ?>)'><?php echo $msjBloq ?></button></td>
        <td><button class="boton" onclick='eliminar(<?php echo "" ?>)'><?php echo $msjRango ?></button></td>
    </tr>
<?php }
?>