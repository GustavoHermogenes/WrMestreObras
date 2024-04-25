@extends('layout.layout')

@section('title', 'Sobre')

@section('conteudo')

    <main>
        <!-- slider Area Start-->
        <div class="slider-area ">
            <div class="single-slider hero-overly slider-height2 d-flex align-items-center"
                data-background="assets/img/hero/about.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap pt-100">
                                <h2>Sobre nós</h2>
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
        <!-- About Area Start -->
        <section class="support-company-area fix pt-10 section-padding30">
            <div class="support-wrapper align-items-end">
                <div class="left-content">
                    <!-- section tittle -->
                    <div class="section-tittle section-tittle2 mb-55">
                        <div class="front-text">
                            <h2 class="">Quem somos nós</h2>
                        </div>
                        <span class="back-text">Sobre nós</span>
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
                        <a href="about.html" class="btn red-btn2">Saiba mais</a>
                    </div>
                </div>
                <div class="right-content">
                    <!-- img -->
                    <div class="right-img">
                        <img src="assets/img/gallery/safe_in.png" alt="">
                    </div>
                    <div class="support-img-cap text-center">
                        <span>1990</span>
                        <p>Desde</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- About Area End -->
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
        <!-- Testimonial End -->
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
    </main>

@endsection
