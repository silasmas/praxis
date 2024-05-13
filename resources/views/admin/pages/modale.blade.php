<!-- .modalBoardConfig -->
<div class="modal modal-drawer fade" id="modalBoardConfig" tabindex="-1" role="dialog"
aria-labelledby="modalBoardConfigTitle" aria-hidden="true">
<!-- .modal-dialog -->
<div class="modal-dialog modal-drawer-right" role="document">
    <!-- .modal-content -->
    <div id="modalContentLayer1" class="modal-content">
        <!-- .modal-header -->
        <div class="modal-header">
            <h5 id="modalBoardConfigTitle" class="modal-title"> Formulaire pour enregistrer le groupe</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                    aria-hidden="true">×</span></button>
        </div><!-- /.modal-header -->
        <!-- .modal-body -->
        <div class="modal-body">
            <form method="POST" id="formGroupe">
                @csrf
                <!-- .fieldset -->
                <fieldset>
                    <input name="id" id="idGroupe" type="text" class="form-control" placeholder="" value=""
                        hidden>
                    <div class="form-group">
                        <label>Nom du groupe (FR)
                            <i tabindex="0" class="fa fa-info-circle text-gray" data-toggle="tooltip"
                                data-container="body" title="Le nom que doit avoir le group en français"></i>
                        </label>
                        <input name="group_name_fr" id="group_name_fr" type="text" class="form-control"
                            placeholder="" value="">
                    </div>
                    <div class="form-group">
                        <label>Nom du groupe (EN)
                            <i tabindex="0" class="fa fa-info-circle text-gray" data-toggle="tooltip"
                                data-container="body" title="Le nom que doit avoir le group en Anglais"></i>
                        </label>
                        <input name="group_name_en" id="group_name_en" type="text" class="form-control"
                            placeholder="" value="">
                    </div>
                    <div class="form-group">
                        <label>Nom du groupe (LN)
                            <i tabindex="0" class="fa fa-info-circle text-gray" data-toggle="tooltip"
                                data-container="body" title="Le nom que doit avoir le group en Lingala"></i>
                        </label>
                        <input name="group_name_ln" id="group_name_ln" type="text" class="form-control"
                            placeholder="" value="">
                    </div>
                    <div class="form-group">
                        <label for="tf6">Description du groupe
                            <i tabindex="0" class="fa fa-info-circle text-gray" data-toggle="tooltip"
                                data-container="body"
                                title="La description pour expliquer le sens du groupe"></i>
                        </label>
                        <textarea name="group_description" id="group_description" class="form-control" id="tf6"
                            rows="3">

                </textarea>
                    </div>
                    <!-- /.form-group -->
                    <button type="submit" id="btnCat" class="btn btn-primary">Enregistrer</button>
                </fieldset><!-- /.fieldset -->
            </form>
        </div><!-- /.modal-body -->
    </div><!-- .modal-content -->
</div><!-- /.modal-dialog -->
</div>
<!-- /.modalBoardConfig -->
