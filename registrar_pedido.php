<?php
include 'php/clases/pedido.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Limitless - Responsive Web Application Kit by Eugene Kopyov</title>

	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="assets/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
	<link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="assets/css/core.css" rel="stylesheet" type="text/css">
	<link href="assets/css/components.css" rel="stylesheet" type="text/css">
	<link href="assets/css/colors.css" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script type="text/javascript" src="assets/js/plugins/loaders/pace.min.js"></script>
	<script type="text/javascript" src="assets/js/core/libraries/jquery.min.js"></script>
	<script type="text/javascript" src="assets/js/core/libraries/bootstrap.min.js"></script>
	<script type="text/javascript" src="assets/js/plugins/loaders/blockui.min.js"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script type="text/javascript" src="assets/js/core/libraries/jquery_ui/interactions.min.js"></script>
	<script type="text/javascript" src="assets/js/plugins/forms/selects/select2.min.js"></script>
	<script type="text/javascript" src="assets/js/plugins/tables/datatables/datatables.min.js"></script>

	<script type="text/javascript" src="assets/js/core/app.js"></script>
	<script type="text/javascript" src="assets/js/pages/form_select2.js"></script>
	<script type="text/javascript" src="assets/js/pages/datatables_basic.js"></script>

	<script type="text/javascript" src="assets/js/plugins/ui/ripple.min.js"></script>


	<!-- /theme JS files -->

</head>

<body>

	<!-- Main navbar -->
	<div class="navbar navbar-default header-highlight">
		<div class="navbar-header">
			<a class="navbar-brand" href="index.html"><img src="assets/images/logo_light.png" alt=""></a>

			<ul class="nav navbar-nav visible-xs-block">
				<li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
				<li><a class="sidebar-mobile-main-toggle"><i class="icon-paragraph-justify3"></i></a></li>
			</ul>
		</div>

		<div class="navbar-collapse collapse" id="navbar-mobile">
			<ul class="nav navbar-nav">
				<li><a class="sidebar-control sidebar-main-toggle hidden-xs"><i class="icon-paragraph-justify3"></i></a></li>

				
			</ul>

			<div class="navbar-right">
				<!-- <p class="navbar-text">Morning, Victoria!</p> -->
				<p class="navbar-text"><span class="label bg-success">Online</span></p>
				
				
			</div>
		</div>
	</div>
	<!-- /main navbar -->


	<!-- Page container -->
	<div class="page-container">

		<!-- Page content -->
		<div class="page-content">

			<!-- Main sidebar -->
			<div class="sidebar sidebar-main">
				<div class="sidebar-content">

					<!-- User menu -->
					<div class="sidebar-user-material">
						<div class="category-content">
							<div class="sidebar-user-material-content">
								<a href="#"><img src="assets/images/placeholder.jpg" class="img-circle img-responsive" alt=""></a>
								<h6>Victoria Baker</h6>
								<span class="text-size-small">Santa Ana, CA</span>
							</div>
														
							<div class="sidebar-user-material-menu">
								<a href="#user-nav" data-toggle="collapse"><span>Mi Cuenta</span> <i class="caret"></i></a>
							</div>
						</div>
						
						<div class="navigation-wrapper collapse" id="user-nav">
							<ul class="navigation">
								<li><a href="#"><i class="icon-user-plus"></i> <span>Mi perfil</span></a></li>
								<li class="divider"></li>
								<li><a href="#"><i class="icon-cog5"></i> <span>Configurar cuenta</span></a></li>
								<li><a href="#"><i class="icon-switch2"></i> <span>Salir</span></a></li>
							</ul>
						</div>
					</div>
					<!-- /user menu -->


					<!-- Main navigation -->
					<div class="sidebar-category sidebar-category-visible">
						<div class="category-content no-padding">
							<ul class="navigation navigation-main navigation-accordion">
							
								<!-- Appearance -->
								<li class="navigation-header"><span>VENTA</span> <i class="icon-menu" title="Venta"></i></li>
								<li>
									<a href="#"><i class="icon-home4"></i> <span>Inicio</span></a>
									
								</li>
								<li>
									<a href="#"><i class="icon-puzzle2"></i> <span>Venta</span></a>
									<ul>
										<li class="active"><a href="registrar_pedido.php">Registrar Pedido</a></li>
                                        <li><a href="registrar_cliente.php">Registrar Cliente</a></li>
                                        <li><a href="registrar_moneda.php">Registrar Moneda</a></li>
										<li><a href="registrar_descuento.php">Registrar Descuento</a></li>
										<li><a href="registrar_descuento_catalogo.php">Registrar Descuento Catalogo</a></li>
										<li><a href="registrar_impuesto.php">Registrar Impuesto</a></li>
                                        <li><a href="registrar_precio.php">Registrar Precio</a></li>
                                        <li><a href="reporte_ventas.php">Reporte Ventas</a></li>
                                        <li><a href="registrar_caja.php">Registrar Caja</a></li>
										<li><a href="emitir_comprobante.php">Emitir Comprobante</a></li>
										<li><a href="autorizar_comprobante.php">Autorizar Comprobante</a></li>
										<li><a href="registrar_asignacion.php">Registrar Asignacion</a></li>
                                        <li><a href="registrar_movimiento_caja.php">Registrar Movimiento Caja</a></li>
                                        <li><a href="registrar_tipo_comprobante.php">Registrar Tipo Comprobante</a></li>
                                        <li><a href="registrar_tipo_pago.php">Registrar Tipo Pago</a></li>
                                        <li><a href="registrar_turno.php">Registrar Turno</a></li>
									</ul>
								</li>
								<!--
								<li>
									<a href="#"><i class="icon-thumbs-up2"></i> <span>Caja</span></a>
									<ul>
                                        
									</ul>
								</li>
                                -->
								<!-- /appearance -->


							</ul>
						</div>
					</div>
					<!-- /main navigation -->

				</div>
			</div>
			<!-- /main sidebar -->


			<!-- Main content -->
			<div class="content-wrapper">

				<!-- Page header -->
				<div class="page-header">
					<div class="page-header-content">
						<div class="page-title">
							<h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Venta</span> - Registrar Pedido</h4>
						</div>

						<!-- <div class="heading-elements">
							<div class="heading-btn-group">
								<a href="#" class="btn btn-link btn-float text-size-small has-text"><i class="icon-bars-alt text-primary"></i><span>Statistics</span></a>
								<a href="#" class="btn btn-link btn-float text-size-small has-text"><i class="icon-calculator text-primary"></i> <span>Invoices</span></a>
								<a href="#" class="btn btn-link btn-float text-size-small has-text"><i class="icon-calendar5 text-primary"></i> <span>Schedule</span></a>
							</div>
						</div> -->
					</div>

					<div class="breadcrumb-line breadcrumb-line-component">
						<ul class="breadcrumb">
							<li><a href="#"><i class="icon-home2 position-left"></i> Inicio</a></li>
							<li><a href="#">Venta</a></li>
							<li class="active">Registra Pedido</li>
						</ul>

						<!-- <ul class="breadcrumb-elements">
							<li><a href="#"><i class="icon-comment-discussion position-left"></i> Support</a></li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">
									<i class="icon-gear position-left"></i>
									Settings
									<span class="caret"></span>
								</a>

								<ul class="dropdown-menu dropdown-menu-right">
									<li><a href="#"><i class="icon-user-lock"></i> Account security</a></li>
									<li><a href="#"><i class="icon-statistics"></i> Analytics</a></li>
									<li><a href="#"><i class="icon-accessibility"></i> Accessibility</a></li>
									<li class="divider"></li>
									<li><a href="#"><i class="icon-gear"></i> All settings</a></li>
								</ul>
							</li>
						</ul> -->
					</div>
				</div>
				<!-- /page header -->


				<!-- Content area -->
				<div class="content">

					

					<div class="row">
						<div class="col-sm-12">
							<div class="panel panel-primary panel-bordered">
								<div class="panel-heading">
									<h6 class="panel-title">Registrar Pedido</h6>
									<div class="heading-elements">
										<ul class="icons-list">
					                		<li><a data-action="collapse"></a></li>
					                		<li><a data-action="reload"></a></li>
					                		<li><a data-action="close"></a></li>
					                	</ul>
				                	</div>
								</div>
								<div class="panel-body">
									<!-- Primary bordered panel using <code>.panel-bordered</code> class -->
								
									<div class="tabbable">
										<ul class="nav nav-tabs nav-tabs-highlight nav-justified">
											<li class="active"><a href="#justified-label-tab1" data-toggle="tab">Registrar</a></li>
										</ul>

										<div class="tab-content">
											<div class="tab-pane active" id="justified-label-tab1">
                                                <form action="php/clases/pedido.php" id="form_pedido" method="POST">
                                                    <fieldset>
                                                        <legend class="text-semibold">
                                                            <i class="icon-file-text2 position-left"></i>
                                                            Informacion de Pedido
                                                            <a class="control-arrow" data-toggle="collapse" data-target="#demo1" aria-expanded="true">
                                                                <i class="icon-circle-down2"></i>
                                                            </a>
                                                        </legend>

                                                        <div class="collapse in" id="demo1" aria-expanded="true">

                                                            <div class="row">
                                                                <div class="form-group col-sm-12">
                                                                    <label class="control-label ">Cliente:</label>
                                                                    <div class="input-group">
                                                                        <input type="hidden" class="form-control" id="idpersona" name="n_idpersona"> <!-- =============== -->
                                                                        <input type="text" id="nombre_persona" class="form-control">
                                                                        <span class="input-group-btn">
                                                                            <button type="button" class="btn bg-primary btn-labeled" data-toggle="modal" data-target="#modal_cliente"><b><i class="icon-search4"></i></b>Buscar</button>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <button type="button" class="btn bg-primary btn-block btn-labeled"  data-toggle="modal" data-target="#modal_producto"><b><i class="icon-add-to-list"></i></b> Agregar Productos</button>
                                                            <br>
                                                            <div class="table-responsive pre-scrollable table-bordered table-hover">
                                                                <table class="table" id="second_table">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>#</th>
                                                                            <th>Producto</th>
                                                                            <th>Categoria</th>
                                                                            <th>U. Medida</th>
                                                                            <th>Precio</th>
                                                                            <th>Cantidad</th>
                                                                            <th>SubTotal</th>
                                                                            <th>Descuento</th>
                                                                            <th>Accion</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>


                                                                    </tbody>
                                                                </table>
                                                            </div>

                                                            <br>

                                                            <div class="row">
                                                                <div class="form-group col-sm-4">
                                                                    <label class="control-label ">Total:</label>
                                                                    <input type="text" readonly id="idtotal" name="n_total" class="form-control">
                                                                </div>

                                                            </div>
                                                            <button type="submit" name="submit" class="btn bg-primary btn-labeled"><b><i class="icon-add-to-list"></i></b> Registrar</button>

                                                        </div>
                                                    </fieldset>
                                                </form>
											</div>


											<!-- ====================================================================================================================================== -->





										</div>
									</div>
								
									
									
								</div>
							</div>
						</div>
					</div>
					<!-- /bordered panels -->
					<!-- Footer -->
					<div class="footer text-muted">
						<!-- &copy; 2015. <a href="#">Limitless Web App Kit</a> by <a href="http://themeforest.net/user/Kopyov" target="_blank">Eugene Kopyov</a> -->
					</div>
					<!-- /footer -->
				</div>
				<!-- /content area -->

			</div>
			<!-- /main content -->

		</div>
		<!-- /page content -->

	</div>
	<!-- /page container -->
	<!-- Large modal -->
			<div id="modal_cliente" class="modal fade">
				<div class="modal-dialog modal-full">
					<div class="modal-content">
						<div class="modal-header bg-primary">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							<h5 class="modal-title">Lista Cliente</h5>
						</div>

						<div class="modal-body">
							<table class="table datatable-basic table-bordered tabla-cliente">
								<thead>
									<tr>
										<th>#</th>
										<th>Documento</th>
										<th>Persona</th>
										<th>Direccion</th>
										<th>Telefono</th>
										<th>Email</th>
										<th>Accion</th>
									</tr>
								</thead>
								<tbody>
									<?php
									$clientes = $obj->listar_cliente("glb_persona");
									foreach ($clientes as $row) {
										//breaking point
										?>
									<tr>
										<td><?php echo $row["perso_id"]; ?></td>
										<td><?php echo $row["perso_numdoc"]; ?></td>
										<td><?php echo $row["perso_nom"]." ".$row["perso_app"]." ".$row["perso_apm"]; ?></td>
										<td><?php echo $row["perso_direc"]; ?></td>
										<td><?php echo $row["perso_nutlfn"]; ?></td>
										<td><?php echo $row["perso_email"]; ?></td>
										<td>
											<button class="btn btn-seleccionar-pedido btn-sm btn-info btn-labeled">
												<b><i class="icon-add"></i></b>
												Agregar
											</button>
										</td>
									</tr>
									<?php
										}
									?>
								</tbody>
							</table>
						</div>

						<div class="modal-footer">
							<button type="button" class="btn btn-link" data-dismiss="modal">Cerrar</button>
						</div>
					</div>
				</div>
			</div>
			<!-- /large modal -->
			<!-- Large modal -->
			<div id="modal_producto" class="modal fade">
				<div class="modal-dialog modal-full">
					<div class="modal-content">
						<div class="modal-header bg-primary">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							<h5 class="modal-title">Lista Producto</h5>
						</div>
						<div class="modal-body">
						
							<table class="table datatable-basic table-bordered tabla-producto">
								<thead>
									<tr>
										<th>#</th>
										<th>Producto</th>
										<th>Categoria</th>
										<th>U. Medida</th>
										<th>Precio</th>
										<th>Cantidad</th>
                                        <th>Precio por mayor</th>
                                        <th>Descuento</th>
										<th>Accion</th>
									</tr>
								</thead>
								<tbody>
								<?php
									$productos = $obj->listar_producto();
									foreach ($productos as $row) {
										//breaking point
										?>
									<tr>
										<td><?php echo $row["prod_id"]; ?></td>
										<td><?php echo $row["prod_Nom"]; ?></td>
										<td><?php echo $row["cate_desc"]; ?></td>
										<td><?php echo $row["prod_umed"]; ?></td>
										<td><?php echo $row["pre_Precioxunidad"]; ?></td>
										<td><?php echo $row["prod_cant"]; ?></td>
                                        <td><?php echo $row["pre_Precioxmayor"]; ?></td>
                                        <td><?php echo $row[0]; ?></td>
										<td>
											<button class="btn btn-seleccionar-pedido btn-sm btn-info btn-labeled">
												<b><i class="icon-add"></i></b>
												Agregar
											</button>
										</td>
									</tr>
									<?php
										}
									?>
								</tbody>
							</table>
						</div>


						<div class="modal-footer">
							<button type="button" class="btn btn-link" data-dismiss="modal">Cerrar</button>
						</div>
					</div>
				</div>
			</div>
			<!-- /large modal -->
<script>
$(".tabla-producto").on("click",".btn-seleccionar-pedido",function(){
	var column1 = $(this).closest('tr').children()[0].textContent;
	var column2 = $(this).closest('tr').children()[1].textContent;
	var column3 = $(this).closest('tr').children()[2].textContent;
	var column4 = $(this).closest('tr').children()[3].textContent;
	var column5 = $(this).closest('tr').children()[4].textContent;
	var column7 = $(this).closest('tr').children()[6].textContent;
	var column8 = $(this).closest('tr').children()[7].textContent;
	
	 if($("#second_table .copy_"+column1).length == 0)
	{
		$("#second_table").append("<tr class='copy_"+column1+
                                  "'><td><input type='hidden' name='n_producto[]' value='"+column1+"'>" + column1 +
                                  "</td><td>" + column2 +
                                  "</td><td>" + column3 +
                                  "</td><td>" + column4 +
                                  "</td><td>" + column5 +
                                  "</td><td><input type='number' style='padding-left:10px;' class='form-control txt-entrada entrada' min='0' value='0' name='n_cantidad[]'>"+
                                  "</td><td class='subtotal'>0"+
                                  "</td>"+
                                  "<td><input type='hidden' class='pxmayor' value='"+column7+"'>"+
                                  "<input type='hidden' class='pxunidad' value='"+column5+"'>"+
                                  "<input type='hidden' class='stotal' name='n_subtotal[]'>"+
                                  "<input type='hidden' name='n_descuento[]' class='mdescuento' value='"+column8+"'>"+column8+"</td>"+
                                  "<td><button class='btn btn btn-sm btn-danger btn-labeled btn_remove'><b><i class='icon-trash'></i></b>Eliminar</button></td>"+
                                  "</tr>");
	}
});

$("#second_table").on("input", "input", function() {
  	var input = $(this);
    
    
  	var columns = input.closest("tr").children();
    var pmayor = $(".pxmayor",$(this).parent().parent()).val();
  	var pxunidad = $(".pxunidad",$(this).parent().parent()).val();
    var mdescuento = $(".mdescuento",$(this).parent().parent()).val();
    var stotal = $(".stotal",$(this).parent().parent()).val();
    if(input.val()>=12){
        //var pmayor = $(".pxmayor",$(this).parent().parent()).val();
        columns.eq(4).text(pmayor);
        var price = columns.eq(4).text();
                
        var calculated = input.val() * price;
        
        var descuento = calculated*(mdescuento/100);
        var totaldescuento = calculated - descuento;
        if(totaldescuento<0){
            totaldescuento = 0;
        }
        
        columns.eq(6).text(totaldescuento.toFixed(2));
        $(".stotal",$(this).parent().parent()).val(totaldescuento.toFixed(2));
        sumar_columnas();
        calcular_igv();
        sumar_total();
    }else{
        //var pxunidad = $(".pxunidad",$(this).parent().parent()).val();
        columns.eq(4).text(pxunidad);
        var price = columns.eq(4).text();
        
        var calculated = input.val() * price;
        
        var descuento = (calculated*(mdescuento/100));
        var totaldescuento = calculated - descuento;
        if(totaldescuento<0){
            totaldescuento = 0;
        }
        
        columns.eq(6).text(totaldescuento.toFixed(2));
        $(".stotal",$(this).parent().parent()).val(totaldescuento.toFixed(2));
        sumar_columnas();
        calcular_igv();
        sumar_total();
    }
  	
});

// $("body").on("click",".btn_remove", function() {
//     $(this).parent().parent().remove();
// });

 $("body").on("click",".btn_remove", function() {
	var c_subtotal = $(this).closest('tr').children()[6].textContent;
	var subtotal = $('#idsubtotal').val();
	var total = subtotal - c_subtotal;

	$('#idsubtotal').val(parseFloat(total).toFixed(2));
	sumar_total();
	$(this).parent().parent().remove();

});


function sumar_columnas(){
var suma=0;
//iterate through each input and add to suma
	$('.subtotal').each(function() {     
		var c_subtotal=$(this).text();
			suma=parseFloat(suma)+parseFloat($(this).text());               
	}); 
	//change value of total
	$('#idtotal').val(parseFloat(suma).toFixed(2));
}

// $(document).on('submit', '#register-venta', function() {
// 	$(".txt-entrada").each(function() {
// 		var valorcin = $( this ).val();
// 		var c_name = $(this).closest('tr').children()[1].textContent;
// 		if (valorcin==0) 
// 		{
// 			alert("Ingrese una cantidad para los productos seleccionados: "+c_name);
// 		}
// 	});
// });
$('#form_pedido').on('submit', function(e){
    $(".txt-entrada").each(function() {
		var valorcin = $( this ).val();
		var c_name = $(this).closest('tr').children()[1].textContent;
		if (valorcin==0) 
		{
			e.preventDefault();
			alert("Ingrese una cantidad para los productos seleccionados: "+c_name);
		}
	});
});

$(".tabla-cliente").on("click",".btn-seleccionar-pedido",function(){
	var column1 = $(this).closest('tr').children()[0].textContent;
	var column2 = $(this).closest('tr').children()[1].textContent;
	var column3 = $(this).closest('tr').children()[2].textContent;
	var column4 = $(this).closest('tr').children()[3].textContent;
	var column5 = $(this).closest('tr').children()[4].textContent;
	// alert(column1);
	$("#idpersona").val(column1);
	$("#nombre_persona").val(column3);
	
});

</script>
    
<script src="assets/js/correctortabla.js"></script>

</body>
</html>
