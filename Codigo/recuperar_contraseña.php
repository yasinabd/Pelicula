

<?php
$Usuario = $_POST["Usuario"];
require './Conectores/Conector_BD.php';
require './Conectores/DAOUsuario.php';
require './Conectores/ConectorBD.php';

 	
  
 	$conector = conectar(false);

       
  $consultarEmail = consultasoloUsuario($conector,$Usuario);
  
  if(mysqli_num_rows($consultarEmail)!=0){ 
      $fila=mysqli_fetch_assoc($consultarEmail);
      echo"Su contraseña es :".$fila['Password']."<br>";
       		$url ="./Login.html.";
            $texto= "Haz clic para iniciar sesion";
            echo "<a href=$url>$texto</a>";
  }else{
      echo"No existe el usuario";
  }
?>