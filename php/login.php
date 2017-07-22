<?php
	require 'conexion.php';

	$sql = "";
	$result = $con -> query($sql);
	if ($result -> num_rows > 0) 
	{
		// Salida de datos por cada fila
		while ($row = $result -> fetch_assoc()) {
			echo "";
		}
	}
	else
	{
		echo "Sin resultados";
	}

	$con -> close();
?>