<header class="header-style1 menu_area-light">

    <div class="navbar-default border-bottom border-color-light-white">

        <!-- start top search -->
        <div class="top-search bg-secondary">
            <div class="container-fluid px-sm-1-6 px-lg-2-9">
                <form class="search-form" action="search.html" method="GET" accept-charset="utf-8">
                    <div class="input-group">
                        <span class="input-group-addon cursor-pointer">
                            <button class="search-form_submit fas fa-search text-white" type="submit"></button>
                        </span>
                        <input type="text" class="search-form_input form-control" name="s" autocomplete="off" placeholder="Type & hit enter...">
                        <span class="input-group-addon close-search mt-1"><i class="fas fa-times"></i></span>
                    </div>
                </form>
            </div>
        </div>
        <!-- end top search -->

        <div class="container-fluid px-sm-2-9">
            <div class="row align-items-center">
                <div class="col-12 col-lg-12">
                    <div class="menu_area alt-font">
                        <nav class="navbar navbar-expand-lg navbar-light p-0">

                            <div class="navbar-header navbar-header-custom">
                                <!-- start logo -->
                                <a href="{{ route('home') }}" class="navbar-brand">
                                    <img id="logo" src="{{ asset('assets/img/logos/one.png') }}" alt="logo">
                                </a>
                                <!-- end logo -->
                            </div>

                            <div class="navbar-toggler"></div>

                            <!-- menu area -->
                            <ul class="navbar-nav align-items-lg-center ms-auto" id="nav" style="display: none;">
                                <li class="{{ Route::current()->getName() == 'home' ? 'active' : ''}}"><a href="{{ route('home') }}">Accueil</a></li>
                                <li class="{{ Route::current()->getName() == 'about' ? 'active' : ''}}"><a href="{{ route('about') }}">Qui sommes-nous</a></li>
                                <li class="{{ Route::current()->getName() == 'activites' ? 'active' : ''}}"><a href="{{ route('activites') }}">Nos activités</a></li>
                                <li class="{{ Route::current()->getName() == 'teacher'||Route::current()->getName() =="viewteacher" ? 'active' : ''}}"><a href="{{ route('teacher') }}">Nos enseignants</a></li>
                                <li class="{{ Route::current()->getName() == 'articles' ? 'active' : ''}}"><a href="{{ route('articles') }}">Articles</a></li>
                                <li class="{{ Route::current()->getName() == 'contact' ? 'active' : ''}}"><a href="{{ route('contact') }}">Contact</a></li>

                            </ul>
                            <!-- end menu area -->

                            <!-- start attribute navigation -->
                            <div class="attr-nav align-items-lg-center ms-lg-auto">
                                <ul>
                                    {{-- <li class="search"><a href="#!"><i class="fas fa-search"></i></a></li> --}}
                                    <li class="d-none d-xl-inline-block"><a href="" class="butn secondary medium text-white shadow-none">Faire un don</a></li>
                                </ul>
                            </div>
                            <!-- end attribute navigation -->

                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

</header>
