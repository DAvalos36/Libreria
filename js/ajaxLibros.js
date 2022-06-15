function eliminar(id) {
    var conexion;
    if (window.XMLHttpRequest) {
        conexion = new XMLHttpRequest();
    }
    else {
        conexion = new ActiveXObject("Microsoft.XMLHTTP");
    }
    conexion.onreadystatechange = function () {
        if (conexion.readyState == 4 && conexion.status === 200) {
            var info = conexion.responseText;
            if(info == "Eliminado Correctamente!"){
                alert("Eliminado correctamente!");
                window.location.reload();
            }
            else{
                alert("No se pudo hacer esto...");
            }
        }
        else {
            console.log("Aun no carga");
        }
    }
    var datos = new FormData();
    datos.append("id", id);
    conexion.open("POST", "resAdminEliminarLibro.php", true);
    conexion.send(datos);
}


