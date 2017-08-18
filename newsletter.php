<!DOCTYPE html>
<html class="no-js"> 
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title class="newsletter_tab_title">Newsletter - Blink App</title>
    <meta name="description" content="Gracias por suscribirte!">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--CSS-->
    <link rel="stylesheet" href="public/css/bootstrap.css" >
    <link rel="stylesheet" type="text/css" href="public/css/content.css">


    <!-- Custom CSS -->
    <link rel="stylesheet" href="public/css/styles_default.css">
    <link rel="shortcut icon" type="image/png" href="public/img/icon_tab.png" class="img_menu" />
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
    <!-- Layer -->
    <div class="bck"></div>
    
    <?php
        include 'header.php';
    ?>

    <section class="general-container not-found-page">
        <img src="public/img/newsletter.svg" width="250px">
        <h1 class="title-newsletter newsletter_title">&iexcl;Gracias por suscribirte al newsletter!</h1>
        <h4 style="text-transform: inherit; margin-top: 20px;" class="subtitle-newsletter newsletter_subtitle">Revisa tu correo electr&oacute;nico para recibir las novedades</h4>
        <a href="index.php" style="margin-top: 15px" class="btn btn-xl button-newsletter newsletter_button">Volver a la p&aacute;gina de inicio</a>
    </section>

    <div class="no-newsletter">
        <?php
            include 'footer.php';
        ?>
    </div>
    
    <!-- Change language -->
    <script src="public/js/content/common-content.js"></script>
    <script src="public/js/content/newsletter-content.js"></script>
</body>
</html>