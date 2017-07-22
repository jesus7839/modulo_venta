<?php
include '../conexion.php';
/**
 * Created by PhpStorm.
 * User: Christian
 * Date: 14/07/2017
 * Time: 02:00
 */
$id = $_POST["idprovincia"];
$sql = "SELECT * FROM ubprovincia WHERE idDepa='$id'";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<option value='".$row["idProv"]."'>".$row["provincia"]."</option> ";
    }
} else {
    echo "0 results";
}
$con->close();
?>