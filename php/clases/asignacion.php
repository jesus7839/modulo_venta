<?php
include 'db.php';
class Asignacion extends Database
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

	public function insertar_asignacion($table,$fileds){
		//"INSERT INTO table_name (, , ) VALUES ('m_name','qty')";
		$sql = "";
		$sql .= "INSERT INTO ".$table;
		$sql .= " (".implode(",", array_keys($fileds)).") VALUES ";
		$sql .= "('".implode("','", array_values($fileds))."')";
        if(mysqli_query($this->con,$sql)){
            $last_id = mysqli_insert_id($this->con);
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($this->con);
        }
		return $last_id;

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

    public function insertar_detalle($combinar,$idasig){
	    $cont=0;
        foreach($combinar as $producto){
            $sql="INSERT INTO ven_detalle_asignacion (asig_id, prod_id)
                  VALUES ('$idasig','$producto')";
            if(mysqli_query($this->con,$sql)){
                $cont++;
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($this->con);
            }
        }
        return $cont;
    }



}
$obj = new Asignacion;
if(isset($_POST["submit"])){
    $hoy = date('Y-m-d');

    $miArreglo = array(
        "perso_id" => $_POST["n_idpersona"] ,
        "caja_id" => $_POST["n_idcaja"] ,
        "asig_fecregistro" => $hoy
    );

    $idasig = $obj->insertar_asignacion("ven_asignacion",$miArreglo);

    if($idasig!=0){
        if (isset($_POST['n_producto'])) {
            $arrayproducto=$_POST['n_producto'];
            $detalle = $obj->insertar_detalle($arrayproducto,$idasig);
            if($detalle>0){
                header("location:../../registrar_asignacion.php?msg=Record Inserted");
            }
        }
        header("location:../../registrar_asignacion.php?msg=Record Inserted");
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