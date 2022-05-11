<?php

   require './Conectores/Conector_BD.php';
   require './Conectores/DAOUsuario.php';
   require './Conectores/ConectorBD.php';
   

 //Voy a recoger los datos del formulario
        $usuario = $_POST['Usuario'];
        $password = $_POST['Password'];

        	
         //Creamos la conexion a la BD
          $conector = conectar(true);
          
     

      
	//Hacemos la consulta
        $existeUsuario = consultaLogin($conector,$usuario,$password);
        $existesoloUsuario = consultasoloUsuario($conector,$usuario);

        if(!$existeUsuario) {
        var_dump(mysqli_error($conector));
        exit;

    }

        //Comprobamos si existe el usuario
       	if(mysqli_num_rows($existeUsuario)==1){
            $fila = mysqli_fetch_assoc($existeUsuario);
            crearSesion($fila);
            echo "Mostramos los datos de la sesión<br>";
            $url ="index.php";
            $texto= "Haz clic para mostar el usuario";
            echo "<a href=$url>$texto</a>";
            header('Location: index.php');
        } else {

            if (mysqli_num_rows($existesoloUsuario)==1) {
                $fila = mysqli_fetch_assoc($existesoloUsuario);
            crearSesion($fila);
            echo "Mostramos los datos de la sesión<br>";
            $url ="recuperar_contraseña.php";
            $texto= "Haz clic para mostar el usuario";
            echo "<a href=$url>$texto</a>";
            header('Location: recuCon.php');
               
            }else{
            echo "ERROR. EL usuario o no existe <br>";
            $url ="ingresarUsuario.php";
            $texto= "Haz clic para registarte";
            echo "<a href=$url>$texto</a>";
             header('Location: ingresarUs.php');
            }
        }



?>