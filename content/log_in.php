<!DOCTYPE html>
<html class="no-js"> 
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Blink!</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--CSS-->
	<link rel="stylesheet" href="../public/css/bootstrap.css" >

    <!-- Custom CSS -->
    <link rel="stylesheet" href="../public/css/styles_default.css">
    <link rel="shortcut icon" type="image/png" href="../public/img/icon_tab.png"/>
    <style type="text/css">
        .login-section .navbar-default .container .navbar-home .logandsign {
            display: none;
        }
    </style>
</head>
<body id="page-top" class="index landing-main-page">
    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top navbar-login">
        <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="../index.php" style="margin-top: -14px; padding: 0;"><img alt="Blink app" title="Blink app" src="../public/img/logo_small.svg" id="icon-top"></img></a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="../index.php">blink!</a>
                    </li>
                     <li>
                        <a class="page-scroll" href="#">Conoc&eacute; m&aacute;s</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#">Demo</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#">FAQ</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#">Qui&eacute;nes somos</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="../index.php#contact">Contactate</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Header -->
    <header id="main-page">
        <div class="container">
            <div class="intro-text" style="padding-top:100px; padding-bottom: 200px;">
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    
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
