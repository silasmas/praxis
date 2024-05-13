@extends("admin.template",['titre'=>"Home"])

@section("style")
<link rel="stylesheet" href="{{ asset('assets/vendor/photoswipe/photoswipe.css') }} ">
<link rel="stylesheet" href="{{ asset('assets/vendor/photoswipe/default-skin/default-skin.css') }} ">
<link rel="stylesheet" href="{{ asset('assets/vendor/plyr/plyr.css') }}" @endsection @section("content") <main
    class="app-main">
<div class="wrapper">
    <main class="app-main">
        <!-- .wrapper -->
        <div class="wrapper">
            <!-- .page -->
            <div class="page py-0">
            {{-- <div class="page has-sidebar has-sidebar-expand-xl"> --}}
                <!-- .page-inner -->
                <div class="page-inner">
                    <!-- .page-title-bar -->
                    <header class="page-title-bar">
                        <!-- grid row -->
                        <div class="row text-center text-sm-left">
                            <!-- grid column -->
                            <div class="col-sm-auto col-12 mb-2">
                                <!-- .has-badge -->
                                <div class="has-badge has-badge-bottom">
                                    <a href="#" class="user-avatar user-avatar-xl"><img
                                            src="{{ asset('assets/admin/images/default.jpg') }}" alt=""></a> <span
                                        class="tile tile-circle tile-xs" data-toggle="tooltip" title="Public"><i
                                            class="fas fa-globe"></i></span>
                                </div><!-- /.has-badge -->
                            </div><!-- /grid column -->
                            <!-- grid column -->
                            <div class="col">
                                <h1 class="page-title"> Panel administration</h1>
                                <p class="text-muted">Dans cette page vous avez la possibilité de géré les informations
                                    du site </p>
                            </div><!-- /grid column -->
                        </div><!-- /grid row -->
                        <!-- .nav-scroller -->
                        <div class="nav-scroller border-bottom">
                            <!-- .nav -->
                            <div class="nav nav-tabs">
                                <a class="nav-link {{ Route::current()->getName()=="admin_articles"?"active":"" }}" href="{{ route('admin_articles') }}">Articles</a>
                                <a class="nav-link {{ Route::current()->getName()=="admin_activites"?"active":"" }}" href="{{ route('admin_activites') }}">Activités</a>
                                <a class="nav-link {{ Route::current()->getName()=="admin_messages"?"active":"" }}" href="{{ route('admin_messages') }}">Messages</a>
                                <a class="nav-link {{ Route::current()->getName()=="admin_profs"||Route::current()->getName()=="dashboard"?"active":"" }}" href="{{ route('admin_profs') }}">Enseignants</a>
                                <a class="nav-link {{ Route::current()->getName()=="admin_newsletters"?"active":"" }}" href="{{ route('addNewsletter') }}">News letter</a>
                            </div><!-- /.nav -->
                        </div><!-- /.nav-scroller -->
                    </header><!-- /.page-title-bar -->
                    <!-- .page-section -->
                    @switch(Route::current()->getName())
                        @case("dashboard")
                        @include("admin.pages.prof")
                            @break
                        @case("admin_articles")
                        @include("admin.pages.articles")
                            @break
                        @case("admin_messages")
                        @include("admin.pages.message")
                            @break
                        @case("admin_activites")
                        @include("admin.pages.activites")
                            @break
                        @case("admin_prof")
                            @include("admin.pages.prof")
                            @break
                        @case("admin_neswsletter")
                        @include("admin.pages.newsletter")
                            @break

                        @default

                    @endswitch
                </div><!-- /.page-inner -->
            </div><!-- /.page -->
        </div><!-- /.wrapper -->

        @include("parties.modale")
    </main><!-- /.app-main -->
</div>
</main>
@endsection

@section("script")
<!-- BEGIN PLUGINS JS -->
<script src="{{ asset('assets/vendor/photoswipe/photoswipe.min.js') }}"></script>
<script src="{{ asset('assets/vendor/photoswipe/photoswipe-ui-default.min.js') }}"></script>
<script src="{{ asset('assets/vendor/plyr/plyr.min.js') }}"></script>
<script src="{{ asset('assets/javascript/pages/photoswipe-demo.js') }} "></script>

<script>
    function deletemedia(id) {
            Swal.fire({
                title: "Suppression d'un media",
                text: "êtes-vous sûre de vouloir supprimer ce media ?",
                icon: 'warning',
                inputAttributes: {
                autocapitalize: "off"
                },
                showCancelButton: true,
                confirmButtonText: "OUI",
                cancelButtonText: "NON",
                showLoaderOnConfirm: true,
                preConfirm: async (login) => {
                    // alert('alert')
                            try {

                            } catch (error) {

                            }
                },allowOutsideClick: () => !Swal.isLoading()
                }).then((result) => {
                        if (result.isConfirmed) {
                            addCard(id,"","deleteMedia");
                        }
                });
            }
            function addCard(form, idLoad, url) {
        // event.preventDefault()
        var header = {'X-CSRF-TOKEN': $('[name="csrf"]').attr('content'),'Authorization': 'Bearer ' + $('[name="jpt-devref"]').attr('content'), 'Accept': 'application/json', 'X-localization': navigator.language};

        var autre = idLoad == '' ? '' : '../';
        Swal.fire({
            title: 'Merci de patienter...',
            icon: 'info'
        })
        $.ajax({
            url: url + '/' + form,
            method: "GET",
            // data: {
            //     'id': form
            // },
            success: function(data) {
                if (!data.reponse) {
                    Swal.fire({
                        title: data.msg,
                        icon: 'error'
                    })
                } else {
                    Swal.fire({
                        title: data.msg,
                        icon: 'success'
                    })
                    actualiser();
                }
            },
        });

    }
    function actualiser() {
        location.reload();
    }
</script>
@endsection
