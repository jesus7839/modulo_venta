<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "farmacia_1";

// Create connection
$con = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

$num_pedido = $_GET["num_pedido"];
$sql = "SELECT * FROM ven_pedido WHERE ped_id='$num_pedido'";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        $idproducto = $row["CodProducto"];

            $sql2 = "SELECT * FROM alm_producto WHERE prod_id='$idproducto'";
            $result2 = mysqli_query($con, $sql2);

            if (mysqli_num_rows($result2) > 0) {
                while($row2 = mysqli_fetch_assoc($result2)) {
                    echo "<tr>
                        <td>".$row2["prod_id"]."</td>
                        <td>".$row2["prod_Nom"]."</td>
                        <td>".$row2["prod_umed"]."</td>
                        <td>".$row2["prod_prvt"]."</td>";
                        
                }
            } else {
                echo "0 resultados 2s";
            }
        echo "<td>".$row["ped_sto"]."</td>
             <td>".$row["ped_cant"]."</td></tr>";
    }
    
} else {
    echo "0 resultados 1s";
}

mysqli_close($con);
?>