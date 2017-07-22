<?php
include 'php/clases/emitir_comprobante.php';
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
    <script type="text/javascript" src="assets/js/plugins/forms/selects/select2.min.js"></script>
    <script type="text/javascript" src="assets/js/plugins/forms/styling/uniform.min.js"></script>

    <script type="text/javascript" src="assets/js/plugins/tables/datatables/datatables.min.js"></script>
    <script type="text/javascript" src="assets/js/pages/datatables_basic.js"></script>

    <script type="text/javascript" src="assets/js/core/app.js"></script>
    <script type="text/javascript" src="assets/js/pages/form_layouts.js"></script>

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
							<h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Venta</span> - Emitir Comprobante</h4>
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
							<li class="active">Emitir Comprobante</li>
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
									<h6 class="panel-title">Emitir Comprobante</h6>
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
												<fieldset>
													<legend class="text-semibold">
														<i class="icon-file-text2 position-left"></i>
														Informacion de Comprobante
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
                                                            $where = array("ped_id"=>$id,);
                                                            $row3 = $obj->select_record("ven_pedido1",$where);
                                                            ?>

                                                            <form action="php/clases/emitir_comprobante.php" method="POST">
                                                                <input type="hidden" name="id" value="<?php echo $id; ?>">
                                                                <div class="row">
                                                                    <div class="form-group col-sm-4">
                                                                        <label>Tipo de Comprobante:</label>
                                                                        <select class="select" name="n_tipocomprobante">
                                                                            <?php
                                                                            $caja = $obj->fetch_record("ven_tipo_comprobante1");
                                                                            foreach ($caja as $row) {
                                                                                ?>
                                                                                <option value="<?php echo $row["tipo_idcomp"]; ?>"><?php echo $row["tipo_Descripcion"]; ?></option>
                                                                                <?php
                                                                            }
                                                                            ?>
                                                                        </select>
                                                                    </div>
                                                                    <div class="form-group col-sm-4">
                                                                        <label>Serie:</label>
                                                                        <input type="text" name="n_serie" class="form-control">
                                                                    </div>
                                                                    <div class="form-group col-sm-4">
                                                                        <label>Correlativo:</label>
                                                                        <input type="text" name="n_correlativo" class="form-control">
                                                                    </div>
                                                                </div>

                                                                <div class="row">
                                                                    <div class="form-group col-sm-6">
                                                                        <label>Tipo de Pago:</label>
                                                                        <select class="select" name="n_tipopago">
                                                                            <?php
                                                                            $tipopago = $obj->fetch_record("ven_tipo_pago");
                                                                            foreach ($tipopago as $row) {
                                                                                ?>
                                                                                <option value="<?php echo $row["tipg_id"]; ?>"><?php echo $row["tipg_Descripcion"]." : ".$row["tipg_Cuotas"]; ?></option>
                                                                                <?php
                                                                            }
                                                                            ?>
                                                                        </select>
                                                                    </div>

                                                                    <div class="form-group col-sm-6">
                                                                        <label>Moneda:</label>
                                                                        <select class="select" name="n_moneda">
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

                                                                <div class="row">
                                                                    <div class="form-group col-sm-4">
                                                                        <label>Total:</label>
                                                                        <input type="text" class="form-control" name="n_total" id="txttotal" readonly value="<?php echo $row3["ped_total"];?>">
                                                                    </div>
                                                                    <div class="form-group col-sm-4">
                                                                        <label>Impuesto:</label>
                                                                        <select class="select" name="n_impuesto" id="cbximpuesto">
                                                                            <?php
                                                                            $impuesto = $obj->fetch_record("ven_impuesto");
                                                                            foreach ($impuesto as $row) {
                                                                                ?>
                                                                                <option  value="<?php echo $row["imp_id"]."|".$row["imp_Cantidad"]; ?>"><?php echo $row["imp_Descripcion"]." : ".$row["imp_Cantidad"]."%"; ?></option>
                                                                                <?php
                                                                            }
                                                                            ?>
                                                                        </select>
                                                                    </div>
                                                                    <div class="form-group col-sm-4">
                                                                        <label>Total Descuento:</label>
                                                                        <input type="text" class="form-control" name="n_totaldescuento" readonly value="<?php echo $row3["TotalDescuento"];?>">
                                                                    </div>
                                                                </div>

                                                                <div class="row">
                                                                    <div class="form-group col-sm-12">
                                                                        <label>Descripcion:</label>
                                                                        <input type="text" name="n_descripcion" class="form-control">
                                                                    </div>

                                                                </div>

                                                                <button type="button" class="btn bg-primary btn-labeled" data-toggle="modal" data-target="#modal_large"><b><i class="icon-add-to-list"></i></b> Seleccionar Pedido</button>
                                                                <br>
                                                                <br>

                                                                <div class="table-responsive pre-scrollable table-bordered table-hover">
                                                                    <table class="table table-bordered">
                                                                        <thead>
                                                                        <tr>
                                                                            <th>Producto</th>
                                                                            <th>Cantidad</th>
                                                                            <th>Descuento U.</th>
                                                                            <th>Precio/Unidad</th>
                                                                            <th>Precio/Mayor</th>
                                                                        </tr>
                                                                        </thead>
                                                                        <tbody id="tabla-detalle">
                                                                        <?php
                                                                        $detalle = $obj->listar_pedido("ven_detalle_pedido1",$where);
                                                                        foreach ($detalle as $row) {
                                                                            ?>
                                                                            <tr>
                                                                                <td><input type="hidden" name="n_idproducto[]" value="<?php echo $row["prod_id"]; ?>"><?php echo $row["prod_Nom"]; ?></td>
                                                                                <td><input type="hidden" name="n_cantidad[]" value="<?php echo $row["detp_cantidad"]; ?>"><?php echo $row["detp_cantidad"]; ?></td>
                                                                                <td><input type="hidden" name="n_descuento[]" value="<?php echo $row["detp_descuento"]; ?>"><?php echo $row["detp_descuento"]; ?></td>
                                                                                <td><input type="hidden" name="n_precioxunidad[]" value="<?php echo $row["pre_Precioxunidad"]; ?>"><?php echo $row["pre_Precioxunidad"]; ?></td>
                                                                                <td><input type="hidden" name="n_precioxmayor[]" value="<?php echo $row["pre_Precioxmayor"]; ?>"><?php echo $row["pre_Precioxmayor"]; ?></td>
                                                                            </tr>
                                                                            <?php
                                                                        }
                                                                        ?>
                                                                        </tbody>
                                                                    </table>
                                                                </div>

                                                                <br>
                                                                <div class="row">
                                                                    <div class="form-group col-sm-10">
                                                                        <button type="submit" name="submit" class="btn bg-primary btn-labeled"><b><i class="icon-add-to-list"></i></b> Registrar</button>
                                                                    </div>
                                                                    <div class="form-group col-sm-2">
                                                                        <label>Total pago:</label>
                                                                        <input type="text" id="txttotalpago" name="n_totalpago" class="form-control">
                                                                    </div>
                                                                </div>

                                                            </form>




                                                            <!--*******************************************************-->
                                                            <!--*******************************************************-->
                                                            <!--*******************************************************-->
                                                            <!--*******************************************************-->
                                                            <!--*******************************************************-->
                                                            <!--*******************************************************-->
                                                            <!--*******************************************************-->
                                                            <!--*******************************************************-->
                                                            <!--*******************************************************-->
                                                            <!--*******************************************************-->
                                                            <!--*******************************************************-->
                                                            <!--*******************************************************-->
                                                            <!--*******************************************************-->





                                                            <?php
                                                        }else{
                                                            ?>
                                                            <form action="php/clases/emitir_comprobante.php" method="POST">
                                                                <div class="row">
                                                                    <div class="form-group col-sm-4">
                                                                        <label>Tipo de Comprobante:</label>
                                                                        <select class="select">
                                                                            <?php
                                                                            $caja = $obj->fetch_record("ven_tipo_comprobante");
                                                                            foreach ($caja as $row) {
                                                                                ?>
                                                                                <option value="<?php echo $row["tipo_idcomp"]; ?>"><?php echo $row["tipo_Descripcion"]; ?></option>
                                                                                <?php
                                                                            }
                                                                            ?>
                                                                        </select>
                                                                    </div>
                                                                    <div class="form-group col-sm-4">
                                                                        <label>Serie:</label>
                                                                        <input type="text" readonly class="form-control">
                                                                    </div>
                                                                    <div class="form-group col-sm-4">
                                                                        <label>Correlativo:</label>
                                                                        <input type="text" readonly class="form-control">
                                                                    </div>
                                                                </div>

                                                                <div class="row">
                                                                    <div class="form-group col-sm-6">
                                                                        <label>Tipo de Pago:</label>
                                                                        <select class="select">
                                                                            <?php
                                                                            $tipopago = $obj->fetch_record("ven_tipo_pago");
                                                                            foreach ($tipopago as $row) {
                                                                                ?>
                                                                                <option value="<?php echo $row["tipg_id"]; ?>"><?php echo $row["tipg_Descripcion"]." : ".$row["tipg_Cuotas"]; ?></option>
                                                                                <?php
                                                                            }
                                                                            ?>
                                                                        </select>
                                                                    </div>

                                                                    <div class="form-group col-sm-6">
                                                                        <label>Moneda:</label>
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

                                                                <div class="row">
                                                                    <div class="form-group col-sm-4">
                                                                        <label>Total:</label>
                                                                        <input type="text" readonly class="form-control">
                                                                    </div>
                                                                    <div class="form-group col-sm-4">
                                                                        <label>Impuesto:</label>
                                                                        <select class="select" >
                                                                            <?php
                                                                            $impuesto = $obj->fetch_record("ven_impuesto");
                                                                            foreach ($impuesto as $row) {
                                                                                ?>
                                                                                <option value="<?php echo $row["imp_id"]."|".$row["imp_Cantidad"]; ?>"><?php echo $row["imp_Descripcion"]; ?></option>
                                                                                <?php
                                                                            }
                                                                            ?>
                                                                        </select>
                                                                    </div>
                                                                    <div class="form-group col-sm-4">
                                                                        <label>Total Descuento:</label>
                                                                        <input type="text" readonly class="form-control">
                                                                    </div>
                                                                </div>

                                                                <div class="row">
                                                                    <div class="form-group col-sm-12">
                                                                        <label>Descripcion:</label>
                                                                        <input type="text" readonly readonly class="form-control">
                                                                    </div>

                                                                </div>

                                                                <button type="button" class="btn bg-primary btn-labeled" data-toggle="modal" data-target="#modal_large"><b><i class="icon-add-to-list"></i></b> Seleccionar Pedido</button>
                                                                <br>
                                                                <br>

                                                                <div class="table-responsive pre-scrollable table-bordered table-hover">
                                                                    <table class="table table-bordered">
                                                                        <thead>
                                                                        <tr>
                                                                            <th>#</th>
                                                                            <th>Producto</th>
                                                                            <th>Categoria</th>
                                                                            <th>Precio U.</th>
                                                                            <th>Cantidad</th>
                                                                            <th>SubTotal</th>
                                                                        </tr>
                                                                        </thead>
                                                                        <tbody id="tabla-detalle">

                                                                        </tbody>
                                                                    </table>
                                                                </div>



                                                                <br>
                                                                <div class="row">
                                                                    <div class="form-group col-sm-10">

                                                                    </div>
                                                                    <div class="form-group col-sm-2">
                                                                        <label>Total pago:</label>
                                                                        <input type="text" readonly class="form-control">
                                                                    </div>
                                                                </div>
                                                            </form>
                                                            <?php
                                                        }
                                                        ?>




















													</div>
												</fieldset>


											<!-- <div class="tab-pane" id="justified-label-tab2">

											</div> -->


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
			<div id="modal_large" class="modal fade">
				<div class="modal-dialog modal-full">
					<div class="modal-content">
						<div class="modal-header bg-primary">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							<h5 class="modal-title">Lista Pedidos</h5>
						</div>

						<div class="modal-body">
							<table class="table datatable-basic tabla-pedidos">
								<thead>
									<tr>
										<th>#</th>
                                        <th>Persona</th>
										<th>Fecha Registro</th>
										<th>Total</th>
										<th>Accion</th>
									</tr>
								</thead>
								<tbody>
                                    <?php
                                    $myrow = $obj->fetch_record("ven_pedido1");
                                    foreach ($myrow as $row) {
                                        //breaking point
                                        ?>
                                        <tr>
                                            <td><?php echo $row["ped_id"]; ?></td>
                                            <td><?php echo $row["perso_id"]; ?></td>
                                            <td><?php echo $row["ped_fecregistro"]; ?></td>
                                            <td><?php echo $row["ped_total"]; ?></td>
                                            <td>
                                                <a href="emitir_comprobante.php?update=1&id=<?php echo $row["ped_id"]; ?>" class="btn btn-sm btn-info">Editar</a>
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
	// setTimeout(function(){
	// 	window.location.reload(1);
	// }, 5000);

	$(".tabla-pedidos").on("click",".btn-seleccionar-pedido",function(){
		var column1 = $(this).closest('tr').children()[0].textContent;
		var column2 = $(this).closest('tr').children()[1].textContent;
		var column4 = $(this).closest('tr').children()[3].textContent;
		var column5 = $(this).closest('tr').children()[4].textContent;
		alert(column1);
		// $("#tabla-detalle").load('php/clases/detalle_pedido.php?num_pedido='+column1);
		$.ajax({
			url:"php/clases/detalle_pedido.php?num_pedido="+column1,
			type:'get',
			success:function(response) {
				$("#tabla-detalle").html(response);
				alert("dsasff");
			}

		});
	});
	$("#cbximpuesto").change(function () {
        var arrayimpuesto = $("#cbximpuesto").val().split('|');
        var impuesto = arrayimpuesto[1];
        var total = $("#txttotal").val();
        var desc_impuesto = (total * (impuesto/100));
        var calculado = total - desc_impuesto;
        if(calculado<0){
            calculado = 0
            $("#txttotalpago").val(calculado);
        }else{
            $("#txttotalpago").val(calculado);
        }

    });


	</script>
<script src="assets/js/correctortabla.js"></script>
</body>
</html>
