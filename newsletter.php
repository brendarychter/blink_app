<!DOCTYPE html>
<html class="no-js"> 
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Blink App - Home</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--CSS-->
    <link rel="stylesheet" href="public/css/bootstrap.css" >
    <link rel="stylesheet" type="text/css" href="public/css/content.css">


    <!-- Custom CSS -->
    <link rel="stylesheet" href="public/css/styles_default.css">
    <link rel="shortcut icon" type="image/png" href="public/img/icon_tab.png"/>
    <style type="text/css">
        .no-newsletter .newsletter, .no-newsletter .newsletter-title {
            display: none;
        }
        section{
            padding: 150px 150px;
            text-align: center;
        }
        h2{
            font-size: 18px;
        }
    </style>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="public/js/global/jquery.js"></script>
    
    <!-- Analytics -->
    <script src="public/js/actions/ga_commons.js"></script>
</head>
<body id="page-top" class="index landing-main-page main-page-blink">
        <nav class="navbar navbar-default navbar-fixed-top">
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
                <a class="navbar-brand page-scroll" href="#page-top" style="margin-top: -4px; padding: 0;"><img alt="" title="" src="public/img/logo.svg" class="img_menu" id="icon-top"></img></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-home" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-middle central-nav">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="section_1 page-section">
                        <a class="page-scroll blink_menu" href="#main-page">blink!</a>
                    </li>
                    <li class="section_2 page-section">
                        <a class="page-scroll works_menu" href="content/how_it_works.php">Conoc&eacute; m&aacute;s</a>
                    </li>
                    <li class="section_3 page-section">
                        <a class="page-scroll demo_menu" href="content/demo.php">Demo</a>
                    </li>
                    <li class="section_4 page-section">
                        <a class="page-scroll faq_menu" href="content/faq.php">FAQ</a>
                    </li>
                    <li class="section_5 page-section">
                        <a class="page-scroll team_menu" href="content/team.php">Qui&eacute;nes somos</a>
                    </li>
                    <li class="page-section">
                        <a class="page-scroll contact_menu" href="#contact">Contactate</a>
                    </li>
                    
                </ul>
                <ul class="nav navbar-nav navbar-right logandsign" id="logandsign">
                    <li>
                        <a class="button" href="content/log_in.php#login-box-link">Inici&aacute; sesi&oacute;n</a>
                    </li>
                    <li class="last-item-header">
                        <a class="button" href="content/log_in.php#signup-box-link"><b>Registrate</b></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <section>
        <img src="public/img/logo.svg" alt="Blink App" title="Blink App" style="width:100px">
        <h1>Te has suscripto satisfactoriamente al newsletter</h1>
        <h2>Revisa tu correo, pronto recibir&aacute;s informaci&oacute;n de las novedades de Blink</h2>
        <a href="index.php" style="text-transform: uppercase;font-weight:700;font-size:20px">Volver a la home</a>
    </section>
    <div class="no-newsletter">
        <?php
            include 'footer.php';
        ?>
    </div>
    
</body>
</html>