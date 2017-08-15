<!DOCTYPE html>
<html class="no-js"> 
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title class="log_in_tab_title">Iniciar sesión - Blink!</title>
    <meta name="description" content="Ingresa a la plataforma de Blink App y conectate con tus amigos">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--CSS-->
	<link rel="stylesheet" href="../public/css/bootstrap.css" >

    <!-- Custom CSS -->
    <link rel="stylesheet" href="../public/css/styles_default.css">
    <link rel="stylesheet" href="../public/css/content.css">
    <link rel="stylesheet" href="../public/css/register_users.css">
    <link rel="shortcut icon" type="image/png" href="../public/img/icon_tab.png" class="img_menu" />
    
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
                <div class="login-panel panel panel-default" style="border-radius: 0; margin-top: 170px; margin-bottom: 100px;">
                    <img src="../public/img/logo.svg" alt="Blink App" title="Blink App" class="logo-login">
                    <h2>Blink App</h2>
                    <div class="panel-heading">L O G &nbsp; I N</div>
                    <div class="panel-body">
                        <form role="form" id="login-user-form" method="post">
                            <div class="messages"></div>
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control log_in_username" placeholder="Usuario" name="email" type="input" autofocus="" id="username-user" style="border-radius: 0;" required />
                                </div>
                                <div class="form-group">
                                    <input class="form-control log_in_password" placeholder="Contrase&ntilde;a" name="password" type="password" value="" id="pass-user" style="border-radius: 0;" required />
                                </div>
                                <input type="submit" class="btn btn-primary btn-send send-form log_in_button" id="login-user" value="Iniciar sesi&oacute;n">
                                <div class="sign-in-user">
                                    <span class="log_in_message">&iquest;Todav&iacute;a no ten&eacute;s cuenta?</span><a href="sign-in-user.php" class="register log_in_sign_in">Registrate</a>
                                </div>
                            </fieldset>
                        </form>
                    </div>
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

    <!-- Custom Theme JavaScript -->
    <script src="../public/js/global/agency.js"></script>

    <!-- Actions -->
    <script src="../public/js/actions/login.js"></script>
    <script src="../public/js/actions/renameLocation.js"></script>
    <script src="../public/js/contact/validator.js"></script>

    <!-- Change language -->
    <script src="../public/js/content/common-content.js"></script>
    <script src="../public/js/content/log-in-content.js"></script>
    
    <script type="text/javascript">
        $(document).ready(function(){
            $(".central-nav").removeClass("navbar-middle");
            $(".central-nav").addClass("navbar-right");
        })
    </script>
</body>
</html>
