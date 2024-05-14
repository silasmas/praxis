<div class="page-section">
    <!-- .section-block -->
    <div class="section-block">
        <button type="button" id="btnrond" class="btn btn-success btn-floated" data-toggle="modal"
        data-target="#modalBoardConfig2">
        <button type="button" hidden id="btnrond2" class="btn btn-success btn-floated" data-toggle="modal"
        data-target="#modalBoardConfig2">
        <span id="spanbtnrond" class="fa fa-plus">
        </span>
</button>
        @forelse ($profs as $p)
        <div class="card mb-2">
            <!-- .card-body -->
            <div class="card-body">

                <!-- grid row -->
                    <div class="row align-items-center">
                    <!-- grid column -->
                    <div class="col-auto">
                        <a href="user-profile.html" class="user-avatar user-avatar-lg">*
                            <img src="{{ asset('storage/'.$p->profil) }}" alt="">

                            <span class="avatar-badge online" title="online"></span></a>
                    </div><!-- /grid column -->
                    <!-- grid column -->
                    <div class="col">
                        <h3 class="card-title">
                            <a href="user-profile.html">{{ $p->prenom." ".$p->nom }}</a> <small
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
                                    <button type="button" onclick="event.preventDefault();editeAll({{ $p->id }},'editProf')" class="dropdown-item">Modifier</button>
                                <div class="dropdown-divider"></div>
                                <button type="button" class="dropdown-item">Remove</button>
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
