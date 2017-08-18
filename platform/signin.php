<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Panel de Administraci&oacute;n - Blink App</title>

	<!--CSS-->
	<link rel="stylesheet" href="../public/css/datepicker3.css">
	<link rel="stylesheet" href="../public/css/bootstrap.css" >
	<link rel="stylesheet" href="../public/css/styles_default.css">
	<link rel="stylesheet" href="../public/css/register_users.css">

	<link rel="shortcut icon" type="image/png" href="../public/img/icon_tab.png"/>
    <link rel="shortcut icon" type="image/png" href="" class="img_icon_menu" />
	
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
	<style type="text/css">
		@media (max-width: 500px) and (min-width: 1px){
            register_users.css:18
            .g-recaptcha {
                transform: scale(0.77);
                transform-origin: 0 0;
            }
        }
	</style>
	</head>
<body>
	<div class="row">
	</div>
	<div class="row">
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default" style="border-radius: 0; margin-top: 120px">
				<img src="../public/img/logo.svg" alt="Blink App" title="Blink App" class="logo-login">
				<h2>Blink App</h2>
				<h3>Panel de Administraci&oacute;n</h3>
				<div class="panel-heading">S I G N &nbsp; U P</div>
				<div class="panel-body">
					<form role="form" id="signin-admin-form" method="post">
						<div class="messages"></div>
						<fieldset>
							<div class="form-group">
								<input class="form-control" placeholder="Ingrese su nombre" name="nombre" type="input" autofocus="" id="nombre-admin" style="border-radius: 0;" required />
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Ingrese su nombre de usuario" name="username" type="input" autofocus="" id="usuario-admin" style="border-radius: 0;" required />
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Ingrese su contrase&ntilde;a" name="password" type="password" value="" id="contra-admin" style="border-radius: 0;" required />
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Ingrese su email" name="email" type="email" value="" id="mail-admin" style="border-radius: 0;" required />
							</div>
                            <div class="form-group">
                                <div class="g-recaptcha" data-sitekey="6Le78ScUAAAAAIwMiCcAfjo6XputN6OYM3LXyLQx"></div>
                            </div>
                            <button type="submit" class="btn btn-primary btn-send send-form" id="signin-admin" value="Registrarme">Registrarme</button>
						</fieldset>
					</form>
				</div>
			</div>
		</div>
	</div>
	
	<script src='https://www.google.com/recaptcha/api.js'></script>
	<script src="../public/js/global/jquery.js"></script>
	<script src="../public/js/global/bootstrap.min.js"></script>
    <script src="../public/js/contact/validator.js"></script>
	<script src="../public/js/actions/signinAdmin.js"></script>

</body>

</html>
