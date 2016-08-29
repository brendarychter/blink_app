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
    <link rel="stylesheet" href="../public/css/application.css">
    <link rel="shortcut icon" type="image/png" href="../../public/img/icon_tab.png"/>
</head>
<body style="background-color: #4acaa8">
    <nav class="navbar navbar-default navbar-fixed-top navbar-logged-in">
        <div class="container">
            <div class="navbar-header page-scroll">
                <a class="navbar-brand page-scroll" href="../index.php" style="margin-top: -14px; padding: 0;"><img alt="Blink app" title="Blink app" src="../public/img/logo_small.svg" id="icon-top"></img></a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <!-- <li>
                        <a id="my-profile-btn" href="#">Mi perfil</a>
                    </li> -->
                    <li>
                        <a class="notification-icon" href="#"></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Header -->
    <div class='application-content'>
        <div class="groups row" id="grupos">
            <div class="actions">
                <div>
                    <button style="background-color: #222; padding:8px; color: #fff; border: none;">+ CREAR GRUPO</button>
                </div>
            </div>
            <!-- <div class="my-groups">
                <div class="col-md-4 col">
                    asdads
                </div>
                <div class="col-md-4 col">
                    asdasd
                </div>
                <div class="col-md-4 col">
                    asdads
                </div>
            </div> -->
        </div>
        <div class="groups row" id="ajustes">
            <span style="color: #222;">AJUSTES</span>
            <form class="user-config">
                <div class="u-form-group">
                    <input type="text" placeholder="Nombre de usuario" id="username-logged" name="username-logged"/>
                </div>
                <div class="u-form-group">
                    <input type="text" placeholder="Contrase&ntilde;a" id="password-logged" name="password-logged"/>
                </div>
                <div class="u-form-group">
                    <input type="text" placeholder="Email" id="mail-logged" name="mail-logged"/>
                </div>
                <div class="u-form-group">
                    <input type="text" placeholder="Celular" id="mobile-logged" name="mobile-logged"/>
                </div>
                <div style="padding-top:10px;">
                    <button id="modify-user" style="background-color: #222; padding:8px; color: #fff; border:none;">Modificar </button>
                    <button id="delete-user" style="background-color: #222; padding:8px; color: #fff; border:none;">Borrar cuenta</button>
                </div>
            </form>
        </div>
        <div class="profile-account">
            <div class="row">
                <div class="col-md-12">
                    <div id="header">
                        <header>
                            <span class="image avatar"><img style="background-color: #EEE" src="../public/img/camera.png" alt="" /></span>
                            <h1 id="logo"></h1>
                        </header>
                        <nav id="nav">
                            <ul>
                                <li><a href="#" class="menu-item activo" id="my-groups">Mis grupos</a></li>
                                <li><a href="#" id="create-group" class="menu-item">Crear grupo</a></li>
                                <li><a href="#" id="config-user" class="menu-item">Ajustes</a></li>
                                <li><a id="log-out" href="log_in.php" class="menu-item">Cerrar sesi&oacute;n</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    
    <!-- jQuery -->
    <script src="../public/js/global/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <!--<script src="../public/js/global/bootstrap.min.js"></script>-->

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
    <script src="../public/js/actions/application.js"></script>
</body>
</html>
