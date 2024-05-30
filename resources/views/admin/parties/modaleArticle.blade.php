<div class="modal modal-drawer fade" id="modalArticle" tabindex="-1" role="dialog"
    aria-labelledby="modalArticleTitle" aria-hidden="true">
    <!-- .modal-dialog -->
    <div class="modal-dialog modal-drawer-right" role="document">
        <!-- .modal-content -->
        <div id="modalContentLayer1" class="modal-content">
            <!-- .modal-header -->
            <div class="modal-header">
                <h5 id="modalArticleTitle" class="modal-title">
                    Formulaire pour enregistrer un article
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">×</span></button>
            </div><!-- /.modal-header -->
            <!-- .modal-body -->

            <div class="modal-body mt-5">
                <div class="form-group" hidden id="couv">
                    <img src="" id="couver" alt="" width="200">
                </div>
                <form method="POST" id="formArticle">
                    @csrf
                    <!-- .fieldset -->
                    <fieldset>
                        <input name="id" id="idArticle" type="text" class="form-control" placeholder="" value="" hidden>
                        <div class="form-group">
                            <label>Titre
                                <i tabindex="0" class="fa fa-info-circle text-gray" data-toggle="tooltip"
                                    data-container="body" title="Le titre de l'article"></i>
                            </label>
                            <input name="titre" id="titre" type="text" class="form-control" placeholder="" required>
                        </div>
                        <div class="form-group">
                            <label>Domaine
                                <i tabindex="0" class="fa fa-info-circle text-gray" data-toggle="tooltip"
                                    data-container="body" title="Le domaine dans lequel l'article est exposé"></i>
                            </label>
                            <input name="domaine" id="domaine" type="text" class="form-control" placeholder="" required>
                        </div>
                        <div class="form-group">
                            <label>Auteur
                                <i tabindex="0" class="fa fa-info-circle text-gray" data-toggle="tooltip"
                                    data-container="body" title="La personne qui a écrit cet article"></i>
                            </label>
                            <input name="subtitle" id="subtitle" type="texte" class="form-control" placeholder="" required>
                        </div>

                        <div class="custom-file">
                            <input name="couverture" type="file" class="custom-file-input is-invalid" id="couverture" multiple>
                            <label class="custom-file-label" for="profil">choisissez la couverture</label>
                            <div class="invalid-feedback">
                                <i class="fa fa-exclamation-circle fa-fw"></i> Désolé, l'image doit avoir la taille
                                856X566 px et la taiile moins de 1Mb.
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="biographie">Contenu
                                <i tabindex="0" class="fa fa-info-circle text-gray" data-toggle="tooltip"
                                    data-container="body" title="La descsription de la catégorie et c'est optionel"></i>
                            </label>
                            <textarea name="contenu" id="contenu" class="form-control" rows="3">
                        </textarea>
                        {{-- <textarea data-toggle="simplemde" data-spellchecker="false" name="contenu"
                         data-autosave='{ "enabled": true, "unique_id": "SimpleMDEDemo" }'></textarea> --}}
                        </div>
                        <!-- /.form-group -->
                        <button type="submit" id="btnArticleAdd" class="btn btn-primary">Enregistrer</button>
                    </fieldset><!-- /.fieldset -->
                </form>
            </div><!-- /.modal-body -->
        </div><!-- .modal-content -->
    </div><!-- /.modal-dialog -->
</div>
