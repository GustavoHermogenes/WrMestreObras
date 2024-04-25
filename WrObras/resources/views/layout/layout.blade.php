<!doctype html>
<html class="no-js" lang="pt-BR">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>@yield('title') - WrObras </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="manifest" href="site.webmanifest">
		<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

		<!-- CSS here -->
             {{-- CSS --}}

   <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
   <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
   <link rel="stylesheet" href="{{ asset('assets/css/slicknav.css') }}">
   <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
   <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
   <link rel="stylesheet" href="{{ asset('assets/css/fontawesome-all.min.css') }}">
   <link rel="stylesheet" href="{{ asset('assets/css/themify-icons.css') }}">
   <link rel="stylesheet" href="{{ asset('assets/css/slick.css') }}">
   <link rel="stylesheet" href="{{ asset('assets/css/nice-select.css') }}">

   <meta name="csrf-token" content="{{ csrf_token() }}">

   <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

   </head>
    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="{{ asset('assets/img/logo/loder-logo.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
    <header>
        <!-- Header Start -->
       <div class="header-area header-transparent">
            <div class="main-header ">
                <div class="header-top d-none d-lg-block">
                   <div class="container-fluid">
                       <div class="col-xl-12">
                            <div class="row d-flex justify-content-between align-items-center">
                                <div class="header-info-left">
                                    <ul>
                                        <li>(11) 95075-8902</li>
                                        <li>wrobras24@gmail.com</li>
                                        <li>Seg - Sáb 8:00 - 17:30, Domingo - FECHADO</li>
                                    </ul>
                                </div>
                                <div class="header-info-right">
                                    <ul class="header-social">
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                       <li> <a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                       </div>
                   </div>
                </div>
               <div class="header-bottom  header-sticky">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <!-- Logo -->
                            <div class="col-xl-2 col-lg-2 col-md-1">
                                <div class="logo">
                                    <!-- logo-1 -->
                                    <a href="{{ url('/') }}" class="big-logo"><img src="{{ asset('assets/img/logo/logo.png') }}" alt=""></a>
                                    <!-- logo-2 -->
                                    <a href="{{ url('/') }}" class="small-logo"><img src="{{ asset('assets/img/logo/loder-logo.png') }}" alt=""></a>
                                </div>
                            </div>
                            <div class="col-xl-8 col-lg-8 col-md-8">
                                <!-- Main-menu -->
                                <div class="main-menu f-right d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">
                                            <li class="esconder"><a href="{{ url('/login') }}" >login</a></li>
                                            <li><a href="{{ url('/') }}">Início</a></li>
                                            <li><a href="{{ url('/sobre') }}">Sobre</a></li>
                                            <li><a href="{{ url('/portfolio') }}">Portfólio</a></li>
                                            <li><a href="{{ url('/servico') }}">Serviços</a></li>
                                            <li><a href="{{ url('contato') }}">Contato</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-2 col-md-3">
                                <div class="header-right-btn f-right d-none d-lg-block">
                                    <a href="{{ url('/login') }}" class="btn">Login</a>
                                </div>
                            </div>
                            <!-- Mobile Menu -->
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>
               </div>
            </div>
       </div>
        <!-- Header End -->

    </header>


    <main>

        @yield('conteudo')

    </main>



   <footer>
    <!-- Footer Start-->
    <div class="footer-main">
            <div class="footer-area footer-padding">
                <div class="container">
                    <div class="row  justify-content-between">
                        <div class="col-lg-4 col-md-4 col-sm-8">
                            <div class="single-footer-caption mb-30">
                                <!-- logo -->
                                <div class="footer-logo">
                                    <a href="{{ url('/') }}"><img src="{{ asset('assets/img/logo/logo2_footer.png') }}" alt=""></a>
                                </div>
                                <div class="footer-tittle">
                                    <div class="footer-pera">
                                        <p class="info1">Agradecemos sinceramente a sua visita e o interesse em nossos serviços. Estamos sempre à disposição para ajudar. Equipe WrObras</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-5">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>Navegação rápida</h4>
                                    <ul>
                                        <li><a href="{{ url('/login') }}">Login</a></li>
                                        <li><a href="{{ url('/') }}">Início</a></li>
                                        <li><a href="{{ url('/sobre') }}">Sobre</a></li>
                                        <li><a href="{{ url('/servico') }}">Serviço</a></li>
                                        <li><a href="{{ url('/portfolio') }}">Portfólio</a></li>
                                        <li><a href="{{ url('/contato') }}">Contato</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-7">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>Contate-nos</h4>
                                    <div class="footer-pera">
                                        <p class="info1">Avenida Marechal Tito, 1500</p>
                                    </div>
                                    <ul>
                                        <li><a href="#">E-mail: wrobras24@gmail.com</a></li>
                                        <li><a href="#">Celular: (11) 95075-8902</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-8">
                            <div class="single-footer-caption mb-50">
                                <!-- Form -->
                                <div class="footer-form">
                                    <div id="mc_embed_signup">
                                    </div>
                                </div>
                                <!-- Map -->
                                <div class="map-footer">
                                    <img src="{{ asset('assets/img/gallery/map-footer.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Copy-Right -->
                    <div class="row align-items-center">
                        <div class="col-xl-12 ">
                            <div class="footer-copy-right">
                                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> Todos os direitos reservados a WrObras | Desenvolvido pela agência <a href="https://colorlib.com" target="_blank">Cyber Company</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    <!-- Footer End-->
</footer>
<!-- JS here -->

		<!-- All JS Custom Plugins Link Here here -->
        <script src="{{ asset('./assets/js/vendor/modernizr-3.5.0.min.js') }}"></script>
		<!-- Jquery, Popper, Bootstrap -->
		<script src="{{ asset('./assets/js/vendor/jquery-1.12.4.min.js') }}"></script>
        <script src="{{ asset('./assets/js/popper.min.js') }}"></script>
        <script src="{{ asset('./assets/js/bootstrap.min.js') }}"></script>
	    <!-- Jquery Mobile Menu -->
        <script src="{{ asset('./assets/js/jquery.slicknav.min.js') }}"></script>

		<!-- Jquery Slick , Owl-Carousel Plugins -->
        <script src="{{ asset('./assets/js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('./assets/js/slick.min.js') }}"></script>
        <!-- Date Picker -->
        <script src="{{ asset('./assets/js/gijgo.min.js') }}"></script>
		<!-- One Page, Animated-HeadLin -->
        <script src="{{ asset('./assets/js/wow.min.js') }}"></script>
		<script src="{{ asset('./assets/js/animated.headline.js') }}"></script>
        <script src="{{ asset('./assets/js/jquery.magnific-popup.js') }}"></script>

		<!-- Scrollup, nice-select, sticky -->
        <script src="{{ asset('./assets/js/jquery.scrollUp.min.js') }}"></script>
        <script src="{{ asset('./assets/js/jquery.nice-select.min.js') }}"></script>
		<script src="{{ asset('./assets/js/jquery.sticky.js') }}"></script>

        <!-- counter , waypoint -->
        <script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
        <script src="{{ asset('./assets/js/jquery.counterup.min.js') }}"></script>

        <!-- contact js -->
        <script src="{{ asset('./assets/js/contact.js') }}"></script>
        <script src="{{ asset('./assets/js/jquery.form.js') }}"></script>
        <script src="{{ asset('./assets/js/jquery.validate.min.js') }}"></script>
        <script src="{{ asset('./assets/js/mail-script.js') }}"></script>
        <script src="{{ asset('./assets/js/jquery.ajaxchimp.min.js') }}"></script>

		<!-- Jquery Plugins, main Jquery -->
        <script src="{{ asset('./assets/js/plugins.js') }}"></script>
        <script src="{{ asset('./assets/js/main.js') }}"></script>
        <script src="{{ asset('./assets/js/script.js') }}"></script>


</html>
