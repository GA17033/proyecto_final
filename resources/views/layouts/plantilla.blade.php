<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TPI Tienda</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/flexslider.css') }}" rel="stylesheet">
    <link href="{{ asset('css/chosen.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/color-01.css') }}" rel="stylesheet">
</head>

<body class="home-page home-01 ">
    <div id="app">

        <!-- mobile menu -->
        <div class="mercado-clone-wrap">
            <div class="mercado-panels-actions-wrap">
                <a class="mercado-close-btn mercado-close-panels" href="#">x</a>
            </div>
            <div class="mercado-panels"></div>
        </div>

        <!--header-->
        <header id="header" class="header header-style-1">
            <div class="container-fluid">
                <div class="row">
                    <div class="container">
                        <div class="mid-section main-info-area">

                            <div class="wrap-search center-section">
                                <div class="wrap-search-form">
                                    <form action="#" id="form-search-top" name="form-search-top">
                                        <input type="text" name="search" value="" placeholder="Busca aquí...">
                                        <button form="form-search-top" type="button"><i class="fa fa-search"
                                                aria-hidden="true"></i></button>
                                        <div class="wrap-list-cate">
                                            <input type="hidden" name="product-cate" value="0" id="product-cate">
                                            <a href="#" class="link-control">Todas</a>


                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="wrap-icon right-section">

                                <div class="wrap-icon-section minicart">
                                    <a href="#" class="link-direction">
                                        <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                                        <div class="left-info">
                                            <span class="index">0 items</span>
                                            <span class="title">Carrito</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="wrap-icon-section user">
                                    <a href="#" class="link-direction">
                                        <i class="fa fa-user" aria-hidden="true"></i>
                                        <div class="left-info">
                                            <span class="index">Iniciar Sesión</span>
                                            <span class="title">Aquí</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="wrap-icon-section show-up-after-1024">
                                    <a href="#" class="mobile-navigation">
                                        <span><a href="/acerca" class="link-term mercado-item-title">Acerca de nosotros</a></span>
                                        <span><a href="/acerca" class="link-term mercado-item-title">Acerca de nosotros</a></span>
                                        <span><a href="carrito" class="link-term mercado-item-title">Carrito</a></span>
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
            <div class="nav-section header-sticky">

                <div class="primary-nav-section">
                    <div class="container">
                        <ul class="nav primary clone-main-menu" id="mercado_main" data-menuname="Main menu">
                            <li class="menu-item home-icon">
                                <a href="/" class="link-term mercado-item-title"><i class="fa fa-home"
                                        aria-hidden="true"></i></a>
                            </li>
                            <li class="menu-item">
                                <a href="/acerca" class="link-term mercado-item-title">Acerca de nosotros</a>
                            </li>
                            <li class="menu-item">
                                <a href="compras" class="link-term mercado-item-title">compras</a>
                            </li>
                            <li class="menu-item">
                                <a href="carrito" class="link-term mercado-item-title">Carrito</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>

        <main id="main" class="main-site left-sidebar">
            @yield('content')
        </main>


        <footer id="footer">
            <div class="wrap-footer-content footer-style-1">

                <div class="wrap-function-info">
                    <div class="container">
                        <ul>
                            <li class="fc-info-item">
                                <i class="fa fa-truck" aria-hidden="true"></i>
                                <div class="wrap-left-info">
                                    <h4 class="fc-name">ENVÍO GRATIS</h4>
                                    <p class="fc-desc">Gratis con pedido superior a $ 99</p>
                                </div>

                            </li>
                            <li class="fc-info-item">
                                <i class="fa fa-recycle" aria-hidden="true"></i>
                                <div class="wrap-left-info">
                                    <h4 class="fc-name">GARANTÍA</h4>
                                    <p class="fc-desc">30 días de devolución de dinero</p>
                                </div>

                            </li>
                            <li class="fc-info-item">
                                <i class="fa fa-credit-card-alt" aria-hidden="true"></i>
                                <div class="wrap-left-info">
                                    <h4 class="fc-name">PAGO SEGURO</h4>
                                    <p class="fc-desc">Asegure su pago en línea</p>
                                </div>

                            </li>
                            <li class="fc-info-item">
                                <i class="fa fa-life-ring" aria-hidden="true"></i>
                                <div class="wrap-left-info">
                                    <h4 class="fc-name">SOPORTE EN LÍNEA</h4>
                                    <p class="fc-desc">Contamos con soporte 24/7</p>
                                </div>

                            </li>
                        </ul>
                    </div>
                </div>
                <!--End function info-->

                <div class="main-footer-content">

                    <div class="container">

                        <div class="row">

                            <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                                <div class="wrap-footer-item">
                                    <h3 class="item-header">DETALLES DE CONTACTO</h3>
                                    <div class="item-content">
                                        <div class="wrap-contact-detail">
                                            <ul>
                                                <li>
                                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                                    <p class="contact-txt">Santa Ana El SALVADOR</p>
                                                </li>
                                                <li>
                                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                                    <p class="contact-txt">(+53) 1234/5678</p>
                                                </li>
                                                <li>
                                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                                    <p class="contact-txt">Contacto@gmai.com</p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">

                                <div class="wrap-footer-item">
                                    <h3 class="item-header">LÍNEA DIRECTA</h3>
                                    <div class="item-content">
                                        <div class="wrap-hotline-footer">
                                            <span class="desc">Llámenos al número gratuito</span>
                                            <b class="phone-number">(+503) 1234-5678</b>
                                        </div>
                                    </div>
                                </div>



                            </div>

                            <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12 box-twin-content ">
                                <div class="row">
                                    <div class="wrap-footer-item twin-item">
                                        <h3 class="item-header">MI CUENTA</h3>
                                        <div class="item-content">
                                            <div class="wrap-vertical-nav">
                                                <ul>
                                                    <li class="menu-item"><a href="#" class="link-term">Mi cuenta</a>
                                                    </li>
                                                    <li class="menu-item"><a href="#" class="link-term">Marcas</a></li>
                                                    <li class="menu-item"><a href="#" class="link-term">Certificados de regalo</a></li>
                                                    <li class="menu-item"><a href="#" class="link-term">Certificados de regalo</a>
                                                    </li>
                                                    <li class="menu-item"><a href="#" class="link-term">Lista de deseos</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="wrap-footer-item twin-item">
                                        <h3 class="item-header">INFOMACIÓN</h3>
                                        <div class="item-content">
                                            <div class="wrap-vertical-nav">
                                                <ul>
                                                    <li class="menu-item"><a href="#" class="link-term">Contáctenos</a>
                                                    </li>
                                                    <li class="menu-item"><a href="#" class="link-term">Devoluciones</a></li>
                                                    <li class="menu-item"><a href="#" class="link-term">Mapa del sitio</a>
                                                    </li>
                                                    <li class="menu-item"><a href="#" class="link-term">Historial de pedidos</a>
                                                    </li>
                                                    <li class="menu-item"><a href="#" class="link-term">Historial de pedidos</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="row">

                            <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                                <div class="wrap-footer-item">
                                    <h3 class="item-header">UTILIZAMOS PAGOS SEGUROS:</h3>
                                    <div class="item-content">
                                        <div class="wrap-list-item wrap-gallery">
                                            <img src="images/payment.png" style="max-width: 260px;">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                                <div class="wrap-footer-item">
                                    <h3 class="item-header">RED SOCIAL</h3>
                                    <div class="item-content">
                                        <div class="wrap-list-item social-network">
                                            <ul>
                                                <li><a href="#" class="link-to-item" title="twitter"><i
                                                            class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                                <li><a href="#" class="link-to-item" title="facebook"><i
                                                            class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                                <li><a href="#" class="link-to-item" title="pinterest"><i
                                                            class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                                                <li><a href="#" class="link-to-item" title="instagram"><i
                                                            class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                                <li><a href="#" class="link-to-item" title="vimeo"><i
                                                            class="fa fa-vimeo" aria-hidden="true"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                                <div class="wrap-footer-item">
                                    <h3 class="item-header">RED SOCIAL</h3>
                                    <div class="item-content">
                                        <div class="wrap-list-item apps-list">
                                            <ul>
                                                <li><a href="#" class="link-to-item"
                                                        title="our application on apple store">
                                                        <figure><img src="images/brands/apple-store.png"
                                                                alt="apple store" width="128" height="36"></figure>
                                                    </a></li>
                                                <li><a href="#" class="link-to-item"
                                                        title="our application on google play store">
                                                        <figure><img src="images/brands/google-play-store.png"
                                                                alt="google play store" width="128" height="36">
                                                        </figure>
                                                    </a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>


                </div>

                <div class="coppy-right-box">
                    <div class="container">
                        <div class="coppy-right-item item-left">
                            <p class="coppy-right-text">Copyright © 2021 Tecnicas De Programacion. Todos los derechos reservados
                            </p>
                        </div>


                    </div>
                </div>
            </div>
        </footer>
    </div>


    <script src="{{ asset('js/jquery-1.12.4.minb8ff.js?ver=1.12.4') }}"></script>
    <script src="{{ asset('js/jquery-ui-1.12.4.minb8ff.js?ver=1.12.4') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/jquery.flexslider.js') }}"></script>
    {{-- <script src="{{ asset('js/chosen.jquery.min.js') }}"></script> --}}
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('js/jquery.sticky.js') }}"></script>
</body>

</html>
