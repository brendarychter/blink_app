<!DOCTYPE html>
<html class="no-js">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Blink!</title>

    <link href="../public/css/global/bootstrap.min.css" rel="stylesheet">
    <link href="../public/css/global/styles.css" rel="stylesheet">
    <link href="../public/css/newAppStyle.css" rel="stylesheet">
    <link rel="shortcut icon" type="image/png" href="../public/img/icon_tab.png" class="img_menu_1" />


    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title class="app_tab_title">Blink App</title>
    <meta name="description" content="">

    <!--CSS-->
    <link rel="stylesheet" type="text/css" href="../public/css/content.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="../public/css/styles_default.css">
    <link rel="shortcut icon" type="image/png" href="../public/img/icon_tab.png" class="img_menu_1" />
    <link rel="stylesheet" href="../public/css/style.css">
    <link rel="stylesheet" href="../public/css/fonts.css">
    
    <!-- Analytics -->
    <script src="../public/js/actions/ga_commons.js"></script>
</head>
<body>
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand page-scroll" href="../index.php" style="margin-top: -14px;"><img alt="Blink app" target="_blank" title="Blink app" src="../public/img/logo.png" id="icon-top" style="height: 50px"></img></a>
            </div>
                            
        </div><!-- /.container-fluid -->
    </nav>
        
    <section id="big-container" class="section_4 page-section-home">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center download-application" id="app-download-section">
                    <img src="../uploads/chart.png" class="img_home_7" title="QR" alt="QR">
                    <div style="text-align: center;">
                        <a href="https://build.phonegap.com/apps/2763201/install/3Cdw2s5xW9hTzgGaS6-V" target="_blank" class="page-scroll btn btn-xl home_download_section_4" id="more-info-1" style="background-color:#65CCB8; color: #fff; margin-top: -10px; margin: 35px;">O ingresá acá</a>
                    </div>
                    <h2 class="section-heading text-app home_title_section_4" id="dwn-app">&iexcl;Ahora descarg&aacute; la app!</h2>
                    <h3 class="section-subheading text-muted home_text_section_4" id="start-enjoy">Y empez&aacute; a disfrutar</h3>
                    <video width="300" height="220" loop autoplay>
                        <source src="../public/video/blink-app-loading.mp4" type="video/mp4">
                    </video>
                    <div style="text-align: center;">
                        <a href="../index.php" class="page-scroll btn btn-xl home_button_section_4" id="more-info">Volver al inicio</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php
        include '../footer.php';
    ?>

    <script src="../public/js/global/jquery.js"></script>
    <script src="../public/js/global/bootstrap.min.js"></script>
    <script src="../public/js/global/bootstrap-datepicker.js"></script>
    <script src="../public/js/actions/application.js"></script>
    <script src="../public/js/actions/renameLocation.js"></script>
    
    <script>
        !function ($) {
            $(document).on("click","ul.nav li.parent > a > span.icon", function(){          
                $(this).find('em:first').toggleClass("glyphicon-minus");      
            }); 
            $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
        }(window.jQuery);

        $(window).on('resize', function () {
          if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
        })
        $(window).on('resize', function () {
          if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
        })
    </script>   

    <script src="../public/js/content/common-content.js"></script>
    <script>
        var lan = localStorage.getItem("language");
        if (localStorage.getItem("language") == "spanish"){
            $('#more-info').text("Volver al inicio");
            $('#start-enjoy').text("Y empeza a disfrutar");
            $('#dwn-app').text("¡Ahora descarga la app!");
            $('#more-info-1').text("O ingresa aca");

        }else if (localStorage.getItem("language") == "english"){
            $('#more-info').text("Back to home");
            $('#start-enjoy').text("And start enjoying");
            $('#dwn-app').text("And now download the app!");
            $('#more-info-1').text("Or access here");
        }
    </script>
</body>

</html>
