<?php
//include 'conexion.php';
//mysqli_set_charset($con,"utf8");
//
//$registration_data = array("christian","vidal","cortez");
// ===========================================================================================
// NO FUNCIONA CON ARREGLO
//
//$datos = implode(',', $datos_registro);
//
//$sql = "INSERT INTO tabla01 VALUES ({$datos})";
//
//if($con -> query($sql) === TRUE){
//    echo "Fila insertada";
//}else{
//    echo "Error".$sql."<br>".$con->error;
//}
//$con -> close();
// ===========================================================================================
// FUNCIONA CON ARREGLO
//$data = "'".implode("','", $registration_data)."'";
//$query = "INSERT INTO tabla01 (nombre,apepat,apemat) VALUES ($data)";
//
//if($con -> query($query) === TRUE){
//    echo "Fila insertada";
//}else{
//    echo "Error".$query."<br>".$con->error;
//}
//$con -> close();