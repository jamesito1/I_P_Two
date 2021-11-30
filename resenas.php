<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Assets/Css/Styles.css">
    <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
<header>
            <nav class="navegacion">
                <ul class="menu" >
                    <li class="ip" id="mouse_encima"><a href="Assets/Pages/pagina_principal.php">Interesting Planets</a> </li>
                    <li id="mouse_encima"><i class="fas fa-globe-americas"></i> Planetas
                        <ul class="submenu">
                            <li>
                                <a href=" Assets/Pages/Mercurio.html">Mercurio</a>
                            </li>
                            <li>
                                <a href=" Assets/Pages/venus.html">Venus</a>
                            </li>
                            <li>
                                <a href=" Assets/Pages/tierra.html">Tierra</a>
                            </li>
                            <li>
                                <a href=" Assets/Pages/marte.html">Marte</a>
                            </li>
                            <li>
                                <a href=" Assets/Pages/jupiter.html">Jupiter</a>
                            </li>
                            <li>
                                <a href=" Assets/Pages/saturno.html">Saturno</a>
                            </li>
                            <li>
                                <a href=" Assets/Pages/neptuno.html">Neptuno</a>
                            </li>
                            <li>
                                <a href=" Assets/Pages/urano.html">Urano</a>
                            </li>
                            <li>
                                <a href=" Assets/Pages/pluton.html">Pluton</a>
                            </li>
                        </ul>
                    </li>
                    
                    <li id="mouse_encima">
                        <a href="Assets/Pages/extras.html">Extras</a>
                    </li>
                    <li id="mouse_encima">
                       <a href="resenas.php"> Reseñas</a>
                    </li>
            
                    <li id="mouse_encima"><a href="index.php">Salir</a></li>
                    <button class="boton" onclick="dark()" id="boton">
                        <div class="iconos">
                            <i class="fas fa-toggle-on"></i> 
                            
                         </div>
                    </button>
                </ul>


            </nav>
        </header>
        
        
    <div class="actualiza_dato">
        <h1>Reseñas</h1>
    <form action="resena.php" method="post">
     <ul class="actualizar_datos">
         <li><label for="usuario">Ingresa tu usuario</label>
            <input type="text" id="usuario" name="usuario" placeholder="Ingresa el usuario" required maxlength="10" ></li>
<br>
         <li> <label for="reseña">Ingresa tu reseña</label>
        <input type="number" name="resenita" id="reseña" placeholder="Ingresa el valor de tu reseña valor 1-5" min="1" max="5" onchange="estrellitas()" ></li>
       <br>
       <li>
  <span class="estrella"><i class="fas fa-star"></i> </i></span> <span class="estrella"><i class="fas fa-star"></i> </i></span> <span class="estrella"><i class="fas fa-star"></i> </i></span> <span class="estrella"><i class="fas fa-star"></i> </i></span> <span class="estrella"><i class="fas fa-star"></i> </i></span>  </li>
        <br>
        <li>
            <label for="comentarios">Ingresa un comentario</label>
            <br>
            <textarea name="comentarios" id="" cols="30" rows="10" maxlength="184"></textarea>
        </li>
        <br>
            <li>
        <button name="resena">Guardar</button>
    </li>
    </ul>
    </form>


    <?php if (isset($_SESSION["message"])) { ?>
    
                <span><?= $_SESSION["message"]?></span>
               
 <?php session_unset(); } ?>

</div>


<script>
    let estrella = document.querySelectorAll(".estrella")
    
    function estrellitas(){
   let reseña = document.getElementById("reseña").value;
   if(reseña==1){
       estrella[0].classList+=(" estrella_activada");
       console.log(estrella[0]);
       for(let i=1; i<=4; i++){
        estrella[i].classList.remove("estrella_activada");
        console.log(i);
       }
       
   }

   if(reseña>=2){
     ;
       for(let i=0; i<=1; i++){
        estrella[i].classList+=(" estrella_activada");
        console.log(i);
       }
       for(let i=2; i<=4; i++){
        estrella[i].classList.remove("estrella_activada");
        console.log(i);
       }
       
       console.log(estrella[0]);


    }

    if(reseña>=3){
     ;
       for(let i=0; i<=2; i++){
        estrella[i].classList+=(" estrella_activada");
        console.log(i);
       }
       for(let i=3; i<=4; i++){
        estrella[i].classList.remove("estrella_activada");
        console.log(i);
       }
       console.log(estrella[0]);


    }

    if(reseña>=4){
     ;
       for(let i=0; i<=3; i++){
        estrella[i].classList+=(" estrella_activada");
        console.log(i);
       }
       for(let i=4; i<=4; i++){
        estrella[i].classList.remove("estrella_activada");
        console.log(i);
       }
       console.log(estrella[0]);


    }

    if(reseña==5){
        for(let i=0; i<=4; i++){
        estrella[i].classList+=(" estrella_activada");
        console.log(i);
       }
    }
}
 

    
</script>
</body>
</html>