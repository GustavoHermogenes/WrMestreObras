@extends('layout.layout')

@section('title', 'Servico')

@section('conteudo')

<main>
    <!-- slider Area Start-->
    <div class="slider-area ">
        <div class="single-slider hero-overly slider-height2 d-flex align-items-center" data-background="assets/img/hero/about.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap pt-100">
                            <h2>Serviços</h2>
                            <nav aria-label="breadcrumb ">
                                <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ url('/') }}">Início</a></li>
                                <li class="breadcrumb-item"><a href="#">Serviços</a></li>
                                </ol>
                            </nav>
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
                            <h2 class="">NOSSOS SERVIÇOS</h2>
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
                            <h4><a href="{{ url('/contato') }}">Construção Residencial</a></h4>
                            <a href="{{ url('/contato') }}" class="more-btn">Saiba mais<i class="ti-plus"></i></a>
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
                            <h4><a href="{{ url('/contato') }}">Reforma de Interiores</a></h4>
                            <a href="{{ url('/contato') }}" class="more-btn">Saiba mais<i class="ti-plus"></i></a>
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
                            <h4><a href="{{ url('/contato') }}">Construção Comercial</a></h4>
                            <a href="{{ url('/contato') }}" class="more-btn">Saiba mais<i class="ti-plus"></i></a>
                        </div>
                        <div class="service-icon">
                            <img src="assets/img/icon/services_icon1.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single-service-cap mb-30">
                        <div class="service-img">
                            <img src="assets/img/service/servicess4.png" alt="">
                        </div>
                        <div class="service-cap">
                            <h4><a href="{{ url('/contato') }}">Reparos e Manutenção</a></h4>
                            <a href="{{ url('/contato') }}" class="more-btn">Saiba mais<i class="ti-plus"></i></a>
                        </div>
                        <div class="service-icon">
                            <img src="assets/img/icon/services_icon1.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single-service-cap mb-30">
                        <div class="service-img">
                            <img src="assets/img/service/servicess5.png" alt="">
                        </div>
                        <div class="service-cap">
                            <h4><a href="{{ url('/contato') }}">Construção de Estruturas</a></h4>
                            <a href="{{ url('/contato') }}" class="more-btn">Saiba mais<i class="ti-plus"></i></a>
                        </div>
                        <div class="service-icon">
                            <img src="assets/img/icon/services_icon1.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single-service-cap mb-30">
                        <div class="service-img">
                            <img src="assets/img/service/servicess6.png" alt="">
                        </div>
                        <div class="service-cap">
                            <h4><a href="{{ url('/contato') }}">Gerenciamento de Projetos</a></h4>
                            <a href="{{ url('/contato') }}" class="more-btn">Saiba mais<i class="ti-plus"></i></a>
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
</main>

@endsection
