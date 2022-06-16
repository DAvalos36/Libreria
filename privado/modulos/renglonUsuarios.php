<?php
function renglon($id, $usuario, $rango, $iniciar)
{ 
    $msjBloq = ($iniciar == 1) ? "Bloquear" : "Desbloquear" ;
    $msjRango = ($rango == 2) ? "Volver Administrador" : "Quitar Privilegios de Administrador" ;
    $opcion1 = ($iniciar == 1) ? 2: 3;
    $opcion2 = ($rango == 2) ? 0: 1;
    ?>
    <tr>
        <td><?php echo $id ?></td>
        <td><?php echo $usuario ?></td>
        <td><button class="boton" onclick='<?php echo "modificar($opcion1, $id)" ?>'><?php echo $msjBloq ?></button></td>
        <td><button class="boton" onclick='<?php echo "modificar($opcion2, $id)" ?>'><?php echo $msjRango ?></button></td>
    </tr>
<?php }
?>