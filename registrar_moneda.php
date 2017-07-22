<?php 
include 'php/clases/moneda.php';
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
	<script type="text/javascript" src="assets/js/plugins/forms/selects/select2.min.js"></script>
	<script type="text/javascript" src="assets/js/plugins/forms/styling/uniform.min.js"></script>

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
							<h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Venta</span> - Registrar Moneda</h4>
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
							<li class="active">Registra Moneda</li>
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
									<h6 class="panel-title">Registrar Moneda</h6>
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
														Informacion de Moneda
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
                                                                $where = array("mon_id"=>$id,);
                                                                $row = $obj->select_record("ven_moneda1",$where);
                                                        ?>
                                                        <form action="php/clases/moneda.php" method="POST">
															<div class="row">
																<div class="form-group col-sm-6">
																	<label>Codigo:</label>
                                                                    <input type="hidden" name="id" value="<?php echo $id; ?>">
																	<input type="text" class="form-control" value="<?php echo $row["mon_codigo"]; ?>" name="n_codigo">
																</div>
																<div class="form-group col-sm-6">
																	<label>Nombre:</label>
																	<input type="text" class="form-control" value="<?php echo $row["mon_nombre"]; ?>" name="n_nombre">
																</div>
															</div>
                                                            <div class="row">
																<div class="form-group col-sm-6">
																	<label>Abreviatura:</label>
																	<input type="text" class="form-control" value="<?php echo $row["mon_abreviatura"]; ?>" name="n_abreviatura">
																</div>
																<div class="form-group col-sm-6">
																	<label>Denominacion Internacional:</label>
																	<input type="text" class="form-control" value="<?php echo $row["mon_internacional"]; ?>" name="n_denominacion">
																</div>
															</div>
                                                            <div class="row">
																<div class="form-group col-sm-12">
																	<label>Pais:</label>
                                                                    <select class="select" name="n_paises">
                                                                        <option value="Afganistán" id="AF">Afganistán</option>
                                                                        <option value="Albania" id="AL">Albania</option>
                                                                        <option value="Alemania" id="DE">Alemania</option>
                                                                        <option value="Andorra" id="AD">Andorra</option>
                                                                        <option value="Angola" id="AO">Angola</option>
                                                                        <option value="Anguila" id="AI">Anguila</option>
                                                                        <option value="Antártida" id="AQ">Antártida</option>
                                                                        <option value="Antigua y Barbuda" id="AG">Antigua y Barbuda</option>
                                                                        <option value="Antillas holandesas" id="AN">Antillas holandesas</option>
                                                                        <option value="Arabia Saudí" id="SA">Arabia Saudí</option>
                                                                        <option value="Argelia" id="DZ">Argelia</option>
                                                                        <option value="Argentina" id="AR">Argentina</option>
                                                                        <option value="Armenia" id="AM">Armenia</option>
                                                                        <option value="Aruba" id="AW">Aruba</option>
                                                                        <option value="Australia" id="AU">Australia</option>
                                                                        <option value="Austria" id="AT">Austria</option>
                                                                        <option value="Azerbaiyán" id="AZ">Azerbaiyán</option>
                                                                        <option value="Bahamas" id="BS">Bahamas</option>
                                                                        <option value="Bahrein" id="BH">Bahrein</option>
                                                                        <option value="Bangladesh" id="BD">Bangladesh</option>
                                                                        <option value="Barbados" id="BB">Barbados</option>
                                                                        <option value="Bélgica" id="BE">Bélgica</option>
                                                                        <option value="Belice" id="BZ">Belice</option>
                                                                        <option value="Benín" id="BJ">Benín</option>
                                                                        <option value="Bermudas" id="BM">Bermudas</option>
                                                                        <option value="Bhután" id="BT">Bhután</option>
                                                                        <option value="Bielorrusia" id="BY">Bielorrusia</option>
                                                                        <option value="Birmania" id="MM">Birmania</option>
                                                                        <option value="Bolivia" id="BO">Bolivia</option>
                                                                        <option value="Bosnia y Herzegovina" id="BA">Bosnia y Herzegovina</option>
                                                                        <option value="Botsuana" id="BW">Botsuana</option>
                                                                        <option value="Brasil" id="BR">Brasil</option>
                                                                        <option value="Brunei" id="BN">Brunei</option>
                                                                        <option value="Bulgaria" id="BG">Bulgaria</option>
                                                                        <option value="Burkina Faso" id="BF">Burkina Faso</option>
                                                                        <option value="Burundi" id="BI">Burundi</option>
                                                                        <option value="Cabo Verde" id="CV">Cabo Verde</option>
                                                                        <option value="Camboya" id="KH">Camboya</option>
                                                                        <option value="Camerún" id="CM">Camerún</option>
                                                                        <option value="Canadá" id="CA">Canadá</option>
                                                                        <option value="Chad" id="TD">Chad</option>
                                                                        <option value="Chile" id="CL">Chile</option>
                                                                        <option value="China" id="CN">China</option>
                                                                        <option value="Chipre" id="CY">Chipre</option>
                                                                        <option value="Ciudad estado del Vaticano" id="VA">Ciudad estado del Vaticano</option>
                                                                        <option value="Colombia" id="CO">Colombia</option>
                                                                        <option value="Comores" id="KM">Comores</option>
                                                                        <option value="Congo" id="CG">Congo</option>
                                                                        <option value="Corea" id="KR">Corea</option>
                                                                        <option value="Corea del Norte" id="KP">Corea del Norte</option>
                                                                        <option value="Costa del Marfíl" id="CI">Costa del Marfíl</option>
                                                                        <option value="Costa Rica" id="CR">Costa Rica</option>
                                                                        <option value="Croacia" id="HR">Croacia</option>
                                                                        <option value="Cuba" id="CU">Cuba</option>
                                                                        <option value="Dinamarca" id="DK">Dinamarca</option>
                                                                        <option value="Djibouri" id="DJ">Djibouri</option>
                                                                        <option value="Dominica" id="DM">Dominica</option>
                                                                        <option value="Ecuador" id="EC">Ecuador</option>
                                                                        <option value="Egipto" id="EG">Egipto</option>
                                                                        <option value="El Salvador" id="SV">El Salvador</option>
                                                                        <option value="Emiratos Arabes Unidos" id="AE">Emiratos Arabes Unidos</option>
                                                                        <option value="Eritrea" id="ER">Eritrea</option>
                                                                        <option value="Eslovaquia" id="SK">Eslovaquia</option>
                                                                        <option value="Eslovenia" id="SI">Eslovenia</option>
                                                                        <option value="España" id="ES">España</option>
                                                                        <option value="Estados Unidos" id="US">Estados Unidos</option>
                                                                        <option value="Estonia" id="EE">Estonia</option>
                                                                        <option value="c" id="ET">Etiopía</option>
                                                                        <option value="Ex-República Yugoslava de Macedonia" id="MK">Ex-República Yugoslava de Macedonia</option>
                                                                        <option value="Filipinas" id="PH">Filipinas</option>
                                                                        <option value="Finlandia" id="FI">Finlandia</option>
                                                                        <option value="Francia" id="FR">Francia</option>
                                                                        <option value="Gabón" id="GA">Gabón</option>
                                                                        <option value="Gambia" id="GM">Gambia</option>
                                                                        <option value="Georgia" id="GE">Georgia</option>
                                                                        <option value="Georgia del Sur y las islas Sandwich del Sur" id="GS">Georgia del Sur y las islas Sandwich del Sur</option>
                                                                        <option value="Ghana" id="GH">Ghana</option>
                                                                        <option value="Gibraltar" id="GI">Gibraltar</option>
                                                                        <option value="Granada" id="GD">Granada</option>
                                                                        <option value="Grecia" id="GR">Grecia</option>
                                                                        <option value="Groenlandia" id="GL">Groenlandia</option>
                                                                        <option value="Guadalupe" id="GP">Guadalupe</option>
                                                                        <option value="Guam" id="GU">Guam</option>
                                                                        <option value="Guatemala" id="GT">Guatemala</option>
                                                                        <option value="Guayana" id="GY">Guayana</option>
                                                                        <option value="Guayana francesa" id="GF">Guayana francesa</option>
                                                                        <option value="Guinea" id="GN">Guinea</option>
                                                                        <option value="Guinea Ecuatorial" id="GQ">Guinea Ecuatorial</option>
                                                                        <option value="Guinea-Bissau" id="GW">Guinea-Bissau</option>
                                                                        <option value="Haití" id="HT">Haití</option>
                                                                        <option value="Holanda" id="NL">Holanda</option>
                                                                        <option value="Honduras" id="HN">Honduras</option>
                                                                        <option value="Hong Kong R. A. E" id="HK">Hong Kong R. A. E</option>
                                                                        <option value="Hungría" id="HU">Hungría</option>
                                                                        <option value="India" id="IN">India</option>
                                                                        <option value="Indonesia" id="ID">Indonesia</option>
                                                                        <option value="Irak" id="IQ">Irak</option>
                                                                        <option value="Irán" id="IR">Irán</option>
                                                                        <option value="Irlanda" id="IE">Irlanda</option>
                                                                        <option value="Isla Bouvet" id="BV">Isla Bouvet</option>
                                                                        <option value="Isla Christmas" id="CX">Isla Christmas</option>
                                                                        <option value="Isla Heard e Islas McDonald" id="HM">Isla Heard e Islas McDonald</option>
                                                                        <option value="Islandia" id="IS">Islandia</option>
                                                                        <option value="Islas Caimán" id="KY">Islas Caimán</option>
                                                                        <option value="Islas Cook" id="CK">Islas Cook</option>
                                                                        <option value="Islas de Cocos o Keeling" id="CC">Islas de Cocos o Keeling</option>
                                                                        <option value="Islas Faroe" id="FO">Islas Faroe</option>
                                                                        <option value="Islas Fiyi" id="FJ">Islas Fiyi</option>
                                                                        <option value="Islas Malvinas Islas Falkland" id="FK">Islas Malvinas Islas Falkland</option>
                                                                        <option value="Islas Marianas del norte" id="MP">Islas Marianas del norte</option>
                                                                        <option value="Islas Marshall" id="MH">Islas Marshall</option>
                                                                        <option value="Islas menores de Estados Unidos" id="UM">Islas menores de Estados Unidos</option>
                                                                        <option value="Islas Palau" id="PW">Islas Palau</option>
                                                                        <option value="Islas Salomón" d="SB">Islas Salomón</option>
                                                                        <option value="Islas Tokelau" id="TK">Islas Tokelau</option>
                                                                        <option value="Islas Turks y Caicos" id="TC">Islas Turks y Caicos</option>
                                                                        <option value="Islas Vírgenes EE.UU." id="VI">Islas Vírgenes EE.UU.</option>
                                                                        <option value="Islas Vírgenes Reino Unido" id="VG">Islas Vírgenes Reino Unido</option>
                                                                        <option value="Israel" id="IL">Israel</option>
                                                                        <option value="Italia" id="IT">Italia</option>
                                                                        <option value="Jamaica" id="JM">Jamaica</option>
                                                                        <option value="Japón" id="JP">Japón</option>
                                                                        <option value="Jordania" id="JO">Jordania</option>
                                                                        <option value="Kazajistán" id="KZ">Kazajistán</option>
                                                                        <option value="Kenia" id="KE">Kenia</option>
                                                                        <option value="Kirguizistán" id="KG">Kirguizistán</option>
                                                                        <option value="Kiribati" id="KI">Kiribati</option>
                                                                        <option value="Kuwait" id="KW">Kuwait</option>
                                                                        <option value="Laos" id="LA">Laos</option>
                                                                        <option value="Lesoto" id="LS">Lesoto</option>
                                                                        <option value="Letonia" id="LV">Letonia</option>
                                                                        <option value="Líbano" id="LB">Líbano</option>
                                                                        <option value="Liberia" id="LR">Liberia</option>
                                                                        <option value="Libia" id="LY">Libia</option>
                                                                        <option value="Liechtenstein" id="LI">Liechtenstein</option>
                                                                        <option value="Lituania" id="LT">Lituania</option>
                                                                        <option value="Luxemburgo" id="LU">Luxemburgo</option>
                                                                        <option value="Macao R. A. E" id="MO">Macao R. A. E</option>
                                                                        <option value="Madagascar" id="MG">Madagascar</option>
                                                                        <option value="Malasia" id="MY">Malasia</option>
                                                                        <option value="Malawi" id="MW">Malawi</option>
                                                                        <option value="Maldivas" id="MV">Maldivas</option>
                                                                        <option value="Malí" id="ML">Malí</option>
                                                                        <option value="Malta" id="MT">Malta</option>
                                                                        <option value="Marruecos" id="MA">Marruecos</option>
                                                                        <option value="Martinica" id="MQ">Martinica</option>
                                                                        <option value="Mauricio" id="MU">Mauricio</option>
                                                                        <option value="Mauritania" id="MR">Mauritania</option>
                                                                        <option value="Mayotte" id="YT">Mayotte</option>
                                                                        <option value="México" id="MX">México</option>
                                                                        <option value="Micronesia" id="FM">Micronesia</option>
                                                                        <option value="Moldavia" id="MD">Moldavia</option>
                                                                        <option value="Mónaco" id="MC">Mónaco</option>
                                                                        <option value="Mongolia" id="MN">Mongolia</option>
                                                                        <option value="Montserrat" id="MS">Montserrat</option>
                                                                        <option value="Mozambique" id="MZ">Mozambique</option>
                                                                        <option value="Namibia" id="NA">Namibia</option>
                                                                        <option value="Nauru" id="NR">Nauru</option>
                                                                        <option value="Nepal" id="NP">Nepal</option>
                                                                        <option value="Nicaragua" id="NI">Nicaragua</option>
                                                                        <option value="Níger" id="NE">Níger</option>
                                                                        <option value="Nigeria" id="NG">Nigeria</option>
                                                                        <option value="Niue" id="NU">Niue</option>
                                                                        <option value="Norfolk" id="NF">Norfolk</option>
                                                                        <option value="Noruega" id="NO">Noruega</option>
                                                                        <option value="Nueva Caledonia" id="NC">Nueva Caledonia</option>
                                                                        <option value="Nueva Zelanda" id="NZ">Nueva Zelanda</option>
                                                                        <option value="Omán" id="OM">Omán</option>
                                                                        <option value="Panamá" id="PA">Panamá</option>
                                                                        <option value="Papua Nueva Guinea" id="PG">Papua Nueva Guinea</option>
                                                                        <option value="Paquistán" id="PK">Paquistán</option>
                                                                        <option value="Paraguay" id="PY">Paraguay</option>
                                                                        <option value="Perú" id="PE">Perú</option>
                                                                        <option value="Pitcairn" id="PN">Pitcairn</option>
                                                                        <option value="Polinesia francesa" id="PF">Polinesia francesa</option>
                                                                        <option value="Polonia" id="PL">Polonia</option>
                                                                        <option value="Portugal" id="PT">Portugal</option>
                                                                        <option value="Puerto Rico" id="PR">Puerto Rico</option>
                                                                        <option value="Qatar" id="QA">Qatar</option>
                                                                        <option value="Reino Unido" id="UK">Reino Unido</option>
                                                                        <option value="República Centroafricana" id="CF">República Centroafricana</option>
                                                                        <option value="República Checa" id="CZ">República Checa</option>
                                                                        <option value="República de Sudáfrica" id="ZA">República de Sudáfrica</option>
                                                                        <option value="República Democrática del Congo Zaire" id="CD">República Democrática del Congo Zaire</option>
                                                                        <option value="República Dominicana" id="DO">República Dominicana</option>
                                                                        <option value="Reunión" id="RE">Reunión</option>
                                                                        <option value="Ruanda" id="RW">Ruanda</option>
                                                                        <option value="Rumania" id="RO">Rumania</option>
                                                                        <option value="Rusia" id="RU">Rusia</option>
                                                                        <option value="Samoa" id="WS">Samoa</option>
                                                                        <option value="Samoa occidental" id="AS">Samoa occidental</option>
                                                                        <option value="San Kitts y Nevis" id="KN">San Kitts y Nevis</option>
                                                                        <option value="San Marino" id="SM">San Marino</option>
                                                                        <option value="San Pierre y Miquelon" id="PM">San Pierre y Miquelon</option>
                                                                        <option value="San Vicente e Islas Granadinas" id="VC">San Vicente e Islas Granadinas</option>
                                                                        <option value="Santa Helena" id="SH">Santa Helena</option>
                                                                        <option value="Santa Lucía" id="LC">Santa Lucía</option>
                                                                        <option value="Santo Tomé y Príncipe" id="ST">Santo Tomé y Príncipe</option>
                                                                        <option value="Senegal" id="SN">Senegal</option>
                                                                        <option value="Serbia y Montenegro" id="YU">Serbia y Montenegro</option>
                                                                        <option value="Sychelles" id="SC">Seychelles</option>
                                                                        <option value="Sierra Leona" id="SL">Sierra Leona</option>
                                                                        <option value="Singapur" id="SG">Singapur</option>
                                                                        <option value="Siria" id="SY">Siria</option>
                                                                        <option value="Somalia" id="SO">Somalia</option>
                                                                        <option value="Sri Lanka" id="LK">Sri Lanka</option>
                                                                        <option value="Suazilandia" id="SZ">Suazilandia</option>
                                                                        <option value="Sudán" id="SD">Sudán</option>
                                                                        <option value="Suecia" id="SE">Suecia</option>
                                                                        <option value="Suiza" id="CH">Suiza</option>
                                                                        <option value="Surinam" id="SR">Surinam</option>
                                                                        <option value="Svalbard" id="SJ">Svalbard</option>
                                                                        <option value="Tailandia" id="TH">Tailandia</option>
                                                                        <option value="Taiwán" id="TW">Taiwán</option>
                                                                        <option value="Tanzania" id="TZ">Tanzania</option>
                                                                        <option value="Tayikistán" id="TJ">Tayikistán</option>
                                                                        <option value="Territorios británicos del océano Indico" id="IO">Territorios británicos del océano Indico</option>
                                                                        <option value="Territorios franceses del sur" id="TF">Territorios franceses del sur</option>
                                                                        <option value="Timor Oriental" id="TP">Timor Oriental</option>
                                                                        <option value="Togo" id="TG">Togo</option>
                                                                        <option value="Tonga" id="TO">Tonga</option>
                                                                        <option value="Trinidad y Tobago" id="TT">Trinidad y Tobago</option>
                                                                        <option value="Túnez" id="TN">Túnez</option>
                                                                        <option value="Turkmenistán" id="TM">Turkmenistán</option>
                                                                        <option value="Turquía" id="TR">Turquía</option>
                                                                        <option value="Tuvalu" id="TV">Tuvalu</option>
                                                                        <option value="Ucrania" id="UA">Ucrania</option>
                                                                        <option value="Uganda" id="UG">Uganda</option>
                                                                        <option value="Uruguay" id="UY">Uruguay</option>
                                                                        <option value="Uzbekistán" id="UZ">Uzbekistán</option>
                                                                        <option value="Vanuatu" id="VU">Vanuatu</option>
                                                                        <option value="Venezuela" id="VE">Venezuela</option>
                                                                        <option value="Vietnam" id="VN">Vietnam</option>
                                                                        <option value="Wallis y Futuna" id="WF">Wallis y Futuna</option>
                                                                        <option value="Yemen" id="YE">Yemen</option>
                                                                        <option value="Zambia" id="ZM">Zambia</option>
                                                                        <option value="Zimbabue" id="ZW">Zimbabue</option>
                                                                    </select>
																	
																</div>
															</div>
															<button type="submit" name="edit" class="btn bg-primary btn-labeled"><b><i class="icon-add-to-list"></i></b> Registrar</button>
														</form>
                                                        <?php
                                                            }else{
                                                        ?>
                                                        <form action="php/clases/moneda.php" method="POST">
															<div class="row">
																<div class="form-group col-sm-6">
																	<label>Codigo:</label>
																	<input type="text" class="form-control" name="n_codigo">
																</div>
																<div class="form-group col-sm-6">
																	<label>Nombre:</label>
																	<input type="text" class="form-control" name="n_nombre">
																</div>
															</div>
                                                            <div class="row">
																<div class="form-group col-sm-6">
																	<label>Abreviatura:</label>
																	<input type="text" class="form-control" name="n_abreviatura">
																</div>
																<div class="form-group col-sm-6">
																	<label>Denominacion Internacional:</label>
																	<input type="text" class="form-control" name="n_denominacion">
																</div>
															</div>
                                                            <div class="row">
																<div class="form-group col-sm-12">
																	<label>Pais:</label>
                                                                    <select class="select" name="n_paises">
                                                                        <option value="Afganistán" id="AF">Afganistán</option>
                                                                        <option value="Albania" id="AL">Albania</option>
                                                                        <option value="Alemania" id="DE">Alemania</option>
                                                                        <option value="Andorra" id="AD">Andorra</option>
                                                                        <option value="Angola" id="AO">Angola</option>
                                                                        <option value="Anguila" id="AI">Anguila</option>
                                                                        <option value="Antártida" id="AQ">Antártida</option>
                                                                        <option value="Antigua y Barbuda" id="AG">Antigua y Barbuda</option>
                                                                        <option value="Antillas holandesas" id="AN">Antillas holandesas</option>
                                                                        <option value="Arabia Saudí" id="SA">Arabia Saudí</option>
                                                                        <option value="Argelia" id="DZ">Argelia</option>
                                                                        <option value="Argentina" id="AR">Argentina</option>
                                                                        <option value="Armenia" id="AM">Armenia</option>
                                                                        <option value="Aruba" id="AW">Aruba</option>
                                                                        <option value="Australia" id="AU">Australia</option>
                                                                        <option value="Austria" id="AT">Austria</option>
                                                                        <option value="Azerbaiyán" id="AZ">Azerbaiyán</option>
                                                                        <option value="Bahamas" id="BS">Bahamas</option>
                                                                        <option value="Bahrein" id="BH">Bahrein</option>
                                                                        <option value="Bangladesh" id="BD">Bangladesh</option>
                                                                        <option value="Barbados" id="BB">Barbados</option>
                                                                        <option value="Bélgica" id="BE">Bélgica</option>
                                                                        <option value="Belice" id="BZ">Belice</option>
                                                                        <option value="Benín" id="BJ">Benín</option>
                                                                        <option value="Bermudas" id="BM">Bermudas</option>
                                                                        <option value="Bhután" id="BT">Bhután</option>
                                                                        <option value="Bielorrusia" id="BY">Bielorrusia</option>
                                                                        <option value="Birmania" id="MM">Birmania</option>
                                                                        <option value="Bolivia" id="BO">Bolivia</option>
                                                                        <option value="Bosnia y Herzegovina" id="BA">Bosnia y Herzegovina</option>
                                                                        <option value="Botsuana" id="BW">Botsuana</option>
                                                                        <option value="Brasil" id="BR">Brasil</option>
                                                                        <option value="Brunei" id="BN">Brunei</option>
                                                                        <option value="Bulgaria" id="BG">Bulgaria</option>
                                                                        <option value="Burkina Faso" id="BF">Burkina Faso</option>
                                                                        <option value="Burundi" id="BI">Burundi</option>
                                                                        <option value="Cabo Verde" id="CV">Cabo Verde</option>
                                                                        <option value="Camboya" id="KH">Camboya</option>
                                                                        <option value="Camerún" id="CM">Camerún</option>
                                                                        <option value="Canadá" id="CA">Canadá</option>
                                                                        <option value="Chad" id="TD">Chad</option>
                                                                        <option value="Chile" id="CL">Chile</option>
                                                                        <option value="China" id="CN">China</option>
                                                                        <option value="Chipre" id="CY">Chipre</option>
                                                                        <option value="Ciudad estado del Vaticano" id="VA">Ciudad estado del Vaticano</option>
                                                                        <option value="Colombia" id="CO">Colombia</option>
                                                                        <option value="Comores" id="KM">Comores</option>
                                                                        <option value="Congo" id="CG">Congo</option>
                                                                        <option value="Corea" id="KR">Corea</option>
                                                                        <option value="Corea del Norte" id="KP">Corea del Norte</option>
                                                                        <option value="Costa del Marfíl" id="CI">Costa del Marfíl</option>
                                                                        <option value="Costa Rica" id="CR">Costa Rica</option>
                                                                        <option value="Croacia" id="HR">Croacia</option>
                                                                        <option value="Cuba" id="CU">Cuba</option>
                                                                        <option value="Dinamarca" id="DK">Dinamarca</option>
                                                                        <option value="Djibouri" id="DJ">Djibouri</option>
                                                                        <option value="Dominica" id="DM">Dominica</option>
                                                                        <option value="Ecuador" id="EC">Ecuador</option>
                                                                        <option value="Egipto" id="EG">Egipto</option>
                                                                        <option value="El Salvador" id="SV">El Salvador</option>
                                                                        <option value="Emiratos Arabes Unidos" id="AE">Emiratos Arabes Unidos</option>
                                                                        <option value="Eritrea" id="ER">Eritrea</option>
                                                                        <option value="Eslovaquia" id="SK">Eslovaquia</option>
                                                                        <option value="Eslovenia" id="SI">Eslovenia</option>
                                                                        <option value="España" id="ES">España</option>
                                                                        <option value="Estados Unidos" id="US">Estados Unidos</option>
                                                                        <option value="Estonia" id="EE">Estonia</option>
                                                                        <option value="c" id="ET">Etiopía</option>
                                                                        <option value="Ex-República Yugoslava de Macedonia" id="MK">Ex-República Yugoslava de Macedonia</option>
                                                                        <option value="Filipinas" id="PH">Filipinas</option>
                                                                        <option value="Finlandia" id="FI">Finlandia</option>
                                                                        <option value="Francia" id="FR">Francia</option>
                                                                        <option value="Gabón" id="GA">Gabón</option>
                                                                        <option value="Gambia" id="GM">Gambia</option>
                                                                        <option value="Georgia" id="GE">Georgia</option>
                                                                        <option value="Georgia del Sur y las islas Sandwich del Sur" id="GS">Georgia del Sur y las islas Sandwich del Sur</option>
                                                                        <option value="Ghana" id="GH">Ghana</option>
                                                                        <option value="Gibraltar" id="GI">Gibraltar</option>
                                                                        <option value="Granada" id="GD">Granada</option>
                                                                        <option value="Grecia" id="GR">Grecia</option>
                                                                        <option value="Groenlandia" id="GL">Groenlandia</option>
                                                                        <option value="Guadalupe" id="GP">Guadalupe</option>
                                                                        <option value="Guam" id="GU">Guam</option>
                                                                        <option value="Guatemala" id="GT">Guatemala</option>
                                                                        <option value="Guayana" id="GY">Guayana</option>
                                                                        <option value="Guayana francesa" id="GF">Guayana francesa</option>
                                                                        <option value="Guinea" id="GN">Guinea</option>
                                                                        <option value="Guinea Ecuatorial" id="GQ">Guinea Ecuatorial</option>
                                                                        <option value="Guinea-Bissau" id="GW">Guinea-Bissau</option>
                                                                        <option value="Haití" id="HT">Haití</option>
                                                                        <option value="Holanda" id="NL">Holanda</option>
                                                                        <option value="Honduras" id="HN">Honduras</option>
                                                                        <option value="Hong Kong R. A. E" id="HK">Hong Kong R. A. E</option>
                                                                        <option value="Hungría" id="HU">Hungría</option>
                                                                        <option value="India" id="IN">India</option>
                                                                        <option value="Indonesia" id="ID">Indonesia</option>
                                                                        <option value="Irak" id="IQ">Irak</option>
                                                                        <option value="Irán" id="IR">Irán</option>
                                                                        <option value="Irlanda" id="IE">Irlanda</option>
                                                                        <option value="Isla Bouvet" id="BV">Isla Bouvet</option>
                                                                        <option value="Isla Christmas" id="CX">Isla Christmas</option>
                                                                        <option value="Isla Heard e Islas McDonald" id="HM">Isla Heard e Islas McDonald</option>
                                                                        <option value="Islandia" id="IS">Islandia</option>
                                                                        <option value="Islas Caimán" id="KY">Islas Caimán</option>
                                                                        <option value="Islas Cook" id="CK">Islas Cook</option>
                                                                        <option value="Islas de Cocos o Keeling" id="CC">Islas de Cocos o Keeling</option>
                                                                        <option value="Islas Faroe" id="FO">Islas Faroe</option>
                                                                        <option value="Islas Fiyi" id="FJ">Islas Fiyi</option>
                                                                        <option value="Islas Malvinas Islas Falkland" id="FK">Islas Malvinas Islas Falkland</option>
                                                                        <option value="Islas Marianas del norte" id="MP">Islas Marianas del norte</option>
                                                                        <option value="Islas Marshall" id="MH">Islas Marshall</option>
                                                                        <option value="Islas menores de Estados Unidos" id="UM">Islas menores de Estados Unidos</option>
                                                                        <option value="Islas Palau" id="PW">Islas Palau</option>
                                                                        <option value="Islas Salomón" d="SB">Islas Salomón</option>
                                                                        <option value="Islas Tokelau" id="TK">Islas Tokelau</option>
                                                                        <option value="Islas Turks y Caicos" id="TC">Islas Turks y Caicos</option>
                                                                        <option value="Islas Vírgenes EE.UU." id="VI">Islas Vírgenes EE.UU.</option>
                                                                        <option value="Islas Vírgenes Reino Unido" id="VG">Islas Vírgenes Reino Unido</option>
                                                                        <option value="Israel" id="IL">Israel</option>
                                                                        <option value="Italia" id="IT">Italia</option>
                                                                        <option value="Jamaica" id="JM">Jamaica</option>
                                                                        <option value="Japón" id="JP">Japón</option>
                                                                        <option value="Jordania" id="JO">Jordania</option>
                                                                        <option value="Kazajistán" id="KZ">Kazajistán</option>
                                                                        <option value="Kenia" id="KE">Kenia</option>
                                                                        <option value="Kirguizistán" id="KG">Kirguizistán</option>
                                                                        <option value="Kiribati" id="KI">Kiribati</option>
                                                                        <option value="Kuwait" id="KW">Kuwait</option>
                                                                        <option value="Laos" id="LA">Laos</option>
                                                                        <option value="Lesoto" id="LS">Lesoto</option>
                                                                        <option value="Letonia" id="LV">Letonia</option>
                                                                        <option value="Líbano" id="LB">Líbano</option>
                                                                        <option value="Liberia" id="LR">Liberia</option>
                                                                        <option value="Libia" id="LY">Libia</option>
                                                                        <option value="Liechtenstein" id="LI">Liechtenstein</option>
                                                                        <option value="Lituania" id="LT">Lituania</option>
                                                                        <option value="Luxemburgo" id="LU">Luxemburgo</option>
                                                                        <option value="Macao R. A. E" id="MO">Macao R. A. E</option>
                                                                        <option value="Madagascar" id="MG">Madagascar</option>
                                                                        <option value="Malasia" id="MY">Malasia</option>
                                                                        <option value="Malawi" id="MW">Malawi</option>
                                                                        <option value="Maldivas" id="MV">Maldivas</option>
                                                                        <option value="Malí" id="ML">Malí</option>
                                                                        <option value="Malta" id="MT">Malta</option>
                                                                        <option value="Marruecos" id="MA">Marruecos</option>
                                                                        <option value="Martinica" id="MQ">Martinica</option>
                                                                        <option value="Mauricio" id="MU">Mauricio</option>
                                                                        <option value="Mauritania" id="MR">Mauritania</option>
                                                                        <option value="Mayotte" id="YT">Mayotte</option>
                                                                        <option value="México" id="MX">México</option>
                                                                        <option value="Micronesia" id="FM">Micronesia</option>
                                                                        <option value="Moldavia" id="MD">Moldavia</option>
                                                                        <option value="Mónaco" id="MC">Mónaco</option>
                                                                        <option value="Mongolia" id="MN">Mongolia</option>
                                                                        <option value="Montserrat" id="MS">Montserrat</option>
                                                                        <option value="Mozambique" id="MZ">Mozambique</option>
                                                                        <option value="Namibia" id="NA">Namibia</option>
                                                                        <option value="Nauru" id="NR">Nauru</option>
                                                                        <option value="Nepal" id="NP">Nepal</option>
                                                                        <option value="Nicaragua" id="NI">Nicaragua</option>
                                                                        <option value="Níger" id="NE">Níger</option>
                                                                        <option value="Nigeria" id="NG">Nigeria</option>
                                                                        <option value="Niue" id="NU">Niue</option>
                                                                        <option value="Norfolk" id="NF">Norfolk</option>
                                                                        <option value="Noruega" id="NO">Noruega</option>
                                                                        <option value="Nueva Caledonia" id="NC">Nueva Caledonia</option>
                                                                        <option value="Nueva Zelanda" id="NZ">Nueva Zelanda</option>
                                                                        <option value="Omán" id="OM">Omán</option>
                                                                        <option value="Panamá" id="PA">Panamá</option>
                                                                        <option value="Papua Nueva Guinea" id="PG">Papua Nueva Guinea</option>
                                                                        <option value="Paquistán" id="PK">Paquistán</option>
                                                                        <option value="Paraguay" id="PY">Paraguay</option>
                                                                        <option value="Perú" id="PE">Perú</option>
                                                                        <option value="Pitcairn" id="PN">Pitcairn</option>
                                                                        <option value="Polinesia francesa" id="PF">Polinesia francesa</option>
                                                                        <option value="Polonia" id="PL">Polonia</option>
                                                                        <option value="Portugal" id="PT">Portugal</option>
                                                                        <option value="Puerto Rico" id="PR">Puerto Rico</option>
                                                                        <option value="Qatar" id="QA">Qatar</option>
                                                                        <option value="Reino Unido" id="UK">Reino Unido</option>
                                                                        <option value="República Centroafricana" id="CF">República Centroafricana</option>
                                                                        <option value="República Checa" id="CZ">República Checa</option>
                                                                        <option value="República de Sudáfrica" id="ZA">República de Sudáfrica</option>
                                                                        <option value="República Democrática del Congo Zaire" id="CD">República Democrática del Congo Zaire</option>
                                                                        <option value="República Dominicana" id="DO">República Dominicana</option>
                                                                        <option value="Reunión" id="RE">Reunión</option>
                                                                        <option value="Ruanda" id="RW">Ruanda</option>
                                                                        <option value="Rumania" id="RO">Rumania</option>
                                                                        <option value="Rusia" id="RU">Rusia</option>
                                                                        <option value="Samoa" id="WS">Samoa</option>
                                                                        <option value="Samoa occidental" id="AS">Samoa occidental</option>
                                                                        <option value="San Kitts y Nevis" id="KN">San Kitts y Nevis</option>
                                                                        <option value="San Marino" id="SM">San Marino</option>
                                                                        <option value="San Pierre y Miquelon" id="PM">San Pierre y Miquelon</option>
                                                                        <option value="San Vicente e Islas Granadinas" id="VC">San Vicente e Islas Granadinas</option>
                                                                        <option value="Santa Helena" id="SH">Santa Helena</option>
                                                                        <option value="Santa Lucía" id="LC">Santa Lucía</option>
                                                                        <option value="Santo Tomé y Príncipe" id="ST">Santo Tomé y Príncipe</option>
                                                                        <option value="Senegal" id="SN">Senegal</option>
                                                                        <option value="Serbia y Montenegro" id="YU">Serbia y Montenegro</option>
                                                                        <option value="Sychelles" id="SC">Seychelles</option>
                                                                        <option value="Sierra Leona" id="SL">Sierra Leona</option>
                                                                        <option value="Singapur" id="SG">Singapur</option>
                                                                        <option value="Siria" id="SY">Siria</option>
                                                                        <option value="Somalia" id="SO">Somalia</option>
                                                                        <option value="Sri Lanka" id="LK">Sri Lanka</option>
                                                                        <option value="Suazilandia" id="SZ">Suazilandia</option>
                                                                        <option value="Sudán" id="SD">Sudán</option>
                                                                        <option value="Suecia" id="SE">Suecia</option>
                                                                        <option value="Suiza" id="CH">Suiza</option>
                                                                        <option value="Surinam" id="SR">Surinam</option>
                                                                        <option value="Svalbard" id="SJ">Svalbard</option>
                                                                        <option value="Tailandia" id="TH">Tailandia</option>
                                                                        <option value="Taiwán" id="TW">Taiwán</option>
                                                                        <option value="Tanzania" id="TZ">Tanzania</option>
                                                                        <option value="Tayikistán" id="TJ">Tayikistán</option>
                                                                        <option value="Territorios británicos del océano Indico" id="IO">Territorios británicos del océano Indico</option>
                                                                        <option value="Territorios franceses del sur" id="TF">Territorios franceses del sur</option>
                                                                        <option value="Timor Oriental" id="TP">Timor Oriental</option>
                                                                        <option value="Togo" id="TG">Togo</option>
                                                                        <option value="Tonga" id="TO">Tonga</option>
                                                                        <option value="Trinidad y Tobago" id="TT">Trinidad y Tobago</option>
                                                                        <option value="Túnez" id="TN">Túnez</option>
                                                                        <option value="Turkmenistán" id="TM">Turkmenistán</option>
                                                                        <option value="Turquía" id="TR">Turquía</option>
                                                                        <option value="Tuvalu" id="TV">Tuvalu</option>
                                                                        <option value="Ucrania" id="UA">Ucrania</option>
                                                                        <option value="Uganda" id="UG">Uganda</option>
                                                                        <option value="Uruguay" id="UY">Uruguay</option>
                                                                        <option value="Uzbekistán" id="UZ">Uzbekistán</option>
                                                                        <option value="Vanuatu" id="VU">Vanuatu</option>
                                                                        <option value="Venezuela" id="VE">Venezuela</option>
                                                                        <option value="Vietnam" id="VN">Vietnam</option>
                                                                        <option value="Wallis y Futuna" id="WF">Wallis y Futuna</option>
                                                                        <option value="Yemen" id="YE">Yemen</option>
                                                                        <option value="Zambia" id="ZM">Zambia</option>
                                                                        <option value="Zimbabue" id="ZW">Zimbabue</option>
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
														Registros de Moneda
														<a class="control-arrow" data-toggle="collapse" data-target="#demo2" aria-expanded="true">
															<i class="icon-circle-down2"></i>
														</a>
													</legend>

													<div class="collapse in" id="demo2" aria-expanded="true">
														

														<table class="table datatable-basic">
															<thead>
																<tr>
																	<th>#</th>
																	<th>Codigo</th>
																	<th>Nombre</th>
                                                                    <th>Abreviatura</th>
                                                                    <th>Internacional</th>
																	<th>Pais</th>
																	<th class="text-center">Acciones</th>
																</tr>
															</thead>
															<tbody>
																<?php
                                                                    $myrow = $obj->fetch_record("ven_moneda1");
                                                                    foreach ($myrow as $row) {
                                                                        //breaking point
                                                                        ?>
                                                                            <tr>
                                                                                <td><?php echo $row["mon_id"]; ?></td>
                                                                                <td><?php echo $row["mon_codigo"]; ?></td>
                                                                                <td><?php echo $row["mon_nombre"]; ?></td>
                                                                                <td><?php echo $row["mon_abreviatura"]; ?></td>
                                                                                <td><?php echo $row["mon_internacional"]; ?></td>
                                                                                <td><?php echo $row["mon_pais"]; ?></td>
                                                                                <td>
                                                                                    <a href="registrar_moneda.php?update=1&id=<?php echo $row["mon_id"]; ?>" class="btn btn-sm btn-info">Editar</a>
                                                                                    <a href="php/clases/moneda.php?delete=1&id=<?php echo $row["mon_id"]; ?>" class="btn btn-sm btn-danger">Eliminar</a>
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

</body>
</html>
