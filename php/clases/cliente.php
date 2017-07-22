<?php
include 'db.php';
class Cliente extends Database
{
    public function insert_record($table,$fileds){
		$sql = "";
		$sql .= "INSERT INTO ".$table;
		$sql .= " (".implode(",", array_keys($fileds)).") VALUES ";
		$sql .= "('".implode("','", array_values($fileds))."')";
		$query = mysqli_query($this->con,$sql);
		if($query){
            $last_id = mysqli_insert_id($this->con);
			return $last_id;
		} else {
            echo "Error: " . $sql . "<br>" . mysqli_error($this->con);
        }

	}

	public function insertar_persona($table,$fileds){
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

    public function seleccionar_provincia($iddepartamento){
        $sql = "SELECT * FROM ubprovincia WHERE idDepa=".$iddepartamento;
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
		}else{
            echo "Error deleting record: " . mysqli_error($this->con);
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

$obj = new Cliente;


if(isset($_POST["submit"])){
    $hoy = date('Y-m-d');
    $loquesea = 1010;
    $ubiest = 1;
    $myArray = array(
        "depa_id" => $_POST["n_departamento"] ,
        "prov_id" => $_POST["n_provincia"] ,
        "dist_id" => $_POST["n_distrito"] ,
        "ubi_num" => $loquesea ,
        "ubi_est" => $ubiest
    );
    $idubigeo = $obj->insert_record("alm_ubigeo",$myArray);
    if($idubigeo!=0){
        $miArreglo = array(
            "ubi_id" => $idubigeo ,
            "perso_nom" => $_POST["n_nombre"] ,
            "perso_app" => $_POST["n_apepat"] ,
            "perso_apm" => $_POST["n_apemat"] ,
            "perso_numdoc" => $_POST["n_documento"] ,
            "perso_nutlfn" => $_POST["n_telefono"] ,
            "perso_direc" => $_POST["n_direccion"] ,
            "perso_email" => $_POST["n_email"] ,
            "perso_sexo" => $_POST["n_sexo"] ,
            "perso_fena" => date("Y-m-d", strtotime($_POST["n_fnacimiento"])) ,
            "perso_freg" => $hoy ,
            "perso_est" => $_POST["n_estado"]
        );
        if($obj->insertar_persona("glb_persona",$miArreglo)){
            header("location:../../registrar_cliente.php?msg=Record Inserted");
        }
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
		header("location:../../registrar_cliente.php?msg=Record Updated Successfully");
	}
	
}

if(isset($_GET["delete"])){
    if (!empty($_GET["id"])) $id = $_GET["id"];
    else $id = null;
	//$id = $_GET["id"] ?? null;
	$where = array("perso_id"=>$id);
	if($obj->delete_record("glb_persona",$where)){
		header("location:../../registrar_cliente.php?msg=Record Deleted Successfully");
	}
	
}

/*
include'db.php';
class Cliente extends Database{
    public function listar_cliente($table){
		$sql = "SELECT * FROM ".$table;
		$array = array();
		$query = mysqli_query($this->con,$sql);
		while($row = mysqli_fetch_assoc($query)){
			$array[] = $row;
		}
		return $array;
	}
}
$objcliente = new Cliente;
*/
?>