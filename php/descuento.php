<?php
include 'conexion.php';

$segun_tipo = $_POST["n_tipo"];
$fec_inicio = $_POST["n_fecinicio"];
$fec_final = $_POST["n_fecfinal"];
$producto = $_POST["n_producto"];
$porcentaje = $_POST["n_porcentaje"];
$descripcion = $_POST["n_descripcion"];
$vacio = "";

if($segun_tipo == "producto"){
    $sql = "INSERT INTO ven_descuentos_varios (prod_id,familia,desv_descripcion,desv_porcentaje,desv_fecha_inicio,desv_fecha_termino)
    VALUES ('$producto','$vacio','$descripcion','$porcentaje','$fec_inicio','$fec_final')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

}else{
    $sql = "INSERT INTO ven_descuentos_varios (prod_id,familia,desv_descripcion,desv_porcentaje,desv_fecha_inicio,desv_fecha_termino)
    VALUES ('$vacio','$producto','$descripcion','$porcentaje','$fec_inicio','$fec_final')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}


$conn->close();

?>