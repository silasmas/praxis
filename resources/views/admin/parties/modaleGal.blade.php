<div class="modal modal-drawer fade" id="modalGalerie" tabindex="-1" role="dialog"
    aria-labelledby="modalGalerieTitle" aria-hidden="true">
    <!-- .modal-dialog -->
    <div class="modal-dialog modal-drawer-right" role="document">
        <!-- .modal-content -->
        <div id="modalContentLayer1" class="modal-content">
            <!-- .modal-header -->
            <div class="modal-header">
                <h5 id="modalGalerieTitle" class="modal-title">
                    Formulaire pour enregistrer une image dans la galérie
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">×</span></button>
            </div><!-- /.modal-header -->
            <!-- .modal-body -->

            <div class="modal-body mt-5">
                <form method="POST" id="formGalerie">
                    @csrf
                    <!-- .fieldset -->
                    <fieldset>
                        <input name="id" id="idGal" type="text" class="form-control" placeholder="" value="" hidden>
                        <div class="form-group">
                            <label>Titre
                                <i tabindex="0" class="fa fa-info-circle text-gray" data-toggle="tooltip"
                                    data-container="body" title="Le titre qui expliquera l'image"></i>
                            </label>
                            <input name="titre" id="titre" type="text" class="form-control" placeholder="" required>
                        </div>
                        <div class="form-group">
                            <label>Date
                                <i tabindex="0" class="fa fa-info-circle text-gray" data-toggle="tooltip"
                                    data-container="body" title="La date quand cette image à été prise"></i>
                            </label>
                            <input name="date" id="date" type="date" class="form-control" placeholder="" required>
                        </div>
                        <div class="form-group">
                            <i tabindex="0" class="fa fa-info-circle text-gray" data-toggle="tooltip"
                            data-container="body" title="La catégorie où sera placé cette image"></i>
                            <div class="form-label-group">
                                <label for="for_youth">La catégorie ?
                                </label>
                                <select name="categorie" class="custom-select" id="categorieGal" required="">
                                @forelse ($categories as $cat)
                                    <option value="{{ $cat->id }}">{{ $cat->nom }}</option>
                                    @empty

                                    @endforelse
                                </select>
                                <label for="for_youth">La catégorie ? </label>
                            </div>
                        </div>
                        <div class="custom-file">
                            {{-- <input type="file" class="custom-file-input is-invalid" name="profil" id="profil"> --}}
                            <input name="img1" type="file" class="custom-file-input is-invalid" id="img1" multiple>
                            <label class="custom-file-label" for="profil">choisissez le fichier</label>
                            <div class="invalid-feedback">
                                <i class="fa fa-exclamation-circle fa-fw"></i> Désolé, l'image doit avoir la taille
                                551X551 px et la taiile moins de 1Mb.
                            </div>
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
                        <button type="submit" id="btnGalerieAdd" class="btn btn-primary">Enregistrer</button>
                    </fieldset><!-- /.fieldset -->
                </form>
            </div><!-- /.modal-body -->
        </div><!-- .modal-content -->
    </div><!-- /.modal-dialog -->
</div>
