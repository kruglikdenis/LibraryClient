<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
    <title>Circle</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">
    <!-- 
    Circle Template 
    http://www.templatemo.com/preview/templatemo_410_circle 
    -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet">

    <link href="views/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="views/css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
    <link rel="stylesheet" href="views/css/normalize.min.css">
    <link rel="stylesheet" href="views/css/font-awesome.min.css">
    <link rel="stylesheet" href="views/css/animate.css">
    <link rel="stylesheet" href="views/css/templatemo_misc.css">
    <link rel="stylesheet" href="views/css/templatemo_style.css">
    <link rel="stylesheet" href="views/css/main.css">

    <script src="views/js/vendor/modernizr-2.6.2.min.js"></script>
	<!-- templatemo 410 circle -->
</head>
<body>
    <!--[if lt IE 7]>
    <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
    <![endif]-->

    
    <div class="bg-overlay"></div>

    <div id="authentification" class="conteiner-authorized">

        {if !isset($smarty.session.userLogin)}
            <input type="button" class="btn btn-default btn-authorized" data-toggle="modal" data-target="#modalLogin" value="Login"/>
            <input type="button" class="btn btn-default btn-authorized" data-toggle="modal" data-target="#modalRegister" value="Registration"/>
        {else}
            {$smarty.session.userLogin} <a id="btnLogout" href="#"> Выйти </a>
        {/if}
    </div>

    {include file="views/partial/inc_modal_login.tpl" }
    {include file="views/partial/inc_modal_register.tpl" }


    <div class="container-fluid">
        <div class="row">
            
            <div class="col-md-4 col-sm-12">
                <div class="sidebar-menu">
                    
                    <div class="logo-wrapper">
                        <h1 class="logo">
                            <a rel="nofollow" href="#"><img src="views/images/logo.png" alt="Circle Template">
                            </a>
                        </h1>
                    </div> <!-- /.logo-wrapper -->
                    
                    <div class="menu-wrapper">
                        <ul class="menu">
                            {if isset($smarty.session.userLogin)}
                            <li><a class="show-1" href="#" onclick="$('#tab1').hide(); $('#tab2').hide(); $('#tab3').hide();">Мои книги</a></li>
                            {/if}
                            <li><a class="show-3" href="#" onclick="$('#tab1').hide(); $('#tab2').hide(); $('#tab3').hide();">Библиотека</a></li>
                            {if isset($smarty.session.userLogin)}
                            <li><a class="show-4" href="#" onclick="$('#tab1').hide(); $('#tab2').hide(); $('#tab3').hide();">Предложение</a></li>
                            {/if}
                        </ul> <!-- /.menu -->
                        <a href="#" class="toggle-menu"><i class="fa fa-bars"></i></a>
                    </div> <!-- /.menu-wrapper -->

                    <!--Arrow Navigation-->
                    <a id="prevslide" class="load-item"><i class="fa fa-angle-left"></i></a>
                    <a id="nextslide" class="load-item"><i class="fa fa-angle-right"></i></a>

                </div> <!-- /.sidebar-menu -->
            </div> <!-- /.col-md-4 -->

            <div class="col-md-8 col-sm-12">
                
                <div id="menu-container">

                    <div id="menu-1" class="about content">
                        <div class="row">
                            <ul class="tabs">
                                <li class="col-md-4 col-sm-4">
                                    <a href="#tab1" class="icon-item" onclick="getBookByStatus(1)">
                                        <i class="fa fa-umbrella"></i>
                                        Прочитана
                                    </a> <!-- /.icon-item -->
                                </li>
                                <li class="col-md-4 col-sm-4">
                                    <a href="#tab2" class="icon-item" onclick="getBookByStatus(2)">
                                        <i class="fa fa-camera"></i>
                                        Читаю
                                    </a> <!-- /.icon-item -->
                                </li>
                                <li class="col-md-4 col-sm-4">
                                    <a href="#tab3" class="icon-item" onclick="getBookByStatus(3)">
                                        <i class="fa fa-coffee"></i>
                                        Собираюсь прочитать
                                    </a> <!-- /.icon-item -->
                                </li>
                            </ul> <!-- /.tabs -->



                        </div> <!-- /.row -->

                    </div> <!-- /.about -->

                    <div class="toggle-content text-center" id="tab1" style="display: none; text-align: left;">

                    </div>

                    <div class="toggle-content text-center" id="tab2" style="display: none; text-align: left;">

                    </div>

                    <div class="toggle-content text-center" id="tab3" style="display: none; text-align: left;">
                    </div>


                    <div id = "library_books">
                        {include file="views/partial/inc_books.tpl"}
                     </div>
                    {include file="views/partial/inc_suggest.tpl" }


                </div> <!-- /#menu-container -->


        </div> <!-- /.row -->
    </div> <!-- /.container-fluid -->
    
    <div class="container-fluid">   
        <div class="row">
            <div class="col-md-12 footer">
                <p id="footer-text">Copyright &copy; 2016 <a href="#">Circle</a>
            </div><!-- /.footer --> 
        </div>
    </div> <!-- /.container-fluid -->

    <script type="text/javascript" src="views/js/jquery-1.8.3.min.js" charset="UTF-8"></script>
    <script type="text/javascript" src="views/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="views/js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
    <script src="views/js/jquery.easing-1.3.js"></script>
    <script src="views/js/bootstrap-datetimepicker.min.js"></script>
    <script src="views/js/plugins.js"></script>
    <script src="views/js/main.js"></script>
    <script src="views/js/main-usobility.js"></script>
    <script src="js/ajax-services.js"></script>
    <script type="text/javascript">
            
			jQuery(function ($) {

                $.supersized({

                    // Functionality
                    slide_interval: 3000, // Length between transitions
                    transition: 1, // 0-None, 1-Fade, 2-Slide Top, 3-Slide Right, 4-Slide Bottom, 5-Slide Left, 6-Carousel Right, 7-Carousel Left
                    transition_speed: 700, // Speed of transition

                    // Components                           
                    slide_links: 'blank', // Individual links for each slide (Options: false, 'num', 'name', 'blank')
                    slides: [ // Slideshow Images
                        {
                            image: 'views/images/templatemo-slide-1.jpg'
                        }, {
                            image: 'views/images/templatemo-slide-2.jpg'
                        }, {
                            image: 'views/images/templatemo-slide-3.jpg'
                        }, {
                            image: 'views/images/templatemo-slide-4.jpg'
                        }
                    ]

                });
            });
            
    </script>

        <script src="views/js/vendor/jquery.gmap3.min.js"></script>

</body>
</html>