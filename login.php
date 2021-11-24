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
        
        echo 'Consulta Correcta';
        header('location:Assets/Pages/pagina_principal.html');
    }else{
        echo 'Registro no hallado';
    }
  }

?>