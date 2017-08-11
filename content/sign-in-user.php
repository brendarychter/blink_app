<!DOCTYPE html>
<html class="no-js"> 
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sign up - Blink!</title>
    <meta name="description" content="Registrate en la plataforma de Blink App y conectate con tus amigos">
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
        @media (max-width: 500px) and (min-width: 1px){
            register_users.css:18
            .g-recaptcha {
                transform: scale(0.77);
                transform-origin: 0 0;
            }
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
                    <div class="panel-heading">S I G N &nbsp; U P</div>
                    <div class="panel-body">
                        <form role="form" id="signin-user-form" method="post">
                            <div class="messages"></div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Ingrese su nombre" name="nombre-usuario" type="input" autofocus="" id="new-user" style="border-radius: 0;" required />
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Ingrese su email" name="email-usuario" type="email" value="" id="new-mail" style="border-radius: 0;" required />
                            </div>
                            <div class="form-group">
                                <input id="form_phone" type="tel" name="phone-usuario" class="form-control" placeholder="Ingrese su n&uacute;mero de tel&eacute;fono" id="new-phonenumber" >
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Ingrese su nombre de usuario" name="username-usuario" type="input" autofocus="" id="new-username" style="border-radius: 0;" required />
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Ingrese una contrase&ntilde;a" name="password-usuario" type="password" value="" id="new-passowrd" style="border-radius: 0;" required />
                            </div>
                            <div class="form-group">
                                <div class="g-recaptcha" data-sitekey="6Le78ScUAAAAAIwMiCcAfjo6XputN6OYM3LXyLQx"></div>
                            </div>
                            <div class="form-group">
                                <form method="post" enctype="multipart/form-data" id="imageUploadFormUser" data-form="">
                                    <input class="titulo-img form-control" data-title="title-2" type="text" placeholder="Seleccione una imagen de usuario" name="titulo" required style="width: 100%; margin-bottom: 10px;"/>
                                    <input type="file" class="imagen-img" data-img="img-2" name="imagen" data-id="" data-section="2" data-url="" data-num="2" required/>
                                </form>
                            </div>
                            <input type="submit" class="btn btn-primary btn-send send-form" id="signup-user" value="Iniciar sesi&oacute;n">
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
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <script src="../public/js/global/jquery.js"></script>
    <script src="../public/js/global/bootstrap.min.js"></script>
    <script src="../public/js/contact/validator.js"></script>
    <script src="../public/js/actions/signinUser.js"></script>

</body>
</html>
