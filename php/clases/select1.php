<?php
include '../conexion.php';
/**
 * Created by PhpStorm.
 * User: Christian
 * Date: 14/07/2017
 * Time: 02:00
 */
$id = $_POST["iddistrito"];
$sql = "SELECT * FROM ubdistrito WHERE idProv='$id'";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<option value='".$row["idDist"]."'>".$row["distrito"]."</option> ";
    }
} else {
    echo "0 results";
}
$con->close();
?>