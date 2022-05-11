<?php
 require './Conectores/Conector_BD.php';
   require './Conectores/DAOUsuario.php';
   require './Conectores/ConectorBD.php';
//Validamos que hayan llegado estas variables, y que no esten vacias:
   

//traspasamos a variables locales, para evitar complicaciones con las comillas:
$idPelicula = $_POST["idPelicula"];
$Nombre = $_POST["Nombre"];
$Autores = $_POST["Autores"];
$Plataformas = $_POST["Plataformas"];
$Lanzamiento = $_POST["Lanzamiento"];
$Descripcion = $_POST["Descripcion"];
$nombreImg=$_FILES['img']['name'];
$ruta=$_FILES['img']['tmp_name'];
 $destino="imagenes/".$nombreImg;

//echo "datos".$Nombre.$Lanzamiento.$Precio.$Stock.$Descripcion.$Imagen;

$conector = conectar(false);

if ($conector->connect_error) {
  die("Connection failed: " . $conector->connect_error);
} 
//echo "datos".$Nombre.$Lanzamiento.$Precio.$Stock.$Descripcion.$Imagen;

//Preparamos la orden SQL

$sqlc = "UPDATE pelicula SET Nombre='$Nombre', Plataformas='$Plataformas', Lanzamiento='$Lanzamiento',  Descripcion='$Descripcion', Imagen='$nombreImg', ruta='$destino'  WHERE idPelicula='$idPelicula'";
echo "sql correcto ";

//Aqui ejecutaremos esa orden
if (mysqli_query($conector,$sqlc) ){
 echo '<script type="text/javascript"> alert("Agregado Correctamente"); window.location="index.php";</script>';

} else {
echo "<p>No se ha cambiado plataforma...</p>". $conector->error;
}


?>

<a href="index.php">index</a>


?>