<?php
include "db.php";
/**
 * Created by PhpStorm.
 * User: Christian
 * Date: 14/07/2017
 * Time: 12:55
 */
class Emitir_Comprobante extends Database
{
    public function insert_record($table,$fileds){
        //"INSERT INTO table_name (, , ) VALUES ('m_name','qty')";
        $sql = "";
        $sql .= "INSERT INTO ".$table;
        $sql .= " (".implode(",", array_keys($fileds)).") VALUES ";
        $sql .= "('".implode("','", array_values($fileds))."')";
        if (mysqli_query($this->con, $sql)) {
            $last_id = mysqli_insert_id($this->con);
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($this->con);
        }

        return $last_id;
    }

    public function insertar_detalle($mi,$idcomprobante){
        foreach ( $mi as $value ) {
            list($arreglo01, $arreglo02, $arreglo03, $arreglo04, $arreglo05) = $value;
            $sql="INSERT INTO ven_detalle_comprobante1 (
            comp_id,
            prod_id,
            detcomp_cantidad,
            detcomp_descuento,
            detcomp_precunidad,
            detcomp_precmayor) VALUES (
            '$idcomprobante',
            '$arreglo01',
            '$arreglo02', 
            '$arreglo03',
            '$arreglo04',
            '$arreglo05')";
            $query = mysqli_query($this->con,$sql);
            if ($query) {
                $resp=true;
            } else {
                $resp=false;
                echo "Error: " . $sql . "<br>" . mysqli_error($this->con);
            }
        }
        return $resp;
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

    public function listar_pedido($table,$where){
        $sql = "";
        $condition = "";
        foreach ($where as $key => $value) {
            // id = '5' AND m_name = 'something'
            $condition .= $key . "='" . $value . "' AND ";
        }
        $condition = substr($condition, 0, -5);
        $sql .= "SELECT ped_id, ven_detalle_pedido1.`prod_id` AS 'prod_id', prod_Nom, detp_cantidad, detp_descuento, pre_Precioxmayor, pre_Precioxunidad
                FROM ".$table."
                INNER JOIN ven_precio
                ON ven_detalle_pedido1.`prod_id` = ven_precio.`prod_id`
                INNER JOIN glb_producto
                ON ven_detalle_pedido1.`prod_id` = glb_producto.`prod_id` WHERE ".$condition;
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
        $sql .= "SELECT vp.ped_id, perso_id, ped_fecregistro, ped_total, ped_estado, SUM(detp_descuento) AS 'TotalDescuento'
                FROM ".$table." vp INNER JOIN ven_detalle_pedido1 vdp ON vp.`ped_id` = vdp.`ped_id`
                WHERE vp.".$condition;
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

}

$obj = new Emitir_Comprobante;

if(isset($_POST["submit"])){

    /*$result = $_POST['car'];
    $result_explode = explode('|', $result);
    echo "Model: ". $result_explode[0]."<br />";
    echo "Colour: ". $result_explode[1]."<br />";*/

    $idcaja = 1;
    $estado = 0;
    $hoy = date('Y-m-d');
    $miArreglo = array(
        "caja_id" => $idcaja ,
        "ped_id" => $_POST["id"],
        "tipo_idcomp" => $_POST["n_tipocomprobante"] ,
        "comp_serie" => $_POST["n_serie"] ,
        "comp_correlativo" => $_POST["n_correlativo"] ,
        "tipg_id" => $_POST["n_tipopago"] ,
        "mon_id" => $_POST["n_moneda"] ,
        "comp_totalped" => $_POST["n_total"] ,
        "imp_id" => $_POST["n_impuesto"] ,
        "comp_totaldesc" => $_POST["n_totaldescuento"] ,
        "comp_descripcion" => $_POST["n_descripcion"] ,
        "comp_totalpago" => $_POST["n_totalpago"] ,
        "comp_estado" => $estado ,
        "comp_fecregistro" => $hoy
    );

    $arrayproducto = $_POST["n_idproducto"];
    $arraycantidad = $_POST["n_cantidad"];
    $arraydescuento = $_POST["n_descuento"];
    $arrayunidad = $_POST["n_precioxunidad"];
    $arraymayor = $_POST["n_precioxmayor"];

    $mi = new MultipleIterator();
    $mi->attachIterator(new ArrayIterator($arrayproducto));
    $mi->attachIterator(new ArrayIterator($arraycantidad));
    $mi->attachIterator(new ArrayIterator($arraydescuento));
    $mi->attachIterator(new ArrayIterator($arrayunidad));
    $mi->attachIterator(new ArrayIterator($arraymayor));

    $idcomprobante = $obj->insert_record("ven_comprobante1",$miArreglo);
    if($idcomprobante!=0){
        if($obj->insertar_detalle($mi,$idcomprobante)){
            header("location:../../emitir_comprobante.php?msg=Record Inserted");
        }
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
    if($obj->update_record("ven_comprobante1",$where,$myArray)){
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