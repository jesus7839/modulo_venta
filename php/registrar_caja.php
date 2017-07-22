<?php
//include 'conexion.php';

//$numero = $_POST[];
//$tipo_caja = $_POST[];
//$estado_Caja = $_POST[];
//$tipo_comprobante = $_POST[];
$condicion = TRUE;
//$sql = "INSERT INTO () VALUES('$numero', '$tipo_caja', '$estado_caja')";
//if($con -> query($sql) === TRUE)
//{
if($condicion){
    $data['message'] = "correcto";
    $data['detalle'] = "Detalle de si es correcto"
}else{
    $data['message'] = "error";
    $data['detalle'] = "Detalle de si es incorrecto";
    //echo "Error: " . $sql . "<br>" . $conn->error;
}

$con->close();