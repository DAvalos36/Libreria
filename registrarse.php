<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrarse</title>
</head>
<body>
    <form method="post" action="resRegistro.php">
        <label for="nombre">Nombre(s)</label><br>
        <input type="text" id="nombre" name="nombre"><br>
        <label for="apellido">Apellidos</label><br>
        <input type="text" id="apellido" name="apellido"><br>
        <label for="usuario">Nombre de Usuario:</label><br>
        <input type="text" id="usuario" name="usuario"><br>
        <label for="contra">Contraseña</label><br>
        <input type="password" name="pass" id="contra"><br>
        <input type="submit" value="Enviar"> <input type="reset" value="Cancelar">


        
    </form>
</body>
</html>