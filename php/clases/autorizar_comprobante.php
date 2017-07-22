<?php
include 'db.php';
/**
 * Created by PhpStorm.
 * User: Christian
 * Date: 16/07/2017
 * Time: 05:17
 */
class Autorizar_Comprobante extends Database
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

$obj = new Autorizar_Comprobante;


if(isset($_POST["submit"])){
    $idpedido = $_POST["n_idpedido"];
    $estado = 1;
    if($obj->autorizar_comprobante("ven_comprobante1",$idpedido, $estado)){
        header("location:../../registrar_cliente.php?msg=Record Inserted");
    }
}

if(isset($_POST["cancelar"])){
    $id = $_POST["n_idpedido"];
    $estado = 2;
    $where = array("comp_id"=>$id);
    $myArray = array(
        "comp_estado" => $estado
    );
    if($obj->update_record("ven_comprobante1",$where,$myArray)){
        header("location:../../autorizar_comprobante.php?msg=Record Updated Successfully");
    }
}

if(isset($_POST["aprobar"])){
    $id = $_POST["n_idpedido"];
    $estado = 1;
    $where = array("comp_id"=>$id);
    $myArray = array(
        "comp_estado" => $estado
    );
    if($obj->update_record("ven_comprobante1",$where,$myArray)){
        header("location:../../autorizar_comprobante.php?msg=Record Updated Successfully");
    }

}

?>