<!DOCTYPE html>
<html class="no-js"> 
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Blink!</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--CSS-->
	<!--<link rel="stylesheet" type="text/css" href="css/main.css">-->
	<link rel="stylesheet" href="../public/css/bootstrap.min.css" >

    <!-- Custom CSS -->
    <link rel="stylesheet" href="../public/css/styles_default.css">
    <link rel="stylesheet" href="../public/css/main.css">
    <link rel="stylesheet" href="../public/css/login.css">
    <link rel="shortcut icon" type="image/png" href="../public/img/icon_tab.png"/>

</head>
<body>

    <nav class="navbar navbar-default navbar-fixed-top navbar-login">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- href="#page-top"-->
                <a class="navbar-brand page-scroll" href="../index.html" style="margin-top: -14px; padding: 0;"><img alt="Blink app" title="Blink app" src="../public/img/logo_small.svg" id="icon-top"></img></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="../index.html">blink!</a>
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
                        <a class="page-scroll" href="../index.html#contact">Contactate</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
    <section id="login_section">
        <div class="row">
            <div class="col-lg-12">
                <div class="login-box">
                    <div class="lb-header">
                        <a href="#login-box-link" class="active" id="login-box-link">Inici&aacute; sesi&oacute;n</a>
                        <a href="#signup-box-link" id="signup-box-link">Registrate</a>
                    </div>
                    <?php 

                        require_once("../back/admin/connection.php");
                        $connection = new connection;

                        if(!mysqli_connect_error()){
                            echo "no errror;";
                        }else{
                            echo "errror;";
                        }

                    ?>
                    <form action="user-login" class="email-login">
                        <div class="u-form-group">
                            <input type="email" placeholder="Usuario o email"/>
                        </div>
                        <div class="u-form-group">
                            <input type="password" placeholder="Contrase&ntilde;a"/>
                        </div>
                        <div class="u-form-group" style="margin-top:20px">
                            <a href="logged_in.html" class="btn-xl">Acceder</a>
                        </div>
                        <div class="u-form-group">
                            <a href="#" class="forgot-password">&#191;Olvidaste tu contrase&ntilde;a?</a>
                        </div>
                    </form>
                    <?php include '../back/user/createUser.php';?>
                    <form action="user-signin" class="email-signup">
                        <div class="u-form-group">
                            <input type="email" placeholder="Nombre de usuario"/>
                        </div>
                        <div class="u-form-group">
                            <input type="password" placeholder="Contrase&ntilde;a"/>
                        </div>
                        <div class="u-form-group">
                            <input type="password" placeholder="Confirmar contrase&ntilde;a"/>
                        </div>
                        <div class="u-form-group">
                            <input type="email" placeholder="Email"/>
                        </div>
                        <div class="u-form-group">
                            <input type="telephone" placeholder="Celular"/>
                        </div>
                        
                        <div class="u-form-group" style="margin-top:20px">
                            <a href="logged_in.html" class="btn-xl">Crear cuenta</a>
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
    <script src="../public/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../public/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="../public/js/jqueryeasing.js"></script>
    <script src="../public/js/classie.js"></script>
    <script src="../public/js/cbpAnimatedHeader.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="../public/js/jqBootstrapValidation.js"></script>
    <script src="../public/js/contact_me.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../public/js/agency.js"></script>

    <!-- Actions -->
    <script src="../public/js/actions.js"></script>
    <script src="../public/js/login.js"></script>
</body>
</html>
