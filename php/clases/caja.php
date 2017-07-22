<?php
include "db.php";
class Caja extends Database
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
    
    public function listar_caja($table){
        $sql = "SELECT caja_id, caja_num, caja_tipo,caja_estado,tipo_Descripcion
                FROM ".$table." INNER JOIN ven_tipo_comprobante 
                ON ".$table.".tipo_idcomp = ven_tipo_comprobante.tipo_idcomp";
		$array = array();
		$query = mysqli_query($this->con,$sql);
		while($row = mysqli_fetch_assoc($query)){
			$array[] = $row;
		}
		return $array;
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
	public function insert_record($tabla,$campos){
		//"INSERT INTO table_name (, , ) VALUES ('m_name','qty')";
		$sql = "";
		$sql .= "INSERT INTO ".$tabla;
		$sql .= " (".implode(",", array_keys($campos)).") VALUES ";
		$sql .= "('".implode("','", array_values($campos))."')";
		$query = mysqli_query($this->con,$sql);
		if($query){
			return true;
		}else{
			echo "Error: " . $sql . "<br>" . mysqli_error($this->con);
		}
	}
    */
}

$obj = new Caja;
if(isset($_POST["submit"])){
	$miArreglo = array(
		"caja_num" => $_POST["n_numero"] ,
        "caja_tipo" => $_POST["n_tipocaja"] ,
        "tipo_idcomp" => $_POST["n_tipocomprobante"] ,
        "caja_estado" => $_POST["n_estadocaja"] 
		);
	if($obj->insert_record("ven_caja",$miArreglo)){
		header("location:../../registrar_caja.php?msg=Record Inserted");
	}
}


if(isset($_POST["edit"])){
	$id = $_POST["id"];
	$where = array("caja_id"=>$id);
	$myArray = array(
		"caja_num" => $_POST["n_numero"] ,
        "caja_tipo" => $_POST["n_tipocaja"] ,
        "tipo_idcomp" => $_POST["n_tipocomprobante"] ,
        "caja_estado" => $_POST["n_estadocaja"] 
		);
	if($obj->update_record("ven_caja1",$where,$myArray)){
		header("location:../../registrar_caja.php?msg=Record Updated Successfully");
	}
	
}

if(isset($_GET["delete"])){
    if (!empty($_GET["id"])) $id = $_GET["id"];
    else $id = null;
	//$id = $_GET["id"] ?? null;
	$where = array("caja_id"=>$id);
	if($obj->delete_record("ven_caja1",$where)){
		header("location:../../registrar_caja.php?msg=Record Deleted Successfully");
	}
	
}
?>