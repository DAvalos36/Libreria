var spanRespuesta = document.getElementById("respuesta");
function login(e, f) {
    e.preventDefault();
    var datosFormulario = new FormData(f);

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
            if (info.startsWith("Sesion iniciada")){
                window.location.href = "index.php";
            }
            else{
                spanRespuesta.innerHTML = info;
            }
        }
        else {
            console.log("Aun no carga");
        }
    }

    conexion.open("POST", "resLogin.php", true);
    conexion.send(datosFormulario);
}

function registro(e, f) {
    e.preventDefault();
    var datosFormulario = new FormData(f);

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
            if (info == "Usuario registrado"){
                window.location.href = "login.php";
            }
            else{
                spanRespuesta.innerHTML = info;
            }
        }
        else {
            console.log("Aun no carga");
        }
    }

    conexion.open("POST", "resRegistro.php", true);
    conexion.send(datosFormulario);
}