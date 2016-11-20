<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Blink - Panel de administraci&oacute;n</title>

	<link href="../../public/css/bootstrap.css" rel="stylesheet">
	<link href="../../public/css/datepicker3.css" rel="stylesheet">
	<link href="../../public/css/styles_dashboard.css" rel="stylesheet">
	<link href="../../public/css/_admin.css" rel="stylesheet">

	<link rel="shortcut icon" type="image/png" href="../../public/img/icon_tab.png"/>
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->


</head>

<body>
	<div class="row panel" style="padding:10px;margin-bottom:0;padding-left:20px">
		<div class="col-md-12 col-sm-12">
			<label style="text-align: center; margin: 0 auto; display: block;"><a href="../../index.php" target="_blank">Ver sitio</a></label>
		</div>
	</div>
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
						  	<!-- <div class="panel-heading"><a href=""><svg class="glyph stroked pencil edit-icon"><use xlink:href="#stroked-pencil"></use></svg></a>Qui&eacute;nes somos</div>-->
						 	<li role="presentation" class="toggle-nav-admin" id="conoce-admin"><a href="#">P&aacute;gina 1</a></li>
						 	<li role="presentation" class="toggle-nav-admin" id="use-admin"><a href="#">P&aacute;gina 2</a></li>
						  	<li role="presentation" class="toggle-nav-admin" id="faq-admin"><a href="#">P&aacute;gina 3</a></li>
						 	<li role="presentation" class="toggle-nav-admin" id="team-admin"><a href="#">P&aacute;gina 4</a></li>
						</ul>
					</div>
					<!-- QUIENES SOMOS ADMIN -->
				    <div class="col-lg-12 col-sm-12 col-md-12 tab-admin-page">			
						<div class="row home-admin admin-nav active">
							<?php
						        include 'partials/home-admin.php';
						    ?>
						</div>
						<div class="row conoce-admin admin-nav">
						</div>
						<div class="row team-admin admin-nav">
							<?php
						    ?>
						</div>
						<div class="row use-admin admin-nav">
							<?php
						    ?>
						</div>
						<div class="row faq-admin admin-nav">
							<?php
						    ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
    
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
    <script src="../../public/js/global/jquery.validate.min.js"></script>
    <script src="../../public/js/actions/dashboard.js"></script>
    <script type="text/javascript">
	/* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
	function myFunction() {
	    var x = document.getElementById("myTopnav");
	    if (x.className === "topnav") {
	        x.className += " responsive";
	    } else {
	        x.className = "topnav";
	    }
	}
    </script>
</body>

</html>
