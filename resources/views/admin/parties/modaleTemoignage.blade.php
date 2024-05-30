<div class="modal modal-drawer fade" id="modalTemoigange" tabindex="-1" role="dialog"
    aria-labelledby="modalTemoigangeTitle" aria-hidden="true">
    <!-- .modal-dialog -->
    <div class="modal-dialog modal-drawer-right" role="document">
        <!-- .modal-content -->
        <div id="modalContentLayer1" class="modal-content">
            <!-- .modal-header -->
            <div class="modal-header">
                <h5 id="modalTemoigangeTitle" class="modal-title">
                    Formulaire pour enregistrer un temoignage
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">×</span></button>
            </div><!-- /.modal-header -->
            <!-- .modal-body -->

            <div class="modal-body mt-5">
                <form method="POST" id="formTemoigange">
                    @csrf
                    <!-- .fieldset -->
                    <fieldset>
                        <img src="" id="imgProfilTem" alt="" class="user-avatar user-avatar-lg"> <br>

                        <input name="id" id="idTem" type="text" class="form-control" placeholder="" value="" hidden>
                        <div class="form-group">
                            <label>Nom
                                <i tabindex="0" class="fa fa-info-circle text-gray" data-toggle="tooltip"
                                    data-container="body" title="Le nom au complet de celui qui témoigne donc Nom et prenom"></i>
                            </label>
                            <input name="nom" id="nom" type="text" class="form-control" placeholder="" required>
                        </div>
                        <div class="form-group">
                            <label>Profession
                                <i tabindex="0" class="fa fa-info-circle text-gray" data-toggle="tooltip"
                                    data-container="body" title="La profession de celui qui temoigne ce qu'il fait dans la vie"></i>
                            </label>
                            <input name="profession" id="profession" type="text" class="form-control" placeholder="">
                        </div>
                        <div class="custom-file">
                            {{-- <input type="file" class="custom-file-input is-invalid" name="profil" id="profil"> --}}
                            <input name="photo" type="file" class="custom-file-input is-invalid" id="photo" multiple>
                            <label class="custom-file-label" for="profil">choisissez la photo</label>
                            <div class="invalid-feedback">
                                <i class="fa fa-exclamation-circle fa-fw"></i> L'image doit avoir la taille
                                551X551 px et la taiile moins de 1Mb.
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="biographie">Message
                                <i tabindex="0" class="fa fa-info-circle text-gray" data-toggle="tooltip"
                                    data-container="body" title="Le contenu du temoignage"></i>
                            </label>
                            <textarea name="message" id="message" class="form-control" rows="3">
                        </textarea>

                        </div>
                        <!-- /.form-group -->
                        <button type="submit" id="btnTemoigangeAdd" class="btn btn-primary">Enregistrer</button>
                    </fieldset><!-- /.fieldset -->
                </form>
            </div><!-- /.modal-body -->
        </div><!-- .modal-content -->
    </div><!-- /.modal-dialog -->
</div>
