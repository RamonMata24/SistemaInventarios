<?php 
	session_start();
	if (!$_SESSION['validar']) {
		header('location: login.php');
		exit();
	}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Sistema de inventario</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="#">
    <meta name="keywords" content="Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="#">
    <!-- Favicon icon -->
    <link rel="icon" href="View/assets/images/auth/ico_inventario.png" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="View/bower_components/bootstrap/css/bootstrap.min.css">
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="View/assets/icon/themify-icons/themify-icons.css">
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="View/assets/icon/icofont/css/icofont.css">
    <!-- Menu-Search css -->
    <link rel="stylesheet" type="text/css" href="View/assets/pages/menu-search/css/component.css">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="View/assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="View/assets/css/jquery.mCustomScrollbar.css">
</head>


<body>
    <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="ball-scale">
            <div class='contain'>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pre-loader end -->

    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">

            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    <nav class="pcoded-navbar">
                        <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
                        <div class="pcoded-inner-navbar main-menu">
                            <div class="">
                                <div class="main-menu-header">
                                    <img class="img-40 img-radius" src="View/assets/images/avatar-5.jpg" alt="User-Profile-Image">
                                    <!-- Nombre y perfil del usuario -->
                                    <div class="user-details">
                                        <span>Ramón Mata</span>
                                        <span id="more-details">UX Designer<i class="ti-angle-down"></i></span>
                                    </div>
                                </div>

                                <div class="main-menu-content">
                                    <ul>
                                        <li class="more-details">
                                            <a href="index.php?action=salir"><i class="ti-layout-sidebar-left"></i>Logout</a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- ./Acaba el nombre y perfil del usuario -->
                            </div>

                            <div class="pcoded-navigatio-lavel" data-i18n="nav.category.navigation">Navegación</div>

                            <!-- Menu de la izquierda -->
                            <!-- Aqui van los links para la nevegacion del sistema -->
                            <ul class="pcoded-item pcoded-left-item">
                                <li >
                                    <a href="index.php?action=inicio">
                                        <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.dash.main">Inicio</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li> 
                                
                                <li >
                                    <a href="index.php?action=usuarios">
                                        <span class="pcoded-micon"><i class="ti-user"></i><b>D</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.dash.main">Usuarios</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>

                                <li >
                                    <a href="index.php?action=categorias">
                                        <span class="pcoded-micon"><i class="ti-layers"></i><b>D</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.dash.main">Categorias</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li >
                                    <a href="index.php?action=productos">
                                        <span class="pcoded-micon"><i class="ti-shopping-cart-full"></i><b>D</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.dash.main">Productos</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                               
                            </ul>
                            <!-- ./ Finaliza el menu de la izquierda -->
                        
                        </div>
                    </nav>
                    <div class="pcoded-content">
                        <div class="pcoded-inner-content">
                            <div class="main-body">
                                <div class="page-wrapper">

                                    <div class="page-body">
                                        <!-- Aqui va lo del mvc-->
                                        <?php
                                            $mvc = new Controller();
                                            $mvc->enlacesPaginasController();
                                        ?>
                                    </div>
                                </div>
                            </div>

                           <!-- <div id="styleSelector">

                            </div> --> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    
    <!-- Required Jquery -->
    <script type="text/javascript" src="View/bower_components/jquery/js/jquery.min.js"></script>
    <script type="text/javascript" src="View/bower_components/jquery-ui/js/jquery-ui.min.js"></script>
    <script type="text/javascript" src="View/bower_components/popper.js/js/popper.min.js"></script>
    <script type="text/javascript" src="View/bower_components/bootstrap/js/bootstrap.min.js"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="View/bower_components/jquery-slimscroll/js/jquery.slimscroll.js"></script>
    <!-- modernizr js -->
    <script type="text/javascript" src="View/bower_components/modernizr/js/modernizr.js"></script>
    <!-- am chart -->
    <script src="View/assets/pages/widget/amchart/amcharts.min.js"></script>
    <script src="View/assets/pages/widget/amchart/serial.min.js"></script>
    <!-- Chart js -->
    <script type="text/javascript" src="View/bower_components/chart.js/js/Chart.js"></script>
    <!-- Todo js -->
    <script type="text/javascript" src="View/assets/pages/todo/todo.js "></script>
    <!-- i18next.min.js -->
    <script type="text/javascript" src="View/bower_components/i18next/js/i18next.min.js"></script>
    <script type="text/javascript" src="View/bower_components/i18next-xhr-backend/js/i18nextXHRBackend.min.js"></script>
    <script type="text/javascript" src="View/bower_components/i18next-browser-languagedetector/js/i18nextBrowserLanguageDetector.min.js"></script>
    <script type="text/javascript" src="View/bower_components/jquery-i18next/js/jquery-i18next.min.js"></script>
    <!-- Custom js -->
    <script type="text/javascript" src="View/assets/pages/dashboard/custom-dashboard.min.js"></script>
    <script type="text/javascript" src="View/assets/js/SmoothScroll.js"></script>
    <script src="View/assets/js/pcoded.min.js"></script>
    <script src="View/assets/js/demo-12.js"></script>
    <script src="View/assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script type="text/javascript" src="View/assets/js/script.min.js"></script>
</body>

</html>
