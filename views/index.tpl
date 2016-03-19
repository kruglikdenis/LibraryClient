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

    <link rel="stylesheet" href="views/css/bootstrap.min.css">
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
        <input type="button" class="btn btn-default btn-authorized" data-toggle="modal" data-target="#modalLogin" value="Login"/>
    </div>

    {include file="views/partial/inc_modal_login.tpl" }

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
                            <li><a class="homebutton" href="#">Home</a></li>
                            <li><a class="show-1" href="#">About</a></li>
                            <li><a class="show-2" href="#">Services</a></li>
                            <li><a class="show-3" href="#">Gallery</a></li>
                            <li><a class="show-4" href="#">Contact</a></li>
                            <li><a rel="nofollow" href="http://www.google.com">External Link</a></li>
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
                                    <a href="#tab1" class="icon-item">
                                        <i class="fa fa-umbrella"></i>
                                    </a> <!-- /.icon-item -->
                                </li>
                                <li class="col-md-4 col-sm-4">
                                    <a href="#tab2" class="icon-item">
                                        <i class="fa fa-camera"></i>
                                    </a> <!-- /.icon-item -->
                                </li>
                                <li class="col-md-4 col-sm-4">
                                    <a href="#tab3" class="icon-item">
                                        <i class="fa fa-coffee"></i>
                                    </a> <!-- /.icon-item -->
                                </li>
                            </ul> <!-- /.tabs -->
                            <div class="col-md-12 col-sm-12">
                                <div class="toggle-content text-center" id="tab1">
                                    <h3>Our History</h3>
                                    <p>Circle is one of free HTML5 website templates from templatemo. You may tell your friends about <strong><span class="blue">template</span><span class="green">mo</span></strong> website. Feel free to download, modify and use this template for your websites. You can easily change icons by <a rel="nofollow" href="http://fontawesome.info/font-awesome-icon-world-map/">Font Awesome</a>. Example: <strong>&lt;i class=&quot;fa fa-camera&quot;&gt;&lt;/i&gt;</strong> 
                                    <br><br>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero, repellat, aspernatur nihil quasi commodi laboriosam cumque est minus minima sit dicta adipisci possimus magnam. Sit, repudiandae, ut, error, voluptates aspernatur inventore quo earum reiciendis dolorum amet perspiciatis adipisci itaque voluptatum iste laboriosam sapiente hic autem blanditiis doloribus nihil.</p>
                                </div>

                                <div class="toggle-content text-center" id="tab2">
                                    <h3>What We Do</h3>
                                    <p>Donec quis orci nisl. Integer euismod lacus nec risus sollicitudin molestie vel semper turpis. In varius imperdiet enim quis iaculis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris ac mauris aliquam magna molestie posuere in id elit. Integer semper metus felis, fringilla congue elit commodo a. Donec eget rutrum libero.
                                    <br><br>Nunc dui elit, vulputate vitae nunc sed, accumsan condimentum nisl. Vestibulum a dui lectus. Vivamus in justo hendrerit est cursus semper sed id nibh. Donec ut dictum lorem, eu molestie nisi. Quisque vulputate quis leo lobortis fermentum. Ut sit amet consectetur dui, vitae porttitor lectus.</p>
                                </div>

                                <div class="toggle-content text-center" id="tab3">
                                    <h3>Our Team</h3>
                                    <p>Aliquam erat volutpat. Vivamus tempus, nisi varius imperdiet molestie, velit mi feugiat felis, sit amet fringilla mi massa sit amet arcu. Mauris dictum nisl id felis lacinia congue. Aliquam lectus nisi, sodales in lacinia quis, lobortis vel sem. Vestibulum elit nisi, placerat eget auctor ut, dictum at libero.
                                    <br><br>Proin enim odio, eleifend eget euismod vitae, pharetra sed lacus. Donec at sapien nunc. Mauris vehicula quis diam nec dignissim. Nulla consequat nibh mattis metus sodales, at eleifend tortor tempor. Sed auctor lacus felis. </p>
                                </div>
                            </div> <!-- /.col-md-12 -->
                        </div> <!-- /.row -->

                        <div class="row">
                            <div class="col-md-4 col-sm-4">
                                <div class="member-item">
                                    <div class="thumb">
                                        <img src="views/images/team/member-1.jpg" alt="Tracy - Web Designer">
                                    </div>
                                    <h4>Tracy</h4>
                                    <span>Web Designer</span>
                                </div> <!-- /.member-item -->
                            </div> <!-- /.col-md-4 -->
                            <div class="col-md-4 col-sm-4">
                                <div class="member-item">
                                    <div class="thumb">
                                        <img src="views/images/team/member-2.jpg" alt="Mary - Web Developer">
                                    </div>
                                    <h4>Mary</h4>
                                    <span>Web Developer</span>
                                </div> <!-- /.member-item -->
                            </div> <!-- /.col-md-4 -->
                            <div class="col-md-4 col-sm-4">
                                <div class="member-item">
                                    <div class="thumb">
                                        <img src="views/images/team/member-3.jpg" alt="Julia - Creative Director">
                                    </div>
                                    <h4>Julia</h4>
                                    <span>Creative Director</span>
                                </div> <!-- /.member-item -->
                            </div> <!-- /.col-md-4 -->
                        </div> <!-- /.row -->
                    </div> <!-- /.about -->

                    <div id="menu-2" class="services content">
                        <div class="row">
                            <ul class="tabs">
                                <li class="col-md-4 col-sm-4">
                                    <a href="#tab4" class="icon-item">
                                        <i class="fa fa-cogs"></i>
                                    </a> <!-- /.icon-item -->
                                </li>
                                <li class="col-md-4 col-sm-4">
                                    <a href="#tab5" class="icon-item">
                                        <i class="fa fa-leaf"></i>
                                    </a> <!-- /.icon-item -->
                                </li>
                                <li class="col-md-4 col-sm-4">
                                    <a href="#tab6" class="icon-item">
                                        <i class="fa fa-users"></i>
                                    </a> <!-- /.icon-item -->
                                </li>
                            </ul> <!-- /.tabs -->
                            <div class="col-md-12 col-sm-12">
                                <div class="toggle-content text-center" id="tab4">
                                    <h3>Our Services</h3>
                                    <p>You can easily change icons by <a rel="nofollow" href="http://fontawesome.info/font-awesome-icon-world-map/">Font Awesome</a>. Example: <strong>&lt;i class=&quot;fa fa-users&quot;&gt;&lt;/i&gt;</strong> In varius eros ac est interdum, quis scelerisque elit semper. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                                    <br><br>Donec mattis enim sit amet nisl faucibus, eu pulvinar nibh facilisis. Aliquam erat volutpat. Vivamus tempus, nisi varius imperdiet molestie, velit mi feugiat felis, sit amet fringilla mi massa sit amet arcu. Mauris dictum nisl id felis lacinia congue. Aliquam lectus nisi, sodales in lacinia quis, lobortis vel sem. Vestibulum elit nisi, placerat eget auctor ut, dictum at libero.</p>
                                </div>

                                <div class="toggle-content text-center" id="tab5">
                                    <h3>Our Support</h3>
                                    <p>Nulla consequat nibh mattis metus sodales, at eleifend tortor tempor. Sed auctor lacus felis. Maecenas auctor enim libero, vel viverra nulla fringilla quis. Sed eget aliquet arcu. Suspendisse ac dignissim nunc, id pretium elit. Nunc id neque vel leo semper gravida non ut enim. Cras sed posuere magna.
                                    <br><br>Morbi eget ante sed felis tristique interdum. In varius eros ac est interdum, quis scelerisque elit semper. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                                </div>

                                <div class="toggle-content text-center" id="tab6">
                                    <h3>Testimonials</h3>
                                    <p>Etiam dictum, quam quis pharetra tincidunt, enim nunc faucibus ipsum, vitae condimentum ligula est eu dui. Sed tincidunt tincidunt sapien non feugiat. Aenean lacinia tempor leo, et euismod ligula porta non. Quisque lectus ante, rutrum eu neque volutpat, euismod lobortis velit. Suspendisse felis risus, tempor ac vehicula eu, volutpat volutpat sem. Donec quis orci nisl. Integer euismod lacus nec risus sollicitudin molestie vel semper turpis.
                                    <br><br>In varius imperdiet enim quis iaculis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris ac mauris aliquam magna molestie posuere in id elit. Integer semper metus felis, fringilla congue elit commodo a. Donec eget rutrum libero.</p>
                                </div>
                            </div> <!-- /.col-md-12 -->
                        </div> <!-- /.row -->
                    </div> <!-- /.services -->

                    <div id="menu-3" class="gallery content">
                        <div class="row">
                            
                            <div class="col-md-4 col-ms-6">
                                <div class="g-item">
                                    <img src="views/images/gallery/g1.jpg" alt="">
                                    <a data-rel="lightbox" class="overlay" href="views/images/gallery/g1.jpg">
                                        <span>+</span>
                                    </a>
                                </div> <!-- /.g-item -->
                            </div> <!-- /.col-md-4 -->
                            <div class="col-md-4 col-ms-6">
                                <div class="g-item">
                                    <img src="views/images/gallery/g2.jpg" alt="">
                                    <a data-rel="lightbox" class="overlay" href="views/images/gallery/g2.jpg">
                                        <span>+</span>
                                    </a>
                                </div> <!-- /.g-item -->
                            </div> <!-- /.col-md-4 -->
                            <div class="col-md-4 col-ms-6">
                                <div class="g-item">
                                    <img src="views/images/gallery/g3.jpg" alt="">
                                    <a data-rel="lightbox" class="overlay" href="views/images/gallery/g3.jpg">
                                        <span>+</span>
                                    </a>
                                </div> <!-- /.g-item -->
                            </div> <!-- /.col-md-4 -->
                            <div class="col-md-4 col-ms-6">
                                <div class="g-item">
                                    <img src="views/images/gallery/g4.jpg" alt="">
                                    <a data-rel="lightbox" class="overlay" href="views/images/gallery/g4.jpg">
                                        <span>+</span>
                                    </a>
                                </div> <!-- /.g-item -->
                            </div> <!-- /.col-md-4 -->
                            <div class="col-md-4 col-ms-6">
                                <div class="g-item">
                                    <img src="views/images/gallery/g5.jpg" alt="">
                                    <a data-rel="lightbox" class="overlay" href="views/images/gallery/g5.jpg">
                                        <span>+</span>
                                    </a>
                                </div> <!-- /.g-item -->
                            </div> <!-- /.col-md-4 -->
                            <div class="col-md-4 col-ms-6">
                                <div class="g-item">
                                    <img src="views/images/gallery/g6.jpg" alt="">
                                    <a data-rel="lightbox" class="overlay" href="views/images/gallery/g6.jpg">
                                        <span>+</span>
                                    </a>
                                </div> <!-- /.g-item -->
                            </div> <!-- /.col-md-4 -->
                            <div class="col-md-4 col-ms-6">
                                <div class="g-item">
                                    <img src="views/images/gallery/g7.jpg" alt="">
                                    <a data-rel="lightbox" class="overlay" href="views/images/gallery/g7.jpg">
                                        <span>+</span>
                                    </a>
                                </div> <!-- /.g-item -->
                            </div> <!-- /.col-md-4 -->
                            <div class="col-md-4 col-ms-6">
                                <div class="g-item">
                                    <img src="views/images/gallery/g8.jpg" alt="">
                                    <a data-rel="lightbox" class="overlay" href="views/images/gallery/g8.jpg">
                                        <span>+</span>
                                    </a>
                                </div> <!-- /.g-item -->
                            </div> <!-- /.col-md-4 -->
                            <div class="col-md-4 col-ms-6">
                                <div class="g-item">
                                    <img src="views/images/gallery/g9.jpg" alt="">
                                    <a data-rel="lightbox" class="overlay" href="images/gallery/g9.jpg">
                                        <span>+</span>
                                    </a>
                                </div> <!-- /.g-item -->
                            </div> <!-- /.col-md-4 -->

                        </div> <!-- /.row -->
                    </div> <!-- /.gallery -->

                    <div id="menu-4" class="contact content">
                        <div class="row">
                        	
                            <div class="col-md-12">
                                <div class="toggle-content text-center spacing">
                                    <h3>Contact Us</h3>
                                    <p>Donec mattis enim sit amet nisl faucibus, eu pulvinar nibh facilisis. Aliquam erat volutpat. Vivamus tempus, nisi varius imperdiet molestie, velit mi feugiat felis, sit amet fringilla mi massa sit amet arcu. Mauris dictum nisl id felis lacinia congue. Aliquam lectus nisi, sodales in lacinia quis, lobortis vel sem.
                                    <br><br><strong>Address:</strong> 123 Thamine Street, Digital Estate, Yangon 10620, Myanmar
                                    <br><strong>Email:</strong> info@company.com | <strong>Tel:</strong> 010-020-0340</p>
                                </div>
                            </div> <!-- /.col-md-12 -->

                            <div class="col-md-12">
                                <div class="contact-form">
                                    <div class="row">
                                    	<form action="#" method="post">
                                            <fieldset class="col-md-4">
                                                <input id="name" type="text" name="name" placeholder="Name">
                                            </fieldset>
                                            <fieldset class="col-md-4">
                                                <input type="email" name="email" id="email" placeholder="Email">
                                            </fieldset>
                                            <fieldset class="col-md-4">
                                                <input type="text" name="subject" id="subject" placeholder="Subject">
                                            </fieldset>
                                            <fieldset class="col-md-12">
                                                <textarea name="message" id="message" placeholder="Message"></textarea>
                                            </fieldset>
                                            <fieldset class="col-md-12">
                                                <input type="submit" name="send" value="Send Message" id="submit" class="button">
                                            </fieldset>
                                        </form>
                                    </div> <!-- /.row -->
                                </div> <!-- /.contact-form -->
                            </div> <!-- /.col-md-12 -->
                        </div> <!-- /.row -->
                    </div> <!-- /.contact -->

                </div> <!-- /#menu-container -->

            </div> <!-- /.col-md-8 -->

        </div> <!-- /.row -->
    </div> <!-- /.container-fluid -->
    
    <div class="container-fluid">   
        <div class="row">
            <div class="col-md-12 footer">
                <p id="footer-text">Copyright &copy; 2016 <a href="#">Circle</a>
            </div><!-- /.footer --> 
        </div>
    </div> <!-- /.container-fluid -->

    <script src="views/js/vendor/jquery-1.10.1.min.js"></script>
    <script>window.jQuery || document.write('<script src="views/js/vendor/jquery-1.10.1.min.js"><\/script>')</script>
    <script src="views/js/jquery.easing-1.3.js"></script>
    <script src="views/js/bootstrap.js"></script>
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