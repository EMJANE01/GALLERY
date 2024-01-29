

<style>
body{
    background-color: black;
}

@media screen and (max-width:1920px){

    .moon img{
        width: 60%;
       
    }
    .planeta{
        padding-left: 75%;
       
      
    }

    .planeta img{
        width: 100%;
    }


    .button1{
        background-image: url(https://64.media.tumblr.com/d6d0246ca0dffa230f03be2521b3210f/tumblr_obfjz6Bd9f1runoqyo2_r1_540.gif);
        color: white;
        align-items: center;
        border-radius: 25px;
        content: 'Seleccionar';
        width: 180px;
    }

    .button1:hover{
        background-image: url(https://i.pinimg.com/originals/fd/b2/1c/fdb21c0e4f3dbb6ccd9a63c68fce8645.gif);
        color: white;
        align-items: center;
        border-radius: 25px;
        content: 'Seleccionar';
        width: 180px;
        transition: ease .3s;
        background-size: cover;
       

    }

    .button1 input[type="file"]{
        opacity: 0;
        width: 180px;
        height: 40px;
        content: 'Seleccionar';

      


    }
    .imgastro img{
        width: 15%;

    }
    
    .michi img{
        width: 5%;
        margin-left: 60%;
        
    }
   
    
}
  
  



@media screen and (max-width:1620px){

    .moon img{
        width: 90%;
    }
    .planeta{
        padding-left: 75%;
       
      
    }

    .planeta img{
        width: 100%;
    }
  
    .imgastro img{
        width: 25%;

    }

    .michi img{
        width: 5%;
        margin-left: 60%;
        
    }

}






@media screen and (max-width:820px){

    .moon img{
        width: 90%;
    }
    .planeta{
        padding-left: 55%;
       
      
    }

    .planeta img{
        width: 100%;
    }
  

    .imgastro img{
        width: 35%;

    }


    .michi img{
        width: 10%;
        margin-left: 60%;
        
    }


 

}
</style>


<!DOCTYPE html>
<html>


<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inconsolata:wght@200&family=Joan&family=Tektur&display=swap" rel="stylesheet">


<link rel="stylesheet" href="style.css">

     <header class="header">
        <a href="#" class="logo" >
            <img src="space.png" width="800%">
        </a>
       
        <input type="checkbox" id="side-menu" class="side-menu">
        <label for="side-menu" class="hamb"><span class="hamb-line"> ≡ </span></label>
        <nav class="nav">
            <ul class="menu">
                <li><a href="#">Vinculo 1</a></li>
                <li><a href="#">Vinculo 2</a></li>
                <li><a href="#">Vinculo 3</a></li>
                <li><a href="#">Vinculo 4</a></li>
            </ul>
        </nav>
       </header>
       <br><br><br>
           <center>

            <H5 style="font-family: 'Inconsolata', monospace; font-size:10px ">In the</H5>
               <br><br>
                   <p style="font-family: 'Inconsolata', monospace; font-size:100px">S P A C E</p>
                       <br><br><br>
                                  <br><br><br>

                                  <center>
                                     
                                      <br><br>
                                      
                                      </center>

                                      <div class="michi">
                                      <img src="gatito.png">
                                      </div>
                                      <br><br>


                                      <center>


                                      <div class="moon">

                                      <img src="moon.png">
            
                                    </div>

                            <p>Un espacio dedicado a los amantes del universo, en donde podras compartir y ver imagenes <br> de otras personas con tu misma aficion<br><br><br>
                             "Si estamos solos en el universo es una terrible perdida del espacio" </p>

                


                
            </center>

                
          
        
            <div class="planeta">
               <img src="planeta.png" >

               </div>


               <div class="container">
     
     <center>
     <div class="cargar">
                <br>
                <h2 class="text-primary">CARGAR IMAGEN:</h2>
                <br><br><br>
            
                <form action="home.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="my-input">Seleccione una Imagen (de click en el boton abajo)</label><br><br>
                        <div class="button1" id="imagen">
                            <input id="my-input" type="file" name="imagen" class="select"><br><br>
                        </div>
                    </div>
                    <div class="form-group">
                        <br><br>
                        <label for="my-input">Titulo de la Imagen</label><br><br><br>
                        <div class="fondo2">
                            <input id="my-input" class="form-control" type="text" name="titulo"
                                   style="background-image:url(https://64.media.tumblr.com/d6d0246ca0dffa230f03be2521b3210f/tumblr_obfjz6Bd9f1runoqyo2_r1_540.gif);
                                   color:aliceblue; width: 350px; height:50px; border-radius: 15px;
                                   font-family: 'Inconsolata', monospace; border-color:transparent;"><br><br><br><br>
                        </div>
                        <label for="my-input">Descripcion/Comentario</label><br><br><br>
                        <div class="fondo2">
                            <input id="my-input" class="form-control" type="text" name="descripcion"
                                   style="background-image:url(https://64.media.tumblr.com/d6d0246ca0dffa230f03be2521b3210f/tumblr_obfjz6Bd9f1runoqyo2_r1_540.gif);
                                   background-size:cover; color:aliceblue; width: 350px; height:100px;
                                   border-radius: 15px; border-color:transparent;
                                   font-family: 'Inconsolata', monospace;"><br><br><br><br>
                        </div>
                    </div>
                    <div class="button">
                        <input type="submit" value="Guardar" class="btn btn-primary" name="Guardar"
                               style="background-image:url(https://i.gifer.com/embedded/download/3f2X.gif);
                               background-size:cover; color:aliceblue; width: 150px; height:70px;
                               border-radius: 15px; font-family: 'Inconsolata', monospace;
                               border-color: whitesmoke;">
                    </div>
                    <br><br><br>
         </div>
         </div>
         </center>
            
         <div class="imgastro">
         <img src="astro.png" >
         </div>
         <center>
         

         <br><br><br><br>

         <p>--------------------------------------------------------------------------</p>

         <br>


         <p> G A L E R I A __D E__I M A G E N E S</p>


         <br>

         <p>--------------------------------------------------------------------------</p>


         <br><br>

     
     

         </center>

            
            
      

</body> 
</html>  