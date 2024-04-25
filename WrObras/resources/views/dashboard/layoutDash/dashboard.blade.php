<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <!-- Meta-Information -->
    <title> @yield('title') - Dashboard administrativo</title>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Vendor: Bootstrap 4 Stylesheets  -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}"type="text/css">

    <!-- Our Website CSS Styles -->
    <link rel="stylesheet" href="{{ asset('assets/css/iconsD.min.csss') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/css/responiveD.css') }}" type="text/css">

    <!-- Color Scheme -->
    <link rel="stylesheet" href="{{ asset('assets/css/color-schemes/color.css') }}" type="text/css" title="color3">
    <link rel="alternate stylesheet" href="{{ asset('assets/css/color-schemes/color1.css') }}" title="color1">
    <link rel="alternate stylesheet" href="{{ asset('assets/css/color-schemes/color2.css') }}"title="color2">
    <link rel="alternate stylesheet" href="{{ asset('assets/css/color-schemes/color4.css') }}"title="color4">
    <link rel="alternate stylesheet" href="{{ asset('assets/css/color-schemes/color5.css') }}" title="color5">
    <link rel="stylesheet" href="{{ asset('assets/css/mainD.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/css/dashboard.css') }}">

</head>

<body class="expand-data panel-data">

    <body class="expand-data panel-data">
        <div class="topbar">
            <div class="logo">
                <h1>
                    <a href="{{ route('admin.func.index') }}" title="">
                        <img src="{{ asset('assets/img/logo/2.png') }}" alt="" />
                    </a>
                </h1>
            </div>
            <div class="topoDash">
                <div>
                    <i> @if (session('nome'))
                            {{ session('nome') }}
                        @endif!
                    </i>
                    <span>
                        <a href="{{ route('sair') }}">Sair</a>
                    </span>
                </div>
            </div>


            <div class="topbar-bottom-colors">
                <i style="background-color: #ff5f13;"></i>
                <i style="background-color: #ff5f13;"></i>
                <i style="background-color: #ff5f13;"></i>
                <i style="background-color: #ff5f13;"></i>
                <i style="background-color: #ff5f13;"></i>
                <i style="background-color: #ff5f13;"></i>
                <i style="background-color: #ff5f13;"></i>
            </div>
        </div>
        <!-- Topbar -->

        <header class="side-header expand-header">
            <div class="nav-head">WrObras
                <span class="menu-trigger">
                    <i class="ion-android-menu"></i>
                </span>
            </div>
            <nav class="custom-scrollbar">

                <h4>Gestão</h4>
                <ul>
                    <li>
                        <a href="{{ route('dashboard.admin') }}" title="">
                            <i class="fa-solid fa-table-columns"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                </ul>
                <ul>
                    <li class="has-drp">
                        <a href="{{ route('admin.func.index') }}" title="">
                            <i class="fa-solid fa-user-plus"></i>
                            <span>Funcionários</span>
                        </a>
                    </li>
                    <li class="has-drp">
                    <li>
                        <a href="{{ route('admin.cliente.index') }}" title="">
                        <i class="fa-solid fa-users"></i>
                        </i> Clientes</a>
                    </li>
                </ul>
                <h4>Trabalhos</h4>
                <ul>

                    <li class="has-drp">
                        <a href="{{ route('admin.projeto.index') }}" title="">
                            <i class="fa-solid fa-list-check"></i>
                            <span>Projetos</span>
                        </a>
                    </li>

                    <li class="has-drp">
                        <a href="{{ route('admin.contrato.index') }}" title="">
                            <i class="fa-solid fa-file-signature"></i>
                            <span>Contratos</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </header>
        <!-- Side Header -->

        <div class="option-panel">
            <div class="color-panel">
                <h4>Text Color</h4>
                <span class="color1" onclick="setActiveStyleSheet('color1'); return false;">
                    <i></i>
                </span>
                <span class="color2" onclick="setActiveStyleSheet('color2'); return false;">
                    <i></i>
                </span>
                <span class="color3" onclick="setActiveStyleSheet('color'); return false;">
                    <i></i>
                </span>
                <span class="color4" onclick="setActiveStyleSheet('color4'); return false;">
                    <i></i>
                </span>
                <span class="color5" onclick="setActiveStyleSheet('color5'); return false;">
                    <i></i>
                </span>
            </div>
        </div>

        <main>

            @yield('conteudo')

        </main>
        <!-- Page Top -->

        <footer style="background-color:#ff5f13 !important;">
            <p style=" color:black !important;">Copyright
                <a href="https://cybercompany.smpsistema.com.br/"
                    style="color: #f2f2f2!important; text-transform:uppercase">cyber Company</a> &amp; 2024
            </p>
        </footer>



        <!-- Vendor: Javascripts -->
        <script src="https://kit.fontawesome.com/f0c3cb5f2a.js" crossorigin="anonymous"></script>
        <script src="{{ asset('assets/js/jquery.min.js') }}" type="text/javascript"></script>
        <!-- Vendor: Followed by our custom Javascripts -->
        <script src="{{ asset('assets/js/bootstrap.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('assets/js/select2.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('assets/js/slick.min.js') }}" type="text/javascript"></script>

        <!-- Our Website Javascripts -->
        <script src="{{ asset('assets/js/isotope.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('assets/js/isotope-int.js') }}" type="text/javascript"></script>
        <script src="{{ asset('assets/js/jquery.counterup.js') }}" type="text/javascript"></script>
        <script src="{{ asset('assets/js/waypoints.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('assets/js/highcharts.js') }}" type="text/javascript"></script>
        <script src="{{ asset('assets/js/exporting.js') }}" type="text/javascript"></script>
        <script src="{{ asset('assets/js/highcharts-more.js') }}" type="text/javascript"></script>
        <script src="{{ asset('assets/js/moment.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('assets/js/jquery.circliful.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('assets/js/fullcalendar.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('assets/js/jquery.downCount.js') }}" type="text/javascript"></script>
        <script src="{{ asset('assets/js/jquery.bootstrap-touchspin.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('assets/js/jquery.formtowizard.js') }}" type="text/javascript"></script>
        <script src="{{ asset('assets/js/form-validator.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('assets/js/form-validator-lang-en.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('assets/js/cropbox-min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('assets/js/jquery.slimscroll.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('assets/js/ion.rangeSlider.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('assets/js/jquery.poptrox.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('assets/js/styleswitcher.js') }}" type="text/javascript"></script>
        <script src="{{ asset('assets/js/main-dash.js') }}" type="text/javascript"></script>

    </body>

</html>
