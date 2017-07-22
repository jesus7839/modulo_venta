<?php
include 'php/clases/descuento_catalogo.php';
?>
<!DOCTYPE html>
<html lang="en">
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
	<script type="text/javascript" src="assets/js/plugins/forms/styling/uniform.min.js"></script>
	<script type="text/javascript" src="assets/js/plugins/forms/styling/switchery.min.js"></script>
	<script type="text/javascript" src="assets/js/plugins/forms/inputs/touchspin.min.js"></script>

	<script type="text/javascript" src="assets/js/plugins/forms/selects/select2.min.js"></script>
	<script type="text/javascript" src="assets/js/plugins/forms/styling/uniform.min.js"></script>

	<script type="text/javascript" src="assets/js/core/app.js"></script>
	<script type="text/javascript" src="assets/js/pages/form_layouts.js"></script>
	<script type="text/javascript" src="assets/js/pages/form_input_groups.js"></script>

	<script type="text/javascript" src="assets/js/plugins/ui/ripple.min.js"></script>

	<script type="text/javascript" src="assets/js/plugins/notifications/jgrowl.min.js"></script>
	<script type="text/javascript" src="assets/js/plugins/ui/moment/moment.min.js"></script>
	<script type="text/javascript" src="assets/js/plugins/pickers/daterangepicker.js"></script>
	<script type="text/javascript" src="assets/js/plugins/pickers/anytime.min.js"></script>
	<script type="text/javascript" src="assets/js/plugins/pickers/pickadate/picker.js"></script>
	<script type="text/javascript" src="assets/js/plugins/pickers/pickadate/picker.date.js"></script>
	<script type="text/javascript" src="assets/js/plugins/pickers/pickadate/picker.time.js"></script>
	<script type="text/javascript" src="assets/js/plugins/pickers/pickadate/legacy.js"></script>

	<script type="text/javascript" src="assets/js/pages/picker_date.js"></script>




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
							<h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Venta</span> - Registrar Descuento Catalogo</h4>
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
							<li class="active">Registra Descuento Catalogo</li>
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
									<h6 class="panel-title">Registrar Descuento Catalogo</h6>
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
											<li><a href="#justified-label-tab2" data-toggle="tab">Listar</a></li>
										</ul>

										<div class="tab-content">
											<div class="tab-pane active" id="justified-label-tab1">
												<fieldset>
													<legend class="text-semibold">
														<i class="icon-file-text2 position-left"></i>
														Informacion de Descuento
														<a class="control-arrow" data-toggle="collapse" data-target="#demo1" aria-expanded="true">
															<i class="icon-circle-down2"></i>
														</a>
													</legend>

													<div class="collapse in" id="demo1" aria-expanded="true">
                                                        <?php
                                                            if(isset($_GET["update"])){
                                                                //php 7
                                                                if (!empty($_GET["id"])) $id = $_GET["id"];
                                                                else $id = null;
                                                                //$id = $_GET["id"] ?? null;
                                                                $where = array("tipo_idcomp"=>$id,);
                                                                $row = $obj->select_record("ven_tipo_comprobante",$where);
                                                        ?>
                                                                                                                
                                                        <form method="POST" action="php/clases/tipo_comprobante.php" id="form_tipo_comprobante">
                                                            <div class="row">
                                                                <div class="form-group col-sm-12">
                                                                    <label>Ingresar Descripcion:</label>
                                                                    <input type="text" class="form-control" value="<?php echo $row["tipg_Descripcion"]; ?>" name="n_descripcion">
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="form-group col-sm-6">
                                                                    <label>Ingresar numero:</label>
                                                                    <input type="text" class="form-control" value="<?php echo $row["tipg_Cuotas"]; ?>" name="n_numero">
                                                                </div>
                                                            </div>

                                                            <button type="submit" name="edit" id="btn_registrar" class="btn bg-primary btn-labeled"><b><i class="icon-add-to-list"></i></b> Registrar</button>
                                                        </form>
                                                        <?php
                                                            }else{
                                                        ?>
                                                        <form method="POST" action="php/clases/descuento_catalogo.php" id="form_tipo_comprobante">
                                                            <div class="row">
                                                                <div class="form-group col-sm-12">
                                                                    <label class="control-label ">Seleccionar Producto:</label>
                                                                    <div class="input-group">
                                                                        <input type="hidden" id="idproducto" name="n_idproducto"> 
                                                                        <input type="text" class="form-control" id="idnombreprod" placeholder="Nombre de Producto">
                                                                        <span class="input-group-btn">
                                                                            <button class="btn bg-teal" data-toggle="modal" data-target="#modal_producto" type="button">Seleccionar</button>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="form-group col-sm-12">
                                                                    <label class="control-label ">Descripcion:</label>
                                                                    <input type="text" class="form-control">
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="form-group col-sm-6">
                                                                    <label class="control-label ">Descuento:</label>
                                                                    <input type="text" class="form-control">
                                                                </div>
                                                                <div class="form-group col-sm-6">
                                                                    <label class="control-label ">Monto:</label>
                                                                    <input type="text" class="form-control">
                                                                </div>
                                                            </div>


                                                            <div class="row">

                                                                <div class="form-group col-sm-6">
                                                                <label class="control-label ">Seleccionar fecha Inicio:</label>
                                                                    <!-- <div class="content-group-lg"> -->
                                                                        <div class="input-group">
                                                                            <span class="input-group-addon"><i class="icon-calendar5"></i></span>
                                                                            <input type="text" class="form-control pickadate-accessibility">
                                                                        </div>
                                                                    <!-- </div> -->
                                                                </div>

                                                                <div class="form-group col-sm-6">
                                                                <label class="control-label ">Seleccionar fecha Final:</label>
                                                                    <!-- <div class="content-group-lg"> -->
                                                                        <div class="input-group">
                                                                            <span class="input-group-addon"><i class="icon-calendar5"></i></span>
                                                                            <input type="text" class="form-control pickadate-accessibility">
                                                                        </div>
                                                                    <!-- </div> -->
                                                                </div>

                                                            </div>


                                                            <button type="button" class="btn bg-primary btn-labeled"><b><i class="icon-add-to-list"></i></b> Registrar</button>


                                                            <button type="submit" name="submit" id="btn_registrar" class="btn bg-primary btn-labeled"><b><i class="icon-add-to-list"></i></b> Registrar</button>
                                                        </form>
                                                        <?php
                                                            }
                                                        ?>
                                                        
														
													</div>
												</fieldset>
											</div>


											<!-- ====================================================================================================================================== -->



											<div class="tab-pane" id="justified-label-tab2">
												<fieldset>
													<legend class="text-semibold">
														<i class="icon-file-text2 position-left"></i>
														Registro de Cajas
														<a class="control-arrow" data-toggle="collapse" data-target="#demo2" aria-expanded="true">
															<i class="icon-circle-down2"></i>
														</a>
													</legend>

													<div class="collapse in" id="demo2" aria-expanded="true">
														

														<table class="table datatable-basic">
															<thead>
																<tr>
																	<th>First Name</th>
																	<th>Last Name</th>
																	<th>Job Title</th>
																	<th>DOB</th>
																	<th>Status</th>
																	<th class="text-center">Actions</th>
																</tr>
															</thead>
															<tbody>
																
																
																<tr>
																	<td>Aura</td>
																	<td>Hard</td>
																	<td>Business Services Sales Representative</td>
																	<td>19 Apr 1969</td>
																	<td><span class="label label-danger">Suspended</span></td>
																	<td class="text-center">
																		<ul class="icons-list">
																			<li class="dropdown">
																				<a href="#" class="dropdown-toggle" data-toggle="dropdown">
																					<i class="icon-menu9"></i>
																				</a>

																				<ul class="dropdown-menu dropdown-menu-right">
																					<li><a href="#"><i class="icon-file-pdf"></i> Export to .pdf</a></li>
																					<li><a href="#"><i class="icon-file-excel"></i> Export to .csv</a></li>
																					<li><a href="#"><i class="icon-file-word"></i> Export to .doc</a></li>
																				</ul>
																			</li>
																		</ul>
																	</td>
																</tr>
																
																
																
																
															</tbody>
														</table>

														
													</div>
												</fieldset>
											</div>

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
										<th>Accion</th>
									</tr>
								</thead>
								<tbody>
								<?php
									$productos = $obj->listar("glb_producto");
									foreach ($productos as $row) {
										//breaking point
										?>
									<tr>
										<td><?php echo $row["prod_id"]; ?></td>
										<td><?php echo $row["prod_Nom"]; ?></td>
										<td><?php echo $row["cate_desc"]; ?></td>
										<td><?php echo $row["prod_umed"]; ?></td>
										<td><?php echo $row["prod_prvt"]; ?></td>
										<td><?php echo $row["prod_cant"]; ?></td>
										<td>
											<button class="btn btn-agregar-producto btn-sm btn-info btn-labeled">
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

						<!--<div class="modal-body">
							<table class="table datatable-basic tabla-producto">
								<thead>
									<tr>
										<th>#</th>
										<th>Producto</th>
										<th>Persona</th>
										<th>Impuesto</th>
										<th>Monto</th>
										<th>Descuento</th>
										<th>Accion</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>1</td>
										<td>132145</td>
										<td>Christian</td>
										<td>50</td>
										<td>60</td>
										<td>33</td>
										<td>
											<button class="btn btn-seleccionar-pedido btn-sm btn-info btn-labeled">
												<b><i class="icon-add"></i></b>
												Agregar
											</button>
										</td>
									</tr>
									<tr>
										<td>2</td>
										<td>65645</td>
										<td>Sandro</td>
										<td>150</td>
										<td>200</td>
										<td>55</td>
										<td>
											<button class="btn btn-seleccionar-pedido btn-sm btn-info btn-labeled">
												<b><i class="icon-add"></i></b>
												Agregar
											</button>
										</td>
									</tr>
								</tbody>
							</table>
						</div>-->

						<div class="modal-footer">
							<button type="button" class="btn btn-link" data-dismiss="modal">Cerrar</button>
						</div>
					</div>
				</div>
			</div>
			<!-- /large modal -->
<script>

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

$(".tabla-producto").on("click",".btn-agregar-producto",function(){
	var column1 = $(this).closest('tr').children()[0].textContent;
	var column2 = $(this).closest('tr').children()[1].textContent;
	var column3 = $(this).closest('tr').children()[2].textContent;
	var column4 = $(this).closest('tr').children()[3].textContent;
	var column5 = $(this).closest('tr').children()[4].textContent;
	// alert(column1);
	$("#idproducto").val(column1);
	$("#idnombreprod").val(column2);
	
});

</script>

</body>
</html>
