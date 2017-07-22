<?php
include 'conexion.php';
$segun = $_POST["n_tipo"];
$fecha_inicio = $_POST["n_fecinicio"];
$fecha_final = $_POST["n_fecfinal"];
$descripcion = $_POST["n_descripcion"];
$elemento = $_POST["prod_seleccionado"];
$porcentaje = $_POST["n_porcentaje"];

$finicio = date("Y-m-d", strtotime($fecha_inicio));
$ffinal = date("Y-m-d", strtotime($fecha_final));


$sql = "INSERT INTO ven_descuentos_varios (prod_id, desv_tipo, desv_descripcion, desv_porcentaje, desv_fecha_inicio, desv_fecha_termino)
VALUES ('$elemento','$segun','$descripcion','$porcentaje','$finicio','$ffinal')";

if ($con->query($sql) === TRUE) {
    header("location:../registrar_descuento.php?msj=Fila insertada correctamente");
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}

?>