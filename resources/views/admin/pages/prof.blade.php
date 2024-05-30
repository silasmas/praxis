<div class="page-section">
    <!-- .section-block -->
    <div class="section-block">
        <button type="button" hidden id="btnrond2" class="btn btn-success btn-floated" data-toggle="modal"
        data-target="#modalBoardConfig2">
        <span id="spanbtnrond2" class="fa fa-plus"></span>
        </button>
        <button type="button" id="btnrond" class="btn btn-success btn-floated" data-toggle="modal"
        data-target="#modalBoardConfig">
        <span id="spanbtnrond" class="fa fa-plus"></span>
        </button>

        @forelse ($profs as $p)
        <div class="card mb-2 mr-6">
            <!-- .card-body -->
            <div class="card-body">
                <!-- grid row -->
                    <div class="row align-items-center">
                    <!-- grid column -->
                    <div class="col-auto">
                            <a href="#" class="user-avatar user-avatar-lg">
                                <img src="{{ asset('storage/'.$p->profil) }}" alt="">
                                <span class="avatar-badge online {{ $p->message->count()>0?"bg-red":"" }}" title="online">
                                    {{$p->message->count()>0? $p->message->count():"" }}
                                </span></a>
                                {{-- @if($p->message->count()>0)
                                <span class="tile tile-xs tile-circle bg-red"></span>
                                @endif --}}
                        </div>
                    <!-- /grid column -->
                    <!-- grid column -->
                    <div class="col">
                        <h3 class="card-title">
                            <a href="#">{{ $p->prenom." ".$p->nom }}</a> <small
                                class="text-muted"></small>
                        </h3>
                        <h6 class="card-subtitle text-muted">{{ $p->titre }} </h6>
                    </div><!-- /grid column -->

                    <!-- /grid column -->
                    <div class="col-auto">
                        <button type="button" class="btn btn-icon btn-secondary mr-1"
                        onclick="event.preventDefault();viewMsg({{ $p->id }},'viewMsg')"
                            data-toggle="tooltip" title="Message envoyé au prof ({{ $p->message->count() }})"><i
                                class="far fa-comment-alt"></i></button> <!-- .dropdown -->
                        <div class="dropdown d-inline-block">
                            <button class="btn btn-icon btn-secondary" data-toggle="dropdown"><i
                                    class="fa fa-fw fa-ellipsis-h"></i></button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <div class="dropdown-arrow"></div>
                                {{-- <button type="button" class="dropdown-item">Voir en detail</button> --}}
                                    <button type="button" onclick="event.preventDefault();editeAll({{$p->id }},'editProf')" class="dropdown-item">Modifier</button>
                                <div class="dropdown-divider"></div>
                                <button type="button" onclick="event.preventDefault();deleted({{ $p->id }},'deleteProf')" class="dropdown-item">Remove</button>
                            </div>
                        </div><!-- /.dropdown -->
                    </div><!-- /grid column -->
                </div>

                <!-- /grid row -->
            </div><!-- /.card-body -->
        </div><!-- /.card -->
        @empty

        @endforelse

    </div><!-- /.section-block -->
</div><!-- /.page-section -->

@push('scripts')
<script>
     $("#formProf").on("submit", function (e) {
        e.preventDefault();
        var formElement = document.getElementById('formProf');
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
        add(formData, 'POST', 'addProf',"#formProf")
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
</script>
@endpush
