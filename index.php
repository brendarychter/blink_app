<!DOCTYPE html>
<html class="no-js" lang="es"> 
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title class="home_tab_title">Blink App - Home</title>
    <meta name="description" content="Blink app es una herramienta, un aliado en tu día a día. Es la mejor manera de mantenerte informado todo el tiempo de todo lo que pasa en tus grupos al recibir notificaciones en el momento en que tus amigos publican contenidos.">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--STYLES-->
    <link rel="stylesheet" href="public/css/bootstrap.css" >
    <link rel="stylesheet" type="text/css" href="public/css/content.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="public/css/styles_default.css">

    <link rel="shortcut icon" type="image/png" href="public/img/icon_tab.png" class="img_menu" />
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
    <!-- Header -->
    <header id="main-page" class="section_1 page-section-home img_home">
        <div class="container">
            <div class="intro-text">
                <h2 class="intro-lead-in home_subtitle_section_1">Una &uacute;nica aplicaci&oacute;n. Todo lo que necesit&aacute;s.</h2>
                <h1 class="intro-heading home_title_section_1">Tus grupos en un mismo lugar</h1>
                <a href="#download-app" class="page-scroll btn btn-xl home_button_section_1">Descarg&aacute; la app</a>
            </div>
        </div>
    </header>

    <!-- Main home -->
    <main>
        <?php
            include 'header.php';
        ?>
        <!-- CONOCE Section -->
        <section id="conoce" class="section_2 page-section-home">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2 class="section-heading home_title_section_2">&#191;Qu&eacute; es blink?</h2>
                        <h3 class="section-subheading text-muted home_subtitle_section_2" style="line-height: 28px;margin-bottom:0"> &#191;Ten&eacute;s un grupo de amigos de la facultad? &#191;Otro de la oficina? &#191;De f&uacute;tbol o baile?</br><span style="font-style: normal;">Blink te permite comunicarte con todos ellos desde un mismo lugar.</span> </br></h3>
                        <span class="home_text_section_2" style="margin-top:16px; display: block; font-weight: bold; font-style: normal;">Es una herramienta, un aliado en tu d&iacute;a a d&iacute;a. Es la mejor manera de mantenerte informado todo el tiempo de todo lo que pasa en tus grupos al recibir notificaciones en el momento en que tus amigos publican contenidos.</span>
                    </div>
                </div>
                <div class="row text-center">
                    <div class="col-md-3">
                        <h4 class="service-heading"><img src="public/img/group.svg" /></h4>
                        <p class="text-muted home_text_1_section_2">Cre&aacute; todos los grupos que necesites</p>
                    </div>
                    <div class="col-md-3">
                        <h4 class="service-heading"><img src="public/img/hour.svg" /></h4>
                        <p class="text-muted home_text_2_section_2">Llev&aacute; un registro de los gastos grupales</p>
                    </div>
                    <div class="col-md-3">
                        <h4 class="service-heading"><img src="public/img/calendar.svg" /></h4>
                        <p class="text-muted home_text_3_section_2">No te olvides de ning&uacute;n evento</p>
                    </div>
                    <div class="col-md-3">
                        <h4 class="service-heading"><img src="public/img/chat.svg" /></h4>
                        <p class="text-muted home_text_4_section_2">Enterate de las &uacute;ltimas novedades</p>
                    </div>
                </div>
                <div style="text-align: center;">
                    <a href="content/how_it_works.php" class="page-scroll btn btn-xl home_button_section_2" id="more-info">Todav&iacute;a quiero saber m&aacute;s</a>
                </div>
            </div>
        </section>
    
        <!-- VIDEO Section -->
        <section id="demo" class="section_3 page-section-home">
            <img src="public/img/play.svg" class="demo-img"><br><br>
            <p class="demo_description">
                <a href="content/demo.php" style="cursor: pointer;">Video en construcci&oacute;n</a>
            </p>
        </section>
    
        <!-- DOWNLOAD APP Section -->
        <section id="download-app" class="section_4 page-section-home">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center download-application">
                        <img src="public/img/qr_app_example.png">
                        <h2 class="section-heading text-app home_title_section_4">Descargate la aplicaci&oacute;n para el celular</h2>
                        <h3 class="section-subheading text-muted home_text_section_4">Vas a poder acceder a las novedades m&aacute;s r&aacute;pidamente y usar la aplicaci&oacute;n de forma m&aacute;s c&oacute;moda y eficiente</h3>
                        <div style="text-align: center;">
                            <a href="content/faq.php" class="page-scroll btn btn-xl home_button_section_4" id="more-info">¿Ten&eacute;s dudas?</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- CONTACT Section -->
        <section id="contact" class="section_5 page-section-home">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2 class="section-heading home_title_section_5">Contactate</h2>
                        <h3 class="section-subheading text-muted home_subtitle_section_5">&iexcl;Queremos saber tu opini&oacute;n!</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <form id="contact-form" method="post" action="back/contact/contact.php" role="form">
                            <div class="messages"></div>
                            <div class="controls">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input id="form_name" type="text" name="name" class="form-control home_text_1_section_5" placeholder="Nombre *" required="required" data-error="Por favor ingresa tu nombre">
                                            <p class="help-block text-danger">
                                        </div>
                                        <div class="form-group">
                                            <input id="form_email" type="email" name="email" class="home_text_2_section_5 form-control" placeholder="Mail *" required="required" data-error="Por favor ingresa tu mail">
                                            <p class="help-block text-danger">
                                        </div>
                                        <div class="form-group">
                                            <input id="form_phone" type="tel" name="phone" class="form-control home_text_3_section_5" placeholder="N&uacute;mero de tel&eacute;fono">
                                            <p class="help-block text-danger">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <textarea id="form_message" name="message" class="form-control home_text_4_section_5" placeholder="Mensaje *" rows="4" required="required" data-error="Please,leave us a message."></textarea>
                                            <!-- <div class="help-block with-errors"></div> -->
                                            <p class="help-block text-danger"></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix"></div>

                                <div class="col-md-12 text-center">
                                    <div class="form-group" style="display: inline-block">
                                        <div class="g-recaptcha" data-sitekey="6Le78ScUAAAAAIwMiCcAfjo6XputN6OYM3LXyLQx" required="required"></div>
                                    </div>
                                    <div id="success"></div>
                                    <input type="submit" class="home_button_section_5 btn btn-xl" value="Enviar mensaje">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

    </main>
    

    <?php
        include 'footer.php';
    ?>


    <!-- Scripts -->
    
    <!-- Bootstrap Core JavaScript -->
    <script src="public/js/global/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="public/js/global/jqueryeasing.js"></script>
    <script src="public/js/global/classie.js"></script>
    <script src="public/js/global/cbpAnimatedHeader.js" data-top="180"></script>

    <!-- Contact Form JavaScript -->
    <script src="public/js/global/jqBootstrapValidation.js"></script>
    <script src="public/js/global/contact_me.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="public/js/global/agency.js"></script>

    <!-- Recaptcha -->
    <script src='https://www.google.com/recaptcha/api.js'></script>

    <!-- My scripts -->
    <script src="public/js/contact/validator.js"></script>
    <script src="public/js/contact/contact.js"></script>

    <!-- Change language -->
    <script src="public/js/content/common-content.js"></script>
    <script src="public/js/content/home-content.js"></script>
</body>
</html>