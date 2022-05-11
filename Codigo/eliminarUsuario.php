<?php

 require './Conectores/Conector_BD.php';
   require './Conectores/DAOUsuario.php';
   require './Conectores/ConectorBD.php';

$idUsuario = $_GET['idUsuario'];

$conector= conectar(false);  


 function eliminarUsuario($conector, $idUsuario){
            $consulta="DELETE FROM usuario WHERE (`idUsuario` = '$idUsuario')";
            $resultado = mysqli_query($conector,$consulta);
            return $resultado;
        }
$eliminarUsuario = eliminarUsuario($conector, $idUsuario);

header ('Location: ListarUsuarios.php');

