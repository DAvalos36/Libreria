<?php
    session_start();
    if (isset($_SESSION["id"])){
        header("location: index.php");
        exit("IDK");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/si.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<div class="Centrar">

    <div class="conteiner   ">

        <div class="card">

            <form action="resLogin.php" method="post">
        
                <label for="usuario">Nombre de Usuario: </label><br>
                <input type="text" id="usuario" name="usuario" required minlength="6" class="redondo"><br>
                <label for="pass">Contraseña:  </label><br>
                <input type="password" name="pass" id="pass" required minlength="6" class="redondo"><br>
                <div class="Centrar">
        
                    <input type="submit" value="Iniciar"> <input type="reset" value="Cancelar">
        
                </div>
                
            </form>

        </div>


    </div>



</div>


    
    <div class="Centrar">

        <button onclick="location.href='http://localhost/Libreria/registrarse.php'">Registrarse</button>

    </div>
</body>
</html>