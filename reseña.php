<?php 

include('db.php');

if(isset($_POST['reseña'])){
    $pk = uniqid('', true);
    $usuario = $_POST['usuario'];
    $reseña = $_POST['resena'];
    $comentarios =$_POST['comentarios'];
    
    $query = "insert into reseñas values ('$pk','$reseña','$usuario','$comentarios')";
    $result =mysqli_query($conn,$query);
    if(!$result){
        $_SESSION['mensaje'] = 'El usuario: $usuario no existe';
        header('location:reseñas.php');   
    }
    $_SESSION['mensaje'] = 'La reseña ha sido guardada con exito';
    header('location:reseñas.php');   

}


?>