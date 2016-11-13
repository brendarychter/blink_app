<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Panel de Administraci&oacute;n - Blink App</title>

	<!--CSS-->
	<link rel="stylesheet" href="public/css/datepicker3.css">
	<link rel="stylesheet" type="text/css" href="public/css/content.css">
	<link rel="stylesheet" href="public/css/bootstrap.css" >
	<link rel="stylesheet" href="public/css/styles_default.css">
	<link rel="shortcut icon" type="image/png" href="public/img/icon_tab.png"/>
	    
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
	<style type="text/css">
        input, .btn {
            border-radius: 0;
        }
        h2, h3{
        	padding: 0 9px;
        }
    </style>
	</head>
<body>
	<div class="row">
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default" style="border-radius: 0; margin-top: 120px">
				<h2>Panel de Administraci&oacute;n</h2>
				<h3>Blink App</h3>
				<div class="panel-heading">Log in</div>
				<div class="panel-body">
					<form role="form">
						<fieldset>
							<div class="form-group">
								<input class="form-control" placeholder="Usuario" name="email" type="input" autofocus="" id="username-admin" style="border-radius: 0">
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Contrase&ntilde;a" name="password" type="password" value="" id="pass-admin" style="border-radius: 0">
							</div>
							<div class="checkbox">
								<label>
									<input name="remember" type="checkbox" value="Remember Me">Recordarme
								</label>
							</div>
							<a href="#" class="btn btn-primary" id="login-admin">Iniciar sesi&oacute;n</a>
						</fieldset>
					</form>
				</div>
			</div>
		</div><!-- /.col-->
	</div><!-- /.row -->	
	

	<script src="public/js/global/jquery.js"></script>
	<script src="public/js/actions/loginAdmin.js"></script>
	<script src="public/js/global/bootstrap.min.js"></script>

	<script>
		// !function ($) {
		// 	$(document).on("click","ul.nav li.parent > a > span.icon", function(){		  
		// 		$(this).find('em:first').toggleClass("glyphicon-minus");	  
		// 	}); 
		// 	$(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
		// }(window.jQuery);

		// $(window).on('resize', function () {
		//   if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
		// })
		// $(window).on('resize', function () {
		//   if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
		// })
	</script>	
</body>

</html>
