<?php 
include('conexion.php');
	
	// $tipo_venta=$_POST['ntipoventa'];
	// ============================================== VENTA ==========
	$id_cliente=$_POST['n_idpersona'];
	$id_usuario=$_POST['nid_usuario']; // ==================== TRABAJAR CON SESION
    $igv = $_POST["n_igv"];
    $subtotal = $_POST["n_subtotal"];
    $total = $_POST["n_total"];

	date_default_timezone_set("America/Lima");
	$fecha_registro = date('Y-m-d h:i:s');


	$re_bol=false;


	$arrayproducto=$_POST['n_producto'];
	$arraycantidad=$_POST['n_cantidad'];
	$arrayprecio = $_POST['n_precio'];

// =============================================================================================================================================

	$mi = new MultipleIterator();
	$mi->attachIterator(new ArrayIterator($arrayproducto));
	$mi->attachIterator(new ArrayIterator($arraycantidad));
	$mi->attachIterator(new ArrayIterator($arrayprecio));

// =============================================================================================================================================



	$combinar=array_combine($arrayproducto, $arraycantidad);
    
	foreach($combinar as $producto=>$cantidad){


		$sql="SELECT * FROM tbl_producto WHERE prod_id = '$producto'";


        $validar = $conn->query($sql);
        if ($validar->num_rows > 0){
            while ($row = $validar->fetch_array()) {
                if ($cantidad>$row["prod_stock"]) {
                    // $acumulador=$acumulador+1;
                    $re_bol=true;
                    // echo"Producto aceptado";
                }
                // else{
                //     echo"La venta excede el limite del producto: ".$row["prod_nom"].", verifique nuevamente stock: ".$row["prod_stock"]." escoger: ".$cantidad;
                // }
            }
        }
	}

    if($re_bol==true){
        echo "ERROR";
    }
    if($re_bol==false){
        echo "OK";

	$sql2="INSERT INTO tbl_venta (cli_id, usu_id, ven_fecha_emision, ven_igv, ven_subtotal, ven_total) VALUES ('$id_cliente', '$id_usuario', '$fecha_registro', '$igv', '$subtotal', '$totaltotal')";
	if ($conn->query($sql2) === TRUE) {
    $last_id = $conn->insert_id;
    // echo "Venta registrada";
    }
    $sql4="INSERT INTO tbl_comprobante(ven_id, comprobante_nombre) VALUES ('$last_id','$tipo_comprobante')";
    if ($conn->query($sql4) === TRUE) {
    	$comprobante = "Comprobate registrado";
    }
	// ============================================= DETALLE VENTA ===========
	$contador=0;
// ========================================== INSERTAMOS LOS PRODUCTOS SOLICITADOS Y LA CANTIDAD POR CADA PRODUCTO ======================================================
	// foreach($combinar as $producto=>$cantidad){
	foreach ( $mi as $value ) {
	    list($arreglo01, $arreglo02, $arreglo03) = $value;

		$contador+=1;
		$sql="INSERT INTO tbl_detalle_venta (ven_id, item, prod_id, prod_precio, cantidad) VALUES ('$last_id','$contador','$arreglo01','$arreglo03', '$arreglo02')";
		if ($conn->query($sql) === TRUE) {
        		$mensaje = "Producto actualizado con exito";
		} 
		$sql3="SELECT * FROM tbl_producto WHERE prod_id='$arreglo01'";
	            		$result3=$conn->query($sql3);
	            		          if ($result3->num_rows > 0) {
				          // output data of each row
				                  while($row3 = $result3->fetch_assoc()) {
				                  	$stock_actual=$row3["prod_stock"];
				                  	$suma=$stock_actual-$arreglo02;
				                  	$actualizar="UPDATE tbl_producto SET prod_stock='$suma' WHERE prod_id='$arreglo01'";
				                  	if ($conn->query($actualizar) === TRUE) {
                  					$mensaje = "Producto actualizado con exito";
				                  	}
				                  }
				              }
	}
    }
$conn->close();
?>