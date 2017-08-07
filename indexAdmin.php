<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Panel de Administraci&oacute;n - Blink App</title>

	<!--CSS-->
	<link rel="stylesheet" href="public/css/datepicker3.css">
	<link rel="stylesheet" href="public/css/bootstrap.css" >
	<link rel="stylesheet" href="public/css/styles_default.css">
	<link rel="stylesheet" href="public/css/register_users.css">

	<link rel="shortcut icon" type="image/png" href="public/img/icon_tab.png"/>
    <link rel="shortcut icon" type="image/png" href="" class="img_icon_menu" />
	
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
	</head>
<body>
	<main>
		<div class="row">
			<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
				<div class="login-panel panel panel-default" style="border-radius: 0; margin-top: 120px">
					<img src="public/img/logo.svg" alt="Blink App" title="Blink App" class="logo-login">
					<h2>Blink App</h2>
					<h3>Panel de Administraci&oacute;n</h3>
					<div class="panel-heading">L O G &nbsp; I N</div>
					<div class="panel-body">
						<form role="form" id="login-admin-form" method="post">
							<div class="messages"></div>
							<fieldset>
								<div class="form-group">
									<input class="form-control" placeholder="Usuario" name="email" type="input" autofocus="" id="username-admin" style="border-radius: 0;" required />
								</div>
								<div class="form-group">
									<input class="form-control" placeholder="Contrase&ntilde;a" name="password" type="password" value="" id="pass-admin" style="border-radius: 0;" required />
								</div>
	                            <input type="submit" class="btn btn-primary btn-send send-form" id="login-admin" value="Iniciar sesi&oacute;n">
	                            <div class="sign-in-admin">
	                            	<span>&iquest;Necesitas una cuenta?</span><a href="sign-in-admin.php" class="register">Registrate</a>
	                            </div>
							</fieldset>
						</form>
					</div>
				</div>
				<div class="alert alert-danger fade in alert-dismissable" style="border-radius:0" id="error-log-in-admin">
	    			<a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>
					<strong>Por favor verifique sus datos</strong>
				</div>
			</div>
		</div>
	</main>
	

	<script src="public/js/global/jquery.js"></script>
	<script src="public/js/actions/loginAdmin.js"></script>
	<script src="public/js/global/bootstrap.min.js"></script>

</body>

</html>
