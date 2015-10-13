<?php
 session_start();
 

?>

<!DOCTYPE html>
<html>
<head>
	<title>Porciweb</title>
	 <!-- FAVICON  -->
    <!--link rel="icon" href="images/favicon/favicon.ico"-->
    
    <!-- =========================
       STYLESHEETS 
    ============================== -->
    
    <!-- BOOTSTRAP CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- FONT ICONS -->
    <!--link rel="stylesheet" href="css/icons.min.css"-->
     
    <!-- GOOGLE FONTS -->
    <!--link href="http://fonts.googleapcss?family=Raleway:300,400,600,700%7COpen+Sans:300,400,600,700%7CHandlee" rel="stylesheet">
    
    <!-- PLUGINS STYLESHEET -->
    <!--link rel="stylesheet" href="css/plugins.min.css"-->
    
    <!-- CUSTOM STYLESHEET -->
    <link rel="stylesheet" href="css/style.css">

    <!-- RESPONSIVE FIXES -->
    <!--link rel="stylesheet" href="css/responsive.css"-->

    
</head>
<body>

<header class="header" id="top" data-stellar-background-ratio="0.5">
            <!-- Background Overlay -->
            <div class="overlay">

                <!-- =========================================
                     Navigation
                ========================================== -->
                <nav class="navbar navbar-fixed-top" role="navigation">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <!-- Navbar-Header -->
                                <div class="navbar-header">
                                    
                                    <!-- Mobile Menu -->
                                    <button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
                                        <i class="icon icon_menu"></i>
                                    </button>

                                    <!-- Text-Logo -->
                                    <a href="#top" class="navbar-brand scrollto" title="SmartMvp">
                                        <span class="text-logo">Porciweb</span>
                                    </a> 

                                    <!-- Image-Logo: Remove this comments and the section above Text-Logo if you want to add an Image-Logo (recommended sizes -> max-height:50, max-width:200) 

                                    <a href="#top" class="navbar-brand img-logo scrollto" title="SmartMvp">
                                        <img src="assets/images/logo.png" alt="Logo">
                                    </a> 
                                    -->

                                </div><!-- /End Navbar-Header -->

                                <!-- Navbar-Collapse -->
                                <div class="navbar-collapse collapse">
                                    <ul class="nav navbar-nav navbar-right">
                                        <!-- Menu Items -->
                                        <li><a href="#about" title="" class="scrollto">Nosotros</a></li>
                                        <li><a href="#features" title="" class="scrollto">Caracteristicas</a></li>
                                        <li><a href="#pricing" title="" class="scrollto">Precio</a></li>
                                        <li><a href="#testimonials" title="" class="scrollto">Testimonios</a></li>
                                        <li><a href="#team" title="" class="scrollto">Equipo</a></li>
                                        <li><a href="#mobile-download" title="" class="scrollto">App</a></li>
                                        <!-- Login and Signup Modal on click -->
                                        <li><a class="btn btn-nav ingresar_modal" data-toggle="modal" href="javascript:void(0)" onclick="openLoginModal();">Ingresar</a></li>
                                        <li><a class="btn btn-nav btn-signup" data-toggle="modal" href="javascript:void(0)" onclick="openRegisterModal();">Registrarse</a></li> 
                                    </ul>
                                </div><!-- /End Navbar-Collapse -->
                            </div><!-- /End Col -->
                        </div><!-- /End Row -->
                    </div><!-- /End Container -->
                </nav><!-- /End Sticky Navigation -->

                <!-- =========================================
                     Modal
                ========================================== -->

                <!-- =========================================
                     Login/Signup Bootstrap Modal
                ==========================================  -->
                <div class="modal fade login" id="loginModal">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            
                            <!-- Modal-Header -->
                            <div class="modal-header">
                                <!-- Close Button -->
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                    <i class="icon icon_close_alt2"></i>
                                </button>
                                <!-- Modal-Header Title-->
                                <h4 class="modal-title">Inicia sección<span>Porciweb</span></h4>
                                <p class="modal-subtitle">Ingresa tu correo y contraseña</p>
                            </div><!-- /End Modal-Header -->

                            <!-- Modal-Body Content -->
                            <div class="modal-body">  
                                <div class="box">
                                     <div class="content">
                                        <!-- Login Form -->
                                        <div class="loginBox">
                                            <form id="login-modal" role="form">
                                                <!-- Success/Alert Notification -->
                                                <p class="lm-success hide"><i class="icon icon_check_alt2"></i> <strong>Los datos se guardaron correctamente.</strong></p>
                                                <p class="lm-failed hide"><i class="icon icon_close_alt2"></i><strong> Algo esta fallando.</strong></p>
                                                <!-- Input Fields -->
                                                <input id="lm-email" class="form-control input-lg" type="text" placeholder="Nombre" name="lm-email" required>
                                                <input id="lm-password" class="form-control input-lg" type="text" placeholder="Correo" name="lm-password" required>
                                                <!-- Login Button -->
                                                <button class="btn btn-color ingresar">Ingresar</button>
                                            </form>
                                        </div><!-- /End Login Form -->
                                     </div>
                                </div><!-- /End Login Form Box -->

                                 <div class="box">
                                    <!-- Signup Form -->
                                    <div class="content registerBox" style="display:none;">
                                        <form id="signup-modal" role="form">
                                            <!-- Success/Alert Notification -->
                                            <p class="sm-success"><i class="icon icon_check_alt2"></i> <strong>Se registro correctamente</strong></p>
                                            <p class="sm-failed"><i class="icon icon_close_alt2"></i><strong> Algo fallo registro no completo.</strong></p>
                                            <!-- Input Fields -->
                                            <input id="sm-email" class="form-control input-lg" type="text" placeholder="Correo" name="sm-email" required>
                                            <input id="sm-password" class="form-control input-lg" type="password" placeholder="Contraseña" name="sm-password">
                                            <input id="sm-confirm" class="form-control input-lg" type="password" placeholder="Confirmar contraseña" name="sm-confirm">
                                            <!-- Signup Button -->
                                            <button class="btn btn-color">Crea una cuenta</button>
                                        </form>
                                        
                                    </div><!-- /End Signup Form -->
                                </div><!-- /End Signup Form Box -->
                            </div><!-- /End Modal-Body -->

                            <!-- Modal-Footer -->
                            <div class="modal-footer">
                                <!-- Login-Footer. Redirect to Signup-Modal-->
                                <div class="forgot login-footer">
                                    <span>No tienes  cuenta ? 
                                         <a href="javascript: showRegisterForm();">Registrate.</a>
                                    </span>
                                </div>
                                <!-- Signup-Footer. Redirect to Login-Modal -->
                                <div class="forgot register-footer" style="display:none">
                                     <span>Ya tienes una cuenta ?</span>
                                     <a href="javascript: showLoginForm();">Ingresa</a>
                                </div>
                            </div><!-- /End Modal-Footer -->      
                          
                        </div><!-- /End Modal Content -->
                    </div><!-- /End Modal Dialog -->
                </div><!-- /End Modal -->
                <!-- =========================
                                HEADER IMG 
                  ============================== -->

                    <div class="container vmiddle fast-reg">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="hero-section">
                                
                                <!-- Welcome - Hero Message -->
                                <h1 class="text-white">LA MEJOR FORMA DE  <br> ADMINISTRAR TU GRANJA</h1>
                                <p class="text-white">Empieza a hora  y descubre como funciona.</p>
                                
                                <div class="col-sm-12">
                                    <div class="fast-reg-box">
                                        <!-- Fast Registration Form -->
                                        <form id="fast-reg" role="form">
                                            <!-- Notification -->
                                            <p class="fast-success"><i class="icon icon_check_alt2"></i> <strong>Bienvenido a tus 30 días de prueba.</strong></p>
                                            <p class="fast-failed"><i class="icon icon_close_alt2"></i><strong> Algo va mal, los datos no son correctos.</strong></p>  

                                            <!-- Input fields -->
                                            <div class="form-group">
                                                <input type="email" name="fast-email" id="fast-email" class="form-control input-lg" placeholder="Ingresa tu correo" required>
                                            </div>
                                            <div class="form-group">
                                                <input type="password" size="25" name="fast-password" id="fast-password" class="form-control input-lg" placeholder="Ingres tu contraseña" required>
                                            </div>
                                            <!-- Signup Button -->
                                            <button class="btn btn-color">Toma 30 días de prueba </button>
                                        </form>
                                    </div><!-- /End Fast-Reg -->
                                </div><!-- /End Col -->
                            </div><!-- /End Intro-Section -->
                        </div><!-- /End Col -->
                    </div><!-- /End Row -->
                </div><!-- /End Container Hero-Section -->


            </div><!-- /End Background Overlay -->
            </header><!-- End header -->

             <!-- =================================
             SECTION ABOUT - INTRO FEATURES
        ====================================== -->
        <section class="intro-features" id="about">
            <div class="container">
                <!-- Padding -->
                <div class="wrapper-lg">
                    <div class="row">
                        <!-- Section Header Title -->
                        <div class="col-xs-12">
                            <h2>Es hora de automatizar los procesos de tu granja</h2>
                            <p class="large">Comprueba como en poco tiempo tu productividad aumenta  considerablemente.</p>
                        </div>
                    </div>
                    <!-- Three Main Features with Icons -->
                    <div class="row">
                        <div class="col-sm-4 intro-content">
                            <div class="icon-lg">
                                <i class="icon icon-mobile"></i>
                            </div>
                            <h4>Facil manejo </h4>
                            <p>Optio dolores expedita unde vel laudantium enim nisi eos distinctio, rem. Repellat repudiandae quos laborum magni.</p>
                        </div>
                        <div class="col-sm-4 intro-content">
                            <div class="icon-lg">
                                <i class="icon icon-browser"></i>
                            </div>
                            <h4>Control donde quieras </h4>
                            <p>Praesentium reprehenderit quae, sequi deserunt laboriosam velit necessitatibus nulla ea optio, quis nam pariatur.</p>  
                        </div>
                        <div class="col-sm-4 intro-content">
                            <div class="icon-lg">
                                <i class="icon icon-documents"></i>
                            </div>
                            <h4>App movil</h4>
                            <p>Aperiam recusandae ipsa culpa, cupiditate magnam dolor molestiae, omnis, architecto possimus aperiam corrupti corporis.</p>
                        </div>
                    </div><!-- /End Row -->
                </div><!-- /End Wrapper -->
            </div><!-- /End Container -->
        </section>
        <!-- =============================
             /END INTRO FEATURES
        ============================== -->
        <!-- ==================================================
            CHARTS & SHOWCASE SECTION
        ======================================================= -->
        <section class="charts" id="charts">
            <div class="container">
                <div class="wrapper-lg">
                    <div class="row">
                        <div class="col-md-12">
                            <h2>Get out of the Building</h2>
                            <p class="large">Lorem ipsum dolor sit amet, quando eleifend iracundia per ea. Te reque aeque dolor pri</p>
                        </div>
                    </div>

                    <div class="row doughnut-box">
                        <div class="col-md-5">
                            <!-- Div Required for Correct Line Chart Animation -->
                            <div class="start-line"></div>
                            <!-- Chart Text Description -->
                            <h4>Todo lo que necesitas para el buen manejo de tu granja.</h4>
                            <p>Perferendis aliquid accusamus nostrum recusandae maxime dolor dolorum numquam pariatur quasi sit, in, culpa hic, fugiat dignissimos fuga necessitatibus tempore molestias ipsum corporis distinctio. Minima mollitia.</p>
                            <p><a href="#canvas-bg" class="scrollto"><strong>Lorem ipsum dolor sit amet, quando›</strong></a></p>
                        </div>
                        <div class="col-md-7">
                            <!-- Doughnut Charts  -->
                            <div id="canvas-holder">
                                <div class="chart-text">
                                    100&#37;<span>Crafted with<br> Passion</span>
                                </div>
                                <canvas id="chart-area" width="400" height="400"></canvas>
                            </div>
                            <div id="canvas2-holder">
                                <div class="chart2-text">
                                    827<span>Lorem ipsum<br>Lorem ipsum</span>
                                </div>
                                <canvas id="chart2-area" width="300" height="300"></canvas>
                            </div>
                        </div>
                    </div><!-- /End Chart-Box -->
                        
                    <div class="row chart-box">
                        <div class="col-md-6 col-md-push-6 col-sm-12">
                            <!-- Chart Text Description -->
                            <h4>Porciweb <strong> dolor sit amet, quando</strong> Lorem ipsum dolor sit amet, quando</h4>
                            <p>Exercitationem, hic commodi libero reprehenderit id iusto, consequatur unde pariatur recusandae dicta sequi voluptatum quae corrupti culpa quibusdam nihil error harum itaque praesentium quidem corporis cupiditate voluptatem. Error tempore aperiam nulla saepe corrupti!</p>
                            <p><a href="#features" class="scrollto"><strong> Lorem ipsum dolor sit amet, quando›</strong></a></p>
                        </div>
                        <div class="col-md-6 col-md-pull-6 col-sm-12">
                            <!-- Line Chart -->
                            <div class="line-canvas">
                                <div>
                                    <canvas id="line-canvas" height="450" width="600"></canvas>
                                </div>
                            </div>
                        </div>
                    </div><!-- /End Chart-Box -->
                    
                    <div class="row showcase">
                        <div class="col-md-4">
                            <h4>Lorem ipsum dolor sit amet, quando</h4>
                            <p>Praesentium voluptatem excepturi corporis labore architecto eos ea molestiae saepe facere at voluptate similique iusto porro pariatur, dolorum dolor magni sint eveniet iste. Eaque, aliquam, dignissimos.</p>
                            <p><a href="#mobile-download" class="scrollto"><strong>Descarga la App movil ›</strong></a></p>
                        </div>
                        <div class="col-md-8">
                            <!-- Devices Image -->
                            <div class="img-box">
                                <img src="assets/images/showcase.png" alt="" class="img-responsive">
                                <a href="http://youtu.be/SZEflIVnhH8" data-type="youtube" class="venobox video-player"><i class="icon arrow_triangle-right_alt2 wow fadeIn" data-wow-duration="2s"></i></a>
                            </div>
                        </div>
                    </div><!-- /End Chart-Box -->

                </div><!-- /End Wrapper -->
            </div><!-- /End Container -->      
        </section>
        <!-- =============================
             /END CHARTS SECTION 
        ============================== -->
        
        
       








<!-- =========================
         SCRIPTS 
    ============================== -->
    <script src="js/jquery1.11.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.1.3.min.js"></script>
    <script src="js/modernizr.custom.min.js"></script>
    <script src="js/plugins.min.js"></script>
    <!--script src="js/twitter/tweetie.min.js"></script>
    <!-- Custom Script -->
    <script src="js/index.js"></script>
</body>
</html>