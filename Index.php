<?php include ("db.php")?>
<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="Assets/Css/Styles.css">
    <script src="https://kit.fontawesome.com/719a26b655.js" crossorigin="anonymous"></script>
    <title>Inicio</title>
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

    <div class="formulario" >
   
    <h1>Iniciar Sesion</h1>
    <form action="login.php" method="POST">
        
        
        <input type="text" id="usuario" name="usuario" placeholder="Ingresa el usuario" required maxlength="10" >
<br>
<br>
        
        <input type="password" id="contra" name="contra" placeholder="Ingresa tu contraseña" required maxlength="10">
<br>
<br>
        <button id="enviar" name="enviar">Iniciar</button>
        <br>
        <span class="crear_cuenta"><a href="registro.php">¿No tienes cuenta?</a> </span>
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

