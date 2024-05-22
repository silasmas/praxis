<!-- .app-aside -->
<aside class="app-aside app-aside-expand-md app-aside-light">
    <!-- .aside-content -->
    <div class="aside-content">

        <div class="overflow-hidden aside-menu">
            <!-- .stacked-menu -->
            <nav id="stacked-menu" class="stacked-menu">
                <!-- .menu -->
                <ul class="menu">
                    <!-- .menu-item -->
                    <li class="menu-item  has-active">
                        <a href="{{ route('dashboard') }}" class="menu-link">
                            <span class="menu-icon fas fa-home"></span>
                            <span class="menu-text">Dashboard</span>
                        </a>
                    </li><!-- /.menu-item -->

                    <!-- .menu-item -->

                    {{-- <li class="menu-item {{ Route::current()->getName() == 'serie' ? 'has-active' : ''}}">
                        <a href="{{ route('categories') }}" class="menu-link">
                            <span class="menu-icon fas fa-rocket"></span>
                            <span class="menu-text">Gestion Catégorie</span>
                        </a>
                    </li>
                    <li class="menu-item {{ Route::current()->getName() == 'types' ? 'has-active' : ''}}">
                        <a href="{{ route('types') }}" class="menu-link">
                            <span class="menu-icon fas fa-rocket"></span>
                            <span class="menu-text">Gestion des types</span>
                        </a>
                    </li>
                    <li class="menu-item {{ Route::current()->getName() == 'groupes' ? 'has-active' : ''}}">
                        <a href="{{ route('groupes') }}" class="menu-link">
                            <span class="menu-icon fas fa-rocket"></span>
                            <span class="menu-text">Gestion des groupes</span>
                        </a>
                    </li>
                    <li class="menu-item {{ Route::current()->getName() == 'pays' ? 'has-active' : ''}}">
                        <a href="{{ route('pays') }}" class="menu-link">
                            <span class="menu-icon fas fa-rocket"></span>
                            <span class="menu-text">Gestion des pays</span>
                        </a>
                    </li>
                    <li class="menu-item {{ Route::current()->getName() == 'roles' ? 'has-active' : ''}}">
                        <a href="{{ route('roles') }}" class="menu-link">
                            <span class="menu-icon fas fa-rocket"></span>
                            <span class="menu-text">Gestion des roles</span>
                        </a>
                    </li>
                        <li class="menu-item {{ Route::current()->getName() == 'client' ? 'has-active' : ''}}">
                        <a href="{{ route('client') }}" class="menu-link">
                            <span class="menu-icon fas fa-users"></span>
                            <span class="menu-text">Clients</span>
                        </a>
                    </li> --}}
                    <!-- /.menu-item -->
                    <!-- .menu-header -->
                    {{-- <li class="menu-header">Partenaire </li><!-- /.menu-header -->
                    <a href="#" class="menu-link">
                        <span class="menu-icon fas fa-rocket"></span>
                        <span class="menu-text">Landing Page</span>
                    </a> --}}

                </ul><!-- /.menu -->
            </nav><!-- /.stacked-menu -->
        </div><!-- /.aside-menu -->
        <!-- Skin changer -->
        <footer class="p-2 aside-footer border-top">
            <button class="btn btn-light btn-block text-primary" data-toggle="skin"><span
                    class="d-compact-menu-none">Night mode</span> <i class="ml-1 fas fa-moon"></i></button>
        </footer><!-- /Skin changer -->
    </div><!-- /.aside-content -->
</aside><!-- /.app-aside -->
