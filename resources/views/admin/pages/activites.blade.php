<!-- .section-block -->
<div class="section-block">
    <h2 class="section-title"> Gestion de la galérie et leur catégories </h2>
    <p class="text-muted"> Cliquez sur chaque onglet pour voir les contenus. </p>
    <!-- grid row -->
    <div class="row">

        <!-- grid column -->
        <div class="col-lg-12">
            <!-- .card -->
            <div class="card">
                <!-- .card-header -->
                <div class="card-header">
                    <ul class="nav nav-tabs card-header-tabs">
                        <li class="nav-item">
                            <a class="nav-link active show" data-toggle="tab" href="#card-home">Liste des catégories</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " data-toggle="tab" href="#card-profile">Galérie</a>
                        </li>
                    </ul>
                </div><!-- /.card-header -->
                <!-- .card-body -->
                <div class="card-body">
                    <!-- .tab-content -->
                    <div id="myTabCard" class="tab-content">
                        <div class="tab-pane fade active show" id="card-home">
                            {{-- <h5 class="card-title"> Special title treatment </h5> --}}
                            <div class="row">
                                <div class="col-lg-12">
                                    <!-- .card -->
                                    <div class="card card-fluid">
                                        <div class="card-header border-bottom-0">{{ $categories->count() }} Catégorie(s)
                                            trouvée(s) </div><!-- .nestable -->
                                        <div id="nestable01" class="dd" data-toggle="nestable" data-group="1"
                                            data-max-depth="5">
                                            <!-- .dd-list -->
                                            <ol class="dd-list">
                                                @forelse ($categories as $cat)

                                                <li class="dd-item" data-id="1">
                                                    <div class="dd-handle">
                                                        <span class="drag-indicator"></span>
                                                        <div>
                                                            {{"Nom : ". $cat->nom }}<br>
                                                            <p>{{"Description : ". $cat->description }}</p>
                                                        </div>
                                                        <div class="dd-nodrag btn-group ml-auto">
                                                            <button class="btn btn-sm btn-secondary"
                                                                onclick="event.preventDefault();editeCat({{ $cat->id }},'editCat')"><i
                                                                    class="far fa-edit"></i>Edit</button>
                                                            <button class="btn btn-sm btn-secondary"
                                                                onclick="event.preventDefault();deleted({{ $cat->id }},'deleteCat')"><i
                                                                    class="far fa-trash-alt"></i></button>
                                                        </div>
                                                    </div>
                                                </li>
                                                @empty

                                                @endforelse
                                            </ol><!-- /.dd-list -->
                                        </div><!-- /.nestable -->
                                        <!-- .card-footer -->
                                        <div class="card-footer">
                                            <a href="#" class="card-footer-item justify-content-start"
                                                data-toggle="modal" data-target="#modalCategorie" id="addCat">
                                                <span><i class="fa fa-plus-circle mr-1"></i> Ajouter une
                                                    catégorie</span></a>
                                        </div><!-- /.card-footer -->
                                    </div><!-- /.card -->
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade " id="card-profile">
                            <h5 class="card-title"> La galerie des activités </h5>
                            <div class="row pswp-gallery">
                                <!-- grid column -->

                                    <button type="button" id="btnrondGaledie" class="btn btn-success btn-floated"
                                        data-toggle="modal" data-target="#modalGalerie">
                                        <span id="spanbtnrond2" class="fa fa-plus"></span>
                                    </button>
                                    @forelse ($galeries as $gal)
                                    @if($gal->img1!=null)
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                    <div class="card card-figure">
                                        <!-- .card-figure -->
                                        <figure class="figure">
                                            <!-- .figure-img -->
                                            <div class="figure-img">
                                                <img class="img-fluid"
                                                    src="{{ asset('storage/'.$gal->img1) }} "
                                                    alt="Card image cap">
                                                <a href="{{ asset('storage/'.$gal->img1) }} "
                                                    class="img-link" data-size="600x450">
                                                    <span class="tile tile-circle bg-danger"><span
                                                            class="oi oi-eye"></span></span>
                                                    <span class="img-caption d-none">{{ $gal->titre." ".$gal->date }}</span></a>
                                                <div class="figure-action">
                                                    <a href="#" class="btn btn-block btn-sm btn-primary">Voir</a>
                                                </div>
                                            </div><!-- /.figure-img -->
                                            <!-- .figure-caption -->
                                            <figcaption class="figure-caption">
                                                <ul class="list-inline text-muted mb-0">
                                                    <li class="list-inline-item">
                                                        <span class="oi oi-paperclip"></span> {{ $gal->path1." Mb" }}
                                                    </li>
                                                    <li style="cursor: pointer;" class="list-inline-item float-right ml-2" title="img1" onclick="event.preventDefault();editeGal({{$gal->id}},'editeGalerie')">
                                                        <span class="oi oi-pencil"></span>
                                                    </li>

                                                    <li style="cursor: pointer;" class="list-inline-item float-right" title="img1" onclick="event.preventDefault();getGal('img1',{{$gal->id}},'deleteGalerie')">
                                                        <span class="oi oi-trash"></span>
                                                    </li>
                                                </ul>
                                            </figcaption><!-- /.figure-caption -->
                                        </figure><!-- /.card-figure -->
                                    </div>
                                    </div>
                                    @endif


                                    @empty

                                    @endforelse
                                {{-- </div> --}}
                            </div>
                        </div>
                    </div><!-- /.tab-content -->
                </div><!-- /.card-body -->
            </div><!-- /.card -->

        </div><!-- /grid column -->
    </div><!-- /grid row -->

</div><!-- /.section-block -->
@push('scripts')
<script>
                $("#formCategorie").on("submit", function (e) {
                    e.preventDefault();
                    var formElement = document.getElementById('formCategorie');
                    addAll(formElement, 'POST', 'addCategorie',"#formCategorie")
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
                function getGal(img,idg,url) {
                    let id=idg+"$"+img;
                    deleted(id, url)
                }
</script>
@endpush
