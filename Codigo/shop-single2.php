<?php
 session_start();


    require './Conectores/Conector_BD.php';
      require './Conectores/DAOUsuario.php';
      require './Conectores/ConectorBD.php';


      $listajuegos="SELECT * FROM series  WHERE idSeries = ".$_GET['idSeries'];
 

      $resultLista = mysqli_query($conector,$listajuegos);
      
      $juegos=mysqli_fetch_assoc($resultLista)
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">



  <title>Document</title>

  <style type="text/css">
  nav{
      background-color: #333;
      height: 50px;
      border-radius: 4px;
      margin-bottom: 20px;
    }

    nav ul{
       list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #1C5FE6;
    }

    nav ul li {
      list-style-type: none;
      width: 150px;
      float: left;
      border-right: 1px  #CCC;
      text-align: center;
    }

    nav ul li a {
      display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 15px;
    }

    nav ul li a:hover {
      background-color: yellow;
      color: green;
    }
    .carousel slide{
       margin-bottom: 20px;

    }

 .footer {

   left: 0;
   bottom: 0;
   width: 100%;
   background-color: #2C95E0;
  border: solid 2px black;

   color: white;
   text-align: center;
}

#iconos{
  width: 30px;
  height: 50px;
  margin-left: 0 auto;
  margin-bottom: 0 auto;
  color: white;
  margin:0 12px;
}
#ayuda{
  background-color: black;
  border: solid 1px #003300;
}
.nav-link{
  color: white;
}


.S1{
          display: inline-block;
      list-style: none;
      margin: 0px;
      padding: 0px;
    }
.S2{
      width: 300px;
      float: left;
      border: 5px ;
      text-align: center;
      margin: 9px;
    }

  .S3{
      margin: auto;
      padding: 0px;
    }

    img{
      display:block;
      margin:auto;
      margin-top: 10px;
      padding-top: 10px;
    }

    h1{
      text-align:center;
      margin:auto;
      

    }

  </style>
</head>

<header>
   <nav>  
<ul>
  <li><a href="index.php"> <div ><img  src="imagenes/L1.jpg" width="50" height="35"></div></a></li>
  <li><a href="Peliculas.php">Peliculas</a></li>
  <li><a href="Series.php">Series</a></li>
  
  <li><a href="Gestiones.php"> <?php 
    

    
    if (!isset($_SESSION['Usuario'])) {
     echo ""  ;
    }else{
    print($_SESSION['Usuario']);
    }?>   
    </a></li>


  <li style="float:right"><a class="active" href="desloguearUS.php">LogOut</a></li>
  <li style="float:right"><a class="active" href="Lo.php">Login</a></li>
</ul>
</nav>
</header>
<body background="fondoInd.jpg">
  <div class="container" style="width: 1000px">
    
    
     

<h1><?php echo $juegos['Nombre']; ?></h1>


              <a href="shop-single.php?idVideojuego=<?php echo $juegos['idSeries']; ?>">
              <img src="imagenes/<?php echo $juegos['Imagen'];?>" height="250" width="200"></a>
              <br>
              <h3>Plataforma:   <?php echo $juegos['Plataformas']; ?></h3>
              <h3>Actores:   <?php echo $juegos['Autores']; ?></h3>
              <h3>Lanzamiento:   <?php echo $juegos['Lanzamiento']; ?></h3>
              <h3>Descripcion:   <?php echo $juegos['Descripcion']; ?></h3>
              <hr>

    
  </div>
  


   

</div>
<hr>

<div class="footer">
  <p>Footer</p>

  <div class="redes-footer">
        <a href="https://www.instagram.com/"><svg id="iconos" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
          <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
        </svg></a>
        <a href="https://www.twitter.com/"><svg id="iconos" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
          <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
        </svg></a>
        <a href="https://es-es.facebook.com/"><svg id="iconos" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
          <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
        </svg></a>
        
        </div>

        <div> 
          <ul class="nav nav-pills nav-fill" id="ayuda">
            <li class="nav-item">
              <a class="nav-link" href="#">Contacto</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Aviso legal</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Política de privacidad</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Política de cookies</a>
            </li>
           
          </ul> 
        </div>
        <hr>
      <h5>© 2021 PelisSeries24 - Todos los Derechos Reservados</h5>
      <hr>
</div>


</body>
</html>