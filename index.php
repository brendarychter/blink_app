<!DOCTYPE html>
<html class="no-js"> 
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Blink App - Home</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--CSS-->
    <link rel="stylesheet" type="text/css" href="public/css/content.css">
    <link rel="stylesheet" href="public/css/bootstrap.css" >

    <!-- Custom CSS -->
    <link rel="stylesheet" href="public/css/styles_default.css">
    <link rel="shortcut icon" type="image/png" href="public/img/icon_tab.png"/>
    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body id="page-top" class="index landing-main-page">
    <!-- Navigation -->
    <?php include('content/header.php');?> 
    
    <!-- Header -->
    <header id="main-page">
        <div class="container">
            <div class="intro-text">
                <div class="intro-lead-in">Una &uacute;nica aplicaci&oacute;n. Todo lo que necesitas.</div>
                <div class="intro-heading">Tus grupos en un mismo lugar</div>
                <!--<a href="#conoce" class="page-scroll btn btn-xl" style="margin-right:5px">Conoc&eacute; m&aacute;s</a>-->
                <a href="#download-app" class="page-scroll btn btn-xl">Descarg&aacute; la app</a>
            </div>
        </div>
    </header>

    <!-- conoce Section -->
    <section id="conoce">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">&#191;Qu&eacute; es blink?</h2>
                    <h3 class="section-subheading text-muted"> &#191;Ten&eacute;s un grupo de amigos de la facultad? &#191;Otro de la oficina? &#191;De f&uacute;tbol o baile?</br><span >Blink te permite comunicarte con todos ellos desde un mismo lugar.</span> </br>
                    <span class="description-conoce">Es una herramienta, un aliado en tu d&iacute;a a d&iacute;a. Es la mejor manera de mantenerte informado todo el tiempo de todo lo que pasa en tus grupos al recibir notificaciones en el momento en que tus amigos publican contenidos.</span></h3>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-3">
                    <h4 class="service-heading"><img src="public/img/group.svg" /></h4>
                    <p class="text-muted">Cre&aacute; todos los grupos que necesites</p>
                </div>
                <div class="col-md-3">
                    <h4 class="service-heading"><img src="public/img/hour.svg" /></h4>
                    <p class="text-muted">Llev&aacute; un registro de los gastos grupales</p>
                </div>
                <div class="col-md-3">
                    <h4 class="service-heading"><img src="public/img/calendar.svg" /></h4>
                    <p class="text-muted">No te olvides de ning&uacute;n evento</p>
                </div>
                <div class="col-md-3">
                    <h4 class="service-heading"><img src="public/img/chat.svg" /></h4>
                    <p class="text-muted">Enterate de las &uacute;ltimas novedades</p>
                </div>
            </div>
            <div class="know-more">
                <a href="#conoce-mas" class="page-scroll btn btn-xl"id="more-info">Todav&iacute;a quiero saber m&aacute;s</a>
            </div>
        </div>
    </section>

    <section id="demo">
        <img src="public/img/play.svg" class="demo-img"><br><br>
        <p class="demo_description">
            Video en construcci&oacute;n
        </p>
    </section>
    <section id="download-app">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center download-application">
                    <img src="public/img/qr_app_example.png">
                    <h2 class="section-heading text-app">Descargate la aplicaci&oacute;n para el celular</h2>
                    <h3 class="section-subheading text-muted">Vas a poder acceder a las novedades m&aacute;s r&aacute;pidamente y usar la aplicaci&oacute;n de forma m&aacute;s c&oacute;moda y eficiente</h3>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Contactate</h2>
                    <h3 class="section-subheading text-muted">&iexcl;Queremos saber tu opini&oacute;n!</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Nombre *" id="name" required data-validation-required-message="Por favor ingresa tu nombre">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Mail *" id="email" required data-validation-required-message="Por favor ingresa tu mail.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="tel" class="form-control" placeholder="N&uacute;mero de tel&eacute;fono" id="phone" required data-validation-required-message="Por favor ingresa tu n&uacute;mero de tel&eacute;fono.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Tu mensaje *" id="message" required data-validation-required-message="Por favor ingresa tu mensaje."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button type="submit" class="btn btn-xl">Enviar mensaje</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <?php
        include 'content/footer.php';
    ?>

    <!-- Scripts -->
    
    <!-- jQuery -->
    <script src="public/js/global/jquery.js"></script>
    
    <script src="public/js/actions/load.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="public/js/global/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="public/js/global/jqueryeasing.js"></script>
    <script src="public/js/global/classie.js"></script>
    <script src="public/js/global/cbpAnimatedHeader.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="public/js/global/jqBootstrapValidation.js"></script>
    <script src="public/js/global/contact_me.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="public/js/global/agency.js"></script>


</body>
</html>