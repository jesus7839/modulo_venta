<?php
include 'db.php';
class Turno extends Database
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
    
    public function select_record($table,$table2,$where){
		$sql = "";
		$condition = "";
		foreach ($where as $key => $value) {
			// id = '5' AND m_name = 'something'
			$condition .= $key . "='" . $value . "' AND ";
		}
		$condition = substr($condition, 0, -5);
		$sql .= "SELECT turno_id, turno_inicio, turno_final, caja_num, ven_turno.caja_id
                FROM ".$table."
                INNER JOIN ".$table2." 
                ON ".$table.".caja_id = ".$table2.".caja_id
                WHERE ".$condition;
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
    
    public function listar($table){
        $sql = "SELECT * FROM ".$table;
		$array = array();
		$query = mysqli_query($this->con,$sql);
		while($row = mysqli_fetch_assoc($query)){
			$array[] = $row;
		}
		return $array;
    }

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
    
    public function listar_turno($table){
        $sql = "SELECT turno_id, turno_inicio, turno_final, caja_num 
                FROM ven_turno INNER JOIN ".$table." 
                ON ven_turno.caja_id = ".$table.".caja_id";
		$array = array();
		$query = mysqli_query($this->con,$sql);
		while($row = mysqli_fetch_assoc($query)){
			$array[] = $row;
		}
		return $array;
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
    
}

$obj = new Turno;

if(isset($_POST["submit"])){
	$myArray = array(
		"caja_id" => $_POST["n_idcaja"] ,
        "turno_inicio" => $_POST["n_hinicio"] ,
        "turno_final" => $_POST["n_hfinal"] 
		);
	if($obj->insert_record("ven_turno",$myArray)){
		header("location:../../registrar_turno.php?msg=Record Inserted");
	}
	
}

if(isset($_POST["edit"])){
	$id = $_POST["id"];
	$where = array("turno_id"=>$id);
	$myArray = array(
		"caja_id" => $_POST["n_idcaja"] ,
        "turno_inicio" => $_POST["n_hinicio"] ,
        "turno_final" => $_POST["n_hfinal"] 
		);
	if($obj->update_record("ven_turno",$where,$myArray)){
		header("location:../../registrar_turno.php?msg=Record Updated Successfully");
	}
	
}

if(isset($_GET["delete"])){
    if (!empty($_GET["id"])) $id = $_GET["id"];
    else $id = null;
	//$id = $_GET["id"] ?? null;
	$where = array("turno_id"=>$id);
	if($obj->delete_record("ven_turno",$where)){
		header("location:../../registrar_turno.php?msg=Record Deleted Successfully");
	}
	
}
?>