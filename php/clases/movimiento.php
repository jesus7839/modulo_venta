<?php
include 'db.php';
/**
 * Created by PhpStorm.
 * User: Christian
 * Date: 15/07/2017
 * Time: 01:48
 */
class Movimiento extends Database
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

    public function fetch_record($table){
        $sql = "SELECT * FROM ".$table;
        $array = array();
        $query = mysqli_query($this->con,$sql);
        while($row = mysqli_fetch_assoc($query)){
            $array[] = $row;
        }
        return $array;
    }

    public function listar($table){
        $sql = "SELECT movc_id, ven_mov_caja1.caja_id, movc_saldinicio, movc_saldfinal, movc_fecha, caja_num, caja_tipo, tipo_idcomp, caja_estado 
                FROM ".$table." 
                INNER JOIN ven_caja1 
                ON ven_mov_caja1.caja_id = ven_caja1.caja_id";
        $array = array();
        $query = mysqli_query($this->con,$sql);
        while($row = mysqli_fetch_assoc($query)){
            $array[] = $row;
        }
        return $array;
    }

    public function listar_caja($table){
        $sql = "SELECT caja_id, caja_num, caja_tipo, ven_caja1.tipo_idcomp, caja_estado, tipo_Descripcion, n_registro 
                FROM ".$table." 
                INNER JOIN ven_tipo_comprobante1 
                ON ven_caja1.tipo_idcomp = ven_tipo_comprobante1.tipo_idcomp 
                WHERE caja_estado='ACTIVO'";
        $array = array();
        $query = mysqli_query($this->con,$sql);
        while($row = mysqli_fetch_assoc($query)){
            $array[] = $row;
        }
        return $array;
    }

    public function listar_detalle($table,$where){

        $sql = "";
        $condition = "";
        foreach ($where as $key => $value) {
            // id = '5' AND m_name = 'something'
            $condition .= $key . "='" . $value . "' AND ";
        }
        $condition = substr($condition, 0, -5);
        $sql .= "SELECT movc_id, ven_mov_caja1.caja_id, movc_saldinicio, movc_saldfinal, movc_fecha, caja_num, caja_tipo, tipo_idcomp, caja_estado 
                FROM ".$table." 
                INNER JOIN ven_caja1 
                ON ven_mov_caja1.caja_id = ven_caja1.caja_id WHERE ".$condition;
        $query = mysqli_query($this->con,$sql);
        $row = mysqli_fetch_array($query);
        return $row;
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
}

$obj = new Movimiento;


if(isset($_POST["submit"])){
    $hoy = date('Y-m-d');
    $myArray = array(
        "caja_id" => $_POST["n_idcaja"] ,
        "movc_saldinicio" => $_POST["n_saldoinicial"] ,
        "movc_saldfinal" => $_POST["n_saldofinal"] ,
        "movc_fecha" => $hoy
    );
    if($obj->insert_record("ven_mov_caja1",$myArray)){
        header("location:../../registrar_movimiento_caja.php?msg=Record Inserted");
    }

}

if(isset($_POST["edit"])){
    $id = $_POST["id"];
    $where = array("movc_id"=>$id);
    $myArray = array(
        "caja_id" => $_POST["n_idcaja"] ,
        "movc_saldinicio" => $_POST["n_saldoinicial"] ,
        "movc_saldfinal" => $_POST["n_saldofinal"] ,
    );
    if($obj->update_record("ven_mov_caja1",$where,$myArray)){
        header("location:../../registrar_movimiento_caja.php?msg=Record Updated Successfully");
    }

}

if(isset($_GET["delete"])){
    if (!empty($_GET["id"])) $id = $_GET["id"];
    else $id = null;
    //$id = $_GET["id"] ?? null;
    $where = array("movc_id"=>$id);
    if($obj->delete_record("ven_mov_caja1",$where)){
        header("location:../../registrar_movimiento_caja.php?msg=Record Deleted Successfully");
    }

}
?>