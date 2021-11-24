<?php include ("db.php")?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="Assets/Css/Styles.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div  class="formulario_registro" >
        <h1>Registro</h1>
        <form action="guardar_datos.php" method="POST">
            <input type="email" id="correo" name="correo" placeholder="Correo Electronico">
    <br>
    <br>
            
            
            <input type="text" id="usuario" name="usuario" placeholder="Usuario">
    <br>
    <br>
            
            <input type="password" id="contra" name="contra" placeholder="Contraseña">
    <br>
    <br>
    <input type="number" id="telefono" name="telefono" placeholder="Telefono">
    <br>
    <br>
    <input type="date" id="fecha_n" name="fecha_n" placeholder="Fecha Nacimiento">
    <br>
    <br>
            <button id="resgistrarse" name="resgistrarse">Registrarse</button>
            <br>
            <span class="crear_cuenta"><a href="index.php">Ya tienes cuenta</a> </span>
        </form>
    </div>
</body>
</html>