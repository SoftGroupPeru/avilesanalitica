<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="es"> <!--<![endif]-->
<head>
    <title><?php echo $title;?></title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Especialistas en soluciones tecnológicas a los equipos de laboratorio, de análisis, cubriendo sus requerimientos de manera integral, brindando mantenimiento y capacitación constante">
    <meta name="author" content="SoftGroupPerú">

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo $url;?>favicon.png">

    <!-- Web Fonts -->
    <link rel='stylesheet' type='text/css' href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600&amp;subset=cyrillic,latin'>

    <!-- CSS Global Compulsory -->
    <link rel="stylesheet" href="<?php echo $url;?>assets/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $url;?>assets/css/shop.style.css">
    <!--<link rel="stylesheet" href="<?php echo $url;?>assets/css/style.css">-->

    <!-- CSS Header and Footer -->
    <link rel="stylesheet" href="<?php echo $url;?>assets/css/headers/header-v5.css">
    <link rel="stylesheet" href="<?php echo $url;?>assets/css/footers/footer-v4.css">

    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="<?php echo $url;?>assets/plugins/animate.css">
    <link rel="stylesheet" href="<?php echo $url;?>assets/plugins/line-icons/line-icons.css">
    <link rel="stylesheet" href="<?php echo $url;?>assets/plugins/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo $url;?>assets/plugins/scrollbar/css/jquery.mCustomScrollbar.css">
    <link rel="stylesheet" href="<?php echo $url;?>assets/plugins/owl-carousel/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="<?php echo $url;?>assets/plugins/revolution-slider/rs-plugin/css/settings.css">
    <link rel="stylesheet" href="<?php echo $url;?>assets/plugins/sky-forms-pro/skyforms/css/sky-forms.css">
    <link rel="stylesheet" href="<?php echo $url;?>assets/plugins/sky-forms-pro/skyforms/custom/custom-sky-forms.css">
    <!--[if lt IE 9]><link rel="stylesheet" href="<?php echo $url;?>assets/plugins/sky-forms-pro/skyforms/css/sky-forms-ie8.css"><![endif]-->
    <!-- CSS Theme -->
    <link rel="stylesheet" href="<?php echo $url;?>assets/css/theme-colors/default.css" id="style_color">
    <link rel="stylesheet" href="<?php echo $url;?>assets/css/theme-colors/aqua.css">
    <!-- CSS Page Style -->
    <link rel="stylesheet" href="<?php echo $url;?>assets/css/page_404_error.css">
    <link rel="stylesheet" href="<?php echo $url;?>assets/css/pages/page_contact.css">

    <!-- CSS Customization -->
    <link rel="stylesheet" href="<?php echo $url;?>assets/css/custom.css">


</head>

<body class="header-fixed">
<div class="wrapper">
    <!--=== Header v5 ===-->
    <div class="header-v5 header-static">
        <!-- Topbar v3 -->
        <div class="topbar-v3">
            <div class="search-open">
                <div class="container">
                    <input type="text" class="form-control" placeholder="Search">
                    <div class="search-close"><i class="icon-close"></i></div>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <!-- Topbar Navigation -->
                        <ul class="left-topbar">
                            <li>
                                <a>Moneda (PEN)</a>
                                <ul class="currency">
                                    <li class="active">
                                        <a href="#">PEN <i class="fa fa-check"></i></a>
                                    </li>
                                    <li><a href="#">USD</a></li>
                                    <li><a href="#">Euro</a></li>
                                </ul>
                            </li>
                            <li>
                                <a>Idioma (ES)</a>
                                <ul class="language">
                                    <li class="active">
                                        <a href="#">Español (ES)<i class="fa fa-check"></i></a>
                                    </li>
                                    <li><a href="#">Ingles (EN)</a></li>
                                </ul>
                            </li>
                        </ul><!--/end left-topbar-->
                    </div>
                    <div class="col-sm-6">
                        <ul class="list-inline right-topbar pull-right">
                            <li><a href="#">Cuenta</a></li>
                            <li><a href="shop-ui-add-to-cart.html">Lista (0)</a></li>
                            <li><a href="shop-ui-login.html">Iniciar Sesión</a> | <a href="shop-ui-register.html">Registrar</a></li>
                            <li><i class="search fa fa-search search-button"></i></li>
                        </ul>
                    </div>
                </div>
            </div><!--/container-->
        </div>
        <!-- End Topbar v3 -->

        <!-- Navbar -->
        <div class="navbar navbar-default mega-menu" role="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?php echo $url;?>">
                        <img id="logo-header" src="<?php echo $url;?>images/logo-1.png" class="img-responsive" alt="Logo">
                    </a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-responsive-collapse">
                    <!-- Shopping Cart -->
                    <ul class="list-inline shop-badge badge-lists badge-icons pull-right">
                        <li>
                            <a href="#"><i class="fa fa-shopping-cart"></i></a>
                            <span class="badge badge-sea rounded-x">3</span>
                            <ul class="list-unstyled badge-open mCustomScrollbar" data-mcs-theme="minimal-dark">
                                <li>
                                    <img src="<?php echo $url;?>images/productos/producto_sample.jpg" alt="sample">
                                    <button type="button" class="close">×</button>
                                    <div class="overflow-h">
                                        <span>Producto 1</span>
                                        <small>1 x S/. 400.00</small>
                                    </div>
                                </li>
                                <li>
                                    <img src="<?php echo $url;?>images/productos/producto_sample.jpg" alt="">
                                    <button type="button" class="close">×</button>
                                    <div class="overflow-h">
                                        <span>Producto 2</span>
                                        <small>1 x S/. 400.00</small>
                                    </div>
                                </li>
                                <li>
                                    <img src="<?php echo $url;?>images/productos/producto_sample.jpg" alt="">
                                    <button type="button" class="close">×</button>
                                    <div class="overflow-h">
                                        <span>Producto 3</span>
                                        <small>1 x S/. 400.00</small>
                                    </div>
                                </li>
                                <li class="subtotal">
                                    <div class="overflow-h margin-bottom-10">
                                        <span>Subtotal</span>
                                        <span class="pull-right subtotal-cost">S/. 1200.00</span>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <a href="shop-ui-inner.html" class="btn-u btn-brd btn-brd-hover btn-u-sea-shop btn-block">Ver carrito</a>
                                        </div>
                                        <div class="col-xs-6">
                                            <a href="shop-ui-add-to-cart.html" class="btn-u btn-u-sea-shop btn-block">Ver Carrito</a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <!-- End Shopping Cart -->

                    <!-- Nav Menu -->
                    <ul class="nav navbar-nav">
                        <!--<li><a href="<?php echo $url;?>">Inicio</a></li>-->
                        <li><a class="<?php echo (isset($nosotros))?'menu_active':''; ?>" href="<?php echo $url;?>nosotros">Nosotros</a></li>

                        <!-- Productos -->
                        <li class="dropdown">
                            <a class="<?php echo (isset($productos))?'menu_active':''; ?>" href="javascript:void(0);" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown">
                                Productos
                            </a>
                            <ul class="dropdown-menu">
                                <li class="dropdown-submenu">
                                    <a href="javascript:void(0);">Elga</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">PURELAB</a></li>
                                        <li><a href="#">MEDICA</a></li>
                                        <li><a href="#">CENTRA</a></li>
                                        <li><a href="#">BIOPURE</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu">
                                    <a href="javascript:void(0);">Environmental Express</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Manual HotBlock</a></li>
                                        <li><a href="#">MicroBlock</a></li>
                                        <li><a href="#">Accesorios y Consumibles</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu">
                                    <a href="javascript:void(0);">CETAC</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Autosamplers</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu">
                                    <a href="javascript:void(0);">KODO</a>
                                </li>
                                <li class="dropdown-submenu">
                                    <a href="javascript:void(0);">EBERBACH</a>
                                </li>
                                <li class="dropdown-submenu">
                                    <a href="javascript:void(0);">PARKER</a>
                                </li>
                                <li class="dropdown-submenu">
                                    <a href="javascript:void(0);">HERAEUS</a>
                                </li>
                                <li class="dropdown-submenu">
                                    <a href="javascript:void(0);">FISHER SCIENTIFIC</a>
                                </li>
                            </ul>
                        </li>
                        <!-- End Productos -->

                        <!-- Productos 2 -->
                        <li class="dropdown mega-menu-fullwidth">
                            <a class="<?php echo (isset($productos2))?'menu_active':''; ?>" href="javascript:void(0);" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown">
                                Productos 2
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <div class="mega-menu-content">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-3 col-sm-6">
                                                    <h3 class="mega-menu-heading">Elga</h3>
                                                    <ul class="list-unstyled style-list">
                                                      <li><a href="#">PURELAB</a></li>
                                                      <li><a href="#">MEDICA</a></li>
                                                      <li><a href="#">CENTRA</a></li>
                                                      <li><a href="#">BIOPURE</a></li>
                                                    </ul>
                                                    <h3 class="mega-menu-heading">Environmental Express</h3>
                                                    <ul class="list-unstyled style-list">
                                                      <li><a href="#">Manual HotBlock</a></li>
                                                      <li><a href="#">HotBlock Pro</a></li>
                                                      <li><a href="#">AutoBlock Plus</a></li>
                                                      <li><a href="#">Accesorios y Consumibles</a></li>
                                                    </ul>
                                                </div>

                                                <div class="col-md-3 col-sm-6">
                                                    <h3 class="mega-menu-heading">KODO</h3>
                                                    <ul class="list-unstyled style-list">
                                                      <li><a href="#">PURELAB</a></li>
                                                      <li><a href="#">MEDICA</a></li>
                                                      <li><a href="#">CENTRA</a></li>
                                                      <li><a href="#">BIOPURE</a></li>
                                                    </ul>
                                                    <h3 class="mega-menu-heading">EBERBACH</h3>
                                                    <ul class="list-unstyled style-list">
                                                        <li><a href="#">item </a> <span class="label label-danger-shop">New</span></li>
                                                        <li><a href="#">item </a></li>
                                                    </ul>

                                                </div>

                                                <div class="col-md-3 col-sm-6">
                                                    <h3 class="mega-menu-heading">PARKER</h3>
                                                    <ul class="list-unstyled style-list">
                                                        <li><a href="#">item</a></li>
                                                        <li><a href="#">item</a> <span class="label label-danger-shop">New</span></li>
                                                        <li><a href="#">item</a></li>
                                                        <li><a href="#">item</a></li>
                                                        <li><a href="#">item</a></li>
                                                    </ul>
                                                    <h3 class="mega-menu-heading">CETAC</h3>
                                                    <ul class="list-unstyled style-list">
                                                        <li><a href="#">item </a></li>
                                                        <li><a href="#">item </a></li>
                                                        <li><a href="#">item </a></li>
                                                    </ul>
                                                </div>

                                                <div class="col-md-3 col-sm-6">
                                                    <h3 class="mega-menu-heading">HERAEUS</h3>
                                                    <ul class="list-unstyled style-list">
                                                        <li><a href="#">item</a></li>
                                                        <li><a href="#">item</a></li>
                                                        <li><a href="#">item</a></li>
                                                        <li><a href="#">item</a> <span class="label label-danger-shop">New</span></li>
                                                        <li><a href="#">item</a></li>
                                                    </ul>
                                                    <h3 class="mega-menu-heading">FISHER SCIENTIFIC</h3>
                                                    <ul class="list-unstyled style-list">
                                                        <li><a href="#">item</a></li>
                                                        <li><a href="#">item</a></li>
                                                        <li><a href="#">item</a></li>
                                                        <li><a href="#">item</a></li>
                                                        <li><a href="#">item</a></li>
                                                    </ul>
                                                </div>

                                            </div><!--/end row-->
                                        </div><!--/end container-->
                                    </div><!--/end mega menu content-->
                                </li>
                            </ul><!--/end dropdown-menu-->
                        </li>
                        <!-- End Productos2 -->

                        <!-- Servicios -->
                        <li class="dropdown">
                            <a class="<?php echo (isset($servicios))?'menu_active':''; ?>" href="javascript:void(0);" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown" data-delay="1000">
                                Servicios
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="#">Ventas</a>
                                </li>
                                <li>
                                    <a href="#">Servicio Técnico</a>
                                </li>
                                <li>
                                    <a href="#">Capacitaciones</a>
                                </li>
                            </ul>
                        </li>
                        <!-- End Servicios -->

                        <!-- Gifts -->
                        <li class="dropdown mega-menu-fullwidth">
                            <a class="<?php echo (isset($promociones))?'menu_active':''; ?>" href="javascript:void(0);" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown">
                                Promociones
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <div class="mega-menu-content">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-3 col-sm-12 col-xs-12 md-margin-bottom-30">
                                                    <h3 class="mega-menu-heading">Pellentes que nec diam lectus</h3>
                                                    <p>Proin pulvinar libero quis auctor pharet ra. Aenean fermentum met us orci, sedf eugiat augue pulvina r vitae. Nulla dolor nisl, molestie nec aliquam vitae, gravida sodals dolor...</p>
                                                    <button type="button" class="btn-u btn-u-dark">Read More</button>
                                                </div>
                                                <div class="col-md-3 col-sm-4 col-xs-4 md-margin-bottom-30">
                                                    <a href="#"><img class="product-offers img-responsive" src="assets/img/blog/01.jpg" alt=""></a>
                                                </div>
                                                <div class="col-md-3 col-sm-4 col-xs-4 sm-margin-bottom-30">
                                                    <a href="#"><img class="product-offers img-responsive" src="assets/img/blog/02.jpg" alt=""></a>
                                                </div>
                                                <div class="col-md-3 col-sm-4 col-xs-4">
                                                    <a href="#"><img class="product-offers img-responsive" src="assets/img/blog/03.jpg" alt=""></a>
                                                </div>
                                            </div><!--/end row-->
                                        </div><!--/end container-->
                                    </div><!--/end mega menu content-->
                                </li>
                            </ul><!--/end dropdown-menu-->
                        </li>
                        <!-- End Gifts -->
                        <li><a class="<?php echo (isset($contacto))?'menu_active':''; ?>" href="<?php echo $url;?>contacto">Contacto</a></li>
                    </ul>
                    <!-- End Nav Menu -->
                </div>
            </div>
        </div>
        <!-- End Navbar -->
    </div>
    <!--=== End Header v5 ===-->
