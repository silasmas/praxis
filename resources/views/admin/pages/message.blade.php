<main class="app-main">
    <div class="wrapper">
        <!-- .page -->
        <div class="page py-0">
            <div class="page-inner">
                <header class="page-title-bar">
                    <!-- .breadcrumb -->
                    <!-- /.breadcrumb -->
                    <!-- title and toolbar -->
                    <div class="d-md-flex align-items-md-start">
                        <h1 class="page-title mr-sm-auto"> {{ $messages->count() }} message(s) envoyés </h1><!-- .btn-toolbar -->
                        <div id="dt-buttons" class="btn-toolbar"></div><!-- /.btn-toolbar -->
                    </div><!-- /title and toolbar -->
                </header>
                <div class="row">
                    @foreach ($messages as $msg)
                    <div class="col-lg-6">
                        <!-- #accordion -->
                        <div id="accordion" class="card-expansion">
                            <!-- .card -->
                            <div class="card card-expansion-item expanded">
                                <div class="card-header border-0" id="headingOne">
                                    <button class="btn btn-reset" data-toggle="collapse" data-target="#collapseOne{{$msg->id}}"
                                        aria-expanded="true" aria-controls="collapseOne{{$msg->id}}">
                                        <span class="collapse-indicator mr-2"><i class="fa fa-fw fa-caret-right"></i>
                                        </span> <h5>{{"(".++$loop->index.") ".$msg->nom }}</h5></button>
                                </div>
                                <div id="collapseOne{{$msg->id}}" class="collapse {{ $loop->first?"show":"" }}" aria-labelledby="headingOne"
                                    data-parent="#accordion">
                                    <div class="card-body pt-0">{{$msg->message }}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="col-lg-4">
                        <div class="alert alert-warning has-icon" role="alert">
                            <div class="alert-icon">
                                <span class="fa fa-envelope"></span>
                            </div>
                            <span>{{"Nom : ".$msg->nom }}</span><br>
                            <span>{{ "Email : ".$msg->email }}</span><br>
                            <span>{{ "Phone : ".$msg->phone }}</span><br>
                            <span>{{ "Objet : ".$msg->objet }}</span><br>
                            <p class="alert-link">{{ "Message : ".$msg->message }}</p>.
                        </div>
                    </div> --}}
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</main>
