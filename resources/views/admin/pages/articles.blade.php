<!-- .section-block -->
<div class="section-block">
    <button type="button" id="btnArticle" class="btn btn-success btn-floated" data-toggle="modal"
        data-target="#modalArticle">
        <span id="spanbtnrond2" class="fa fa-plus"></span>
    </button>
    <!-- grid row -->
    <div class="row">

        <!-- grid column -->
        @forelse ($articles as $a)
        <!-- grid column -->
        <div class="col-lg-6">
            <!-- .card -->
            <div class="card">
                <!-- .card-header -->
                <div class="card-header"> {{$a->subtitle}} </div><!-- .card-body -->
                <div class="card-body">
                    <h5 class="card-title"> {{$a->titre}} </h5>
                    <h6 class="card-subtitle text-muted"> {{$a->domaine}} </h6>
                </div><!-- /.card-body -->
                <!-- 16:9 aspect ratio -->
                <figure class="embed-responsive embed-responsive-16by9 mb-0">
                    <img class="embed-responsive-item" src="{{ asset('storage/'.$a->couverture) }}" alt="Card image">
                </figure><!-- /.embed-responsive -->
                <!-- .card-body -->
                <div class="card-body">
                    <p class="card-text">
                        {{strlen($a->contenu)>200?Str::limit($a->contenu, 200, '...'):$a->contenu}}
                        <br>
                        <time datetime="2018-02-12">{{$a->created_at}} </time>
                    </p>
                </div><!-- /.card-body -->
                <!-- .card-footer -->
                <div class="card-footer">
                    <div class="card-footer-item">
                        <button onclick="event.preventDefault();editeArticle({{ $a->id }},'editeArticle')" type="button"
                            class="btn btn-reset text-nowrap text-muted"><i class="fa fa-fw fa-edit"></i>
                            Modifier</button>
                    </div>
                    <div class="card-footer-item">
                        <button type="button" onclick="event.preventDefault();deleted({{ $a->id }},'deleteArticle')"
                            class="btn btn-reset text-nowrap text-muted">
                            <i class="fa fa-fw fa-trash"></i> Supprimer</button>
                    </div>
                </div><!-- /.card-footer -->
            </div><!-- /.card -->
        </div><!-- /grid column -->
        @empty

        @endforelse

    </div><!-- /grid row -->
</div><!-- /.section-block -->

@push('scripts')
<script>
        $(document).on("submit","#formArticle", function (e) {
            e.preventDefault();
                var formElement = document.getElementById('formArticle');
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
                add(formData, 'POST', 'addArticle',"#formArticle")
        });

        $(document).on("submit","#formArticleEdite", function (e) {
            e.preventDefault();
                                // Sélectionner le formulaire par son ID
                    var formElement = document.getElementById('formArticleEdite');
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
                    add(formData, 'post', 'updateArticle','#formArticleEdite')
        });


        function editeArticle(id,root) {
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
                            $('#titre').val(data.data.titre);
                            $('#subtitle').val(data.data.subtitle);
                            $('#contenu').val(data.data.contenu);
                            $('#domaine').val(data.data.domaine);
                            $('#couver').attr('src', "storage/"+data.data.couverture);
                            $('.form-group#couv').removeAttr('hidden');
                            $('#idArticle').val(data.data.id);

                            // Changer le texte du bouton
                            $('#btnArticleAdd').text('Modifier');
                            $("#btnArticleAdd").off("submit");
                            $('#formArticle').attr('id', 'formArticleEdite');

                            // Sélectionner le bouton qui déclenche l'ouverture du modal
                            var button = $('#btnArticle');
                                // Simuler un clic sur le bouton pour ouvrir le modal
                            button.click();
                            $('#modalArticleTitle').text("Formulaire pour modifier un article");
                                Swal.fire({
                                    title: data.msg,
                                    icon: 'success'
                                })
                                // actualiser();
                            }
                        },
                    });
        }
</script>
@endpush
