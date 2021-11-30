<?php
include('db.php');


if  (isset($_POST['enviar'])) {
    $Usuario = $_POST['usuario'];
    $Contra = $_POST['contra'];
    echo $Usuario;
    echo $Contra;
    $query = "SELECT * FROM usuario WHERE nombre_usuario='$Usuario' AND clave = '$Contra'";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) == 1) {
        
       
        header('location:Assets/Pages/pagina_principal.php');
        
    }else{
        $_SESSION['message'] = 'Usuario o Contraseña incorrectas';
        header('location: index.php');
    }
  }
  $_SESSION['a']="Bienvenido $Usuario";




?>