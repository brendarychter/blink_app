<!DOCTYPE html>
<html class="no-js" lang="es"> 
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Blink App - Home</title>
    <!-- Agregarle el idioma -->
    <meta name="description" content="Blink app es una herramienta, un aliado en tu día a día. Es la mejor manera de mantenerte informado todo el tiempo de todo lo que pasa en tus grupos al recibir notificaciones en el momento en que tus amigos publican contenidos.">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--STYLES-->
    <link rel="stylesheet" href="public/css/bootstrap.css" >
    <link rel="stylesheet" type="text/css" href="public/css/content.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="public/css/styles_default.css">

    <link rel="shortcut icon" type="image/png" href="public/img/icon_tab.png" class="img_icon_menu" />

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
                <h2 class="intro-lead-in subtitle_section_1">Una &uacute;nica aplicaci&oacute;n. Todo lo que necesit&aacute;s.</h2>
                <h1 class="intro-heading title_section_1">Tus grupos en un mismo lugar</h1>
                <a href="#download-app" class="page-scroll btn btn-xl button_section_1">Descarg&aacute; la app</a>
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
                        <h2 class="section-heading title_section_2">&#191;Qu&eacute; es blink?</h2>
                        <h3 class="section-subheading text-muted subtitle_section_2" style="line-height: 28px;margin-bottom:0"> &#191;Ten&eacute;s un grupo de amigos de la facultad? &#191;Otro de la oficina? &#191;De f&uacute;tbol o baile?</br><span style="font-style: normal;">Blink te permite comunicarte con todos ellos desde un mismo lugar.</span> </br></h3>
                        <span class="text_section_2" style="margin-top:16px; display: block; font-weight: bold; font-style: normal;">Es una herramienta, un aliado en tu d&iacute;a a d&iacute;a. Es la mejor manera de mantenerte informado todo el tiempo de todo lo que pasa en tus grupos al recibir notificaciones en el momento en que tus amigos publican contenidos.</span>
                    </div>
                </div>
                <div class="row text-center">
                    <div class="col-md-3">
                        <h4 class="service-heading"><img src="public/img/group.svg" /></h4>
                        <p class="text-muted text_1_section_2">Cre&aacute; todos los grupos que necesites</p>
                    </div>
                    <div class="col-md-3">
                        <h4 class="service-heading"><img src="public/img/hour.svg" /></h4>
                        <p class="text-muted text_2_section_2">Llev&aacute; un registro de los gastos grupales</p>
                    </div>
                    <div class="col-md-3">
                        <h4 class="service-heading"><img src="public/img/calendar.svg" /></h4>
                        <p class="text-muted text_3_section_2">No te olvides de ning&uacute;n evento</p>
                    </div>
                    <div class="col-md-3">
                        <h4 class="service-heading"><img src="public/img/chat.svg" /></h4>
                        <p class="text-muted text_4_section_2">Enterate de las &uacute;ltimas novedades</p>
                    </div>
                </div>
                <div style="text-align: center;">
                    <a href="content/how_it_works.php" class="page-scroll btn btn-xl button_section_2" id="more-info">Todav&iacute;a quiero saber m&aacute;s</a>
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
                        <h2 class="section-heading text-app title_section_4">Descargate la aplicaci&oacute;n para el celular</h2>
                        <h3 class="section-subheading text-muted text_section_4">Vas a poder acceder a las novedades m&aacute;s r&aacute;pidamente y usar la aplicaci&oacute;n de forma m&aacute;s c&oacute;moda y eficiente</h3>
                        <div style="text-align: center;">
                            <a href="content/faq.php" class="page-scroll btn btn-xl button_section_4" id="more-info">¿Ten&eacute;s dudas?</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- CONTACT Section -->
        <div class="container">

            <div class="row">

                <div class="col-lg-8 col-lg-offset-2">

                    <form id="contact-form" method="post" action="back/contact/contact.php" role="form">

                        <div class="messages"></div>

                        <div class="controls">

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_name">Firstname *</label>
                                        <input id="form_name" type="text" name="name" class="form-control" placeholder="Please enter your firstname *" value="aslalla" required="required" data-error="Firstname is required.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_lastname">Lastname *</label>
                                        <input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Please enter your lastname *" value="aslalla" required="required" data-error="Lastname is required.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_email">Email *</label>
                                        <input id="form_email" type="email" name="email" class="form-control" placeholder="Please enter your email *" value="brendarychter@gmail.com" required="required" data-error="Valid email is required.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_phone">Phone</label>
                                        <input id="form_phone" type="tel" name="phone" class="form-control" placeholder="Please enter your phone" value="aslalla" >
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="form_message">Message *</label>
                                        <textarea id="form_message" name="message" class="form-control" text="aslalla" placeholder="Message for me *" rows="4" required="required" data-error="Please,leave us a message."></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <!-- Replace data-sitekey with your own one, generated at https://www.google.com/recaptcha/admin -->
                                        <div class="g-recaptcha" data-sitekey="6Le78ScUAAAAAIwMiCcAfjo6XputN6OYM3LXyLQx"></div>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <input type="submit" class="btn btn-success btn-send" value="Send message">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <p class="text-muted"><strong>*</strong> These fields are required. Contact form template by <a href="https://bootstrapious.com/p/bootstrap-recaptcha" target="_blank">Bootstrapious</a>.</p>
                                </div>
                            </div>
                        </div>

                    </form>

                </div><!-- /.8 -->

            </div> <!-- /.row-->

        </div> <!-- /.container-->

    </main>
    

    <?php
        include 'footer.php';
    ?>


    <!-- Scripts -->
    
    <!-- jQuery -->
    <script src="public/js/global/jquery.js"></script>

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
    <script src='https://www.google.com/recaptcha/api.js'></script>

    <!-- My scripts -->
    <script src="public/js/actions/load.js"></script>
    <script src="public/js/actions/loadMenu.js"></script>
    <script src="public/js/contact/validator.js"></script>
    <script src="public/js/contact/contact.js"></script>

</body>
</html>