<?php
 
 

?>

<!DOCTYPE html>
<html>
<head>
	<title>Porciweb</title>
	 <!-- FAVICON  -->
    <link rel="icon" href="images/favicon/favicon.ico">
    
    <!-- =========================
       STYLESHEETS 
    ============================== -->
    
    <!-- BOOTSTRAP CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- FONT ICONS -->
    <link rel="stylesheet" href="css/icons.min.css">
     
    <!-- GOOGLE FONTS -->
    <link href="http://fonts.googleapcss?family=Raleway:300,400,600,700%7COpen+Sans:300,400,600,700%7CHandlee" rel="stylesheet">
    
    <!-- PLUGINS STYLESHEET -->
    <link rel="stylesheet" href="css/plugins.min.css">
    
    <!-- CUSTOM STYLESHEET -->
    <link rel="stylesheet" href="css/style.css">

    <!-- RESPONSIVE FIXES -->
    <link rel="stylesheet" href="css/responsive.css">

    
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
                                        <li><a class="btn btn-nav" data-toggle="modal" href="javascript:void(0)" onclick="openLoginModal();">Ingresar</a></li>
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
                                                <p class="lm-success"><i class="icon icon_check_alt2"></i> <strong>Los datos se guardaron correctamente.</strong></p>
                                                <p class="lm-failed"><i class="icon icon_close_alt2"></i><strong> Algo esta fallando.</strong></p>
                                                <!-- Input Fields -->
                                                <input id="lm-email" class="form-control input-lg" type="text" placeholder="Correo" name="lm-email" required>
                                                <input id="lm-password" class="form-control input-lg" type="password" placeholder="Contraseña" name="lm-password" required>
                                                <!-- Login Button -->
                                                <button class="btn btn-color">Ingresar</button>
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
         SCRIPTS 
    ============================== -->
    <script src="js/jquery1.11.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.1.3.min.js"></script>
    <script src="js/modernizr.custom.min.js"></script>
    <script src="js/plugins.min.js"></script>
    <script src="js/twitter/tweetie.min.js"></script>
    <!-- Custom Script -->
    <script src="js/index.js"></script>
</body>
</html>