<?php
	require './Conectores/Conector_BD.php';
   	require './Conectores/DAOUsuario.php';
   	require './Conectores/ConectorBD.php';

   		echo "Hola";
	//Validamos que hayan llegado estas variables, y que no esten vacias:
	if(isset($_POST["Usuario"], $_POST["Password"], $_POST["Nombre"],$_POST["Apellido1"],$_POST["Apellido2"],$_POST["Telefono"],$_POST["Email"],$_POST["CodigoPostal"],$_POST["Provincia"],$_POST["Comunidad"],$_POST["DNI"]))
	{

		echo "PAsa";
		//traspasamos a variables locales, para evitar complicaciones con las comillas:
		$Usuario = $_POST["Usuario"];
		$Password = $_POST["Password"];
		$Nombre = $_POST["Nombre"];
		$Apellido1 = $_POST["Apellido1"];
		$Apellido2 = $_POST["Apellido2"];
		$Telefono = $_POST["Telefono"];
		$Email = $_POST["Email"];
		$CodigoPostal = $_POST["CodigoPostal"];
		$Provincia = $_POST["Provincia"];
		$Comunidad = $_POST["Comunidad"];
		$DNI = $_POST["DNI"];

		$conector = conectar(false);

		echo "datos".$Usuario.$Password.$Nombre.$Apellido1.$Apellido2.$Telefono.$Email.$CodigoPostal.$Provincia.$Comunidad;

		//Preparamos la orden SQL
		$consulta = "INSERT INTO usuario
		(idUsuario,Usuario,Password,Nombre,Apellido1,Apellido2,Telefono,Email,CP,Provincia,ComunidadAutonoma,Rol,DNI) VALUES ('0','$Usuario','$Password','$Nombre','$Apellido1','$Apellido2','$Telefono','$Email','$CodigoPostal','$Provincia','$Comunidad','usuario','$DNI')";

		//Aqui ejecutaremos esa orden
		   $res=mysqli_query($conector,$consulta);
        if($res){
            echo '<script type="text/javascript"> alert("Agregado Correctamente"); window.location="index.php";</script>';

        }else{
            die("Error".mysqli_error($conector));
        }
}
?>