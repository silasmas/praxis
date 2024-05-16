<div class="modal modal-drawer fade" id="modalBoardConfig" tabindex="-1" role="dialog"
    aria-labelledby="modalBoardConfigTitle" aria-hidden="true">
    <!-- .modal-dialog -->
    <div class="modal-dialog modal-drawer-right" role="document">
        <!-- .modal-content -->
        <div id="modalContentLayer1" class="modal-content">
            <!-- .modal-header -->
            <div class="modal-header">
                <h5 id="modalBoardConfigTitle" class="modal-title">
                    Formulaire pour enregistrer d'un professeur
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">×</span></button>
            </div><!-- /.modal-header -->
            <!-- .modal-body -->
            <div class="modal-body">
                <form method="POST" id="formProf" enctype="multipart/form-data">
                    @csrf
                    <!-- .fieldset -->
                    <fieldset>
                        <img src="" id="imgProfil" alt="" class="user-avatar user-avatar-lg"> <br>
                        <input name="id" id="idProf" type="text" class="form-control" placeholder="" value="" hidden>
                        <div class="form-group">
                            <label>Nom
                                <i tabindex="0" class="fa fa-info-circle text-gray" data-toggle="tooltip"
                                    data-container="body" title="Le nom que du professeur"></i>
                            </label>
                            <input name="nom" id="nom" type="text" class="form-control" placeholder="" required>
                        </div>
                        <div class="form-group">
                            <label>Prenom
                                <i tabindex="0" class="fa fa-info-circle text-gray" data-toggle="tooltip"
                                    data-container="body" title="Le prenom du professeur"></i>
                            </label>
                            <input name="prenom" id="prenom" type="text" class="form-control" placeholder="" required>
                        </div>
                        <div class="form-group">
                            <label>Titre
                                <i tabindex="0" class="fa fa-info-circle text-gray" data-toggle="tooltip"
                                    data-container="body" title="Le titre du professeur chez praxis"></i>
                            </label>
                            <input name="titre" id="titre" type="text" class="form-control" placeholder="" required>
                        </div>
                        <div class="form-group">
                            <label>Facebook
                                <i tabindex="0" class="fa fa-info-circle text-gray" data-toggle="tooltip"
                                    data-container="body"
                                    title="Ici vous mettrez le lien facecbook du compte du professeur"></i>
                            </label>
                            <input name="facebook" id="facebook" type="text" class="form-control" placeholder=""
                                value="">
                        </div>
                        <div class="form-group">
                            <label>Instagram
                                <i tabindex="0" class="fa fa-info-circle text-gray" data-toggle="tooltip"
                                    data-container="body"
                                    title="Ici vous mettrez le lien du compte instagram du professeur"></i>
                            </label>
                            <input name="instagram" id="instagram" type="text" class="form-control" placeholder=""
                                value="">
                        </div>
                        <div class="form-group">
                            <label>Youtube
                                <i tabindex="0" class="fa fa-info-circle text-gray" data-toggle="tooltip"
                                    data-container="body"
                                    title="Ici vous mettrez le lien youtube de la chaine du professeur"></i>
                            </label>
                            <input name="youtube" id="youtube" type="text" class="form-control" placeholder="" value="">
                        </div>
                        <div class="form-group">
                            <label class="form-control-label" for="profil">Profil
                                <i tabindex="0" class="fa fa-info-circle text-gray" data-toggle="tooltip"
                                    data-container="body"
                                    title="Ici vous devez uploader une photo pour le profil du professeur"></i>
                            </label>
                            <div class="custom-file">
                                {{-- <input type="file" class="custom-file-input is-invalid" name="profil" id="profil"> --}}
                                <input name="profil" type="file" class="custom-file-input is-invalid" id="tf3" multiple>
                                <label class="custom-file-label" for="profil">choisissez le fichier</label>
                                <div class="invalid-feedback">
                                    <i class="fa fa-exclamation-circle fa-fw"></i> Désolé, l'image doit avoir la taille
                                    501X501 px et la taiile moins de 2Mb.
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="biographie">Biographie
                                <i tabindex="0" class="fa fa-info-circle text-gray" data-toggle="tooltip"
                                    data-container="body" title="La biographie du professeur"></i>
                            </label>
                            <textarea name="biographie" id="biographie" class="form-control" rows="3" required>

                        </textarea>

                        </div>
                        <!-- /.form-group -->
                        <button type="submit" id="btnProf" class="btn btn-primary">Enregistrer</button>
                    </fieldset><!-- /.fieldset -->
                </form>
            </div><!-- /.modal-body -->
        </div><!-- .modal-content -->
    </div><!-- /.modal-dialog -->
</div>
