<?php
include 'conexion.php';
$descripcion = $_POST["n_descripcion"];
$num_registro = $_POST["n_nregistro"];

$consulta = "INSERT INTO tipo_comprobante() VALUES ()";
if ($con -> query($consulta) === TRUE)
{
    echo "Fila insertada correctamente!";
}else{
    echo "Error: ".$sql."<br>".$con -> error;
}

