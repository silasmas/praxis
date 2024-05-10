
<section class="page-title-section2 top-position1 bg-img cover-background text-start" data-overlay-dark="7"
data-background="{{ asset('assets/img/banner/bannier.jpg') }}">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-lg-7 col-xxl-5">
                <div class="title-style3">
                    <span>
                        @switch(Route::current()->getName())
                            @case("home")
                                Accueil
                                @break
                            @case("about")
                                Qui sommes-nous
                                @break
                            @case("activites")
                                Nos Activités
                                @break
                            @case("teacher")
                                Nos professeurs
                                @break
                            @case("articles")
                                Nos articles
                                @break
                            @case("viewteacher")
                                Details du professeur
                                @break
                            @case("viewarticle")
                                Detail d'un article
                                @break
                            @case("contact")
                                Nous contacter
                                @break

                            @default

                        @endswitch
                    </span>
                </div>
                <h1 class="text-white mb-0 text-shadow-large">
                    @switch(Route::current()->getName())
                    @case("teacher")
                    Nous vous presentons nos professeurs.
                        @break
                    @case("about")
                        Nous vous parlons de qui nous sommes.
                        @break
                    @case("activites")
                        Nous vous présentons les activités de sessions passée.
                        @break
                        @case("articles")
                        Nous vous présentons nos articles.
                        @break
                    @case("viewteacher")
                    Nous vous présentons les informations detaillées de nos professeurs.
                        @break
                    @case("viewarticle")
                    Nous vous présentons les informations detaillées de nos artiles.
                        @break
                    @case("contact")
                        Nous vous informons sur les possibilités de nous avoir.
                        @break

                    @default

                @endswitch
                </h1>
            </div>
        </div>

    </div>
</section>
