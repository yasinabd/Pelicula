<?php
        //Incluimos el  archivo donde estan las funciones que queremos usar
        require 'Conector_BD.php';

        //Voy a conectarme a mi BD local

        //$conector = conectar(false);

        if ($conector){
            echo "Me he conectado a mi BD";
        } else{
            echo "Error a conectar";
        }

        //vamos a consultar los datos de la tabla usuario

        $consulta = "Select * from Usuario";

        //Lanzo la consulta. Para ello usaremos la función mysqli_query
        $resultadoConsulta = mysqli_query($conector,$consulta);

        if (mysqli_num_rows($resultadoConsulta)!=0){
            echo "<br>Hemos obtenido ".mysqli_num_rows($resultadoConsulta)." filas en la consulta <br>";
            //la función mysqli_fetch_assoc me permite recorrer fila a fila la matriz de la consulta
            while ($fila = mysqli_fetch_assoc($resultadoConsulta)){
                foreach ($fila as $atributo=>$valor){
                    echo $atributo."= ".$valor."<br>";
                }
                echo "^^^^^^^^^^^^^^^^^^^^^^^ <br>";
                echo "Usuario =".$fila['Usuario']."<br>";
                echo "Password =".$fila['Password']."<br>";
                
                echo "***************************************** <br>"; 
            }
        }else {
            echo "<br>La consulta esta vacía <br>";  
        }
?>