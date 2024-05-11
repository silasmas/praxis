@extends("layouts.template",["titre"=>"Articles"])


@section("content")
@include("parties.bannier")

<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mb-2-9 mb-lg-0 mt-n2-9">

                <article class="card card-style2 mt-2-9 wow fadeIn" data-wow-delay="200ms">
                    <div class="card-img position-relative">
                        <img src="{{ asset('assets/img/blog/article.jpg') }}" class="card-img-top" alt="...">
                        <a href="#!" class="category rounded">business</a>
                    </div>
                    <div class="card-body p-2-0 p-xl-2-4">
                        <span class="text-secondary mb-2 d-block font-weight-500">June 10, 2021</span>
                        <h3 class="mb-4"><a href="blog-post.html">Five things you need to know about business today</a></h3>
                        <p>There are endless ways to create a some ways to have a business. We spend more time at the meetings than ever with knowledge melioration.</p>
                        <a href="blog-post.html" class="font-weight-600">Read More &#10230;</a>
                    </div>
                    <div class="card-footer bg-white px-2-0 px-xl-2-4 py-3">
                        <div class="d-flex justify-content-between align-items-center">
                            <div><span class="font-weight-600">By: </span><a href="#!">Admin</a></div>
                            <span>
                                <i class="ti-comment-alt me-2"></i>02
                            </span>
                        </div>
                    </div>
                </article>

                <article class="card card-style2 mt-2-9 wow fadeIn" data-wow-delay="200ms">
                    <div class="card-img position-relative">
                        <img src="{{ asset('assets/img/blog/article.jpg') }}" class="card-img-top" alt="...">
                        <a href="#!" class="category rounded">consulting</a>
                    </div>
                    <div class="card-body p-2-0 p-xl-2-4">
                        <span class="text-secondary mb-2 d-block font-weight-500">June 8, 2021</span>
                        <h3 class="mb-4"><a href="blog-post.html">Eliminate your fears and doubts about business</a></h3>
                        <p>There are endless ways to create a some ways to have a business. We spend more time at the meetings than ever with knowledge melioration.</p>
                        <a href="blog-post.html" class="font-weight-600">Read More &#10230;</a>
                    </div>
                    <div class="card-footer bg-white px-2-0 px-xl-2-4 py-3">
                        <div class="d-flex justify-content-between align-items-center">
                            <div><span class="font-weight-600">By: </span><a href="#!">Admin</a></div>
                            <span>
                                <i class="ti-comment-alt me-2"></i>01
                            </span>
                        </div>
                    </div>
                </article>

                <article class="card card-style2 mt-2-9 wow fadeIn" data-wow-delay="200ms">
                    <div class="card-img position-relative">
                        <img src="{{ asset('assets/img/blog/article.jpg') }}" class="card-img-top" alt="...">
                        <a href="#!" class="category rounded">finance</a>
                    </div>
                    <div class="card-body p-2-0 p-xl-2-4">
                        <span class="text-secondary mb-2 d-block font-weight-500">June 6, 2021</span>
                        <h3 class="mb-4"><a href="blog-post.html">Understanding the background of business</a></h3>
                        <p>There are endless ways to create a some ways to have a business. We spend more time at the meetings than ever with knowledge melioration.</p>
                        <a href="blog-post.html" class="font-weight-600">Read More &#10230;</a>
                    </div>
                    <div class="card-footer bg-white px-2-0 px-xl-2-4 py-3">
                        <div class="d-flex justify-content-between align-items-center">
                            <div><span class="font-weight-600">By: </span><a href="#!">Admin</a></div>
                            <span>
                                <i class="ti-comment-alt me-2"></i>04
                            </span>
                        </div>
                    </div>
                </article>

                <article class="card card-style2 mt-2-9 wow fadeIn" data-wow-delay="200ms">
                    <div class="card-img position-relative">
                        <img src="{{ asset('assets/img/blog/article.jpg') }}" class="card-img-top" alt="...">
                        <a href="#!" class="category rounded">marketing</a>
                    </div>
                    <div class="card-body p-2-0 p-xl-2-4">
                        <span class="text-secondary mb-2 d-block font-weight-500">June 05, 2021</span>
                        <h3 class="mb-4"><a href="blog-post.html">Now is the time for you to know the truth about business</a></h3>
                        <p>There are endless ways to create a some ways to have a business. We spend more time at the meetings than ever with knowledge melioration.</p>
                        <a href="blog-post.html" class="font-weight-600">Read More &#10230;</a>
                    </div>
                    <div class="card-footer bg-white px-2-0 px-xl-2-4 py-3">
                        <div class="d-flex justify-content-between align-items-center">
                            <div><span class="font-weight-600">By: </span><a href="#!">Admin</a></div>
                            <span>
                                <i class="ti-comment-alt me-2"></i>02
                            </span>
                        </div>
                    </div>
                </article>

                <div class="wow fadeIn mt-2-9" data-wow-delay="200ms">
                    <ul class="pagination justify-content-center d-block d-sm-flex text-center text-sm-start">
                        <li><span aria-current="page" class="page-numbers current">1</span></li>
                        <li><a class="page-numbers" href="#!">2</a></li>
                        <li><a class="next page-numbers" href="#!"><i class="fa fa-angle-double-right"></i></a></li>
                    </ul>
                </div>

            </div>


            <div class="col-lg-4">
                <div class="ps-lg-4 ps-xl-5">
                    <div class="widget wow fadeInUp" data-wow-delay="200ms">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Ecrivez ici">
                            <div class="input-group-append">
                                <button class="butn-style1 secondary search-butn" type="button"><i class="fa fa-search"></i></button>
                            </div>
                        </div>
                    </div>

                    <div class="widget wow fadeInUp" data-wow-delay="300ms">
                        <div class="title-style3 mb-4">
                            <span>Recent articles</span>
                        </div>
                        <div class="media mb-4">
                            <img width="75" height="65" src="{{ asset('assets/img/blog/photo7.jpg') }} " class="me-3" alt="...">
                            <div class="media-body">
                                <h5 class="display-30 mb-0"><a href="#!">7 ideas you can steal from business insurances</a></h5>
                                <small class="font-weight-500">30 Jul, 2021</small>
                            </div>
                        </div>
                        <div class="media mb-4">
                            <img width="75" height="65" src="{{ asset('assets/img/blog/photo7.jpg') }} " class="me-3" alt="...">
                            <div class="media-body">
                                <h5 class="display-30 mb-0"><a href="#!">Tech review resources you will ever need</a></h5>
                                <small class="font-weight-500">01 Aug, 2021</small>
                            </div>
                        </div>
                        <div class="media">
                            <img width="75" height="65" src="{{ asset('assets/img/blog/photo7.jpg') }} " class="me-3" alt="...">
                            <div class="media-body">
                                <h5 class="display-30 mb-0"><a href="#!">An expert interview about gossip magazines</a></h5>
                                <small class="font-weight-500">02 Aug, 2021</small>
                            </div>
                        </div>
                    </div>
                    <div class="widget wow fadeInUp" data-wow-delay="400ms">
                        <div class="title-style3 mb-4">
                            <span>Categories</span>
                        </div>
                        <ul class="category-listing">
                            <li><a href="#!">Business <span class="float-end"> (6)</span></a></li>
                            <li><a href="#!">Consulting <span class="float-end"> (2)</span></a></li>
                            <li><a href="#!">Finance <span class="float-end"> (5)</span></a></li>
                            <li><a href="#!">Marketing <span class="float-end"> (2)</span></a></li>
                        </ul>
                    </div>
                    <div class="widget wow fadeInUp" data-wow-delay="500ms">
                        <div class="title-style3 mb-4">
                            <span>Tags</span>
                        </div>
                        <div class="blog-tags mt-n3">
                            <a href="#!">business</a>
                            <a href="#!">finance</a>
                            <a href="#!">analysis</a>
                            <a href="#!">consulting</a>
                            <a href="#!">marketing</a>
                            <a href="#!">strategy</a>
                            <a href="#!">trading</a>
                        </div>

                    </div>
                    <div class="widget wow fadeInUp" data-wow-delay="600ms">
                        <div class="title-style3 mb-4">
                            <span>Suive-nous</span>
                        </div>
                        <ul class="social-icons-style1 ps-0">
                            <li><a href="@lang("info.titre.fb")"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="@lang("info.titre.youtube")"><i class="fab fa-youtube"></i></a></li>
                            <li><a href="@lang("info.titre.insta")"><i class="fab fa-instagram"></i></a></li>
                         </ul>

                    </div>
                    <div class="bg-img secondary-overlay cover-background rounded wow fadeInUp" data-wow-delay="700ms" data-overlay-dark="85" data-background="{{ asset('assets/img/blog/photo8.jpg') }}">
                        <div class="position-relative z-index-9 text-center py-5 px-1-9">
                            <i class="fas fa-headset text-white mb-4 display-14"></i>
                            <h5 class="text-white mb-4">Comment pouvons nous vous aider?</h5>
                            <div class="separator-line-horrizontal-full bg-white opacity4 mb-4"></div>
                            <ul class="text-center mb-0 list-unstyled ps-0">
                                <li class="text-white mb-2"><i class="fa fa-phone small text-white me-2"></i><a href="#!" class="text-white">@lang("info.titre.phone")</a></li>
                                <li class="text-white"><i class="fa fa-envelope-open small text-white me-2"></i><a href="#!" class="text-white">@lang("info.titre.mail")</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
