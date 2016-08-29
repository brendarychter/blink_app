<!DOCTYPE html>
<html class="no-js"> 
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Blink!</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--CSS-->
	<link rel="stylesheet" type="text/css" href="../public/css/main.css">
	<link rel="stylesheet" href="../public/css/bootstrap.css" >

    <!-- Custom CSS -->
    <link rel="stylesheet" href="../public/css/styles_default.css">
    <link rel="stylesheet" href="../public/css/main.css">
    <link rel="stylesheet" href="../public/css/login.css">
    <link rel="shortcut icon" type="image/png" href="../public/img/icon_tab.png"/>
    <style type="text/css">
        .login-section .navbar-default .container .navbar-home .logandsign {
            display: none;
        }
    </style>
</head>
<body>
    <div class="login-section">
        <?php include('header.php');?> 
    </div>

    <section id="login_section">
        <div class="row">
            <div class="col-lg-12">
                <div class="login-box">
                    <div class="lb-header">
                        <a href="#login-box-link" class="active" id="login-box-link">Inici&aacute; sesi&oacute;n</a>
                        <a href="#signup-box-link" id="signup-box-link">Registrate</a>
                    </div>

                    <form class="email-login">
                        <div class="u-form-group">
                            <input type="email" placeholder="Nombre de usuario" id="username-login" name="username-login"/>
                        </div>
                        <div class="u-form-group">
                            <input type="password" placeholder="Contrase&ntilde;a" id="password-login" name="password-login"/>
                        </div>
                        <div class="u-form-group" style="margin-top:20px">
                            <a href="" id="log-in-app" class="btn-xl">Acceder</a>
                        </div>
                        <input type="hidden" name="userID" id="userID"></input>
                        <div class="u-form-group">
                            <a href="#" class="forgot-password">&#191;Olvidaste tu contrase&ntilde;a?</a>
                        </div>
                    </form>

                    <form class="email-signup">
                        <div class="u-form-group">
                            <input type="email" placeholder="Nombre de usuario" id="username-signin" name="username-signin"/>
                        </div>
                        <div class="u-form-group">
                            <input type="password" placeholder="Contrase&ntilde;a" id="password-signin" class="password-login" name="password-signin"/>
                        </div>
                        <div class="u-form-group">
                            <input type="password" placeholder="Confirmar contrase&ntilde;a" class="password-signin"/>
                        </div>
                        <div class="u-form-group">
                            <input type="email" placeholder="Email" id="mail-signin" name="mail-signin"/>
                        </div>
                        <div class="u-form-group">
                            <input type="telephone" placeholder="Celular" id="mobile-signin" name="mobile-signin"/>
                        </div>
                        <input type="hidden" name="userID" id="userID"></input>
                        <div class="u-form-group" style="margin-top:20px">
                            <a href="#" id="sign-in-app" class="btn-xl">Crear cuenta</a>
                        </div>
                    </form>
                    <!--<div class="legales">
                        <a href="#">T&eacute;rminos</a>
                        <a href="#">Privacidad</a>
                        <a href="#">Seguridad</a>
                        <a href="#">Contacto</a>
                    </div>-->
                </div>
            </div>
        </div>
    </section>
    <!--<footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <span class="copyright">Copyright &copy; Blink App 2016</span>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline quicklinks">
                        <li><a href="#">Pol&iacute;ticas de privacidad</a>
                        </li>
                        <li><a href="#">T&eacute;rminos de uso</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>-->
    <!-- Scripts -->
    
    <!-- jQuery -->
    <script src="../public/js/global/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../public/js/global/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="../public/js/global/jqueryeasing.js"></script>
    <script src="../public/js/global/classie.js"></script>
    <script src="../public/js/global/cbpAnimatedHeader.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="../public/js/global/jqBootstrapValidation.js"></script>
    <script src="../public/js/global/contact_me.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../public/js/global/agency.js"></script>

    <!-- Actions -->
    <script src="../public/js/actions/login.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $(".central-nav").removeClass("navbar-middle");
            $(".central-nav").addClass("navbar-right");
        })
    </script>
</body>
</html>
