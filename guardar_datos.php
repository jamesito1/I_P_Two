<?php 

include('db.php');

if(isset($_POST['resgistrarse'])){
    $usuario = $_POST['usuario'];
    $contra = $_POST['contra'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];
    $fecha_n = $_POST['fecha_n'];
    $query = "insert into usuario values ('$usuario','$contra','$correo','$fecha_n','$telefono')";
    $result =mysqli_query($conn,$query);
    if(!$result){
        $_SESSION['message'] = 'El usuario que insertaste ya existe por favor elige otro';
        header('location: registro.php');
    }else{
    $_SESSION["message"]="Se registro con exito";
    header('location:Index.php');
}
}



?>