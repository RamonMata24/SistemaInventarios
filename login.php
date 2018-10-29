<!DOCTYPE html>
<html lang="en">

<head>
    <title>Sistema Inventario</title>
    <!-- HTML5 Shim and Respond.js IE10 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 10]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="#">
    <meta name="keywords" content="Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="#">
    <!-- Favicon icon -->

    <link rel="icon" href="View/assets/images/auth/ico_inventario.png" type="image/x-icon">
    <!-- Google font--><link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,800" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="View/bower_components/bootstrap/css/bootstrap.min.css">
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="View/assets/icon/themify-icons/themify-icons.css">
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="View/assets/icon/icofont/css/icofont.css">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="View/assets/css/style.css">


</head>

<body class="fix-menu">
    <!-- Pre-loader start -->
    <div class="theme-loader">
    <div class="ball-scale">
        <div class='contain'>
            <div class="ring"><div class="frame"></div></div>
            <div class="ring"><div class="frame"></div></div>
            <div class="ring"><div class="frame"></div></div>
            <div class="ring"><div class="frame"></div></div>
            <div class="ring"><div class="frame"></div></div>
            <div class="ring"><div class="frame"></div></div>
            <div class="ring"><div class="frame"></div></div>
            <div class="ring"><div class="frame"></div></div>
            <div class="ring"><div class="frame"></div></div>
            <div class="ring"><div class="frame"></div></div>
        </div>
    </div>
</div>
    <!-- Pre-loader end -->

    <section class="login p-fixed d-flex text-center bg-primary common-img-bg">
        <!-- Container-fluid starts -->
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <!-- Authentication card start -->
                    <div class="login-card card-block auth-body mr-auto ml-auto">
                        <form action = "validar.php" method = "POST" class="md-float-material">
                            <div class="text-center">
                                <img src="View/assets/images/auth/ico_inventario.png" alt="logo.png">
                            </div>
                            <div class="auth-box">
                                <div class="row m-b-20">
                                    <div class="col-md-12">
                                        <h3 class="text-left txt-primary">Sign In</h3>
                                    </div>
                                </div>
                                <hr/>
                                <div class="input-group">
                                    <input type="text" class="form-control" name = "username" placeholder="Your Username">
                                    <span class="md-line"></span>
                                </div>
                                <div class="input-group">
                                    <input type="password" class="form-control"name ="contrasena" placeholder="Password">
                                    <span class="md-line"></span>
                                </div>
                                <div class="row m-t-25 text-left">
                                    <div class="col-12">
                                    </div>
                                </div>
                                <div class="row m-t-30">
                                    <div class="col-md-12">
                                        <button type="submit" name = "submit" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">Sign in</button>
                                    </div>
                                </div>
                                <hr/>
                                </div>

                            </div>
                        </form>
                        <!-- end of form -->
                    </div>
                    <!-- Authentication card end -->
                </div>
                <!-- end of col-sm-12 -->
            </div>
            <!-- end of row -->
        </div>
        <!-- end of container-fluid -->
    </section>
    <!-- Warning Section Starts -->
    <!-- Older IE warning message -->
    <!-- Warning Section Ends -->
    <!-- Required Jquery -->
    <script type="text/javascript" src="View/bower_components/jquery/js/jquery.min.js"></script>
    <script type="text/javascript" src="View/bower_components/jquery-ui/js/jquery-ui.min.js"></script>
    <script type="text/javascript" src="View/bower_components/popper.js/js/popper.min.js"></script>
    <script type="text/javascript" src="View/bower_components/bootstrap/js/bootstrap.min.js"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="View/bower_components/jquery-slimscroll/js/jquery.slimscroll.js"></script>
    <!-- modernizr js -->
    <script type="text/javascript" src="View/bower_components/modernizr/js/modernizr.js"></script>
    <script type="text/javascript" src="View/bower_components/modernizr/js/css-scrollbars.js"></script>
    <!-- i18next.min.js -->
    <script type="text/javascript" src="View/bower_components/i18next/js/i18next.min.js"></script>
    <script type="text/javascript" src="View/bower_components/i18next-xhr-backend/js/i18nextXHRBackend.min.js"></script>
    <script type="text/javascript" src="View/bower_components/i18next-browser-languagedetector/js/i18nextBrowserLanguageDetector.min.js"></script>
    <script type="text/javascript" src="View/bower_components/jquery-i18next/js/jquery-i18next.min.js"></script>
    <script type="text/javascript" src="View/assets/js/common-pages.js"></script>
</body>

</html>
