@extends("layouts.template",['titre'=>"Film"])

@section("style")
<link rel="stylesheet" href="{{ asset('assets/admin/vendor/photoswipe/photoswipe.css') }} ">
<link rel="stylesheet" href="{{ asset('assets/admin/vendor/photoswipe/default-skin/default-skin.css') }} ">
<link rel="stylesheet" href="{{ asset('assets/admin/vendor/plyr/plyr.css') }}"
@endsection @section("content")
<main class="app-main">
<div class="wrapper">
    <!-- .page -->
    <div class="page py-0">
        <!-- .page-inner -->
        <div class="page-inner">

            <!-- .section-block -->
            <div class="section-block d-sm-flex justify-content-between">

                <h2 class="section-title">Page des medias</h2>
                <P>{{$medias->count }} Media(s) trouvés</P>
                <p class="text-muted">
                    <a href="{{ route('createMedia') }}" class="btn btn-success">
                        Ajouter
                    </a>
                </p>

            </div><!-- /.section-block -->

            <!-- grid row -->
            <div class="row">
                    @forelse ($medias->data as $m)
                    <div class="col-sm-6">
                        @if (!empty($m->media_url))
                        <div class="card card-body">
                            <div class="embed-responsive embed-responsive-16by9 w-100">
                                <iframe id="youtube-9854" frameborder="0" allowfullscreen="1"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    referrerpolicy="strict-origin-when-cross-origin" title="{{ $m->media_title }}"
                                    class="embed-responsive-item"
                                    src="{{ $m->media_url }}?autoplay=0&amp;controls=0&amp;disablekb=1&amp;playsinline=1&amp;cc_load_policy=0&amp;cc_lang_pref=auto&amp;widget_referrer=file%3A%2F%2F%2FB%3A%2Ftheme-boostrap%2Flooper-bak%2Fdist%2Fcomponent-rich-media.html&amp;noCookie=false&amp;rel=0&amp;showinfo=0&amp;iv_load_policy=3&amp;modestbranding=1&amp;enablejsapi=1&amp;widgetid=1">
                                </iframe>
                            </div>
                            <div class="row mb-1 mt-3 ml-5">
                                <figcaption class="figure-caption">
                                    <ul class="list-inline text-muted mb-0">
                                        {{-- <li class="list-inline-item">
                                            <a href="{{ route('editeMedia',['id'=>$m->id]) }}">
                                                <span class="oi oi-eye"></span>
                                            </a>
                                        </li> --}}
                                        <li class="list-inline-item">
                                            <a href="{{ route('editeMedia',['id'=>$m->id]) }}">
                                                <span class="oi oi-pencil"></span>
                                            </a>
                                        </li>
                                        <li class="list-inline-item float-right">
                                            <a href="{{ route('deleteMedia',['id'=>$m->id]) }}"
                                                onclick="event.preventDefault();deletemedia({{$m->id}})">
                                                <span class="oi oi-trash"></span>
                                            </a>
                                        </li>
                                    </ul>
                                </figcaption>
                            </div>
                        </div><!-- /.card -->
                        @else
                        <div class="pswp-gallery ratio ratio-16x9">
                            <!-- .card -->
                            <div class="card card-figure">
                                <!-- .card-figure -->
                                <figure class="figure">
                                    <!-- .figure-img -->
                                    <div class="figure-img">
                                        <img class="img-fluid" src="{{ asset($m->cover_url)}}" alt="Card image cap">
                                        <a href="{{ asset($m->cover_url) }}" class="img-link" data-size="600x450">
                                            <span class="tile tile-circle bg-danger"><span class="oi oi-eye"></span>
                                            </span> <span class="img-caption d-none">Image caption goes here</span></a>
                                        <div class="figure-action">
                                            <a href="#" class="btn btn-block btn-sm btn-primary">Voir en detail</a>
                                        </div>
                                    </div><!-- /.figure-img -->
                                    <div class="row mb-1 mt-3 ml-5">
                                        <figcaption class="figure-caption">
                                            <ul class="list-inline text-muted mb-0">
                                                <li class="list-inline-item">
                                                    <a href="{{ route('editeMedia',['id'=>$m->id]) }}">
                                                        <span class="oi oi-eye"></span>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="{{ route('editeMedia',['id'=>$m->id]) }}">
                                                        <span class="oi oi-pencil"></span>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item float-right">
                                                    <a href="{{ route('deleteMedia',['id'=>$m->id]) }}"
                                                        onclick="event.preventDefault();deletemedia({{$m->id}})">
                                                        <span class="oi oi-trash"></span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </figcaption>
                                    </div>
                                </figure><!-- /.card-figure -->

                            </div><!-- /.card -->
                        </div>
                        @endif
                    </div>
                    <!-- /.card -->
                    @empty

                    @endforelse
            </div><!-- /.page-inner -->
            <div class="row">
                <div class="card-body">
                    <hr>
                    <div class="el-example">
                        <ul class="pagination">
                            @if(!request()->has('page')|| request()->get('page')==1)
                            <li class="page-item disabled" hidden>
                                <a class="page-link" href="">«</a>
                            </li>
                            @else
                            <li class="page-item">
                                <a class="page-link" href="?page=1">«</a>
                            </li>
                            @endif
                            {{-- {{ dd($medias->lastPage) }} --}}
                            @for ($i=1; $i <= $medias->lastPage; $i++)
                                <li class="page-item {{!request()->has('page') || request()->get('page')==$i ? ' active' : '' }}">
                                    <a class="page-link" href="{{ '/media?page=' . $i }}">{{ $i }}</a>
                                </li>

                                @endfor
                                @if(request()->get('page')==$medias->lastPage)
                                <li class="page-item" hidden>
                                    <a class="page-link" href="?{{ $medias->lastPage }}">»</a>
                                </li>
                                @else
                                <li class="page-item">
                                    <a class="page-link" href="?page={{ $medias->lastPage }}">»</a>
                                </li>
                                @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div><!-- /.page -->
    </div>
    </main>
    @endsection

    @section("script")
    <!-- BEGIN PLUGINS JS -->
    <script src="{{ asset('assets/admin/vendor/photoswipe/photoswipe.min.js') }}"></script>
    <script src="{{ asset('assets/admin/vendor/photoswipe/photoswipe-ui-default.min.js') }}"></script>
    <script src="{{ asset('assets/admin/vendor/plyr/plyr.min.js') }}"></script>
    <script src="{{ asset('assets/admin/javascript/pages/photoswipe-demo.js') }} "></script>

    <script>
        function deletemedia(id) {
            Swal.fire({
                title: "Suppression d'un media",
                text: "êtes-vous sûre de vouloir supprimer ce media ?",
                icon: 'warning',
                inputAttributes: {
                autocapitalize: "off"
                },
                showCancelButton: true,
                confirmButtonText: "OUI",
                cancelButtonText: "NON",
                showLoaderOnConfirm: true,
                preConfirm: async (login) => {
                    // alert('alert')
                            try {

                            } catch (error) {

                            }
                },allowOutsideClick: () => !Swal.isLoading()
                }).then((result) => {
                        if (result.isConfirmed) {
                            addCard(id,"","deleteMedia");
                        }
                });
            }



            function addCard(form, idLoad, url) {
        // event.preventDefault()
        var header = {'X-CSRF-TOKEN': $('[name="csrf"]').attr('content'),'Authorization': 'Bearer ' + $('[name="jpt-devref"]').attr('content'), 'Accept': 'application/json', 'X-localization': navigator.language};

        var autre = idLoad == '' ? '' : '../';
        Swal.fire({
            title: 'Merci de patienter...',
            icon: 'info'
        })
        $.ajax({
            url: url + '/' + form,
            method: "GET",
            // data: {
            //     'id': form
            // },
            success: function(data) {
                if (!data.reponse) {
                    Swal.fire({
                        title: data.msg,
                        icon: 'error'
                    })
                } else {
                    Swal.fire({
                        title: data.msg,
                        icon: 'success'
                    })
                    actualiser();
                }
            },
        });

    }
    function actualiser() {
        location.reload();
    }
    </script>
    @endsection
