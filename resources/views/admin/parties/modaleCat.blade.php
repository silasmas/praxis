<div class="modal modal-drawer fade" id="modalCategorie" tabindex="-1" role="dialog"
    aria-labelledby="modalCategorieTitle" aria-hidden="true">
    <!-- .modal-dialog -->
    <div class="modal-dialog modal-drawer-right" role="document">
        <!-- .modal-content -->
        <div id="modalContentLayer1" class="modal-content">
            <!-- .modal-header -->
            <div class="modal-header">
                <h5 id="modalCategorieTitle" class="modal-title">
                    Formulaire pour enregistrer une catégorie
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">×</span></button>
            </div><!-- /.modal-header -->
            <!-- .modal-body -->

            <div class="modal-body mt-5">
                <form method="POST" id="formCategorie">
                    @csrf
                    <!-- .fieldset -->
                    <fieldset>
                        <input name="id" id="idCat" type="text" class="form-control" placeholder="" value="" hidden>
                        <div class="form-group">
                            <label>Nom
                                <i tabindex="0" class="fa fa-info-circle text-gray" data-toggle="tooltip"
                                    data-container="body" title="Le nom de la catégorie c'est obligatoire"></i>
                            </label>
                            <input name="nom" id="nom" type="text" class="form-control" placeholder="" required>
                        </div>
                        <div class="form-group">
                            <label for="biographie">Description
                                <i tabindex="0" class="fa fa-info-circle text-gray" data-toggle="tooltip"
                                    data-container="body" title="La descsription de la catégorie et c'est optionel"></i>
                            </label>
                            <textarea name="description" id="description" class="form-control" rows="3">
                        </textarea>

                        </div>
                        <!-- /.form-group -->
                        <button type="submit" id="btnCategorieAdd" class="btn btn-primary">Enregistrer</button>
                    </fieldset><!-- /.fieldset -->
                </form>
            </div><!-- /.modal-body -->
        </div><!-- .modal-content -->
    </div><!-- /.modal-dialog -->
</div>
