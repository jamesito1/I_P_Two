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
        die("Falla en el query");
    }
    header('location:index.php');
}



?>