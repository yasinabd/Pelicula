<?php

    //echo "<h2> Mi segundaconexion a una BD con PHP </h2><br>";

    //Para estableces una conexion a una BD necesitamos usar la función mysqli_connect()

    //Variable que almacena la IP de mi Gestor de BD
    $servidor = "localhost:3306";

    //Variable que me almacena el usuario que se conecta a mi Gestor de BD
    $usuario = "debianDB";

    //Contraseña del usuario
    $password = "debianDB";

    //El esquema de la BD donde quiero hacer operaciones
    $BD = "peliculas";

   // echo "Vamos a intentar conectar con la BD <br>";

    $conector = mysqli_connect($servidor,$usuario,$password,$BD);

    if ($conector){
        //echo "La conexión se ha realizado con exito <br>";
    } else {
        echo "ERROR. No se ha podido conectar con la BD";
        //Función que me indica el error cometido al conectar
        echo mysqli_connect_error();
    }

    //Desconectamos de la BD
    //mysqli_close($conector);
//