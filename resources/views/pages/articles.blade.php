@extends("layouts.template",["titre"=>"Articles"])


@section("content")
@include("parties.bannier")

<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mb-2-9 mb-lg-0 mt-n2-9">
                @forelse ($articles as $a)
                <article class="card card-style2 mt-2-9 wow fadeIn" data-wow-delay="200ms">
                    <div class="card-img position-relative">
                        <img src="{{ asset('storage/'.$a->couverture) }}" class="card-img-top" alt="...">
                        <a href="#!" class="category rounded">{{ $a->domaine }}</a>
                    </div>
                    <div class="card-body p-2-0 p-xl-2-4">
                        <span class="text-secondary mb-2 d-block font-weight-500">{{ $a->getCreatedAtAttribute($a->created_at) }}</span>
                        <h3 class="mb-4"><a href="{{ route('viewarticle',['id'=>$a->id]) }}">{{ $a->titre}}</a></h3>
                        <p>{{ Str::limit( $a->contenu, 300, '...') }}</p>
                        <a href="{{ route('viewarticle',['id'=>$a->id]) }}" class="font-weight-600">Lire la suite &#10230;</a>
                    </div>
                    <div class="card-footer bg-white px-2-0 px-xl-2-4 py-3">
                        <div class="d-flex justify-content-between align-items-center">
                            <div><span class="font-weight-600">Par: </span><a href="{{ route('viewarticle',['id'=>$a->id]) }}">{{ $a->subtitle }}</a></div>
                            {{-- <span>
                                <i class="ti-comment-alt me-2"></i>02
                            </span> --}}
                        </div>
                    </div>
                </article>
                @empty

                @endforelse



                <div class="wow fadeIn mt-2-9" data-wow-delay="200ms">
                    <ul class="pagination justify-content-center d-block d-sm-flex text-center text-sm-start">
                        @if ($articles->onFirstPage())
                        <li><a class="next page-numbers disabled" href="#!"><i class="fa fa-angle-double-left"></i></a></li>
                        @else
                        <li><a class="next page-numbers " href="{{ $articles->previousPageUrl() }}"><i class="fa fa-angle-double-left"></i></a></li>
                        @endif
                        @foreach ($articles as $article)
                        {{-- <li class="page-item {{ $article->isCurrentPage() ? 'active' : '' }}"><span class="page-link">{{ $article->url($article->url) }}</span></li> --}}
                        <li><span aria-current=""  class="page-numbers current">{{ $loop->index+1 }}</span></li>
                    @endforeach
                        {{-- <li><a class="page-numbers" href="#!">2</a></li> --}}
                        @if ($articles->hasMorePages())
                        {{-- <li class="page-item"><a class="page-link" href="">Suivant</a></li> --}}
                        <li><a class="next page-numbers" href="{{ $articles->nextPageUrl() }}"><i class="fa fa-angle-double-right"></i></a></li>
                    @else
                        {{-- <li class="page-item "><span class="page-link">Suivant</span></li> --}}
                        <li><a class="next page-numbers disabled" href="#!"><i class="fa fa-angle-double-right"></i></a></li>
                    @endif
                    </ul>
                </div>

            </div>


            @include("parties.menuDroit")
        </div>
    </div>
</section>

@endsection
