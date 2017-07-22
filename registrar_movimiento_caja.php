<?php
include 'php/clases/movimiento.php';
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
							<h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Venta</span> - Registrar Movimiento de Caja</h4>
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
							<li class="active">Registra Movimiento de Caja</li>
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
									<h6 class="panel-title">Registrar Movimiento de Caja</h6>
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
														Informacion de Movimiento
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
                                                            $where = array("movc_id"=>$id,);
                                                            $row = $obj->listar_detalle("ven_mov_caja1",$where);
                                                            ?>
                                                            <form action="php/clases/movimiento.php" method="POST">
                                                                <div class="row">
                                                                    <div class="form-group col-sm-12">
                                                                        <label class="control-label ">Caja:</label>
                                                                        <div class="input-group">
                                                                            <input type="hidden" name="id" value="<?php echo $id; ?>"> <!-- =============== -->
                                                                            <input type="hidden" class="form-control" id="idcaja" value="<?php echo $row["caja_id"]; ?>" name="n_idcaja">
                                                                            <input type="text" readonly id="numero_caja" value="<?php echo $row["caja_num"]; ?>" class="form-control">
                                                                            <span class="input-group-btn">
                                                                            <button type="button" class="btn bg-primary btn-labeled" data-toggle="modal" data-target="#modal_caja"><b><i class="icon-search4"></i></b>Buscar</button>
                                                                        </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="form-group col-md-4">
                                                                        <label class="control-label ">Saldo Inicial:</label>
                                                                        <input type="text" name="n_saldoinicial" value="<?php echo $row["movc_saldinicio"]; ?>" readonly class="form-control">
                                                                    </div>
                                                                    <div class="form-group col-md-4">
                                                                        <label class="control-label ">Saldo Final:</label>
                                                                        <input type="text" name="n_saldofinal"  class="form-control">
                                                                    </div>
                                                                    <div class="form-group col-md-4">
                                                                        <label class="control-label ">Moneda:</label>
                                                                        <select class="select">
                                                                            <?php
                                                                            $myrow = $obj->fetch_record("ven_moneda1");
                                                                            foreach ($myrow as $row) {
                                                                                ?>
                                                                                <option value="<?php echo $row["mon_id"]; ?>"><?php echo $row["mon_nombre"]; ?></option>
                                                                                <?php
                                                                            }
                                                                            ?>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <button type="submit" name="edit" class="btn bg-primary btn-labeled"><b><i class="icon-add-to-list"></i></b> Registrar</button>
                                                            </form>


                                                            <?php
                                                        }else{
                                                            ?>
                                                            <form action="php/clases/movimiento.php" method="POST">
                                                                <div class="row">
                                                                    <div class="form-group col-sm-12">
                                                                        <label class="control-label ">Caja:</label>
                                                                        <div class="input-group">
                                                                            <input type="hidden" class="form-control" id="idcaja" name="n_idcaja"> <!-- =============== -->
                                                                            <input type="text" readonly id="numero_caja" class="form-control">
                                                                            <span class="input-group-btn">
                                                                            <button type="button" class="btn bg-primary btn-labeled" data-toggle="modal" data-target="#modal_caja"><b><i class="icon-search4"></i></b>Buscar</button>
                                                                        </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="form-group col-md-4">
                                                                        <label class="control-label ">Saldo Inicial:</label>
                                                                        <input type="text" name="n_saldoinicial" class="form-control">
                                                                    </div>
                                                                    <div class="form-group col-md-4">
                                                                        <label class="control-label ">Saldo Final:</label>
                                                                        <input type="text" name="n_saldofinal" readonly class="form-control">
                                                                    </div>
                                                                    <div class="form-group col-md-4">
                                                                        <label class="control-label ">Moneda:</label>
                                                                        <select class="select">
                                                                            <?php
                                                                            $myrow = $obj->fetch_record("ven_moneda1");
                                                                            foreach ($myrow as $row) {
                                                                                ?>
                                                                                <option value="<?php echo $row["mon_id"]; ?>"><?php echo $row["mon_nombre"]; ?></option>
                                                                                <?php
                                                                            }
                                                                            ?>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <button type="submit" name="submit" class="btn bg-primary btn-labeled"><b><i class="icon-add-to-list"></i></b> Registrar</button>
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
														Registro de Movimientos
														<a class="control-arrow" data-toggle="collapse" data-target="#demo2" aria-expanded="true">
															<i class="icon-circle-down2"></i>
														</a>
													</legend>

													<div class="collapse in" id="demo2" aria-expanded="true">
														

														<table class="table datatable-basic">
															<thead>
																<tr>
																	<th>#</th>
																	<th>Numero Caja</th>
																	<th>Tipo Caja</th>
																	<th>Saldo Inicial</th>
																	<th>Saldo Final</th>
                                                                    <th>Fecha</th>
																	<th class="text-center">Acciones</th>
																</tr>
															</thead>
															<tbody>
                                                            <?php
                                                            $myrow = $obj->listar("ven_mov_caja1");
                                                            foreach ($myrow as $row) {
                                                                //breaking point
                                                                ?>
                                                                <tr>
                                                                    <td><?php echo $row["movc_id"]; ?></td>
                                                                    <td><?php echo $row["caja_num"]; ?></td>
                                                                    <td><?php echo $row["caja_tipo"]; ?></td>
                                                                    <td><?php echo $row["movc_saldinicio"]; ?></td>
                                                                    <td><?php echo $row["movc_saldfinal"]; ?></td>
                                                                    <td><?php echo $row["movc_fecha"]; ?></td>
                                                                    <td>
                                                                        <a href="registrar_movimiento_caja.php?update=1&id=<?php echo $row["movc_id"]; ?>" class="btn btn-xs btn-info">Actualizar</a>
                                                                        <a href="php/clases/movimiento.php?delete=1&id=<?php echo $row["movc_id"]; ?>" class="btn btn-xs btn-danger">Eliminar</a>
                                                                    </td>
                                                                </tr>
                                                                <?php
                                                            }
                                                            ?>

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
    <div id="modal_caja" class="modal fade">
        <div class="modal-dialog modal-full">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h5 class="modal-title">Lista Cliente</h5>
                </div>

                <div class="modal-body">
                    <table class="table datatable-basic table-bordered tabla-caja">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Numero Caja</th>
                            <th>Tipo de Caja</th>
                            <th>Tipo de Comprobante</th>
                            <th>Accion</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $myrow = $obj->listar_caja("ven_caja1");
                        foreach ($myrow as $row) {
                            //breaking point
                            ?>
                            <tr>
                                <td><?php echo $row["caja_id"]; ?></td>
                                <td><?php echo $row["caja_num"]; ?></td>
                                <td><?php echo $row["caja_tipo"]; ?></td>
                                <td><?php echo $row["tipo_Descripcion"]; ?></td>
                                <td>
                                    <button class="btn btn-seleccionar-caja btn-sm btn-info btn-labeled">
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
        $(".tabla-caja").on("click",".btn-seleccionar-caja",function(){
            var column1 = $(this).closest('tr').children()[0].textContent;
            var column2 = $(this).closest('tr').children()[1].textContent;
            var column3 = $(this).closest('tr').children()[2].textContent;

            $("#numero_caja").val(column2);
            $("#idcaja").val(column1);
        });
    </script>
<script src="assets/js/correctortabla.js"></script>
</body>
</html>
