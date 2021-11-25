<?php include ("db.php")?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="Assets/Css/Styles.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/719a26b655.js" crossorigin="anonymous"></script>
    <title>Registro</title>
</head>
<body>
<div class="fondo_login">
    
    <video class="video" autoplay="autoplay" loop="loop" muted defaultMuted playsinline  oncontextmenu="return false;"  preload="auto"  id="miVideo">
        <source src="Assets/Img/black hole.mp4" >
        </video>

        
</div>

<div class="transparencia_login"></div>

<?php if (isset($_SESSION['message'])) { ?>
    <div class="alerta">
        <button class="cerrar_alerta" onclick="cerrar_alertaf()" > 
            <i class="fas fa-times"></i> 
        </button>
       
                <span><?= $_SESSION['message']?></span>
                
                </div>

 <?php session_unset(); } ?>
    <div  class="formulario_registro" >
    
        <h1>Registro</h1>
        <form action="guardar_datos.php" method="POST">
            <input type="email" id="correo" name="correo" placeholder="Correo Electronico" required>
    <br>
    <br>
            
            
            <input type="text" id="usuario" name="usuario" placeholder="Usuario" required maxlength="10">
    <br>
    <br>
            
            <input type="password" id="contra" name="contra" placeholder="Contraseña" required maxlength="10">
    <br>
    <br>
    <input type="number" id="telefono" name="telefono" placeholder="Telefono" required maxlength="10">
    <br>
    <br>
    <input type="date" id="fecha_n" name="fecha_n" placeholder="Fecha Nacimiento" required>
    <br>
    <br>
            <button id="resgistrarse" name="resgistrarse">Registrarse</button>
            <br>
            <span class="crear_cuenta"><a href="index.php">Ya tienes cuenta</a> </span>
        </form>
    </div>

    
    <script>
        let cerrar_alerta = document.querySelector(".cerrar_alerta");
let alerta = document.querySelector(".alerta")
    function cerrar_alertaf (){
    alerta.className+=(" alerta_cerrada");
    console.log(cerrar_alerta)
}</script>
</body>
</html>