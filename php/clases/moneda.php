<?php
include 'db.php';
class Moneda extends Database
{
    public function insert_record($table,$fileds){
		//"INSERT INTO table_name (, , ) VALUES ('m_name','qty')";
		$sql = "";
		$sql .= "INSERT INTO ".$table;
		$sql .= " (".implode(",", array_keys($fileds)).") VALUES ";
		$sql .= "('".implode("','", array_values($fileds))."')";
		$query = mysqli_query($this->con,$sql);
		if($query){
			return true;
		}

	}
	public function fetch_record($table){
		$sql = "SELECT * FROM ".$table;
		$array = array();
		$query = mysqli_query($this->con,$sql);
		while($row = mysqli_fetch_assoc($query)){
			$array[] = $row;
		}
		return $array;
	}
    
    public function select_record($table,$where){
		$sql = "";
		$condition = "";
		foreach ($where as $key => $value) {
			// id = '5' AND m_name = 'something'
			$condition .= $key . "='" . $value . "' AND ";
		}
		$condition = substr($condition, 0, -5);
		$sql .= "SELECT * FROM ".$table." WHERE ".$condition;
		$query = mysqli_query($this->con,$sql);
		$row = mysqli_fetch_array($query);
		return $row;

	}
    
    public function update_record($table,$where,$fields){
		$sql = "";
		$condition = "";
		foreach ($where as $key => $value) {
			// id = '5' AND m_name = 'something'
			$condition .= $key . "='" . $value . "' AND ";
		}
		$condition = substr($condition, 0, -5);
		foreach ($fields as $key => $value) {
			//UPDATE table SET m_name = '' , qty = '' WHERE id = '';
			$sql .= $key . "='".$value."', ";
		}
		$sql = substr($sql, 0,-2);
		$sql = "UPDATE ".$table." SET ".$sql." WHERE ".$condition;
		if(mysqli_query($this->con,$sql)){
			return true;
		}
	}
	public function delete_record($table,$where){
		$sql = "";
		$condition = "";
		foreach ($where as $key => $value) {
			$condition .= $key . "='" . $value . "' AND ";
		}
		$condition = substr($condition, 0, -5);
		$sql = "DELETE FROM ".$table." WHERE ".$condition;
		if(mysqli_query($this->con,$sql)){
			return true;
		}
	}
}
$obj = new Moneda;
if(isset($_POST["submit"])){
	$myArray = array(
		"mon_codigo" => $_POST["n_codigo"] ,
        "mon_nombre" => $_POST["n_nombre"] ,
        "mon_abreviatura" => $_POST["n_abreviatura"] ,
        "mon_internacional" => $_POST["n_denominacion"] ,
        "mon_pais" => $_POST["n_paises"] 
		);
	if($obj->insert_record("ven_moneda1",$myArray)){
		header("location:../../registrar_moneda.php?msg=Record Inserted");
	}
	
}


if(isset($_POST["edit"])){
	$id = $_POST["id"];
	$where = array("mon_id"=>$id);
	$myArray = array(
		"mon_codigo" => $_POST["n_codigo"] ,
        "mon_nombre" => $_POST["n_nombre"] ,
        "mon_abreviatura" => $_POST["n_abreviatura"] ,
        "mon_internacional" => $_POST["n_denominacion"] ,
        "mon_pais" => $_POST["n_paises"] 
		);
	if($obj->update_record("ven_moneda1",$where,$myArray)){
		header("location:../../registrar_moneda.php?msg=Record Updated Successfully");
	}
	
}

if(isset($_GET["delete"])){
    if (!empty($_GET["id"])) $id = $_GET["id"];
    else $id = null;
	//$id = $_GET["id"] ?? null;
	$where = array("mon_id"=>$id);
	if($obj->delete_record("ven_moneda1",$where)){
		header("location:../../registrar_moneda.php?msg=Record Deleted Successfully");
	}
	
}
?>