<?php


        function consultaUsuarios($conexion){

        }

       

       function consultaLogin($conector,$usuario,$password){
            $consulta = "SELECT * FROM usuario WHERE Usuario = '$usuario' AND Password = '$password'";
            $resultado = mysqli_query($conector,$consulta);
            return $resultado;
        }
  
        function consultasoloUsuario($conector,$usuario){
            $consulta = "SELECT * FROM usuario WHERE Usuario = '$usuario'";
            $resultado = mysqli_query($conector,$consulta);
            return $resultado;
        }

                 

        function insertarUsuarios(){

        }

        function modificarUsuarios(){

        }

        function eliminarUsuarios(){

        }

       function crearSesion($Usuario){
            //Queremos que el id session sea el dni

            session_id($Usuario['idUsuario']);
            //Creamos la session

            session_start();
            //Almacenamos en la sesión los datos del usuario

            // $_SESSION['conectado'];


            foreach($Usuario as $indice=>$valor){
                $_SESSION[$indice] = $valor;
            }

        }


?>