@extends("admin.template",['titre'=>"Home"])

@section("style")
<link rel="stylesheet" href="{{ asset('assets/admin/vendor/photoswipe/photoswipe.css') }} ">
<link rel="stylesheet" href="{{ asset('assets/admin/vendor/photoswipe/default-skin/default-skin.css') }} ">
<link rel="stylesheet" href="{{ asset('assets/admin/vendor/plyr/plyr.css') }}">
<link rel="stylesheet" href="{{ asset('assets/admin/stylesheets/dataTables/datatables.min.css') }}">

@endsection
@section("content")
<main class="app-main">
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
                                                    src="{{ asset('assets/admin/images/default.jpg') }}" alt=""></a>
                                            <span class="tile tile-circle tile-xs" data-toggle="tooltip"
                                                title="Public"><i class="fas fa-globe"></i></span>
                                        </div><!-- /.has-badge -->
                                    </div><!-- /grid column -->
                                    <!-- grid column -->
                                    <div class="col">
                                        <h1 class="page-title"> Panel administration</h1>
                                        <p class="text-muted">Dans cette page vous avez la possibilité de géré les
                                            informations
                                            du site </p>
                                    </div><!-- /grid column -->
                                </div><!-- /grid row -->
                                <!-- .nav-scroller -->
                                <div class="nav-scroller border-bottom">
                                    <!-- .nav -->
                                    <div class="nav nav-tabs">
                                        <a class="nav-link {{ Route::current()->getName()==" admin_articles"?"active":""
                                            }}" href="{{ route('admin_articles') }}">Articles</a>
                                        <a class="nav-link {{ Route::current()->getName()=="admin_activites"?"active":"" }}"
                                            href="{{ route('admin_activites') }}">Activités</a>
                                        <a class="nav-link {{ Route::current()->getName()==" admin_messages"?"active":""
                                            }}" href="{{ route('admin_messages') }}">Messages</a>
                                        <a class="nav-link {{ Route::current()->getName()=="
                                            admin_profs"||Route::current()->getName()=="dashboard"?"active":"" }}"
                                            href="{{ route('admin_profs') }}">Enseignants</a>
                                        <a class="nav-link {{ Route::current()->getName()=="
                                            admin_neswsletter"?"active":"" }}"
                                            href="{{ route('admin_neswsletter') }}">News letter</a>
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
                            @include("admin.parties.modaleCat")
                            @include("admin.parties.modaleGal")
                            @break
                            @case("admin_profs")
                            @include("admin.pages.prof")
                            @include("admin.parties.modale")
                            @include("admin.parties.modalemsg")
                            @break
                            @case("admin_neswsletter")
                            @include("admin.pages.newsletter")
                            @break

                            @default

                            @endswitch
                        </div><!-- /.page-inner -->
                    </div><!-- /.page -->
                </div><!-- /.wrapper -->


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
<script src="{{asset('assets/admin/javascript/dataTables/datatables.min.js')}}"></script>
<script>
    $(document).ready(function () {
        $('.dataTables-example').DataTable({
            language: {
                processing: "Traitement en cours...",
                search: "Rechercher&nbsp;:",
                lengthMenu: "Afficher _MENU_ &eacute;l&eacute;ments",
                info: "Affichage de l'&eacute;lement _START_ &agrave; _END_ sur _TOTAL_ &eacute;l&eacute;ments",
                infoEmpty: "Affichage de l'&eacute;lement 0 &agrave; 0 sur 0 &eacute;l&eacute;ments",
                infoFiltered: "(filtr&eacute; de _MAX_ &eacute;l&eacute;ments au total)",
                infoPostFix: "",
                loadingRecords: "Chargement en cours...",
                zeroRecords: "Aucun &eacute;l&eacute;ment &agrave; afficher",
                emptyTable: "Aucune donnée disponible dans le tableau",
                paginate: {
                    first: "Premier",
                    pagingType: "full_numbers", // Afficher tous les boutons de pagination
                    previous: "Pr&eacute;c&eacute;dent",
                    next: "Suivant",
                    last: "Dernier"
                },
                aria: {
                    sortAscending: ": activer pour trier la colonne par ordre croissant",
                    sortDescending: ": activer pour trier la colonne par ordre décroissant"
                }
            },
            pageLength: 25,
            responsive: true,
            dom: '<"html5buttons"B>lTfgitp',
            buttons: [{
                    extend: 'copy'
                },
                {
                    extend: 'csv'
                },
                {
                    extend: 'excel',
                    title: 'NewsLetter'
                },
                {
                    extend: 'pdf',
                    title: 'NewsLetter'
                },

                {
                    extend: 'print',
                    customize: function (win) {
                        $(win.document.body).addClass('white-bg');
                        $(win.document.body).css('font-size', '10px');

                        $(win.document.body).find('table')
                            .addClass('compact')
                            .css('font-size', 'inherit');
                    }
                }
            ],"columnDefs": [
            { "width": "700px", "targets": 2 }, // Définir une largeur de 100 pixels pour la première colonne
            { "width": "200px", "targets": 3 }, // Définir une largeur de 100 pixels pour la première colonne
            { "width": "200px", "targets": 1 }, // Définir une largeur de 150 pixels pour la deuxième colonne
            // Ajouter d'autres colonnes avec leurs largeurs respectives
        ]
        });
    });


                $("#formCategorie").on("submit", function (e) {
                        e.preventDefault();
                        var formElement = document.getElementById('formCategorie');
                        addAll(formElement, 'POST', 'addCategorie',"#formCategorie")
                });

                $("#formProf").on("submit", function (e) {
                        e.preventDefault();
                        var formElement = document.getElementById('formProf');
                        add(formElement, 'POST', 'addProf',"#formProf")
                });
                $(document).on("submit","#formGalerie", function (e) {
                        e.preventDefault();
                                // Sélectionner le formulaire par son ID
                    var formElement = document.getElementById('formGalerie');
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
                    add(formData, 'post', 'addGalerie','#formGalerie')
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

                $(document).on("submit","#formCategorieEdite", function (e) {
                        e.preventDefault();

                                // Sélectionner le formulaire par son ID
                    var formElement = document.getElementById('formCategorieEdite');
                    addAll(formElement, 'post', 'updateCat','#formCategorieEdite')
                });
                $(document).on("submit","#formGalerieEdite", function (e) {
                        e.preventDefault();

                                // Sélectionner le formulaire par son ID
                    var formElement = document.getElementById('formGalerieEdite');

                    // Créer un objet FormData à partir de l'élément de formulaire
                    var formData = new FormData(formElement);

                    // Accéder au champ de type file
                    var fileInput = formElement.querySelector('input[type="file"]');
                    if (fileInput.files.length > 0) {
                                var file = fileInput.files[0];
                                console.log("Nom du fichier : " + file.name);
                                console.log("Taille du fichier : " + file.size);
                                console.log("Type MIME du fichier : " + file.type);

                                // Ajouter le champ de type file à l'objet FormData
                                formData.append('file', file);
                                console.log("for : " + formData);
                            }
                    add(formData, 'post', 'updateGal','#formGalerieEdite')
                });

                function addAll(form, mothode, url,idf) {
                    var csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
                    var f = form;
                    var u = url;
                    var idform = idf;
                    Swal.fire({
                        title: 'Merci de patienter...',
                        icon: 'info'
                    })
                        //  console.log($(form).serialize())
                    $.ajax({
                        url: u,
                        method: mothode,
                        data: $(f).serialize(),
                        headers: {
                            'X-CSRF-TOKEN': csrfToken
                        },
                        success: function (data) {
                            if (!data.reponse) {
                                var errorMessage = '';
                            $.each(data.errors, function(key, value){
                                errorMessage += value + '<br>';
                            });
                                Swal.fire({
                                    title: data.msg+" : "+errorMessage,
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
                        error: function(xhr, status, error){
                            alrte("ok")
                            var errors = xhr.responseJSON.errors;
                            var errorMessage = '';
                            $.each(errors, function(key, value){
                                errorMessage += value + '<br>';
                            });
                             // Afficher les erreurs de validation à l'utilisateur
                                Swal.fire({
                                    title: xhr.msg,
                                    html: errorMessage,
                                        icon: 'error'
                                    })
                            }
                    });
                }

                function add(form, mothode, url,idf) {
                    var csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
                    var f = form;
                    var u = url;
                    var idform = idf;
                    Swal.fire({
                        title: 'Merci de patienter...',
                        icon: 'info'
                    })
                        console.log(form)
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
                        error: function(xhr, status, error){
                            alrte("ok")
                            var errors = xhr.responseJSON.errors;
                            var errorMessage = '';
                            $.each(errors, function(key, value){
                                errorMessage += value + '<br>';
                            });
                             // Afficher les erreurs de validation à l'utilisateur
                                Swal.fire({
                                    title: xhr.msg,
                                    html: errorMessage,
                                        icon: 'error'
                                    })
                            }
                    });
                }

                function editeGal(id,root) {
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

                            $('#titre').val(data.data.titre);
                            $('#date').val(data.data.date);
                            $('#categorieGal').val(data.data.categorie_id);
                            $('#idGal').val(data.data.id);

                            // Changer le texte du bouton
                            $('#btnGalerieAdd').text('Modifier');
                            $("#formGalerie").off("submit");
                            $('#formGalerie').attr('id', 'formGalerieEdite');
                            // Sélectionner le bouton qui déclenche l'ouverture du modal
                            var button = $('#btnrondGaledie');
                                // Simuler un clic sur le bouton pour ouvrir le modal
                            button.click();
                            $('#modalGalerieTitle').text("Formulaire pour modifier la galerie");
                                Swal.fire({
                                    title: data.msg,
                                    icon: 'success'
                                })
                                // actualiser();
                            }
                        },
                    });
                }
                function editeCat(id,root) {
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
                            $('#description').val(data.data.description);
                            $('#idCat').val(data.data.id);

                            // Changer le texte du bouton
                            $('#btnCategorieAdd').text('Modifier');
                            $("#formCategorie").off("submit");
                            $('#formCategorie').attr('id', 'formCategorieEdite');
                            // Sélectionner le bouton qui déclenche l'ouverture du modal
                            var button = $('#addCat');
                                // Simuler un clic sur le bouton pour ouvrir le modal
                            button.click();
                            $('#modalCategorieTitle').text("Formulaire pour modifier une catégorie");
                                Swal.fire({
                                    title: data.msg,
                                    icon: 'success'
                                })
                                // actualiser();
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


                function viewMsg(id,root) {
                    Swal.fire({
                        title: 'Merci de patienter...',
                        icon: 'info'
                    })
                    // supprimerPopup("modalBoardConfig2");

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
                                let titreModale = document.getElementById('modalBoardConfigTitleMsg');
                                let titreNbr = document.getElementById('txtnbr');
                                let responseData = data.data.message;
                                console.log(responseData.length)
                                if (responseData.length==0) {
                                    Swal.fire({
                                    title: "Aucun message trouvé",
                                    icon: 'success'
                                    })
                                } else {
                                    // Créer un accordéon pour chaque donnée récupérée
                                responseData.forEach(function(datas,index) {
                                console.log(datas)
                                let card = document.createElement('div');
                                var title = datas.title;
                                var content = datas.content;

                                var div = document.createElement('div');
                                div.innerHTML = "("+ ++index+') Date : '+datas.created_at+'<br/><h2>NOM : ' + datas.nom + '</h2><p><strong> Email : </strong>' + datas.email + '</p><p> <strong>Phone </strong>: ' + datas.phone + '</p><p> <strong>Objet : </strong>' + datas.obje + '</p><p> <strong>Message </strong>: ' + datas.message + '</p><hr>';
                                titreModale.textContent="Liste des messages envoyé à "+data.data.prenom+" "+data.data.nom
                                titreNbr.textContent=responseData.length+ " Message(s) trouvé "
                                dataContainer.appendChild(div);
                                });

                                // Sélectionner le bouton qui déclenche l'ouverture du modal
                                var button = $('#btnrond2');
                                    // Simuler un clic sur le bouton pour ouvrir le modal
                                button.click();
                                $('#modalBoardConfigTitle').text("Messages trouvé");
                                    Swal.fire({
                                        title: data.msg,
                                        icon: 'success'
                                    })
                                }
                            }
                        },
                    });
                }
                function actualiser() {
                    location.reload();
                }
                function getGal(img,idg,url) {
                    let id=idg+"$"+img;
                    deleted(id, url)
                }
                function supprimerPopup(id) {
                    var popup = document.getElementById(id); // Identifier l'élément du pop-up
                    if (popup) {
                        popup.remove(); // Supprimer l'élément du DOM
                    }
                }
                function deleted(id, url) {
                    Swal.fire({
                        title: "Attention Suppression",
                        text: "Êtes-vous sûr de vouloir supprimer cette information?",
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
                        },
                        allowOutsideClick: () => !Swal.isLoading()
                    }).then((result) => {
                        if (result.isConfirmed) {
                            Swal.fire({
                                title: 'Merci de patienter...',
                                icon: 'info'
                            })
                            $.ajax({
                                url: url + '/' + id,
                                method: "GET",
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
                                        actualiser();
                                    }
                                },
                            });
                        }
                    });
                }



</script>
@endsection
