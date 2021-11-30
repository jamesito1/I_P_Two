<?php 

include('db.php');

if(isset($_POST['resena'])){
    $pk = uniqid('', true);
    $usuario = $_POST['usuario'];
    $resena = $_POST['resenita'];
    $comentarios =$_POST['comentarios'];
    
    $query = "insert into resenas values ('$pk','$resena','$usuario','$comentarios')";
    $result =mysqli_query($conn,$query);
    if(!$result){
        $_SESSION["message"] = "El usuario: $usuario no existe";
        header('location:resenas.php');   
    }else{
    $_SESSION["message"] = "La reseña ha sido guardada con exito";
    header('location:resenas.php');   
    }
}


?>