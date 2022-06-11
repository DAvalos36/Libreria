var resultados = document.getElementById("resultados");
function buscar(texto) {
    console.log(texto);

    if (texto.length > 0) {
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
                resultados.innerHTML = info;
            }
            else {
                console.log("Aun no carga");
            }
        }

        var datos = new FormData();
        datos.append("busqueda", texto);

        conexion.open("POST", "resBusqueda.php", true);
        conexion.send(datos);
    }
    else{
        resultados.innerHTML = "";
    }
}