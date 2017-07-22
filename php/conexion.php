<?php  
	$nombre_servidor = "localhost";
	$username = "root";
	$password = "";
	$base_de_datos = "farmacia_2";

	// Creamos la conexion
	$con = new mysqli($nombre_servidor, $username, $password, $base_de_datos);
	// Verificamos si la conexion fue exitosa
	if ($con -> connect_error) {
		die("La conexion fallo: ".$con -> connect_error);
	}
	
?>