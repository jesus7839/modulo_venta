<?php
include 'db.php';
class TipoPago extends Database
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
    
    
    /*
    public function listar($table){
        $sql = "SELECT * FROM ".$table;
		$array = array();
		$query = mysqli_query($this->con,$sql);
		while($row = mysqli_fetch_assoc($query)){
			$array[] = $row;
		}
		return $array;
    }
    */

    /*
    public function registrar($table,$fileds){
        $sql = "";
		$sql .= "INSERT INTO ".$table;
		$sql .= " (".implode(",", array_keys($fileds)).") VALUES ";
		$sql .= "('".implode("','", array_values($fileds))."')";
		$query = mysqli_query($this->con,$sql);
		if($query){
			return true;
        }
    }
    */
}

$obj = new TipoPago;


if(isset($_POST["submit"])){
	$myArray = array(
	"tipg_Descripcion" => $_POST["n_descripcion"] ,
        "tipg_Cuotas" => $_POST["n_referencia"] 
		);
	if($obj->insert_record("ven_tipo_pago",$myArray)){
		header("location:../../registrar_tipo_pago.php?msg=Record Inserted");
	}
	
}

if(isset($_POST["edit"])){
	$id = $_POST["id"];
	$where = array("tipg_id"=>$id);
	$myArray = array(
		"tipg_Descripcion" => $_POST["n_descripcion"] ,
        "tipg_Cuotas" => $_POST["n_referencia"] 
		);
	if($obj->update_record("ven_tipo_pago",$where,$myArray)){
		header("location:../../registrar_tipo_pago.php?msg=Record Updated Successfully");
	}
	
}

if(isset($_GET["delete"])){
    if (!empty($_GET["id"])) $id = $_GET["id"];
    else $id = null;
	//$id = $_GET["id"] ?? null;
	$where = array("tipg_id"=>$id);
	if($obj->delete_record("ven_tipo_pago",$where)){
		header("location:../../registrar_tipo_pago.php?msg=Record Deleted Successfully");
	}
	
}
?>