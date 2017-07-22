<?php
include 'db.php';
class DescuentoCatalogo extends Database
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
    
    public function listar($table){
    
        $sql = "SELECT prod_id, prod_Nom, prod_umed, prod_nrsa, prod_prvt, prod_cant, prod_est, cate_desc, marca_desc, lote_desc
                 FROM ".$table." INNER JOIN alm_categoria 
                     ON glb_producto.cate_id = alm_categoria.cate_id
                 INNER JOIN alm_tipo_producto
                     ON glb_producto.tppro_id = alm_tipo_producto.tppro_id
                 INNER JOIN alm_marca
                     ON glb_producto.marca_id = alm_marca.marca_id
                 INNER JOIN alm_lote
                     ON glb_producto.lote_id = alm_lote.lote_id";
		$array = array();
		$query = mysqli_query($this->con,$sql);
		while($row = mysqli_fetch_assoc($query)){
			$array[] = $row;
		}
		return $array;
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

$obj = new DescuentoCatalogo;


if(isset($_POST["submit"])){
	$myArray = array(
		"prod_id" => $_POST["n_descripcion"] ,
        "cata_descripcion" => $_POST["n_descripcion"] ,
        "cata_montopagar" => $_POST["n_descripcion"] ,
        "cata_fecha_inicio" => $_POST["n_descripcion"] ,
        "cata_fecha_cierre" => $_POST["n_descripcion"] 
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