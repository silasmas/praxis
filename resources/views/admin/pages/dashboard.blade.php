@extends("admin.template",['titre'=>"Home"])

@section("style")
<link rel="stylesheet" href="{{ asset('assets/admin/vendor/photoswipe/photoswipe.css') }} ">
<link rel="stylesheet" href="{{ asset('assets/admin/vendor/photoswipe/default-skin/default-skin.css') }} ">
<link rel="stylesheet" href="{{ asset('assets/admin/vendor/plyr/plyr.css') }}" @endsection @section("content") <main
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

        @include("admin.parties.modale")
        @include("admin.parties.modalemsg")
    </main><!-- /.app-main -->
</div>
</main>
@endsection

@section("script")
<!-- BEGIN PLUGINS JS -->
<script src="{{ asset('assets/admin/vendor/photoswipe/photoswipe.min.js') }}"></script>
<script src="{{ asset('assets/admin/vendor/photoswipe/photoswipe-ui-default.min.js') }}"></script>
<script src="{{ asset('assets/admin/vendor/plyr/plyr.min.js') }}"></script>
<script src="{{ asset('assets/admin/vendor/plyr/plyr.min.js') }}"></script>
<script src="{{ asset('assets/admin/javascript/pages/photoswipe-demo.js') }} "></script>

<script>
            $("#formProf").on("submit", function (e) {
                    e.preventDefault();
                    var formElement = document.getElementById('formProf');
                    add(formElement, 'POST', 'addProf',"#formProf")
            });
            $(document).on("submit","#formProfEdite", function (e) {
                    e.preventDefault();
                            // Sélectionner le formulaire par son ID
                var formElement = document.getElementById('formProfEdite');

                // Créer un objet FormData à partir de l'élément de formulaire
                var formData = new FormData(formElement);

                // Accéder au champ de type file
                var fileInput = formElement.querySelector('input[type="file"]');

            // Vérifier si un fichier a été sélectionné
                        if (fileInput.files.length > 0) {
                            var file = fileInput.files[0];
                            console.log("Nom du fichier : " + file.name);
                            console.log("Taille du fichier : " + file.size);
                            console.log("Type MIME du fichier : " + file.type);

                            // Ajouter le champ de type file à l'objet FormData
                            formData.append('file', file);
                            console.log("for : " + formData);
                        }
                add(formData, 'post', 'updateProf','#formProfEdite')
            });

            function add(form, mothode, url,idf) {
                var csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
                var f = form;
                var u = url;
                var idform = idf;
                Swal.fire({
                    title: 'Merci de patienter...',
                    icon: 'info'
                })
                // console.log(form)
                $.ajax({
                    url: u,
                    method: mothode,
                    data: form,
                    processData: false,
                    contentType: false,
                    headers: {
                        'X-CSRF-TOKEN': csrfToken
                    },
                    success: function (data) {

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

                            $(idform)[0].reset();
                            actualiser();
                        }

                    },
                });
             }
             function editeAll(id,root) {
                    Swal.fire({
                        title: 'Merci de patienter...',
                        icon: 'info'
                    })

                    $.ajax({
                        url:root+'/'+ id,
                        method: "GET",
                        success: function(data) {
                            if (!data.reponse) {
                                Swal.fire({
                                    title: data.msg,
                                    icon: 'error'
                                })
                            } else {
                                // Remplir les champs du formulaire avec les données reçues
                                console.log(data.data)
                            $('#nom').val(data.data.nom);
                            $('#prenom').val(data.data.prenom);
                            $('#titre').val(data.data.titre);
                            $('#facebook').val(data.data.fb);
                            $('#instagram').val(data.data.insta);
                            $('#youtube').val(data.data.x);
                            $('#biographie').val(data.data.biographie);
                            $('#idProf').val(data.data.id);
                            $('#imgProfil').attr('src', "storage/"+data.data.profil);

                            // Changer le texte du bouton
                            $('#btnProf').text('Modifier');
                            $("#formProf").off("submit");
                            $('#formProf').attr('id', 'formProfEdite');
                            // Sélectionner le bouton qui déclenche l'ouverture du modal
                            var button = $('#btnrond2');
                                // Simuler un clic sur le bouton pour ouvrir le modal
                            button.click();
                            $('#modalBoardConfigTitle').text("Formulaire pour modifier les info d'un professeur");
                                Swal.fire({
                                    title: data.msg,
                                    icon: 'success'
                                })
                                // actualiser();
                            }
                        },
                    });
                }
                function viewMsg(id,root) {
                    Swal.fire({
                        title: 'Merci de patienter...',
                        icon: 'info'
                    })

                    $.ajax({
                        url:root+'/'+ id,
                        method: "GET",
                        success: function(data) {
                            if (!data.reponse) {
                                Swal.fire({
                                    title: data.msg,
                                    icon: 'error'
                                })
                            } else {
                                // Remplir les champs du formulaire avec les données reçues
                                let dataContainer = document.getElementById('accordion');
                                let responseData = data.data;
                // Créer un accordéon pour chaque donnée récupérée
                responseData.forEach(function(datas, index) {
                let card = document.createElement('div');
                card.className = 'card card-expansion-item';
                if (index === 0) {
                    card.classList.add('expanded');
                }
                let cardHeader = document.createElement('div');
                cardHeader.className = 'card-header border-0';
                cardHeader.id = 'heading' + (index + 1);

                let button = document.createElement('button');
                button.className = 'btn btn-reset';
                button.setAttribute('data-toggle', 'collapse');
                button.setAttribute('data-target', '#collapse' + (index + 1));
                button.setAttribute('aria-expanded', index === 0 ? 'true' : 'false');
                button.setAttribute('aria-controls', 'collapse' + (index + 1));
                button.innerHTML = '<span class="collapse-indicator mr-2"><i class="fa fa-fw fa-caret-right"></i></span> <span>' + data.title + '</span>';

                cardHeader.appendChild(button);

                    let collapseDiv = document.createElement('div');
                    collapseDiv.id = 'collapse' + (index + 1);
                    collapseDiv.className = 'collapse';
                    if (index === 0) {
                        collapseDiv.classList.add('show');
                    }
                    collapseDiv.setAttribute('aria-labelledby', 'heading' + (index + 1));
                    collapseDiv.setAttribute('data-parent', '#accordion');

                    let cardBody = document.createElement('div');
                    cardBody.className = 'card-body pt-0';
                    cardBody.textContent = data.message;

                    collapseDiv.appendChild(cardBody);

                    card.appendChild(cardHeader);
                    card.appendChild(collapseDiv);

                    accordion.appendChild(card);

                    button.addEventListener('click', function() {
                        collapseDiv.classList.toggle('show');
                        button.setAttribute('aria-expanded', collapseDiv.classList.contains('show') ? 'true' : 'false');
                    });
                    });
                            // Sélectionner le bouton qui déclenche l'ouverture du modal
                            var button = $('#btnrond');
                                // Simuler un clic sur le bouton pour ouvrir le modal
                            button.click();
                            $('#modalBoardConfigTitle').text("Formulaire pour modifier les info d'un professeur");
                                Swal.fire({
                                    title: data.msg,
                                    icon: 'success'
                                })
                                // actualiser();
                            }
                        },
                    });
                }
                function actualiser() {
                    location.reload();
                }



</script>
@endsection
