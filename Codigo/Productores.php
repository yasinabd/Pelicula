<?php
 session_start();

 require './Conectores/Conector_BD.php';
 

       
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
  <link rel="stylesheet" type="text/css" href="CSS/estiloPelicula.css">
</head>
  

<header>
   <nav>  
<ul>
  <li><a href="index.php"> <div ><img  src="imagenes/L1.jpg" width="50" height="35"></div></a></li>
  <li><a href="Peliculas.php">Peliculas</a></li>
  <li><a href="Series.php">Series</a></li>
    <?php 
    

 if(isset($_SESSION['Usuario']) && $_SESSION['Rol'] == "usuario") {?>



  <li><a href="Gestiones.php"><?php print($_SESSION['Usuario']);?></a></li>
   <li> <a href="Productores.php">Productores</a>   </li>  <?php  }else{
   

  echo "". $conector->error;

    

}    ?>   


<?php 
    

 if(isset($_SESSION['Usuario']) && $_SESSION['Rol'] == "admin") {?>



  <li><a href="Gestiones2.php"><?php print($_SESSION['Usuario']);?></a></li> 
   <li> <a href="Productores.php">Productores</a>   </li> <?php  }else{
   

  echo "". $conector->error;

    

}    ?>   
  <li style="float:right"><a class="active" href="desloguearUS.php">LogOut</a></li>
  <li style="float:right"><a class="active" href="Lo.php">Login</a></li>
</ul>
</nav>
</header>
<body >
  <div class="container" style="width: 1000px">


    
  <h2>David O. Selznick </h2>
  <p>Productor, ejecutivo y guionista. David estudió en la Universidad de Columbia (Nueva York), y es para muchos uno de los mejores directores de la historia. Selznick ha estado ligado a importantes nombres de productoras.</p>

  <p>En 1926 se mudó a Hollywood y comenzó a trabajar de editor para la Metro-Goldwyn-Mayer. Después, en 1928, trabajó en Paramount Pictures hasta 1931. En ese entonces se integró a RKO en el rol de jefe de producción. En esos años trabajó en muchas películas: What Price Hollywood? (1932), A Bill of Divorcement (1932), Rockabye (1932), Bird of Paradise (1932), Our Betters (1933), King Kong (1933).</p>
  <p>A pesar de estar ligado  a grandes productoras de cine americanas, el sueño de Selznick era ser productor independiente, así que en 1935 formó la Selznick International Pictures. Sus éxitos no pararon y conquistó gran fama con: El jardín de Allah (1936), Ha nacido una estrella (1937), El prisionero de Zenda (1937), Nada sagrado (1937), Los jóvenes de corazón (1938), Las aventuras de Tom Sawyer (1938), Intermezzo (1939), Made for Each Other (1939), y Lo que el viento se llevó (1939), que fue la película más taquillera de todos los tiempos. Después de estos grandes éxitos produjo otras importantes obras asociadas a reconocidos nombres, como Rebecca, una película para la que Selznick trajo desde Inglaterra a Hitchcock.</p>
          
  <h2>Alfred Joseph Hitchcock  </h2>
  <p>Nació en Leytonstone, Inglaterra, el 13 de agosto de 1899. Fue director, productor, editor y guionista. Su especialidad fueron los géneros de suspenso y thriller psicológico. Inició su andar en la cinematografía poniendo rótulos a las películas del cine mudo en Famous Players Lasky. Es uno de los grandes productores de cine de todos los tiempos.</p>

  <p>El Jardín de la Alegría (1925) fue su primera película. En 1929 el cineasta dirigió la primera película con sonido de Inglaterra: Blackmail. Después de diez años de trabajo, el cineasta comenzó a tener renombre, sobre todo después de la película Alarma en el expreso (1938). En 1939 el productor estadounidense Selznick lo convence de irse a Estados Unidos para ofrecerle la adaptación de la novela de Daphne du Maurier, Rebeca. Este filme ganó dos Premios de la Academia en la categoría de Mejor Película y Mejor Fotografía. Ya en los cuarentas se volvió uno de los más famosos del Séptimo Arte. Entre sus trabajos reconocidos se encuentran: La ventana indiscreta (1954), Crimen perfecto (1954) y Vértigo (1958).</p>

  <p>En 1960 crea un filme de terror considerado su obra maestra: Psicosis. Este largometraje mostró una de las más impactantes escenas en la historia del cine. La secuencia mostró la muerte de la actriz principal, acompañada de un sonido estridente, que aún hoy es reconocible por todos. La escena fue en una de las más célebres del cine.</p>

  <h2>James L. Brooks  </h2>

  <p>Brooks nació en Nueva Jersey en 1940. Comenzó junto a  David L. Wolper, desempeñándose como aprendiz de la CBS.  Es uno de los directores de cine famosos en Hollywood, encargándose también de la producción. Trabajo durante muchos años en exitosas series y programas de televisión: Cheers, Taxi, El show de Mary Tyler Moore.</p>
  <p>Series de television: My Three Sons (1960), The Andy Griffith Show (1960), The Mary Tyler Moore Show (1970), Rhoda (1974),Thursday’s Game (1974), Taxi (1978), The Tracey Ullman Show (1987), Los Simpson (1989-presente), The Critic (1994). </p>

  <p>Fue director y guionista de exitosas obras: La fuerza del cariño (1983), Al filo de la noticia (1987), Aprendiendo a vivir (I’ll Do Anything) (1994), Mejor… imposible (1997), Spanglish (2004), ¿Cómo sabes si…? (2010), The Longest Daycare (2012), Maggie Simpson: Playdate with Destiny (2020). </p>

  <p>Fue productor de: Comenzar de nuevo (Starting Over) (1979), La fuerza del cariño (1983), Broadcast News (1987), Big (1988), Say Anything (Un gran amor) (1989), La guerra de los Rose (1989), Jerry Maguire (1996), Mejor… imposible (1997), Spanglish (2004), Los Simpson: la película (2007), ¿Cómo sabes si…? (2010).</p>
    
    <h2>Steven Allan Spielberg</h2>
    <p>pielberg es una figura famosa entre los directores de películas, logrando exito también como guionista y productor de cine estadounidense. Fue autodidacta, comenzó en los años 60 y debutó con un filme llamado The Last Gun, hasta que realizó su primer largometraje Firelight (1964) a los 18 años. En Los Ángeles, Steven Spielberg trató de ingresar en la Universidad de Southern California con el objetivo de estudiar Cinematografía, pero fue rechazado.</p>

    <p>Después de dos intentos infructuosos pudo entrar en la Universidad del Estado de California en Long Beach y salió en 1968 sin culminar la carrera. Logró titularse en 2002.</p>

    <p>Sus trabajos más conocidos son: Jaws (1975), Close Encounters of the Third Kind (1977), 1941 (1979), Raiders of the Lost Ark (1981), E.T., el extraterrestre, Poltergeist (1982), Twilight Zone: The Movie (1983), Indiana Jones and the Temple of Doom (1984), El secreto de la pirámide, El color púrpura, Back to the Future, The Goonies (1985),  El imperio del sol,  Batteries Not Included (1987), Always, Indiana Jones y la última cruzada (1989), Hook (1991), Parque Jurásico, La lista de Schindler (1993), Los Picapiedra (1994), The Lost World: Jurassic Park, Amistad (1997), Saving Private Ryan (1998),  A.I. Inteligencia artificial, Parque Jurásico III (2001).</p>

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