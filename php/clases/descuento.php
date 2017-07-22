<?php
include'db.php';
class Descuento extends Database
{

    // public function listar_producto($table){
	// 	$sql = "SELECT prod_id, prod_Nom, prod_umed, prod_nrsa, prod_prvt, prod_cant, prod_est, cate_desc, marca_desc, lote_desc
    //             FROM ".$table." INNER JOIN alm_categoria 
    //                 ON glb_producto.cate_id = alm_categoria.cate_id
    //             INNER JOIN alm_tipo_producto
    //                 ON glb_producto.tppro_id = alm_tipo_producto.tppro_id
    //             INNER JOIN alm_marca
    //                 ON glb_producto.marca_id = alm_marca.marca_id
    //             INNER JOIN alm_lote
    //                 ON glb_producto.lote_id = alm_lote.lote_id";
	// 	$array = array();
	// 	$query = mysqli_query($this->con,$sql);
	// 	while($row = mysqli_fetch_assoc($query)){
	// 		$array[] = $row;
	// 	}
	// 	return $array;
	// }
//    public function listar_categoria(){
//        $sql = "SELECT * FROM alm_categoria";
//		$query = mysqli_query($this->con,$sql);
//		while($row = mysqli_fetch_assoc($query)){
//			echo "<tr>
//            <td>".$row["cate_id"]."</td>
//            <td>".$row["cate_desc"]."</td>
//            <td>
//                <button class='btn btn-seleccionar-categoria btn-sm btn-info btn-labeled'>
//                    <b><i class='icon-add'></i></b>
//                    Agregar
//                </button>
//            </td>
//            </tr>";
//		}
//    }
    // public function listar_categoria($table){
    //     $sql = "SELECT * FROM ".$table;
	// 	$array = array();
	// 	$query = mysqli_query($this->con,$sql);
	// 	while($row = mysqli_fetch_assoc($query)){
	// 		$array[] = $row;
	// 	}
	// 	return $array;
    // }
    
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
    
    public function listar_producto($table){
		$sql = "SELECT * FROM ".$table;
		$array = array();
		$query = mysqli_query($this->con,$sql);
		while($row = mysqli_fetch_assoc($query)){
			$array[] = $row;
		}
		return $array;
	}
    
    public function listar_categoria($table){
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
        $idelemento=$row["desc_elemento"];
        if($row["desc_segun"]=="PRODUCTO"){
            echo "<script>alert('Segun descuento es producto')</script>";
            $sql2="SELECT * FROM glb_producto WHERE prod_id='".$idelemento."'";
            $query2 = mysqli_query($this->con,$sql2);
            $row2 = mysqli_fetch_array($query2);
            $desc = $row2["prod_Nom"];
            echo "<script>alert('Segun es ".$desc."')</script>";
            $resultado = array_merge($row,$row2);
        }else{
            echo "<script>alert('Segun descuento es categoria')</script>";
            $sql3="SELECT * FROM alm_categoria WHERE cate_id='".$idelemento."'";
            $query3 = mysqli_query($this->con,$sql3);
            $row3 = mysqli_fetch_array($query3);
            $desc = $row3["cate_desc"];
            echo "<script>alert('Segun es ".$desc."')</script>";
            $resultado = array_merge($row,$row3);
        }
        
        return $resultado;
		
//		while($row = mysqli_fetch_assoc($query)){
//			$array[] = $row;
//            $id = $row["desc_elemento"];
//            $segun = $row["desc_segun"];
//            if($row["desc_segun"]=="PRODUCTO"){
//                $sql2 = "SELECT prod_Nom FROM glb_producto
//                        WHERE prod_id='".$id."'";
//                $array2 = array();
//                $query2 = mysqli_query($this->con,$sql2);
//                while($row2 = mysqli_fetch_assoc($query2)){
//                    $array2[] = $row2;
//                }
//                
//            }elseif($row["desc_segun"]=="CATEGORIA"){
//                $sql3 = "SELECT cate_desc FROM alm_categoria
//                        WHERE cate_id='".$id."";
//                $array3 = array();
//                $query3 = mysqli_query($this->con,$sql3);
//                while($row3 = mysqli_fetch_assoc($query3)){
//                    $array3[] = $row3;
//                }
//            }
//		}
//        if($segun == "PRODUCTO"){
//            $final = array_merge($array,$array2);
//        }elseif($segun == "CATEGORIA"){
//            $final = array_merge($array,$array3);
//        }
//        
//        
//		return $final;

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

$obj = new Descuento;
//if(isset($_GET["show"])){
//  $respuesta = $_GET["show"];
//    if($respuesta == 1){
        // $desc->listar_producto();
//      $desc->listar_categoria();
//    }
    // elseif($respuesta == 2){
    //     $desc->listar_categoria();
    // }
    
//}
// $obj = new Descuento;
if(isset($_POST["submit"])){
    $hoy = date('Y-m-d');
	$myArray = array(
		"desc_nombre" => $_POST["n_descripcion"] ,
        "desc_segun" => $_POST["n_tipo"] ,
        "desc_elemento" => $_POST["prod_seleccionado"] ,
        "desc_porcentaje" => $_POST["n_porcentaje"] ,
        "desc_fecinicio" => date("Y-m-d", strtotime($_POST["n_fecinicio"])) ,
        "desc_fecfinal" => date("Y-m-d", strtotime($_POST["n_fecfinal"])) ,
        "desc_fecregistro" => $hoy 
		);
	if($obj->insert_record("ven_descuento",$myArray)){
		header("location:../../registrar_descuento.php?msg=Record Inserted");
	}
	
}

if(isset($_POST["edit"])){
	$id = $_POST["id"];
	$where = array("desc_id"=>$id);
	$myArray = array(
		"desc_nombre" => $_POST["n_descripcion"] ,
        "desc_segun" => $_POST["n_tipo"] ,
        "desc_elemento" => $_POST["prod_seleccionado"] ,
        "desc_porcentaje" => $_POST["n_porcentaje"] ,
        "desc_fecinicio" => date("Y-m-d", strtotime($_POST["n_fecinicio"])) ,
        "desc_fecfinal" => date("Y-m-d", strtotime($_POST["n_fecfinal"])) 
		);
	if($obj->update_record("ven_descuento",$where,$myArray)){
		header("location:../../registrar_descuento.php?msg=Record Updated Successfully");
	}
	
}

if(isset($_GET["delete"])){
    if (!empty($_GET["id"])) $id = $_GET["id"];
    else $id = null;
	//$id = $_GET["id"] ?? null;
	$where = array("desc_id"=>$id);
	if($obj->delete_record("ven_descuento",$where)){
		header("location:../../registrar_descuento.php?msg=Record Deleted Successfully");
	}
	
}
?>