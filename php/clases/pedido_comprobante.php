<?php
include 'db.php';
class Pedido_comprobante extends Database
{
    public function fetch_record($table){
		$sql = "SELECT * FROM ".$table;
		$array = array();
		$query = mysqli_query($this->con,$sql);
		while($row = mysqli_fetch_assoc($query)){
			$array[] = $row;
		}
		return json_encode($array);
	}

	
}

$pedido = new Pedido_comprobante();

if(isset($_POST["show"])){
	// $categoria = $_POST["id"];
	// $where = array("id"=>$id);
	// $myArray = array(
	// 	"m_name" => $_POST["name"],
	// 	"qty" => $_POST["qty"] 
	// 	);
	$pedido->update_record("glb_producto");

}

?>