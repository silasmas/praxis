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
                        <h1 class="page-title mr-sm-auto"> Liste des emails inscrit </h1><!-- .btn-toolbar -->
                        <div id="dt-buttons" class="btn-toolbar"></div><!-- /.btn-toolbar -->
                    </div><!-- /title and toolbar -->
                </header>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Email</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($newsletter as $i)
                                        <tr class="gradeX">
                                            <td>{{ $loop->index+1}}</td>
                                            <td>{{ $i->email}}</td>
                                        </tr>
                                        @empty
                                        <h2>

                                        </h2>
                                        @endforelse


                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>#</th>
                                            <th>Email</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>



