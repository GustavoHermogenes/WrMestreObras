@extends('layout.layout')

@section('title', 'HOME')

@section('conteudo')

    <main>

        <!-- slider Area Start-->
        <div class="slider-area ">
            <div class="slider-active">
                <div class="single-slider  hero-overly slider-height d-flex align-items-center"
                    data-background="assets/img/hero/h1_hero.jpg">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-11">
                                <div class="hero__caption">
                                    <div class="hero-text1">
                                        <span data-animation="fadeInUp" data-delay=".3s">Wr Obras</span>
                                    </div>
                                    <h1 data-animation="fadeInUp" data-delay=".5s">Obras e</h1>
                                    <div class="stock-text" data-animation="fadeInUp" data-delay=".8s">
                                        <h2>Reformas</h2>
                                        <h2>Reformas</h2>
                                    </div>
                                    <div class="hero-text2 mt-110" data-animation="fadeInUp" data-delay=".9s">
                                        <span><a href="{{ url('/servico') }}">Mestre de obras</a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-slider  hero-overly slider-height d-flex align-items-center"
                    data-background="assets/img/hero/h1_hero.jpg">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-11">
                                <div class="hero__caption">
                                    <div class="hero-text1">
                                        <span data-animation="fadeInUp" data-delay=".3s">Wr Obras</span>
                                    </div>
                                    <h1 data-animation="fadeInUp" data-delay=".5s">Obras e</h1>
                                    <div class="stock-text" data-animation="fadeInUp" data-delay=".8s">
                                        <h2>Reformas</h2>
                                        <h2>Reformas</h2>
                                    </div>
                                    <div class="hero-text2 mt-110" data-animation="fadeInUp" data-delay=".9s">
                                        <span><a href="services.html">Mestre de obras</a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slider Area End-->
        <!-- Services Area Start -->
        <div class="services-area1 section-padding30">
            <div class="container">
                <!-- section tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle mb-55">
                            <div class="front-text">
                                <h2 class="">Nossos Serviços</h2>
                            </div>
                            <span class="back-text">Serviços</span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-service-cap mb-30">
                            <div class="service-img">
                                <img src="assets/img/service/servicess1.png" alt="">
                            </div>
                            <div class="service-cap">
                                <h4><a href="{{ url('/servicos/residencial') }}">Construção Residencial</a></h4>
                                <a href="{{ url('/servicos/residencial') }}" class="more-btn">Ler Mais <i
                                        class="ti-plus"></i></a>
                            </div>
                            <div class="service-icon">
                                <img src="assets/img/icon/services_icon1.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-service-cap mb-30">
                            <div class="service-img">
                                <img src="assets/img/service/servicess2.png" alt="">
                            </div>
                            <div class="service-cap">
                                <h4><a href="{{ url('servicos/reforma') }}">Reforma de Interiores</a></h4>
                                <a href="{{ url('servicos/reforma') }}" class="more-btn">Ler Mais <i
                                        class="ti-plus"></i></a>
                            </div>
                            <div class="service-icon">
                                <img src="assets/img/icon/services_icon1.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-service-cap mb-30">
                            <div class="service-img">
                                <img src="assets/img/service/servicess3.png" alt="">
                            </div>
                            <div class="service-cap">
                                <h4><a href="{{ url('/servicos/comercial') }}">Construção Comercial</a></h4>
                                <a href="{{ url('/servicos/comercial') }}" class="more-btn">Ler Mais <i
                                        class="ti-plus"></i></a>
                            </div>
                            <div class="service-icon">
                                <img src="assets/img/icon/services_icon1.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Services Area End -->
        <!-- About Area Start -->
        <section class="support-company-area fix pt-10">
            <div class="support-wrapper align-items-end">
                <div class="left-content">
                    <!-- section tittle -->
                    <div class="section-tittle section-tittle2 mb-55">
                        <div class="front-text">
                            <h2 class="">Quem Somos</h2>
                        </div>
                        <span class="back-text">Sobre Nós</span>
                    </div>
                    <div class="support-caption">
                        <p class="pera-top">Bem-vindo à WrObras! Somos uma equipe dedicada de profissionais da construção
                            comprometidos em fornecer serviços de alta qualidade para nossos clientes. Com uma paixão pela
                            construção e uma dedicação incomparável à excelência, estamos aqui para transformar suas ideias
                            em realidade.</p>
                        <p>Em nossa empresa, não apenas construímos estruturas, mas também construímos relacionamentos
                            duradouros com nossos clientes, baseados na confiança, integridade e compromisso mútuo. Seja
                            qual for o tamanho ou a complexidade do projeto, estamos prontos para enfrentar o desafio e
                            superar suas expectativas.</p>
                        <a href="about.html" class="btn red-btn2">Ler Mais</a>
                    </div>
                </div>
                <div class="right-content">
                    <!-- img -->
                    <div class="right-img">
                        <img src="assets/img/gallery/safe_in.png" alt="">
                    </div>
                    <div class="support-img-cap text-center">
                        <span>1994</span>
                        <p>Desde</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- About Area End -->
        <!-- Project Area Start -->
        <section class="project-area  section-padding30">
            <div class="container">
                <div class="project-heading mb-35">
                    <div class="row align-items-end">
                        <div class="col-lg-6">
                            <!-- Section Tittle -->
                            <div class="section-tittle section-tittle3">
                                <div class="front-text">
                                    <h2 class="">Nossos Projetos</h2>
                                </div>
                                <span class="back-text">Galeria</span>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="properties__button">
                                <!--Nav Button  -->
                                <nav>
                                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                        <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab"
                                            href="#nav-home" role="tab" aria-controls="nav-home"
                                            aria-selected="false"> Show all </a>
                                        <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab"
                                            href="#nav-profile" role="tab" aria-controls="nav-profile"
                                            aria-selected="false"> Intorior</a>
                                        <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab"
                                            href="#nav-contact" role="tab" aria-controls="nav-contact"
                                            aria-selected="false">Recent</a>
                                        <a class="nav-item nav-link" id="nav-last-tab" data-toggle="tab"
                                            href="#nav-last" role="tab" aria-controls="nav-contact"
                                            aria-selected="false">Big building</a>
                                        <a class="nav-item nav-link" id="nav-technology" data-toggle="tab"
                                            href="#nav-techno" role="tab" aria-controls="nav-contact"
                                            aria-selected="false">Park</a>
                                    </div>
                                </nav>
                                <!--End Nav Button  -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <!-- Nav Card -->
                        <div class="tab-content active" id="nav-tabContent">
                            <!-- card ONE -->
                            <div class="tab-pane fade active show" id="nav-home" role="tabpanel"
                                aria-labelledby="nav-home-tab">
                                <div class="project-caption">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-6">
                                            <div class="single-project mb-30">
                                                <div class="project-img">
                                                    <img src="assets/img/gallery/project1.png" alt="">
                                                </div>
                                                <div class="project-cap">
                                                    <a href="project_details.html" class="plus-btn"><i
                                                            class="ti-plus"></i></a>
                                                    <h4><a href="{{ url('portfolio') }}">Produtos Químicos</a></h4>
                                                    <h4><a href="{{ url('portfolio') }}">Fábrica</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="single-project mb-30">
                                                <div class="project-img">
                                                    <img src="assets/img/gallery/project2.png" alt="">
                                                </div>
                                                <div class="project-cap">
                                                    <a href="{{ url('portfolio') }}" class="plus-btn"><i
                                                            class="ti-plus"></i></a>
                                                    <h4><a href="{{ url('portfolio') }}">Produtos Químicos</a></h4>
                                                    <h4><a href="{{ url('portfolio') }}">Fábrica</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="single-project mb-30">
                                                <div class="project-img">
                                                    <img src="assets/img/gallery/project3.png" alt="">
                                                </div>
                                                <div class="project-cap">
                                                    <a href="{{ url('portfolio') }}" class="plus-btn"><i
                                                            class="ti-plus"></i></a>
                                                    <h4><a href="{{ url('portfolio') }}">Produtos Químicos</a></h4>
                                                    <h4><a href="{{ url('portfolio') }}">Fábrica</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="single-project mb-30">
                                                <div class="project-img">
                                                    <img src="assets/img/gallery/project4.png" alt="">
                                                </div>
                                                <div class="project-cap">
                                                    <a href="{{ url('portfolio') }}" class="plus-btn"><i
                                                            class="ti-plus"></i></a>
                                                    <h4><a href="{{ url('portfolio') }}">Produtos Químicos</a></h4>
                                                    <h4><a href="{{ url('portfolio') }}">Fábrica</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="single-project mb-30">
                                                <div class="project-img">
                                                    <img src="assets/img/gallery/project5.png" alt="">
                                                </div>
                                                <div class="project-cap">
                                                    <a href="{{ url('portfolio') }}" class="plus-btn"><i
                                                            class="ti-plus"></i></a>
                                                    <h4><a href="{{ url('portfolio') }}">Produtos Químicos</a></h4>
                                                    <h4><a href="{{ url('portfolio') }}">Fábrica</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="single-project mb-30">
                                                <div class="project-img">
                                                    <img src="assets/img/gallery/project6.png" alt="">
                                                </div>
                                                <div class="project-cap">
                                                    <a href="{{ url('portfolio') }}" class="plus-btn"><i
                                                            class="ti-plus"></i></a>
                                                    <h4><a href="{{ url('portfolio') }}">Produtos Químicos</a></h4>
                                                    <h4><a href="{{ url('portfolio') }}">Fábrica</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Card TWO -->
                            <div class="tab-pane fade" id="nav-profile" role="tabpanel"
                                aria-labelledby="nav-profile-tab">
                                <div class="project-caption">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-6">
                                            <div class="single-project mb-30">
                                                <div class="project-img">
                                                    <img src="assets/img/gallery/project5.png" alt="">
                                                </div>
                                                <div class="project-cap">
                                                    <a href="{{ url('portfolio') }}" class="plus-btn"><i
                                                            class="ti-plus"></i></a>
                                                    <h4><a href="{{ url('portfolio') }}">Produtos Químicos</a></h4>
                                                    <h4><a href="{{ url('portfolio') }}">Fábrica</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="single-project mb-30">
                                                <div class="project-img">
                                                    <img src="assets/img/gallery/project6.png" alt="">
                                                </div>
                                                <div class="project-cap">
                                                    <a href="{{ url('portfolio') }}" class="plus-btn"><i
                                                            class="ti-plus"></i></a>
                                                    <h4><a href="{{ url('portfolio') }}">Produtos Químicos</a></h4>
                                                    <h4><a href="{{ url('portfolio') }}">Fábrica</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="single-project mb-30">
                                                <div class="project-img">
                                                    <img src="assets/img/gallery/project1.png" alt="">
                                                </div>
                                                <div class="project-cap">
                                                    <a href="{{ url('portfolio') }}" class="plus-btn"><i
                                                            class="ti-plus"></i></a>
                                                    <h4><a href="{{ url('portfolio') }}">Produtos Químicos</a></h4>
                                                    <h4><a href="{{ url('portfolio') }}">Fábrica</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="single-project mb-30">
                                                <div class="project-img">
                                                    <img src="assets/img/gallery/project2.png" alt="">
                                                </div>
                                                <div class="project-cap">
                                                    <a href="{{ url('portfolio') }}" class="plus-btn"><i
                                                            class="ti-plus"></i></a>
                                                    <h4><a href="{{ url('portfolio') }}">Produtos Químicos</a></h4>
                                                    <h4><a href="{{ url('portfolio') }}">Fábrica</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="single-project mb-30">
                                                <div class="project-img">
                                                    <img src="assets/img/gallery/project3.png" alt="">
                                                </div>
                                                <div class="project-cap">
                                                    <a href="{{ url('portfolio') }}" class="plus-btn"><i
                                                            class="ti-plus"></i></a>
                                                    <h4><a href="{{ url('portfolio') }}">Produtos Químicos</a></h4>
                                                    <h4><a href="{{ url('portfolio') }}">Fábrica</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="single-project mb-30">
                                                <div class="project-img">
                                                    <img src="assets/img/gallery/project4.png" alt="">
                                                </div>
                                                <div class="project-cap">
                                                    <a href="{{ url('portfolio') }}" class="plus-btn"><i
                                                            class="ti-plus"></i></a>
                                                    <h4><a href="{{ url('portfolio') }}">Produtos Químicos</a></h4>
                                                    <h4><a href="{{ url('portfolio') }}">Fábrica</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Card THREE -->
                            <div class="tab-pane fade" id="nav-contact" role="tabpanel"
                                aria-labelledby="nav-contact-tab">
                                <div class="project-caption">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-6">
                                            <div class="single-project mb-30">
                                                <div class="project-img">
                                                    <img src="assets/img/gallery/project3.png" alt="">
                                                </div>
                                                <div class="project-cap">
                                                    <a href="{{ url('portfolio') }}" class="plus-btn"><i
                                                            class="ti-plus"></i></a>
                                                    <h4><a href="{{ url('portfolio') }}">Produtos Químicos</a></h4>
                                                    <h4><a href="{{ url('portfolio') }}">Fábrica</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="single-project mb-30">
                                                <div class="project-img">
                                                    <img src="assets/img/gallery/project4.png" alt="">
                                                </div>
                                                <div class="project-cap">
                                                    <a href="{{ url('portfolio') }}" class="plus-btn"><i
                                                            class="ti-plus"></i></a>
                                                    <h4><a href="{{ url('portfolio') }}">Produtos Químicos</a></h4>
                                                    <h4><a href="{{ url('portfolio') }}">Fábrica</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="single-project mb-30">
                                                <div class="project-img">
                                                    <img src="assets/img/gallery/project1.png" alt="">
                                                </div>
                                                <div class="project-cap">
                                                    <a href="{{ url('portfolio') }}" class="plus-btn"><i
                                                            class="ti-plus"></i></a>
                                                    <h4><a href="{{ url('portfolio') }}">Produtos Químicos</a></h4>
                                                    <h4><a href="{{ url('portfolio') }}">Fábrica</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="single-project mb-30">
                                                <div class="project-img">
                                                    <img src="assets/img/gallery/project2.png" alt="">
                                                </div>
                                                <div class="project-cap">
                                                    <a href="{{ url('portfolio') }}" class="plus-btn"><i
                                                            class="ti-plus"></i></a>
                                                    <h4><a href="{{ url('portfolio') }}">Produtos Químicos</a></h4>
                                                    <h4><a href="{{ url('portfolio') }}">Fábrica</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="single-project mb-30">
                                                <div class="project-img">
                                                    <img src="assets/img/gallery/project5.png" alt="">
                                                </div>
                                                <div class="project-cap">
                                                    <a href="{{ url('portfolio') }}" class="plus-btn"><i
                                                            class="ti-plus"></i></a>
                                                    <h4><a href="{{ url('portfolio') }}">Produtos Químicos</a></h4>
                                                    <h4><a href="{{ url('portfolio') }}">Fábrica</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="single-project mb-30">
                                                <div class="project-img">
                                                    <img src="assets/img/gallery/project6.png" alt="">
                                                </div>
                                                <div class="project-cap">
                                                    <a href="{{ url('portfolio') }}" class="plus-btn"><i
                                                            class="ti-plus"></i></a>
                                                    <h4><a href="{{ url('portfolio') }}">Produtos Químicos</a></h4>
                                                    <h4><a href="{{ url('portfolio') }}">Fábrica</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- card FUR -->
                            <div class="tab-pane fade" id="nav-last" role="tabpanel" aria-labelledby="nav-last-tab">
                                <div class="project-caption">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-6">
                                            <div class="single-project mb-30">
                                                <div class="project-img">
                                                    <img src="assets/img/gallery/project1.png" alt="">
                                                </div>
                                                <div class="project-cap">
                                                    <a href="{{ url('portfolio') }}" class="plus-btn"><i
                                                            class="ti-plus"></i></a>
                                                    <h4><a href="{{ url('portfolio') }}">Produtos Químicos</a></h4>
                                                    <h4><a href="{{ url('portfolio') }}">Fábrica</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="single-project mb-30">
                                                <div class="project-img">
                                                    <img src="assets/img/gallery/project2.png" alt="">
                                                </div>
                                                <div class="project-cap">
                                                    <a href="{{ url('portfolio') }}" class="plus-btn"><i
                                                            class="ti-plus"></i></a>
                                                    <h4><a href="{{ url('portfolio') }}">Produtos Químicos</a></h4>
                                                    <h4><a href="{{ url('portfolio') }}">Fábrica</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="single-project mb-30">
                                                <div class="project-img">
                                                    <img src="assets/img/gallery/project3.png" alt="">
                                                </div>
                                                <div class="project-cap">
                                                    <a href="{{ url('portfolio') }}" class="plus-btn"><i
                                                            class="ti-plus"></i></a>
                                                    <h4><a href="{{ url('portfolio') }}">Produtos Químicos</a></h4>
                                                    <h4><a href="{{ url('portfolio') }}">Fábrica</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="single-project mb-30">
                                                <div class="project-img">
                                                    <img src="assets/img/gallery/project4.png" alt="">
                                                </div>
                                                <div class="project-cap">
                                                    <a href="{{ url('portfolio') }}" class="plus-btn"><i
                                                            class="ti-plus"></i></a>
                                                    <h4><a href="{{ url('portfolio') }}">Produtos Químicos</a></h4>
                                                    <h4><a href="{{ url('portfolio') }}">Fábrica</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="single-project mb-30">
                                                <div class="project-img">
                                                    <img src="assets/img/gallery/project5.png" alt="">
                                                </div>
                                                <div class="project-cap">
                                                    <a href="{{ url('portfolio') }}" class="plus-btn"><i
                                                            class="ti-plus"></i></a>
                                                    <h4><a href="{{ url('portfolio') }}">Produtos Químicos</a></h4>
                                                    <h4><a href="{{ url('portfolio') }}">Fábrica</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="single-project mb-30">
                                                <div class="project-img">
                                                    <img src="assets/img/gallery/project6.png" alt="">
                                                </div>
                                                <div class="project-cap">
                                                    <a href="{{ url('portfolio') }}" class="plus-btn"><i
                                                            class="ti-plus"></i></a>
                                                    <h4><a href="{{ url('portfolio') }}">Produtos Químicos</a></h4>
                                                    <h4><a href="{{ url('portfolio') }}">Fábrica</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- card FIVE -->
                            <div class="tab-pane fade" id="nav-techno" role="tabpanel" aria-labelledby="nav-technology">
                                <div class="project-caption">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-6">
                                            <div class="single-project mb-30">
                                                <div class="project-img">
                                                    <img src="assets/img/gallery/project1.png" alt="">
                                                </div>
                                                <div class="project-cap">
                                                    <a href="{{ url('portfolio') }}" class="plus-btn"><i
                                                            class="ti-plus"></i></a>
                                                    <h4><a href="{{ url('portfolio') }}">Produtos Químicos</a></h4>
                                                    <h4><a href="{{ url('portfolio') }}">Fábrica</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="single-project mb-30">
                                                <div class="project-img">
                                                    <img src="assets/img/gallery/project2.png" alt="">
                                                </div>
                                                <div class="project-cap">
                                                    <a href="{{ url('portfolio') }}" class="plus-btn"><i
                                                            class="ti-plus"></i></a>
                                                    <h4><a href="{{ url('portfolio') }}">Produtos Químicos</a></h4>
                                                    <h4><a href="{{ url('portfolio') }}">Fábrica</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="single-project mb-30">
                                                <div class="project-img">
                                                    <img src="assets/img/gallery/project3.png" alt="">
                                                </div>
                                                <div class="project-cap">
                                                    <a href="{{ url('portfolio') }}" class="plus-btn"><i
                                                            class="ti-plus"></i></a>
                                                    <h4><a href="{{ url('portfolio') }}">Produtos Químicos</a></h4>
                                                    <h4><a href="{{ url('portfolio') }}">Fábrica</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="single-project mb-30">
                                                <div class="project-img">
                                                    <img src="assets/img/gallery/project4.png" alt="">
                                                </div>
                                                <div class="project-cap">
                                                    <a href="{{ url('portfolio') }}" class="plus-btn"><i
                                                            class="ti-plus"></i></a>
                                                    <h4><a href="{{ url('portfolio') }}">Produtos Químicos</a></h4>
                                                    <h4><a href="{{ url('portfolio') }}">Fábrica</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="single-project mb-30">
                                                <div class="project-img">
                                                    <img src="assets/img/gallery/project5.png" alt="">
                                                </div>
                                                <div class="project-cap">
                                                    <a href="{{ url('portfolio') }}" class="plus-btn"><i
                                                            class="ti-plus"></i></a>
                                                    <h4><a href="{{ url('portfolio') }}">Produtos Químicos</a></h4>
                                                    <h4><a href="{{ url('portfolio') }}">Fábrica</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="single-project mb-30">
                                                <div class="project-img">
                                                    <img src="assets/img/gallery/project6.png" alt="">
                                                </div>
                                                <div class="project-cap">
                                                    <a href="{{ url('portfolio') }}" class="plus-btn"><i
                                                            class="ti-plus"></i></a>
                                                    <h4><a href="{{ url('portfolio') }}">Produtos Químicos</a></h4>
                                                    <h4><a href="{{ url('portfolio') }}">Fábrica</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Nav Card -->
                    </div>
                </div>
            </div>
        </section>
        <!-- Project Area End -->
        <!-- contact with us Start -->
        <section class="contact-with-area" data-background="assets/img/gallery/section-bg2.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-9 offset-xl-1 offset-lg-1">
                        <div class="contact-us-caption">
                            <div class="team-info mb-30 pt-45">
                                <!-- Section Tittle -->
                                <div class="section-tittle section-tittle4">
                                    <div class="front-text">
                                        <h2>Converse conosco</h2>
                                    </div>
                                    <span class="back-text">Converse conosco</span>
                                </div>
                                <p>Estamos aqui para ouvir suas necessidades e transformar suas ideias em realidade. Com uma
                                    equipe dedicada e experiente, estamos prontos para ajudá-lo a alcançar seus objetivos de
                                    construção. Não importa o tamanho do seu projeto, estamos comprometidos em fornecer
                                    soluções personalizadas e de alta qualidade que superem suas expectativas. Entre em
                                    contato conosco hoje mesmo e vamos começar a trabalhar juntos!</p>
                                <a href="#" class="white-btn">Ler Mais</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact with us End-->
        <!-- CountDown Area Start -->
        <div class="count-area">
            <div class="container">
                <div class="count-wrapper count-bg" data-background="assets/img/gallery/section-bg3.jpg">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="count-clients">
                                <div class="single-counter">
                                    <div class="count-number">
                                        <span class="counter">34</span>
                                    </div>
                                    <div class="count-text">
                                        <p>Obras</p>
                                        <h5>Completadas</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="count-clients">
                                <div class="single-counter">
                                    <div class="count-number">
                                        <span class="counter">76</span>
                                    </div>
                                    <div class="count-text">
                                        <p>Reforma</p>
                                        <h5>Completadas</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="count-clients">
                                <div class="single-counter">
                                    <div class="count-number">
                                        <span class="counter">08</span>
                                    </div>
                                    <div class="count-text">
                                        <p>Construções</p>
                                        <h5>Comerciais</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- CountDown Area End -->
        <!-- Team Start -->
        <div class="team-area section-padding30">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <!-- Section Tittle -->
                        <div class="section-tittle section-tittle5 mb-50">
                            <div class="front-text">
                                <h2 class="">Nosso time</h2>
                            </div>
                            <span class="back-text">exparts</span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- single Tem -->
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-">
                        <div class="single-team mb-30">
                            <div class="team-img">
                                <img src="assets/img/team/team1.png" alt="">
                            </div>
                            <div class="team-caption">
                                <span>Mestre de obras</span>
                                <h3>Walter</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-">
                        <div class="single-team mb-30">
                            <div class="team-img">
                                <img src="assets/img/team/team2.png" alt="">
                            </div>
                            <div class="team-caption">
                                <span>Ajudante</span>
                                <h3>Ethan Welch</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-">
                        <div class="single-team mb-30">
                            <div class="team-img">
                                <img src="assets/img/team/team3.png" alt="">
                            </div>
                            <div class="team-caption">
                                <span>Eletricista</span>
                                <h3>Ethan Welch</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team End -->
        <!-- Testimonial Start -->
        <div class="testimonial-area t-bg testimonial-padding">
            <div class="container ">
                <div class="row">
                    <div class="col-xl-12">
                        <!-- Section Tittle -->
                        <div class="section-tittle section-tittle6 mb-50">
                            <div class="front-text">
                                <h2 class="">Depoimento</h2>
                            </div>
                            <span class="back-text">Feedback</span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-10 col-lg-11 col-md-10 offset-xl-1">
                        <div class="h1-testimonial-active">
                            <!-- Single Testimonial -->
                            <div class="single-testimonial">
                                <!-- Testimonial Content -->
                                <div class="testimonial-caption ">
                                    <div class="testimonial-top-cap">
                                        <!-- SVG icon -->
                                        <svg xmlns="http://www.w3.org/2000/svg"xmlns:xlink="http://www.w3.org/1999/xlink"
                                            width="86px" height="63px">
                                            <path fill-rule="evenodd" stroke-width="1px" stroke="rgb(255, 95, 19)"
                                                fill-opacity="0" fill="rgb(0, 0, 0)"
                                                d="M82.623,59.861 L48.661,59.861 L48.661,25.988 L59.982,3.406 L76.963,3.406 L65.642,25.988 L82.623,25.988 L82.623,59.861 ZM3.377,25.988 L14.698,3.406 L31.679,3.406 L20.358,25.988 L37.340,25.988 L37.340,59.861 L3.377,59.861 L3.377,25.988 Z" />
                                        </svg>
                                        <p>Contratei este mestre de obras para uma reforma em minha casa e fiquei
                                            impressionado com o nível de profissionalismo e dedicação. O projeto foi
                                            entregue dentro do prazo e dentro do orçamento acordado. Definitivamente, minha
                                            escolha número um para qualquer projeto futuro.</p>
                                    </div>
                                    <!-- founder -->
                                    <div class="testimonial-founder d-flex align-items-center">
                                        <div class="founder-text">
                                            <span>Jessya Inn</span>
                                            <p>Cliente</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Testimonial -->
                            <div class="single-testimonial">
                                <!-- Testimonial Content -->
                                <div class="testimonial-caption ">
                                    <div class="testimonial-top-cap">
                                        <!-- SVG icon -->
                                        <svg xmlns="http://www.w3.org/2000/svg"xmlns:xlink="http://www.w3.org/1999/xlink"
                                            width="86px" height="63px">
                                            <path fill-rule="evenodd" stroke-width="1px" stroke="rgb(255, 95, 19)"
                                                fill-opacity="0" fill="rgb(0, 0, 0)"
                                                d="M82.623,59.861 L48.661,59.861 L48.661,25.988 L59.982,3.406 L76.963,3.406 L65.642,25.988 L82.623,25.988 L82.623,59.861 ZM3.377,25.988 L14.698,3.406 L31.679,3.406 L20.358,25.988 L37.340,25.988 L37.340,59.861 L3.377,59.861 L3.377,25.988 Z" />
                                        </svg>
                                        <p>Confiei na equipe deste mestre de obras para uma grande renovação em minha
                                            propriedade e não poderia estar mais satisfeito com o resultado. Eles mostraram
                                            grande habilidade técnica, atenção aos detalhes e uma abordagem colaborativa que
                                            fez toda a diferença. Altamente recomendado!</p>
                                    </div>
                                    <!-- founder -->
                                    <div class="testimonial-founder d-flex align-items-center">
                                        <div class="founder-text">
                                            <span>Pedro Carvalho</span>
                                            <p>Cliente</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--latest News Area End -->

    </main>

@endsection
