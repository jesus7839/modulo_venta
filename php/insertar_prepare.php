<?php
include 'conexion.php';
$nom = "Fabian";
$apepat = "Quijano";
$apemat = "fd";

$nom = $con->real_escape_string($nom);
$apepat = $con->real_escape_string($apepat);
$apemat = $con->real_escape_string($apemat);

$sentencia = $con -> prepare( "INSERT INTO tabla01(nombre, apepat, apemat) VALUES (?,?,?)");
if($sentencia === false){
    die('prepare() failed:'. $sentencia -> error);
}
$datos = $sentencia -> bind_param('sss',
                                 $nom,
                                 $apepat,
                                 $apemat);
if($datos === false){
    die('bind_param() failed:'.htmlspecialchars($sentencia -> error));
}

$datos = $sentencia -> execute();
if($datos === false){
    die('execute() failed:'.htmlespecialchars($sentencia -> error));
}



$sentencia -> close();
