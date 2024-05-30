@extends("layouts.template",["titre"=>"Articles"])


@section("content")
@include("parties.bannier")

<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mb-2-9 mb-lg-0">
                <article class="card card-style2">
                    <div class="card-img position-relative">
                        <img src="{{ asset('storage/'.$article->couverture) }}" class="rounded wow fadeIn" alt="..." data-wow-delay="200ms">
                    </div>

                    <div class="card-body p-2-0 p-xl-2-4">
                        <ul class="meta wow fadeIn" data-wow-delay="200ms">
                            <li>
                                <a href="#!">
                                    <i class="fa fa-user"></i> {{ $article->subtitle }}
                                </a>
                            </li>
                            <li>
                                <i class="fas fa-calendar-alt"></i> {{ $article->getCreatedAtAttribute($article->created_at) }}
                            </li>
                        </ul>

                        <div class="wow fadeIn" data-wow-delay="200ms">
                            <p>{{ $article->contenu }}</p>
                        </div>

                        <div class="row border-top border-color-light-black pt-5 mt-5 g-0">
                            <div class="col-md-8 mb-4 mb-md-0 wow fadeIn" data-wow-delay="200ms">
                                <h5 class="h6 mb-3">Related Tags:</h5>
                                <div class="tags mt-n2">
                                    <a href="#!">business</a>
                                    <a href="#!">finance</a>
                                    <a href="#!">analysis</a>
                                </div>
                            </div>
                            <div class="col-md-4 wow fadeIn" data-wow-delay="400ms">
                                <div class="blog-share-icon text-start text-md-end">
                                    <h5 class="h6 mb-3">Share:</h5>
                                    <ul class="share-post m-0 p-0">
                                        {{-- <li><a href="#!"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#!"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#!"><i class="fab fa-dribbble"></i></a></li>
                                        <li><a href="#!"><i class="fab fa-youtube"></i></a></li>
                                        <li><a href="#!"><i class="fab fa-linkedin-in"></i></a></li> --}}
                                        <li><a href="https://facebook.com/sharer.php?u={{ "eglisecmp.com" }}"
                                            target="blank"><span class="ti-facebook"></span></a></li>
                                    <li><a href="https://instagram.com/eglisecmp?igshid=OGQ5ZDc2ODk2ZA=="
                                            target="blank"><span class="ti-instagram"></span></a></li>
                                    <li><a href="https://twitter.com/EgliseCMP" target="blank"><i
                                                class="fa-brands fa-x-twitter"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                </article>

                <div class="page-navigation mb-6 wow fadeIn mt-2-9" data-wow-delay="200ms">
                    @if ($avant!=null)
                    <div class="prev-page">
                        <div class="page-info">
                            <a href="{{ route('viewarticle',['id'=>$avant->id]) }}">
                                <span class="image-prev"><img src="{{ asset('storage/'.$avant->couverture) }}" alt="..."></span>
                                <div class="prev-link-page-info">
                                    <h4 class="prev-title">{{ $avant->titre }}</h4>
                                    <span class="date-details"><span class="create-date">{{ $avant->getCreatedAtAttribute($avant->created_at) }}</span></span>
                                </div>
                            </a>
                        </div>
                    </div>
                    @endif
                    @if($apres!=null)
                    <div class="next-page">
                        <div class="page-info">
                            <a href="{{ route('viewarticle',['id'=>$apres->id]) }}">
                                <div class="next-link-page-info">
                                    <h4 class="next-title">{{ $apres->titre }}</h4>
                                    <span class="date-details"><span class="create-date">{{ $apres->getCreatedAtAttribute($apres->created_at) }}</span></span>
                                </div>
                                <span class="image-next"><img src="{{ asset('storage/'.$apres->couverture) }}" alt="..."></span>
                            </a>
                        </div>
                    </div>
                    @endif
                </div>


            </div>
            @include("parties.menuDroit")
        </div>
    </div>
</section>
@endsection
