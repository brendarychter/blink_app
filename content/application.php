<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Blink!</title>

<link href="../public/css/global/bootstrap.min.css" rel="stylesheet">
<link href="../public/css/global/datepicker3.css" rel="stylesheet">
<link href="../public/css/global/styles.css" rel="stylesheet">
<link href="../public/css/newAppStyles.css" rel="stylesheet">
<link rel="shortcut icon" type="image/png" href="../public/img/icon_tab.png"/>

<!--Icons-->
<script src="../public/js/global/lumino.glyphs.js"></script>

<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

</head>

<body>
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="../index.php" style="margin-top: -14px;"><img alt="Blink app" title="Blink app" src="../public/img/logo_small.svg" id="icon-top" style="height: 50px"></img></a>
                <ul class="user-menu">
                    <li class="dropdown pull-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked camera"><use xlink:href="#stroked-camera"></use></svg> <span id="userName"></span> <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Mi perfil</a></li>
                            <li><a href="#"><svg class="glyph stroked gear"><use xlink:href="#stroked-gear"></use></svg> Configuraci&oacute;n</a></li>
                            <li><a href="#"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Cerrar sesi&oacute;n</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
                            
        </div><!-- /.container-fluid -->
    </nav>
        
    <div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
        <form role="search">
            <div class="form-group">
                <input type="text" class="form-control search-box" placeholder="Buscar">
            </div>
        </form>
        <ul class="nav menu">
            <li class="active"><a href="#"><svg class="glyph stroked app-window-with-content"><use xlink:href="#stroked-app-window-with-content"></use></svg> Mis grupos</a></li>
            <li><a href="#"><svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"></use></svg> Crear grupo</a></li>
            <li><a href="#"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Contactos</a></li>
            <li role="presentation" class="divider"></li>
        </ul>

    </div><!--/.sidebar-->
        
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main block-content">           
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Mis grupos</h1>
            </div>
        </div><!--/.row-->
        
        <div class="row groups-list">
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-body easypiechart-panel group-box" id="group-selection">
                        <div class="group-image">
                            <!-- <img src="../public/img/nefetz.jpg" alt="Nefetz" title="Nefetz" /> -->
                        </div>
                        <div class="group-actions">
                            <div class="icons">
                                <a href="#"><svg class="glyph stroked calendar icon" ><use xlink:href="#stroked-calendar"></use></svg></a>
                                <a href="#"><svg class="glyph stroked clipboard-with-paper icon"><use xlink:href="#stroked-clipboard-with-paper"></use></svg></a>
                                <a href="#"><svg class="glyph stroked two-messages icon"><use xlink:href="#stroked-two-messages"></use></svg></a>
                            </div>
                            <h4 class="group-name">NEFETZ</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-body easypiechart-panel group-box">
                        <div class="group-image">
                            <!-- <img src="" alt="P13N" title="P13N" /> -->
                        </div>
                        <div class="group-actions">
                            <div class="icons">
                                <a href="#"><svg class="glyph stroked two-messages icon"><use xlink:href="#stroked-two-messages"></use></svg></a>
                            </div>
                            <h4 class="group-name">P13N</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-body easypiechart-panel group-box">
                        <div class="group-image">
                            <!-- <img src="" alt="Facu" title="Facu" /> -->
                        </div>
                        <div class="group-actions">
                            <div class="icons">
                                <a href="#"><svg class="glyph stroked calendar icon" ><use xlink:href="#stroked-calendar"></use></svg></a>
                                <a href="#"><svg class="glyph stroked two-messages icon"><use xlink:href="#stroked-two-messages"></use></svg></a>
                            </div>
                            <h4 class="group-name">FACU</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/.row-->
                             
    </div>  <!--/.main-->

    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 selected-group block-content">           
        
        
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">NEFETZ</h1>
            </div>
        </div><!--/.row-->
        
        <div class="row">
            <div class="col-md-8">
                <div class="panel panel-default chat">
                    <div class="panel-heading title-heading" id="accordion" style="background-color:"><svg class="glyph stroked two-messages"><use xlink:href="#stroked-two-messages"></use></svg> Muro</div>
                    <div class="panel-body">
                        <ul>
                            <li class="left clearfix">
                                <span class="chat-img pull-left">
                                    <img src="http://placehold.it/80/30a5ff/fff" alt="User Avatar" class="img-circle" />
                                </span>
                                <div class="chat-body clearfix">
                                    <div class="header">
                                        <strong class="primary-font">Pame</strong> <small class="text-muted">Hace 32 min</small>
                                    </div>
                                    <p>
                                        El ensayo es en la sede. Cesar D&iacute;az 1441.
                                    </p>
                                </div>
                            </li>
                            <li class="right clearfix">
                                <span class="chat-img pull-right">
                                    <img src="http://placehold.it/80/dde0e6/5f6468" alt="User Avatar" class="img-circle" />
                                </span>
                                <div class="chat-body clearfix">
                                    <div class="header">
                                        <strong class="pull-left primary-font">Brenda</strong> <small class="text-muted">20 mins ago</small>
                                    </div>
                                    <p>
                                        No olvidar comprar luces para llevar al teatro.
                                    </p>
                                </div>
                            </li>
                            <li class="left clearfix">
                                <span class="chat-img pull-left">
                                    <img src="http://placehold.it/80/30a5ff/fff" alt="User Avatar" class="img-circle" />
                                </span>
                                <div class="chat-body clearfix">
                                    <div class="header">
                                        <strong class="primary-font">Pame</strong> <small class="text-muted">Hace 6 min</small>
                                    </div>
                                    <p>
                                        El ensayo con vestuario es el mi&eacute;rcoles.
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    
                    <div class="panel-footer">
                        <div class="input-group">
                            <input id="btn-input" type="text" class="form-control input-md" placeholder="Escribe el mensaje aqu&iacute;..." />
                            <span class="input-group-btn">
                                <button class="btn btn-success btn-md" id="btn-chat">Enviar</button>
                            </span>
                        </div>
                    </div>
                </div>
                
            </div><!--/.col-->
            
            <div class="col-md-4">
                <div class="panel">
                    <div class="panel-heading dark-overlay title-heading"><svg class="glyph stroked calendar"><use xlink:href="#stroked-calendar"></use></svg>Calendario</div>
                    <div class="panel-body">
                        <div id="calendar"></div>
                    </div>
                </div>
                
                <div class="panel panel-blue">
                    <div class="panel-heading dark-overlay title-heading"><svg class="glyph stroked clipboard-with-paper"><use xlink:href="#stroked-clipboard-with-paper"></use></svg>Registro del mes</div>
                    <div class="panel-body">
                        <ul class="todo-list">
                        <li class="todo-list-item">
                                <div class="checkbox">
                                    <input type="checkbox" id="checkbox" checked/>
                                    <label for="checkbox">Mile - $150</label>
                                </div>
                                <div class="pull-right action-buttons">
                                    <a href="#"><svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"></use></svg></a>
                                    <a href="#" class="trash"><svg class="glyph stroked trash"><use xlink:href="#stroked-trash"></use></svg></a>
                                </div>
                            </li>
                            <li class="todo-list-item">
                                <div class="checkbox">
                                    <input type="checkbox" id="checkbox" checked/>
                                    <label for="checkbox">Yani - $150</label>
                                </div>
                                <div class="pull-right action-buttons">
                                    <a href="#"><svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"></use></svg></a>
                                    <a href="#" class="trash"><svg class="glyph stroked trash"><use xlink:href="#stroked-trash"></use></svg></a>
                                </div>
                            </li>
                            <li class="todo-list-item">
                                <div class="checkbox">
                                    <input type="checkbox" id="checkbox" />
                                    <label for="checkbox">Stefi - $150</label>
                                </div>
                                <div class="pull-right action-buttons">
                                    <a href="#"><svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"></use></svg></a>
                                    <a href="#" class="trash"><svg class="glyph stroked trash"><use xlink:href="#stroked-trash"></use></svg></a>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="panel-footer">
                        <div class="input-group">
                            <input id="btn-input" type="text" class="form-control input-md" placeholder="Agregar registro" />
                            <span class="input-group-btn">
                                <button class="btn btn-primary btn-md" id="btn-todo">Agregar</button>
                            </span>
                        </div>
                    </div>
                </div>
                                
            </div><!--/.col-->
        </div><!--/.row-->
                             
    </div>  <!--/.main-->

    <script src="../public/js/global/jquery.js"></script>
    <script src="../public/js/global/bootstrap.min.js"></script>
    <script src="../public/js/global/chart.min.js"></script>
    <script src="../public/js/global/bootstrap-datepicker.js"></script>
    <script src="../public/js/actions/application.js"></script>
    <script>
        $('#calendar').datepicker({
        });

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
</body>

</html>
