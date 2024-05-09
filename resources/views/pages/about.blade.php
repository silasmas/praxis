@extends("layouts.template",["titre"=>"Qui sommes-nous"])


@section("content")
@include("parties.bannier")

<section class="md">
    <div class="container">
        <div class="row wow fadeIn" data-wow-delay="200ms">
            <div class="col-12">
                <div class="horizontaltab tab-style1">
                    <ul class="resp-tabs-list hor_1">
                        <li class="tab1 ml-1-9"><span class="count display-1 alt-font font-weight-700">01</span>
                            <div class="tab-box">
                                <h6>Qui</h6><span>Sommes-nous</span>
                            </div>
                        </li>
                        <li class="tab2 ml-1-9"><span class="count display-1 alt-font font-weight-700">02</span>
                            <div class="tab-box">
                                <h6>Notre</h6><span>histoire</span>
                            </div>
                        </li>
                        {{-- <li class="tab3"><span class="count display-1 alt-font font-weight-700">03</span>
                            <div class="tab-box">
                                <h6>Growth</h6><span>Start to growth</span>
                            </div>
                        </li> --}}
                    </ul>
                    <div class="resp-tabs-container box-shadow-large bg-white hor_1">
                        <div class="first">

                            <div class="bg-white box-shadow-large p-2-5 rounded">
                                <div class="row">
                                    <div class="col-md-11 col-lg-6 mb-2-9 mb-lg-0 position-relative">
                                        <div class="row">
                                            <div class="col-6 mt-n2-9">
                                                <img src="{{ asset('assets/img/content/about-06.jpg') }}"
                                                    class="border-radius-10 wow fadeInUp tilt" alt=""
                                                    data-wow-delay="200ms">
                                            </div>
                                            <div class="col-6">
                                                <img src="{{ asset('assets/img/content/about-07.jpg') }}"
                                                    class="border-radius-10 wow fadeInUp tilt" alt=""
                                                    data-wow-delay="400ms">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mt-lg-0 wow fadeIn" data-wow-delay="200ms">
                                        <div class="ps-lg-3 ps-xl-5">
                                            <div class="title-style2 text-start">
                                                <span class="sub-title">Parlons de nous</span>
                                            </div>
                                            <h2 class="h1 mb-1-9 fw-bold">Praxis</h2>
                                            <p class="mb-1-9">
                                                GLODEMAP est une société de droit congolais existant depuis
                                                2017.
                                                La société intègre des pratiques durables dans ses
                                                opérations et des valeurs
                                                contribuant ainsi positivement aux activités de ses
                                                partenaires.
                                                GLODEMAP propose 3 services : l'agence de douane, le
                                                transport,
                                                ainsi que la santé, et compte plus de 150 agents. Basée à
                                                Kinshasa,
                                                GLODEMAP possède différents bureaux en RD Congo, notamment à
                                                Matadi, Kimpese,
                                                Lufu, ainsi qu'à Pointe-Noire au Congo Brazzaville, et à
                                                Luanda en Angola.
                                                Nous plaçons les besoins et les désirs des clients au cœur
                                                des décisions
                                                commerciales garantit la satisfaction de la clientèle et
                                                favorise la fidélité
                                                à long terme.
                                            </p>
                                            {{-- <div class="mb-1-9">
                                                <span>Call us 24/7. We can answer for <strong
                                                        class="lead font-weight-600">all your
                                                        questions.</strong></span>
                                            </div> --}}
                                            <div class="border-bottom mb-1-9 pb-1-9">
                                                <h5 class="d-inline-block h6 me-4 mb-0">@lang("info.titre.phone") </h5>
                                                <div class="d-inline-block me-4 align-top"><strong class="font-weight-700 text-primary">ou</strong></div>
                                                <h5 class="d-inline-block h6 mb-0"><a href="#!">@lang("info.titre.mail")</a></h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="second">

                            <div class="bg-white box-shadow-large p-2-5 rounded">
                                <div class="row">
                                    <div class="col-md-11 col-lg-6 mb-2-9 mb-lg-0 position-relative">
                                        <div class="row">
                                            <div class="col-6 mt-n2-9">
                                                <img src="{{asset('assets/img/team/t1.jpg')}}"
                                                    class="border-radius-10 wow fadeInUp tilt" alt=""
                                                    data-wow-delay="200ms">
                                            </div>
                                            <div class="col-6">
                                                <img src="{{asset('assets/img/team/t2.jpg')}}"
                                                    class="border-radius-10 wow fadeInUp tilt" alt=""
                                                    data-wow-delay="400ms">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mt-lg-0 wow fadeIn" data-wow-delay="200ms">
                                        <div class="ps-lg-3 ps-xl-5">
                                            <div class="title-style2 text-start">
                                                <span class="sub-title">Mon histoire</span>
                                            </div>
                                            <h2 class="h1 mb-1-9 fw-bold">Une affaire d’espoir </h2>
                                            <p class="mb-1-9">
                                                TOZINATANA KAZOLA Patshely, Directeur Général de la société GLODEMAP.
                                                Mon nom, traduit du Kikongo ma langue maternelle, signifie «
                                                Respectons-nous, aimons-nous ». Je suis né à Kinshasa dans les années
                                                80, aîné d'une fratrie de sept enfants. Mes parents se nomment KUNTONA
                                                Alexis et Tmungu Nzambi, tous deux encore en vie.

                                                Je viens d'une famille modeste, ce qui a limité mes possibilités d'accès
                                                à une éducation de qualité. Vers 1992, je me suis retrouver à Matadi
                                                pour mes études, placé sous la tutelle de mon oncle Wamba Luzolo. C'est
                                                avec son soutien que j'ai obtenu mon diplôme d'État (bac) en mécanique
                                                générale à l'institut ITP Matadi en 2006.
                                            </p>
                                            <div class="d-flex justify-content-between">
                                                <p class="mb-0"><span class="font-weight-700 d-block">TUZITANA KAZOLA
                                                        Patsheley</span>CEO de la compagnie</p>
                                                <div>
                                                    <img src="{{asset('assets/img/content/sign.png') }}" alt="...">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- COUNTER
================================================== -->
<section class="py-0">
    <div class="container">
        <div class="bg-img pb-5" data-overlay-light="9" data-background="assets/img/bg/bg-07.png">
            <div class="row text-center position-relative z-index-1">
                <div class="col-6 col-lg-3 mb-1-6 mb-lg-0 wow fadeInUp" data-wow-delay="100ms">
                    <div>
                        <h3 class="font-weight-600 display-14 display-sm-12 display-lg-10 text-primary"><span
                                class="countup">100</span>k</h3>
                        <span class="fw-bold text-uppercase">Etudiants</span>
                    </div>
                </div>
                <div class="col-6 col-lg-3 mb-1-6 mb-lg-0 wow fadeInUp" data-wow-delay="200ms">
                    <div>
                        <h3 class="font-weight-600 display-14 display-sm-12 display-lg-10 text-primary"><span
                                class="countup">3</span>+</h3>
                        <span class="fw-bold text-uppercase">Sessions</span>
                    </div>
                </div>
                <div class="col-6 col-lg-3 wow fadeInUp" data-wow-delay="300ms">
                    <div>
                        <h3 class="font-weight-600 display-14 display-sm-12 display-lg-10 text-primary"><span
                                class="countup">100</span></h3>
                        <span class="fw-bold text-uppercase">Enseignants</span>
                    </div>
                </div>
                <div class="col-6 col-lg-3 wow fadeInUp" data-wow-delay="400ms">
                    <div>
                        <h3 class="font-weight-600 display-14 display-sm-12 display-lg-10 text-primary"><span
                                class="countup">1</span>+</h3>
                        <span class="fw-bold text-uppercase">Pays</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- EXTRA
================================================== -->
<section class="vision-changebg owl-carousel owl-theme py-0 bg-img cover-background" data-overlay-dark="0"
    data-background="{{ asset('assets/img/banner/a2.jpg') }}">
    <div class="vision-wrapper bg-img cover-background" data-overlay-dark="5"
        data-background="{{ asset('assets/img/banner/a2.jpg') }}">
        <div class="vision-content">
            <h4 class="text-white mb-3 font-weight-500">Qu'est-ce qui nous a interpellé?</h4>
            <p class="mb-0 text-white">
                La foi chrétienne biblique est remplacée par la religion centrée sur l'homme, qui a emprunter le nom de "Jésus" et les termes qui appartiennent au christianisme, à l'exception de l'évangile lui-même. Cette religion trompe beaucoup par son apparence.
            </p>
        </div>
    </div>
    <div class="vision-wrapper bg-img cover-background" data-overlay-dark="5"
        data-background="{{ asset('assets/img/banner/a1.jpg') }}">
        <div class="vision-content">
            <h4 class="text-white mb-3 font-weight-500">Notre Vision</h4>
            <p class="mb-0 text-white">
                Notre vision est d'élever une nouvelle génération des leaders religieux et sociaux sur le continent africain avec une vision du monde centrée sur christ
            </p>
        </div>
    </div>
    <div class="vision-wrapper bg-img cover-background" data-overlay-dark="5"
        data-background="{{ asset('assets/img/banner/a3.jpg') }}">
        <div class="vision-content">
            <h4 class="text-white mb-3 font-weight-500">Notre Mission</h4>
            <p class="mb-0 text-white">
                Notre mission est de rappeler l'église à l'évangile de christ et à une vie centrée sur sa parole
            </p>
        </div>
    </div>
    <div class="vision-wrapper bg-img cover-background" data-overlay-dark="5"
        data-background="{{ asset('assets/img/banner/a4.jpg') }}">
        <div class="vision-content">
            <h4 class="text-white mb-3 font-weight-500">Nos Valeurs</h4>
            <p class="mb-0 text-white">
                Intégrité - Excellence - Fraternité - Communion - Humilité
            </p>
        </div>
    </div>
</section>

@include("parties.team")

@include("parties.temoignage")
@include("parties.modale")
@endsection
