<!DOCTYPE html>
<html class="no-js"> 
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Log in - Blink!</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--CSS-->
	<link rel="stylesheet" href="../public/css/bootstrap.css" >

    <!-- Custom CSS -->
    <link rel="stylesheet" href="../public/css/styles_default.css">
    <link rel="stylesheet" href="../public/css/content.css">
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
                <a class="navbar-brand page-scroll" href="../index.php" style="margin-top: -14px; padding: 0;"><img class="img_menu" alt="" title="" src="" id="icon-top" style="height:80px;padding:10px"></img></a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                    <a href="#page-top"></a>
                    </li>
                    <li class="section_1">
                        <a class="page-scroll blink_menu" href="../index.php#main-page">blink!</a>
                    </li>
                    <li>
                        <a class="page-scroll works_menu" id="page-works" href="how_it_works.php">Conoc&eacute; m&aacute;s</a>
                    </li>
                    <li>
                        <a class="page-scroll demo_menu" id="page-demo" href="demo.php">Demo</a>
                    </li>
                    <li>
                        <a class="page-scroll faq_menu" id="page-faq" href="faq.php">FAQ</a>
                    </li>
                    <li>
                        <a class="page-scroll team_menu" id="page-team" href="team.php">Qui&eacute;nes somos</a>
                    </li>
                    <li>
                        <a class="page-scroll contact_menu" href="../index.php#contact">Contactate</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Header -->
    <!-- <header id="main-page"> -->
        <div class="container">
            <div class="intro-text" style="padding-top:100px">
                <div class="row">
                    <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
                        <div class="login-panel panel panel-default" style="border-radius: 0; margin-top: 80px">
                            <div class="login-box">
                                <div class="lb-header">
                                    <a href="#login-box-link" class="active" id="login-box-link" style="border-right: 1px solid #ccc;">Inici&aacute; sesi&oacute;n</a>
                                    <a href="#signup-box-link" id="signup-box-link">Registrate</a>
                                </div>

                                <form class="email-login" style="margin-top:70px">
                                    <div class="u-form-group">
                                        <input type="text" class="form-control" placeholder="Nombre de usuario" id="username-login" name="username-login" required/>
                                    </div>
                                    <div class="u-form-group">
                                        <input type="password" class="form-control" placeholder="Contrase&ntilde;a" id="password-login" name="password-login" required/>
                                    </div>
                                    <div class="u-form-group" style="margin-top:95px">
                                        <button type="submit" id="log-in-app" class="btn-xl">Acceder</button>
                                    </div>
                                    <input type="hidden" name="userID" id="userID"></input>
                                    <div class="u-form-group">
                                        <a href="#" class="forgot-password">&#191;Olvidaste tu contrase&ntilde;a?</a>
                                    </div>
                                </form>

                                <form class="email-signup">
                                    <div class="u-form-group">
                                        <input type="text" class="form-control" placeholder="Nombre de usuario" id="username-signin" name="username-signin" required />
                                    </div>
                                    <div class="u-form-group">
                                        <input type="password" class="form-control" placeholder="Contrase&ntilde;a" id="password-signin" class="password-login" name="password-signin" required/>
                                    </div>
                                    <div class="u-form-group">
                                        <input type="password" class="form-control" placeholder="Confirmar contrase&ntilde;a" class="password-signin" required/>
                                    </div>
                                    <div class="u-form-group">
                                        <input type="email" class="form-control" placeholder="Email" id="mail-signin" name="mail-signin"/>
                                    </div>
                                    <div class="u-form-group">
                                        <input type="telephone" class="form-control" placeholder="Celular" id="mobile-signin" name="mobile-signin"/>
                                    </div>
                                    <input type="hidden" name="userID" id="userID"></input>
                                    <div class="u-form-group" style="margin-top:10px">
                                        <button type="submit" id="sign-in-app" class="btn-xl">Acceder</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- </header>
 -->    
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
    <script src="../public/js/actions/loadMenu.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $(".central-nav").removeClass("navbar-middle");
            $(".central-nav").addClass("navbar-right");
        })
    </script>
</body>
</html>
