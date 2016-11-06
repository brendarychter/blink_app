<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Blink - Panel de administraci&oacute;n</title>

	<link href="../../public/css/bootstrap.css" rel="stylesheet">
	<link href="../../public/css/datepicker3.css" rel="stylesheet">
	<link href="../../public/css/styles_dashboard.css" rel="stylesheet">
	<link href="../../public/css/content.css" rel="stylesheet">

	<link rel="shortcut icon" type="image/png" href="../../public/img/icon_tab.png"/>
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->

</head>

<body>
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#"><span>Blink</span> Admin</a>
				<ul class="user-menu">
					<li class="dropdown pull-right">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> <span id="admin-logged"></span> <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="#"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Perfil</a></li>
							<li><a href="#"><svg class="glyph stroked gear"><use xlink:href="#stroked-gear"></use></svg> Configuraci&oacute;n</a></li>
							<li><a href="#"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Cerrar sesi&oacute;n</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<!-- HOME ADMIN -->
	<div class="col-lg-12 col-sm-12 col-md-12 main-admin-dashboard">			
		<div class="row">
			<div class="col-lg-12 col-sm-12 col-md-12">
				<div class="panel panel-default">
					<!-- Navs for each page in the website -->
					<div class="tabs-page-blink">
						<ul class="nav nav-tabs">
						  	<li role="presentation" class="active toggle-nav-admin" id="home-admin"><a href="#">Home - Landing page</a></li>
						  	<!-- <div class="panel-heading"><a href=""><svg class="glyph stroked pencil edit-icon"><use xlink:href="#stroked-pencil"></use></svg></a>Qui&eacute;nes somos</div> -->
						 	<li role="presentation" class="toggle-nav-admin" id="team-admin"><a href="#">Qui&eacute;nes somos</a></li>
						  	<li role="presentation" class="toggle-nav-admin"><a href="#">FAQ</a></li>
						  	<li role="presentation" class="toggle-nav-admin"><a href="#">Demo</a></li>
						</ul>
					</div>
					<!-- QUIENES SOMOS ADMIN -->
				    <div class="col-lg-12 col-sm-12 col-md-12 tab-admin-page">			
						<div class="row home-admin admin-nav active">
							<div class="col-lg-12 col-sm-12 col-md-12">
								<div class="panel panel-default">
									<div class="panel-heading"></div>
										<div class="panel-body">
											<form role="form" class="form-section" id="form-section-1">
												<label class="section-name">Secci&oacute;n 1</label>
												<div class="col-md-6 col-sm-12">
													<div class="form-group col-md-6 box-section col-sm-12">
														<div class="title-box">
															<span class="global-title">t&iacute;tulo</span>
														</div>
														<div class="portion portion-spanish">
															<label class="lan">Espa&ntilde;ol</label>
															<span class="editable-text"></span>
														</div>
														<div class="portion portion-english">
															<label class="lan">Ingl&eacute;s</label>
															<span class="editable-text"></span>
														</div>
													</div>
																					
													<div class="form-group col-md-6 box-section col-sm-12">
														<span>subt&iacute;tulo</span>
														<input class="form-control" placeholder="Subt&iacute;tulo espa&ntilde;ol">
														<input class="form-control" placeholder="Subt&iacute;tulo ingl&eacute;s">
													</div>

												</div>
												<div class="col-md-6 col-sm-12">
													<div class="form-group col-md-6 box-section col-sm-12">
														<span>bot&oacute;n</span>
														<input class="form-control" placeholder="Bot&oacute;n espa&ntilde;ol">
														<input class="form-control" placeholder="Bot&oacute;n ingl&eacute;s">
													</div>
													<div class="form-group col-md-6 col-sm-12">
														<span>imagen de fondo</span>
														<!-- <input type="file"> -->
														<p class="help-block"></p>
													</div>
												</div>
												<button type="submit" class="btn btn-primary edit-section" id="edit-section-1">Editar secci&oacute;n 1</button>
												<button type="submit" class="btn btn-danger edit-section" id="delete-section-1">Eliminar secci&oacute;n 1</button>
											</form>	

										</div>
									<div class="panel-heading" style="padding-top: 0;"></div>
									<div class="panel-body">
										<form role="form" class="form-section" id="form-section-1">
											<label class="section-name">Secci&oacute;n 2</label>
											<div class="col-md-6 col-sm-12">
												<div class="form-group col-md-6 box-section col-sm-12">
													<span>t&iacute;tulo</span>
													<input class="form-control" placeholder="T&iacute;tulo espa&ntilde;ol">
													<input class="form-control" placeholder="T&iacute;tulo ingl&eacute;s">
												</div>
																				
												<div class="form-group col-md-6 box-section col-sm-12">
													<span>subt&iacute;tulo</span>
													<input class="form-control" placeholder="Subt&iacute;tulo espa&ntilde;ol">
													<input class="form-control" placeholder="Subt&iacute;tulo ingl&eacute;s">
												</div>

											</div>
											<div class="col-md-6 col-sm-12">
												<div class="form-group col-md-6 col-sm-12">
													<span>texto</span>
													<input class="form-control" placeholder="Texto espa&ntilde;ol">
													<input class="form-control" placeholder="Texto ingl&eacute;s">
												</div>
												<div class="form-group col-md-6 col-sm-12">
												</div>
											</div>
											<div class="panel-heading" style="overflow: hidden; margin-bottom: 30px;"></div>
											<div class="col-md-6 col-sm-12">
												<div class="form-group col-md-6 box-section col-sm-12">
													<span>&iacute;cono 1</span>
													<input class="form-control" placeholder="Texto espa&ntilde;ol">
													<input class="form-control" placeholder="Texto ingl&eacute;s">
													<!-- <input type="file"> -->
													<p class="help-block"></p>
												</div>
												<div class="form-group col-md-6 box-section col-sm-12">
													<span>&iacute;cono 2</span>
													<input class="form-control" placeholder="Texto espa&ntilde;ol">
													<input class="form-control" placeholder="Texto ingl&eacute;s">
													<!-- <input type="file"> -->
													<p class="help-block"></p>
												</div>
											</div>
											<div class="col-md-6 col-sm-12">
												<div class="form-group col-md-6 box-section col-sm-12">
													<span>&iacute;cono 3</span>
													<input class="form-control" placeholder="Texto espa&ntilde;ol">
													<input class="form-control" placeholder="Texto ingl&eacute;s">
													<!-- <input type="file"> -->
													<p class="help-block"></p>
												</div>
												<div class="form-group col-md-6 col-sm-12">
													<span>&iacute;cono 4</span>
													<input class="form-control" placeholder="Texto espa&ntilde;ol">
													<input class="form-control" placeholder="Texto ingl&eacute;s">
													<!-- <input type="file"> -->
													<p class="help-block"></p>
												</div>
											</div>
											<button type="submit" class="btn btn-primary edit-section" id="edit-section-1">Editar secci&oacute;n 2</button>
											<button type="submit" class="btn btn-danger edit-section" id="delete-section-2">Eliminar secci&oacute;n 2</button>
										</form>	
									</div>
								</div>
							</div>
						</div>
						<div class="row team-admin admin-nav">
							alalalal
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- QUIENES SOMOS ADMIN -->
<!--     <div class="col-sm-12 col-lg-12 main-admin-dashboard">			
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading"><a href=""><svg class="glyph stroked pencil edit-icon"><use xlink:href="#stroked-pencil"></use></svg></a>Qui&eacute;nes somos</div>
						<div class="panel-body">
							<form role="form" class="form-seccion-1">
								<div class="col-md-6">
									<div class="form-group col-md-6">
										<label>Secci&oacute;n 1</label> <span>espa&ntilde;ol</span>
										<input class="form-control" placeholder="T&iacute;tulo">
										<input class="form-control" placeholder="Subt&iacute;tulo">
									</div>
																	
									<div class="form-group col-md-6">
										<span>ingl&eacute;s</span>
										<input class="form-control" placeholder="T&iacute;tulo">
										<input class="form-control" placeholder="Subt&iacute;tulo">
									</div>
									<button type="submit" class="btn btn-primary">Editar</button>
								</div>
							</form>		
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> -->
    <!-- Scripts -->
    
    <script src="../../public/js/global/lumino.glyphs.js"></script>

    <!-- jQuery -->
    <script src="../../public/js/global/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../../public/js/global/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="../../public/js/global/jqueryeasing.js"></script>
    <!--<script src="../../public/js/global/classie.js"></script>
    <script src="../../public/js/global/cbpAnimatedHeader.js"></script>-->

    <!-- Contact Form JavaScript -->
    <script src="../../public/js/global/jqBootstrapValidation.js"></script>
    <script src="../../public/js/global/contact_me.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../../public/js/global/agency.js"></script>

    <!-- Actions -->
    <script src="../../public/js/actions/dashboard.js"></script>
</body>

</html>
