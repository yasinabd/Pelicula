<?php
   
    //Creamos una funcion llamada conectar()
    function conectar($remota){
        //echo "Vamos a intentar conectarnos a la BD <br>";
        //Leemos la variable $remota para determinar donde me conecto
        if ($remota){
            $servidor = "";
        } else{
            //La conexion es local
            $servidor = "localhost:3306";
        }

        //Valor del usuario
        $usuario = "debianDB";
        //Contraseña del usuario
        $password = "debianDB";
        //Esquema de BD
        $BD = "peliculas";

        //Realizamos la conexión de la BD con la función mysqli_connect()
        $conexion = mysqli_connect($servidor,$usuario,$password,$BD);
        if (!$conexion){
            echo mysqli_connect_error();
            echo "Nada";
            return false;
        } else {
            //echo "La conexión se ha realizado con exito. <br>";
            return $conexion;
        }
    }

?>