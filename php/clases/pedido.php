<?php
include'db.php';
class Pedido extends Database{
    // USAR ESTO CON AJAX ==========================================
    // public function listar_productos(){
    //     $sql = "SELECT * FROM ".$table;
	// 	$array = array();
	// 	$query = mysqli_query($this->con,$sql);
	// 	while($row = mysqli_fetch_assoc($query)){
	// 		$array[] = $row;
	// 	}
	// 	return json_encode($array);
    // }
    public function insert_record($mi,$pedido){
        foreach ( $mi as $value ) {
            list($arreglo01, $arreglo02, $arreglo03) = $value;
            $sql="INSERT INTO ven_detalle_pedido1 (
            ped_id,
            prod_id,
            detp_cantidad,
            detp_descuento) VALUES (
            '$pedido',
            '$arreglo01',
            '$arreglo02', 
            '$arreglo03')";
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

    public function insertar_pedido($table,$fileds){
        //"INSERT INTO table_name (, , ) VALUES ('m_name','qty')";
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

    public function validar_pedido($combinar){
        foreach($combinar as $producto=>$cantidad){
            $sql="SELECT * FROM glb_producto WHERE prod_id = '$producto'";
            $query = mysqli_query($this->con,$sql);
            while($row = mysqli_fetch_assoc($query)){
                $nombre_producto = $row["prod_Nom"];
                if ($cantidad<=$row["prod_cant"]) {
                    $re_bol=true;
                }else{
                    $re_bol=false;
                    echo "<script>alert('La cantidad solicitada no puede ser procesada, por que excede la cantidad del stock: ".$nombre_producto."');</script>";
                }
            }
            
        }
        return $re_bol;
    }

    public function listar_cliente($table){
		$sql = "SELECT * FROM ".$table;
		$array = array();
		$query = mysqli_query($this->con,$sql);
		while($row = mysqli_fetch_assoc($query)){
			$array[] = $row;
		}
		return $array;
	}
    public function listar_producto(){
		// Creo la consulta para mostrar todos los productos.
        $sql = "SELECT glb_producto.prod_id AS 'prod_id', prod_Nom, prod_umed, prod_nrsa, prod_cant, prod_est,glb_producto.`cate_id` AS 'cate_id',cate_desc, pre_Precioxmayor, pre_Precioxunidad
                FROM glb_producto
                INNER JOIN ven_precio
                ON glb_producto.`prod_id` = ven_precio.`prod_id`
                INNER JOIN alm_categoria
                ON glb_producto.`cate_id` = alm_categoria.`cate_id`";
		// Creo 3 arreglos
		$array = array();   
        $array2 = array();
        $array3 = array();
        $array4 = array();
		// Ejecuto mi consulta
		$query = mysqli_query($this->con,$sql);
		// Y evaluo fila por fila los valores mostrados por la consulta
		while($row = mysqli_fetch_assoc($query)){
			// Selecciono los id de producto y categoria de la consulta
            $idproducto = $row["prod_id"];
            $idcategoria = $row["cate_id"];
			//Realizo otra consulta hacia mi tabla Descuento
            $sql2= "SELECT desc_id,desc_nombre,desc_segun,desc_elemento,desc_fecinicio,desc_fecfinal, SUM(desc_porcentaje) AS 'total_descuento'
                    FROM `ven_descuento` WHERE desc_fecfinal > DATE(NOW()) AND desc_fecinicio <= DATE(NOW())
                    GROUP BY desc_elemento, desc_segun";
			// Ejecuto la consulta
            $query2 = mysqli_query($this->con,$sql2);
            while($row2 = mysqli_fetch_assoc($query2)){
				// Y evaluo nuevamente los valores, fila por fila
				// Bajo la condicion de que si el valor de la fila desc_segun, sea igual a CATEGORIA o PRODUCTO, y el valor desc_elemento sea igual
				// a las id de categoria y producto, se procedera a almacenar esos valores en otro array
                if(($row2["desc_segun"]=="CATEGORIA" && $row2["desc_elemento"]==$idcategoria) || ($row2["desc_segun"]=="PRODUCTO" && $row2["desc_elemento"]==$idproducto) ){
                    $array2[] = $row2["total_descuento"];
                }
                else{
                    $array2[]=0;
                }
            }
            $valor = array_sum($array2);
            array_push($row,$valor);
            $array[] = $row;
            unset($array2);
		}
		return $array;
    }

//    public function listar_producto($table){
//		$sql = "SELECT prod_id, prod_Nom, prod_umed, prod_nrsa, prod_prvt, prod_cant, prod_est, cate_desc, marca_desc, lote_desc
//                FROM ".$table." INNER JOIN alm_categoria 
//                    ON glb_producto.cate_id = alm_categoria.cate_id
//                INNER JOIN alm_tipo_producto
//                    ON glb_producto.tppro_id = alm_tipo_producto.tppro_id
//                INNER JOIN alm_marca
//                    ON glb_producto.marca_id = alm_marca.marca_id
//                INNER JOIN alm_lote
//                    ON glb_producto.lote_id = alm_lote.lote_id";
//		$array = array();
//		$query = mysqli_query($this->con,$sql);
//		while($row = mysqli_fetch_assoc($query)){
//			$array[] = $row;
//		}
//		return $array;
//	}
}

$obj = new Pedido;
if(isset($_POST["submit"])){
    $hoy = date('Y-m-d');
    $estado = 1;
    $arrayproducto=$_POST['n_producto'];
    $arraycantidad=$_POST['n_cantidad'];
    $arraydescuento=$_POST['n_descuento'];

    $miArreglo = array(
        "perso_id" => $_POST["n_idpersona"] ,
        "ped_fecregistro" => $hoy ,
        "ped_total" => $_POST["n_total"],
        "ped_estado" => $estado

    );


    $mi = new MultipleIterator();
    $mi->attachIterator(new ArrayIterator($arrayproducto));
    $mi->attachIterator(new ArrayIterator($arraycantidad));
    $mi->attachIterator(new ArrayIterator($arraydescuento));

    $combinar=array_combine($arrayproducto, $arraycantidad);

    if($obj->validar_pedido($combinar)){

        $pedido = $obj->insertar_pedido("ven_pedido1",$miArreglo);
        if($pedido!=0)
        {
            if($obj->insert_record($mi,$pedido)){
                header("location:../../registrar_pedido.php?msg=Record Inserted");
            }

        }
    }


}
?>