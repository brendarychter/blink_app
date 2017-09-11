<!DOCTYPE html>
<html class="no-js"> 
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title class="team_tab_title">Qui&eacute;nes somos - Blink App</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--CSS-->
    <link rel="stylesheet" type="text/css" href="../public/css/content.css">
    <link rel="stylesheet" href="../public/css/bootstrap.css" >

    <!-- Custom CSS -->
    <link rel="stylesheet" href="../public/css/styles_default.css">
    <link rel="shortcut icon" type="image/png" href="../public/img/icon_tab.png" class="img_menu_1" />
    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
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
            <h1 class="team_title_header">Conoc&eacute; al equipo creador de Blink App</h1>
            <h2 class="team_subtitle_header">Desde hace cuatro a&ntilde;os que desarrollamos aplicaciones y sitios web a medida</h2>
            <p class="team_text_header">Satisfacemos las necesidades de los clientes cumpliendo con un correcto desarrollo orientado a una excelente experiencia de usuario</p>
        </header>
        <div class="container" style="padding-top:35px">
            <div class="row" style="padding:35px">
                <div class="col-sm-12 col-md-4 col-lg-4 team-member">
                    <img src="../public/img/team/1.jpg" class="img-responsive img-circle img_team_1" alt="Designer" title="title">
                    <h4 class="team_member_1_name">Dami&aacute;n Cukierman</h4>
                    <p class="text-muted profession team_member_1_job">Project Manager</p>
                    <div class="separator">·</div>
                    <p class="large text-muted team_member_1_description">Me esfuerzo plenamente por llevar adelante este gran equipo, comprometido a satisfacer las necesidades de los clientes.</p>
                    <ul class="list-inline social-buttons">
                        <li><a href="https://www.behance.net/DamianCukierman" target="_blank" class="team_member_1_linkedin"><img src="../public/img/icons/linkedin.svg" style="border:0"></a>
                        </li>
                    </ul>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-4 team-member">
                    <img src="../public/img/team/2.jpg" class="img-responsive img-circle img_team_2" alt="Designer" title="title">
                    <h4 class="team_member_2_name">Juan Mar&iacute;a Migliore</h4>
                    <p class="text-muted profession team_member_2_job">Front and Back End Developer</p>
                    <div class="separator">·</div>
                    <p class="large text-muted team_member_2_description">Desarrollar es mi pasi&oacute;n. D&iacute;a a d&iacute;a me dedico a explorar las nuevas tecnolog&iacute;as para estar a la vanguardia en nuestros proyectos.</p>
                    <ul class="list-inline social-buttons">
                        <li><a href="https://ar.linkedin.com/in/juanmamig" target="_blank" class="team_member_2_linkedin"><img src="../public/img/icons/linkedin.svg" style="border:0"></a>
                        </li>
                    </ul>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-4 team-member">
                    <img src="../public/img/team/3.jpg" class="img-responsive img-circle img_team_3" alt="Designer" title="title">
                    <h4 class="team_member_3_name">Germ&aacute;n Figueroa</h4>
                    <p class="text-muted profession team_member_3_job">UI &#38; UX designer</p>
                    <div class="separator">·</div>
                    <p class="large text-muted team_member_3_description">Me gusta comprender c&oacute;mo los usuarios se conectan con la tecnolog&iacute;a, para brindarles la mejor navegaci&oacute;n en las aplicaciones que desarrollamos.</p>
                    <ul class="list-inline social-buttons">
                        <li><a href="https://ar.linkedin.com/in/german-figueroa-27254490" target="_blank" class="team_member_3_linkedin"><img src="../public/img/icons/linkedin.svg" style="border:0"></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

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
    <script src="../public/js/content/team-content.js"></script>

    <script type="text/javascript">
        $('#page-team').closest('li').addClass("active");
    </script>

</body>
</html>