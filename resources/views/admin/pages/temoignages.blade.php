<div class="page-section">
    <!-- .section-block -->
    <div class="section-block">
        <button type="button" id="tembbtn" class="btn btn-success btn-floated" data-toggle="modal"
            data-target="#modalTemoigange">
            <span id="tembbtn" class="fa fa-plus"></span>
        </button>
        @forelse ($temoignages as $t)
        <div class="feed">
            <!-- .feed-post -->
            <div class="feed-post card">
                <!-- .card-header -->
                <div class="card-header card-header-fluid">
                    <a href="#" class="btn-account" role="button">
                        <div class="user-avatar user-avatar-lg">
                            <img src="{{ $t->photo==null?"assets/admin/images/default.jpg":"storage/".$t->photo }}" alt="">
                        </div>
                        <div class="account-summary">
                            <p class="account-name">{{ $t->nom }} </p>
                            <p class="account-description"> {{ $t->profession }}</p>
                        </div>
                    </a> <!-- .dropdown -->
                    <div class="dropdown align-self-start ml-auto">
                        <button class="btn btn-icon btn-light text-muted" data-toggle="dropdown"><i
                                class="fa fa-fw fa-ellipsis-v"></i></button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="dropdown-arrow"></div>
                            <a href="#" onclick="event.preventDefault();editeTem({{ $t->id }},'editeTemoignage')" class="dropdown-item">Modifier</a>
                            <a href="#" onclick="event.preventDefault();deleted({{ $t->id }},'deleteTemoignage')" class="dropdown-item">Supprimer</a>
                        </div>
                    </div><!-- /.dropdown -->
                </div><!-- /.card-header -->
                <!-- .card-body -->
                <div class="card-body">

                    <a href="#" class="outbound-link">
                        <p class="outbound-text">
                            {{ $t->message }}
                        </p>
                    </a> <!-- /.outbound-link -->

                </div><!-- /.card-body -->
                <!-- .card-footer -->
                <div class="card-footer">
                    <div class="card-footer-item">
                        <button onclick="event.preventDefault();editeTem({{ $t->id }},'editeTemoignage')" type="button" class="btn btn-reset text-nowrap text-muted"><i
                                class="fa fa-fw fa-edit"></i> Modifier</button>
                    </div>
                    <div class="card-footer-item">
                        <button type="button" onclick="event.preventDefault();deleted({{ $t->id }},'deleteTemoignage')" class="btn btn-reset text-nowrap text-muted">
                            <i class="fa fa-fw fa-trash"></i> Supprimer</button>
                    </div>
                </div><!-- /.card-footer -->
            </div><!-- /.feed-post -->
        </div><!-- /.feed -->
        @empty

        @endforelse


    </div>
</div>

@push('scripts')
<script>
                $("#formTemoigange").on("submit", function (e) {
                        e.preventDefault();
                        var formElement = document.getElementById('formTemoigange');
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
                        add(formData, 'POST', 'addTemoignage',"#formTemoigange")
                });
                $(document).on("submit","#formTemoignageEdite", function (e) {
                        e.preventDefault();
                                // Sélectionner le formulaire par son ID
                    var formElement = document.getElementById('formTemoignageEdite');
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
                    add(formData, 'post', 'updateTemoignage','#formTemoignageEdite')
                });
                function editeTem(id,root) {
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
                            $('#profession').val(data.data.profession);
                            $('#message').val(data.data.message);
                            $('#imgProfilTem').attr('src', "storage/"+data.data.photo);
                            $('#idTem').val(data.data.id);

                            // Changer le texte du bouton
                            $('#btnTemoigangeAdd').text('Modifier');
                            $("#formTemoigange").off("submit");
                            $('#formTemoigange').attr('id', 'formTemoignageEdite');
                            // Sélectionner le bouton qui déclenche l'ouverture du modal
                            var button = $('#tembbtn');
                                // Simuler un clic sur le bouton pour ouvrir le modal
                            button.click();
                            $('#modalTemoigangeTitle').text("Formulaire pour modifier un temoignage");
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
