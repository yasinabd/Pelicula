<?php
 require './Conectores/Conector_BD.php';
   require './Conectores/DAOUsuario.php';
   require './Conectores/ConectorBD.php';
//Validamos que hayan llegado estas variables, y que no esten vacias:

//traspasamos a variables locales, para evitar complicaciones con las comillas:

$idPelicula = $_GET["idPelicula"];



$conector = conectar(false);



//Preparamos la orden SQL
 $consulta="DELETE FROM pelicula WHERE (`idPelicula` = '$idPelicula')";

//Aqui ejecutaremos esa orden
if (mysqli_query($conector,$consulta) ){
 echo '<script type="text/javascript"> alert("Eliminado Correctamente"); window.location="index.php";</script>';
} else {
echo "<p>No se la No se ha Eliminado...</p>";
}


?>