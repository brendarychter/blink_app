<!DOCTYPE html>
<html class="no-js"> 
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Log in - Blink!</title>
    <meta name="description" content="Ingresa a la plataforma de Blink App y conectate con tus amigos">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--CSS-->
	<link rel="stylesheet" href="../public/css/bootstrap.css" >

    <!-- Custom CSS -->
    <link rel="stylesheet" href="../public/css/styles_default.css">
    <link rel="stylesheet" href="../public/css/content.css">
    <link rel="stylesheet" href="../public/css/register_users.css">
    <link rel="shortcut icon" type="image/png" href="../public/img/icon_tab.png" class="img_icon_menu" />
    
    <style type="text/css">
        .logandsign {
            display: none;
        }
    </style>

    <!-- Analytics -->
    <script src="../public/js/actions/ga_commons.js"></script>
</head>
<body> <!-- id="page-top" class="index landing-main-page" -->
    <!-- <header> -->
    <?php
        include 'header.php';
    ?>
    <!-- </header> -->

    <main>
        <div class="row">
            <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default" style="border-radius: 0; margin-top: 120px">
                    <img src="../public/img/logo.svg" alt="Blink App" title="Blink App" class="logo-login">
                    <h2>Blink App</h2>
                    <div class="panel-heading">L O G &nbsp; I N</div>
                    <div class="panel-body">
                        <form role="form" id="login-user-form" method="post">
                            <div class="messages"></div>
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Usuario" name="email" type="input" autofocus="" id="username-user" style="border-radius: 0;" required />
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Contrase&ntilde;a" name="password" type="password" value="" id="pass-user" style="border-radius: 0;" required />
                                </div>
                                <input type="submit" class="btn btn-primary btn-send send-form" id="login-user" value="Iniciar sesi&oacute;n">
                                <div class="sign-in-user">
                                    <span>&iquest;Todav&iacute;a no ten&eacute;s cuenta?</span><a href="sign-in-user.php" class="register">Registrate</a>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
                <div class="alert alert-danger fade in alert-dismissable" style="border-radius:0" id="error-log-in-user">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>
                    <strong>Por favor verifique sus datos</strong>
                </div>
            </div>
        </div>
    </main>

    <!-- <footer> -->
    <?php
        include '../footer.php';
    ?>
    <!-- </footer> -->

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
    <script src="../public/js/actions/renameLocation.js"></script>
    
    <script type="text/javascript">
        $(document).ready(function(){
            $(".central-nav").removeClass("navbar-middle");
            $(".central-nav").addClass("navbar-right");
        })
    </script>
</body>
</html>
