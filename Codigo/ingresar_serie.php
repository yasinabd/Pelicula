<?php
 require './Conectores/Conector_BD.php';
   require './Conectores/DAOUsuario.php';
   require './Conectores/ConectorBD.php';
//Validamos que hayan llegado estas variables, y que no esten vacias:

//traspasamos a variables locales, para evitar complicaciones con las comillas:

$Nombre = $_POST["Nombre"];
$Autores = $_POST["Autores"];
$Plataforma = $_POST["Plataforma"];
$Lanzamiento = $_POST["Lanzamiento"];
$Descripcion = $_POST["Descripcion"];
$nombreImg=$_FILES['img']['name'];
$ruta=$_FILES['img']['tmp_name'];
 $destino="imagenes/".$nombreImg;



$conector = conectar(false);


      
      $consulta5 = "INSERT INTO series
		(idSeries,Nombre,Autores,Plataformas,Lanzamiento,Descripcion,Imagen,ruta) VALUES ('0','$Nombre','$Autores','$Plataforma','$Lanzamiento','$Descripcion','$nombreImg','$destino')";
        $res=mysqli_query($conector,$consulta5);
        if($res){
            echo '<script type="text/javascript"> alert("Agregado Correctamente"); window.location="index.php";</script>';

        }else{
            die("Error".mysqli_error($conector));
        }

//Preparamos la orden SQL


//Aqui ejecutaremos esa orden


?>