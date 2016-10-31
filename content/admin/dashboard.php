<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Lumino - Dashboard</title>

	<link href="../../public/css/bootstrap.css" rel="stylesheet">
	<link href="../../public/css/datepicker3.css" rel="stylesheet">
	<link href="../../public/css/styles_dashboard.css" rel="stylesheet">
	<link href="../../public/css/content.css" rel="stylesheet">


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
	<div class="col-sm-12 col-lg-12 main-admin-dashboard">			
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading"><a href=""><svg class="glyph stroked pencil edit-icon"><use xlink:href="#stroked-pencil"></use></svg></a>Home - Landing page</div>
						<div class="panel-body">
							<form role="form" class="form-seccion-1">
								<div class="col-md-6">
									<div class="form-group col-md-6">
										<label>Secci&oacute;n 1</label> <span style="float: right;">espa&ntilde;ol</span>
										<input class="form-control" placeholder="T&iacute;tulo">
										<input class="form-control" placeholder="Subt&iacute;tulo">
									</div>
																	
									<div class="form-group col-md-6">
										<span style="float: right;">ingl&eacute;s</span>
										<input class="form-control" placeholder="T&iacute;tulo">
										<input class="form-control" placeholder="Subt&iacute;tulo">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group col-md-6">
										<label>Secci&oacute;n 1</label> <span style="float: right;">espa&ntilde;ol</span>
										<input class="form-control" placeholder="T&iacute;tulo">
										<input class="form-control" placeholder="Subt&iacute;tulo">
									</div>
																	
									<div class="form-group col-md-6">
										<span style="float: right;">ingl&eacute;s</span>
										<input class="form-control" placeholder="T&iacute;tulo">
										<input class="form-control" placeholder="Subt&iacute;tulo">
									</div>
								</div>
									<button type="submit" class="btn btn-primary" style="float:right">Editar</button>
							</form>		
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- QUIENES SOMOS ADMIN -->
    <div class="col-sm-12 col-lg-12 main-admin-dashboard">			
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading"><a href=""><svg class="glyph stroked pencil edit-icon"><use xlink:href="#stroked-pencil"></use></svg></a>Qui&eacute;nes somos</div>
						<div class="panel-body">
							<form role="form" class="form-seccion-1">
								<div class="col-md-6">
									<div class="form-group col-md-6">
										<label>Secci&oacute;n 1</label> <span style="float: right;">espa&ntilde;ol</span>
										<input class="form-control" placeholder="T&iacute;tulo">
										<input class="form-control" placeholder="Subt&iacute;tulo">
									</div>
																	
									<div class="form-group col-md-6">
										<span style="float: right;">ingl&eacute;s</span>
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
	</div>
    <!-- Scripts -->
    
    <script src="../../public/js/global/lumino.glyphs.js"></script>

    <!-- jQuery -->
    <script src="../../public/js/global/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../../public/js/global/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="../../public/js/global/jqueryeasing.js"></script>
    <script src="../../public/js/global/classie.js"></script>
    <script src="../../public/js/global/cbpAnimatedHeader.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="../../public/js/global/jqBootstrapValidation.js"></script>
    <script src="../../public/js/global/contact_me.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../../public/js/global/agency.js"></script>

    <!-- Actions -->
    <script src="../../public/js/actions/dashboard.js"></script>
</body>

</html>
