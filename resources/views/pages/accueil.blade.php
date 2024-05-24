@extends("layouts.template",["titre"=>"Accueil"])


@section("content")

<!-- BANNER -->
        <section class="p-0 full-screen top-position1">
            <div class="slider-fade3 owl-carousel owl-theme w-100 min-vh-100">
                <div class="item bg-img cover-background left-overlay-dark" data-overlay-dark="85" data-background="{{ asset('assets/img/banner/banner-10.jpg') }}">
                    <div class="container d-flex flex-column">
                        <div class="row align-items-center min-vh-100 pt-6 pt-md-0">
                            <div class="col-md-10 col-lg-8 col-xl-7 col-xxl-6 mb-1-9 mb-lg-0 py-5">
                                <div class="title-style3 mb-3 mt-8">
                                    <span>@lang('info.titre.slogan')</span>
                                </div>
                                <h1 class="text-white display-21 display-sm-19 display-md-17 display-lg-8 mb-4">Une nouvelle génération des leaders christocentriques</h1>
                                <p class="text-white mb-2-3 opacity8 display-md-28 w-lg-80">
                                    Nous travaillons pour élever une nouvelle génération de dirigeants religieux et sociaux pour influencer les villes du continent africain avec l’Évangile de la suprématie du Christ comme seule source de satisfaction pour tous.
                                </p>
                                <a href="{{ route('about') }}" class="butn-style1 me-2 my-1 my-sm-0">Voir plus</a>
                                <a href="{{ route('contact') }}" class="butn-style1 secondary my-1 my-sm-0">Nous contacter</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item bg-img cover-background left-overlay-dark" data-overlay-dark="85" data-background="{{ asset('assets/img/banner/banner-11.jpg') }}">
                    <div class="container d-flex flex-column">
                        <div class="row align-items-center min-vh-100 pt-6 pt-md-0">
                            <div class="col-md-10 col-lg-8 col-xl-7 col-xxl-6 mb-1-9 mb-lg-0 py-5">
                                <div class="title-style3 mb-3">
                                    <span>@lang('info.titre.slogan')</span>
                                </div>
                                <h1 class="text-white display-21 display-sm-19 display-md-17 display-lg-8 mb-4">Connaître Christ pour mieux le servir.
                                </h1>
                                <p class="text-white mb-2-3 opacity8 display-md-28 w-lg-80">
                                    Nous voulons fournir un enseignement et une prédication centrés sur le Christ à tous les croyants et dirigeants d’église d’Afrique subsaharienne afin de les influencer à glorifier Christ comme la source suprême de satisfaction.
                                </p>
                                <a href="{{ route('about') }}" class="butn-style1 me-2 my-1 my-sm-0">Voir plus</a>
                                <a href="{{ route('contact') }}" class="butn-style1 secondary my-1 my-sm-0">Nous contacter</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item bg-img cover-background left-overlay-dark" data-overlay-dark="85" data-background="{{ asset('assets/img/banner/banner-12.jpg') }}">
                    <div class="container d-flex flex-column">
                        <div class="row align-items-center min-vh-100 pt-6 pt-md-0">
                            <div class="col-md-10 col-lg-8 col-xl-7 col-xxl-6 mb-1-9 mb-lg-0 py-5">
                                <div class="title-style3 mb-3">
                                    <span>@lang('info.titre.slogan')</span>
                                </div>
                                <h1 class="text-white display-21 display-sm-19 display-md-17 display-lg-8 mb-4">Faire des disciples centrés sur Christ </h1>
                                <p class="text-white mb-2-3 opacity8 display-md-28 w-lg-80">
                                    Le défi actuel de l’Église n’est pas tant de faire des disciples que de faire des disciples centrés sur l’Évangile. La raison en est la disparition de l’Évangile lui-même, centré sur le Christ, de l’Église.  Elle a été remplacée par une religion centrée sur l’homme, qui a tellement emprunté au christianisme, à l’exception de l’Évangile lui-même, qu’elle en trompe beaucoup par son aspect pseudo-chrétien.  Jusqu’à présent, la précision dans l’exégèse et la prédication n’a jamais eu autant d’importance.
                                </p>
                                <a href="{{ route('about') }}" class="butn-style1 me-2 my-1 my-sm-0">Voir plus</a>
                                <a href="{{ route('contact') }}" class="butn-style1 secondary my-1 my-sm-0">Nous contacter</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <!-- ABOUT
        ================================================== -->
        <section>
            <div class="container">
                <div class="row mt-2-9">
                    <div class="col-md-11 col-lg-6 mb-2-9 mb-lg-0 position-relative">
                        <div class="row">
                            <div class="col-6 mt-n2-9">
                                <img src="{{ asset('assets/img/content/about-06.jpg') }}" class="border-radius-10 wow fadeInUp tilt" alt="" data-wow-delay="200ms">
                            </div>
                            <div class="col-6">
                                <img src="{{ asset('assets/img/content/about-07.jpg') }}" class="border-radius-10 wow fadeInUp tilt" alt="" data-wow-delay="400ms">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mt-lg-0 wow fadeIn" data-wow-delay="200ms">
                        <div class="ps-lg-3 ps-xl-5">
                            <span class="d-block text-secondary display-23 display-md-21 display-lg-20 fw-bold title-font wow text-animation" data-in-effect="fadeInRight">Qu'est-ce que nous offrons ? </span>
                            <h4 class="h1 mb-1-9 fw-bold">
                                La formation théologique et biblique qu'il vous faut !
                            </h4>
                            <p class="mb-1-9">
                                À la recherche d'une opportunité extraordinaire pour vous lancer dans des études théologiques de qualité, qui vous doteront d'une solide compréhension des Écritures et d'une vision profondément centrée sur Jésus Christ et son Évangile ?

                                Ne cherchez plus loin ! Praxis est l'école théologique qu'il vous faut.

                                Nous vous offrons une formation en théologie biblique et chrétienne qui vous permettra non seulement d'approfondir vos connaissances, mais aussi de devenir un serviteur efficace et fidèle, prêt à impacter votre communauté avec l'Évangile de la suprématie de la gloire de Dieu.
                                Rejoignez-nous dès maintenant à Praxis et ouvrez-vous à une expérience exceptionnelle !

                            </p>
                            <div class="mb-1-9">
                                <span>Nous sommes ouverts du lundi au vendredi de 8h00 à 17h00.
                                    {{-- <strong class="lead font-weight-600">toutes vos questions.</strong> --}}
                                </span>
                            </div>
                            <div class="border-bottom mb-1-9 pb-1-9">
                                <h5 class="d-inline-block h6 me-4 mb-0">@lang("info.titre.phone") </h5>
                                <div class="d-inline-block me-4 align-top"><strong class="font-weight-700 text-primary">ou</strong></div>
                                <h5 class="d-inline-block h6 mb-0"><a href="#!">@lang("info.titre.mail")</a></h5>
                            </div>
                            {{-- <div class="d-flex justify-content-between">
                                <p class="mb-0"><span class="font-weight-700 d-block">Keir Prestonly</span>CEO of company</p>
                                <div>
                                    <img src="img/content/sign.png" alt="...">
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="position-absolute left-5 top-80 z-index-1 w-10 ani-top-bottom opacity1 d-none d-lg-block"><img src="img/icon/icon-05.svg" alt="..."></div>
            <div class="position-absolute right top-5 z-index-1 w-15 ani-top-bottom opacity2 d-none d-lg-block"><img src="img/icon/icon-08.svg" alt="..."></div>
        </section>
         <!-- PORTFOLIO
        ================================================== -->
        <section class="bg-light-gray border-radius-10">
            <div class="container mb-1-6 mb-md-2-2 mb-lg-1-6 mb-xl-0">
                <div class="row align-items-stretch">
                    <div class="col-lg-4 wow fadeIn" data-wow-delay="200ms">
                        <div class="row g-0 align-items-center h-100">
                            <div class="col-md-12">
                                <span class="d-block text-secondary display-23 display-md-21 display-lg-20 fw-bold title-font wow text-animation" data-in-effect="fadeInRight">Notre portfolio</span>
                                <h2 class="h1 mb-1-9 mb-lg-0 fw-bold">Nos sessions réalisée</h2>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-8 wow fadeIn" data-wow-delay="400ms">
                        <div class="position-relative h-100 vw-lg-60">
                            <div class="portfolio-slider owl-carousel owl-theme h-100 w-100 ms-lg-8 ms-xxl-16">
                                @forelse ($galeries as $g)
                                <div class="portfolio-style2">
                                    <img src="{{ asset('storage/'.$g->img1) }}  " alt="...">
                                    <div class="portfolio-inner">
                                        <div class="portfolio-overlay"></div>
                                        <div class="portfolio-text">
                                            <h3 class="h4 mb-1"><a href="{{ route('activites') }}" class="text-white">{{ $g->titre }} </a></h3>
                                            <span class="text-white">{{ " date : ".$g->getDateAtAttributes($g->date) }}</span><br>
                                            <span class="text-white">{{ $g->categorie->nom }}</span>
                                        </div>
                                    </div>
                                </div>
                                @empty

                                @endforelse

                                {{-- <div class="portfolio-style2">
                                    <img src="{{ asset('assets/img/portfolio/08.jpg') }}  " alt="...">
                                    <div class="portfolio-inner">
                                        <div class="portfolio-overlay"></div>
                                        <div class="portfolio-text">
                                            <h3 class="h4 mb-1"><a href="{{ route('activites') }}" class="text-white">Nos etudiants</a></h3>
                                            <span class="text-white">Collation</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="portfolio-style2">
                                    <img src="{{ asset('assets/img/portfolio/09.jpg') }}  " alt="...">
                                    <div class="portfolio-inner">
                                        <div class="portfolio-overlay"></div>
                                        <div class="portfolio-text">
                                            <h3 class="h4 mb-1"><a href="{{ route('activites') }}" class="text-white">Notre équipe</a></h3>
                                            <span class="text-white">La team</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="portfolio-style2">
                                    <img src="{{ asset('assets/img/portfolio/10.jpg') }}  " alt="...">
                                    <div class="portfolio-inner">
                                        <div class="portfolio-overlay"></div>
                                        <div class="portfolio-text">
                                            <h3 class="h4 mb-1"><a href="{{ route('activites') }}" class="text-white">Nos Professeurs</a></h3>
                                            <span class="text-white">Professeurs</span>
                                        </div>
                                    </div>
                                </div> --}}

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
            @include("parties.team")

         <!-- TESTIMONIALS
        ================================================== -->

        @include("parties.temoignage")
        <!-- BLOG
        ================================================== -->
        <section>
            <div class="container position-relative z-index-9">

                <div class="mb-2-6 mb-md-5 mx-auto text-center wow fadeIn w-md-90 w-lg-70 w-xl-60 w-xxl-50" data-wow-delay="200ms">
                    <span class="text-uppercase d-block mb-2 font-weight-600 small text-primary letter-spacing-2">Nos articles</span>
                    <h2 class="h1 mb-0">Nos articles et nos actualités pour répondre vos questions</h2>
                </div>

                <div class="row g-xl-5 mt-n2-9">
                    <div class="col-md-6 col-lg-4 mt-2-9 wow fadeIn" data-wow-delay="200ms">
                        <article class="card card-style8 h-100 border-radius-10">
                            <div class="card-img position-relative">
                                <img src="{{ asset('assets/img/blog/blog-01.jpg') }}" class="rounded-top-lg" alt="...">
                                <a href="#!" class="category rounded">business</a>
                            </div>
                            <div class="card-body pt-2-0 px-2-0 pb-2-9">
                                <span class="text-primary mb-2 d-block font-weight-500">June 10, 2021</span>
                                <h3 class="h5 mb-0 lh-base"><a href="#">Five things you need to know about business today</a></h3>
                                <a href="#" class="butn-read-more"><i class="ti-arrow-right"></i></a>
                            </div>
                        </article>
                    </div>

                    <div class="col-md-6 col-lg-4 mt-2-9 wow fadeIn" data-wow-delay="400ms">
                        <article class="card card-style8 h-100 border-radius-10">
                            <div class="card-img position-relative">
                                <img src="{{ asset('assets/img/blog/blog-02.jpg') }}" class="rounded-top-lg" alt="...">
                                <a href="#!" class="category rounded">consulting</a>
                            </div>
                            <div class="card-body p-2-0 p-xl-2-4">
                                <span class="text-primary mb-2 d-block font-weight-500">June 8, 2021</span>
                                <h3 class="h5 mb-0 lh-base"><a href="#">Eliminate your fears and doubts about business</a></h3>
                                <a href="#" class="butn-read-more"><i class="ti-arrow-right"></i></a>
                            </div>
                        </article>
                    </div>

                    <div class="col-md-6 col-lg-4 mt-2-9 wow fadeIn" data-wow-delay="600ms">
                        <article class="card card-style8 h-100 border-radius-10">
                            <div class="card-img position-relative">
                                <img src="{{ asset('assets/img/blog/blog-03.jpg') }}" class="rounded-top-lg" alt="...">
                                <a href="#!" class="category rounded">finance</a>
                            </div>
                            <div class="card-body p-2-0 p-xl-2-4">
                                <span class="text-primary mb-2 d-block font-weight-500">June 6, 2021</span>
                                <h3 class="h5 mb-0 lh-base"><a href="#">Understanding the background of business</a></h3>
                                <a href="#" class="butn-read-more"><i class="ti-arrow-right"></i></a>
                            </div>
                        </article>
                    </div>
                </div>
            </div>

            <div class="bg-secondary p-12 p-xl-16 p-xxl-20 d-inline-block rounded-circle position-absolute left-n10 top-70 top-xl-60 top-xxl-50 z-index-1 ani-left-right d-none d-lg-block"></div>
            <div class="bg-transparent border-width-2 border-solid border-color-primary p-10 p-xl-14 p-xxl-18 d-inline-block rounded-circle position-absolute left-n10 bottom-n5 ani-top-bottom z-index-1 d-none d-lg-block"></div>

        </section>
@endsection
