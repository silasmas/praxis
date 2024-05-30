<div class="col-lg-4">
    <div class="ps-lg-4 ps-xl-5">


        <div class="widget wow fadeInUp" data-wow-delay="300ms">
            <div class="title-style3 mb-4">
                <span>Articles Recents</span>
            </div>
            @forelse ($articles as $ar)
            <div class="media mb-4">
                <img src="{{ asset('storage/'.$ar->couverture) }}" width="100" class="me-3" alt="...">
                <div class="media-body">
                    <h5 class="display-30 mb-0"><a href="{{ route('viewarticle',['id'=>$ar->id]) }}">{{ Str::limit($ar->titre, 100,"...") }}</a></h5>
                    <small class="font-weight-500">{{ $ar->getCreatedAtAttribute($ar->created_at) }}</small>
                </div>
            </div>
            @empty

            @endforelse
        </div>
        <div class="widget wow fadeInUp" data-wow-delay="400ms">
            <div class="title-style3 mb-4">
                <span>Categories</span>
            </div>
            <ul class="category-listing">
                @forelse ($categoriesCount as $c)
                <li><a href="{{ route('viewarticleBy', ['id' => $c->domaine]) }}">{{ $c->domaine }}<span class="float-end"> ({{ $c->nbr }})</span></a></li>
                @empty

                @endforelse
            </ul>
        </div>
        <div class="widget wow fadeInUp" data-wow-delay="500ms">
            <div class="title-style3 mb-4">
                <span>Tags</span>
            </div>
            <div class="blog-tags mt-n3">
                @forelse ($categories as $cat)
                <a href="{{ route('viewarticleBy', ['id' => $cat->domaine]) }}">{{ $cat->domaine }}</a>
                @empty

                @endforelse

            </div>

        </div>
        <div class="widget wow fadeInUp" data-wow-delay="600ms">
            <div class="title-style3 mb-4">
                <span>Suivez-nous</span>
            </div>
            <ul class="social-icons-style1 ps-0">
                <li><a href="@lang("info.titre.fb")"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="@lang("info.titre.youtube")"><i class="fab fa-youtube"></i></a></li>
                <li><a href="@lang("info.titre.insta")"><i class="fab fa-instagram"></i></a></li>
            </ul>

        </div>
        <div class="bg-img secondary-overlay cover-background rounded wow fadeInUp" data-wow-delay="700ms" data-overlay-dark="85" data-background="img/bg/bg-06.jpg">
            <div class="position-relative z-index-9 text-center py-5 px-1-9">
                <i class="fas fa-headset text-white mb-4 display-14"></i>
                <h5 class="text-white mb-4">En quoi pouvons-nous vous aider?</h5>
                <div class="separator-line-horrizontal-full bg-white opacity4 mb-4"></div>
                <ul class="text-center mb-0 list-unstyled ps-0">
                    <li class="text-white mb-2"><i class="fa fa-phone small text-white me-2"></i><a href="#!" class="text-white">@lang("info.titre.phone")</a></li>
                    <li class="text-white"><i class="fa fa-envelope-open small text-white me-2"></i><a href="#!" class="text-white">@lang("info.titre.mail")</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
