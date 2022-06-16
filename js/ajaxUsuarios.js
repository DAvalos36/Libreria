function modificar(opcion, id){
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
            if(info.startsWith("Bien!")){
                alert(info);
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
    datos.append("opcion", opcion);
    conexion.open("POST", "resAdminUsuarios.php", true);
    conexion.send(datos);
}
console.log("ASD");