<!DOCTYPE html>
<html class="no-js"> 
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title class="demo_tab_title">Demo - Blink App</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--CSS-->
    <link rel="stylesheet" type="text/css" href="../public/css/content.css">
    <link rel="stylesheet" href="../public/css/bootstrap.css" >

    <!-- Custom CSS -->
    <link rel="stylesheet" href="../public/css/styles_default.css">
    <link rel="shortcut icon" type="image/png" href="../public/img/icon_tab.png" class="img_menu_1" />
    <link rel="stylesheet" href="../public/css/style.css">
    <link rel="stylesheet" href="../public/css/fonts.css">
    
    <!-- Analytics -->
    <script src="../public/js/actions/ga_commons.js"></script>
</head>
<body id="page-top" class="index landing-main-page">
    <!-- Layer -->
    <div class="bck">
        <video width="300" height="220" loop autoplay>
            <source src="../public/video/blink-app-loading.mp4" type="video/mp4">
        </video>
    </div>
    <?php 
        include('header.php');
    ?> 
    <header>
        <h1 class="demo_title_header">Blink App: tu nueva red social</h1>
        <h2 class="demo_subtitle_header">Y un nuevo concepto de interacci&oacute;n</h2>
        <p class="demo_text_header">Te mostramos un video informativo y las opiniones de los usuarios que la eligen</p>
    </header>
    <section id="portfolio" class="bg-light-gray" style="padding-top:50px">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="../public/img/portfolio/portfolio_1.jpg" class="img-responsive img_demo_1" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4 class="demo_user_1_name">Micaela Rolnik</h4>
                        <p class="text-muted demo_user_1_description">Excelente</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="../public/img/portfolio/portfolio_2.jpg" class="img-responsive img_demo_2" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4 class="demo_user_2_name">Sharon Perelmuter</h4>
                        <p class="text-muted demo_user_2_description">La uso todos los d&iacute;as</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal3" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="../public/img/portfolio/portfolio_3.jpg" class="img-responsive img_demo_3" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4 class="demo_user_3_name">Nicolas Di Santi</h4>
                        <p class="text-muted demo_user_3_description">Muy buena herramienta</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php
        include '../footer.php';
    ?>

    <!-- Scripts -->
    
    <!-- jQuery -->
    <script src="../public/js/global/jquery.js"></script>
    
    <!-- Bootstrap Core JavaScript -->
    <script src="../public/js/global/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="../public/js/global/jqueryeasing.js"></script>
    <script src="../public/js/global/classie.js"></script>
    <script src="../public/js/global/cbpAnimatedHeader.js" data-top="10"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../public/js/global/agency.js"></script>

    <!-- TIMELINE -->
    <script src="../public/js/global/index_timeline.js"></script>
    <script src="../public/js/actions/renameLocation.js"></script>

    <!-- Change language -->
    <script src="../public/js/content/common-content.js"></script>
    <script src="../public/js/content/demo-content.js"></script>
    
    <script type="text/javascript">
        $('#page-demo').closest('li').addClass("active");
    </script>
</body>
</html>