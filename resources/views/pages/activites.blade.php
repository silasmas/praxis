@extends("layouts.template",["titre"=>"Activités"])


@section("content")
@include("parties.bannier")

 <!-- PORTFOLIO
        ================================================== -->
        <section>
            <div class="container">
                <div class="row">
                    <div class="filtering col-sm-12 text-center">
                        <span data-filter='*' class="active">All</span>
                        @foreach ($categories as $cat)
                        <span data-filter='{{".".str_replace(' ', '', $cat->nom) }}'>{{ $cat->nom }}</span>
                        @endforeach

                        {{-- <span data-filter='.business'>Business</span>
                        <span data-filter='.finance'>Finance</span>
                        <span data-filter='.marketing'>Marketing</span> --}}
                    </div>
                </div>
                <div class="row mt-n4 portfolio-gallery-isotope">
                    @forelse ($activites as $a)
                    <div class="col-sm-6 col-lg-4 mt-4 items {{ str_replace(' ', '', $a->categorie->nom) }} wow fadeIn" data-wow-delay="200ms"
                     data-src="{{ asset('storage/'.$a->img1) }}" data-sub-html="<h4 class='text-white'>test</h4><p>Business</p>">
                        <div class="portfolio-style1">
                            <div class="portfolio-img overflow-hidden">
                                <img src="{{ asset('storage/'.$a->img1) }}" class="rounded" alt="...">
                            </div>
                            <div class="portfolio-text rounded">
                                <div class="h-100 d-table">
                                    <div class="d-table-cell align-bottom">
                                        <span class="text-uppercase display-31 d-block mb-1 font-weight-600 text-white">{{ $a->titre }}</span>
                                        <span class="text-white">{{ " date : ".$a->getDateAtAttributes($a->date) }}</span>

                                        <h3 class="mb-0 h5"><a href="#!" class="text-white">{{ $a->categorie->nom }}</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @empty

                    @endforelse
                    {{-- <div class="col-sm-6 col-lg-4 mt-4 items finance wow fadeIn" data-wow-delay="300ms" data-src="{{ asset('assets/img/portfolio/07.jpg') }}" data-sub-html="<h4 class='text-white'>Business Advice #02</h4><p>Finance</p>">
                        <div class="portfolio-style1">
                            <div class="portfolio-img overflow-hidden">
                                <img src="{{ asset('assets/img/portfolio/07.jpg') }}" class="rounded" alt="...">
                            </div>
                            <div class="portfolio-text rounded">
                                <div class="h-100 d-table">
                                    <div class="d-table-cell align-bottom">
                                        <span class="text-uppercase display-31 d-block mb-1 font-weight-600 text-white">Finance</span>
                                        <h3 class="mb-0 h5"><a href="#!" class="text-white">Business Advice</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4 mt-4 items marketing wow fadeIn" data-wow-delay="400ms" data-src="{{ asset('assets/img/portfolio/07.jpg') }}" data-sub-html="<h4 class='text-white'>Our Executives #03</h4><p>Marketing</p>">
                        <div class="portfolio-style1">
                            <div class="portfolio-img overflow-hidden">
                                <img src="{{ asset('assets/img/portfolio/07.jpg') }}" class="rounded" alt="...">
                            </div>
                            <div class="portfolio-text rounded">
                                <div class="h-100 d-table">
                                    <div class="d-table-cell align-bottom">
                                        <span class="text-uppercase display-31 d-block mb-1 font-weight-600 text-white">Marketing</span>
                                        <h3 class="mb-0 h5"><a href="#!" class="text-white">Our Executives</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4 mt-4 items business wow fadeIn" data-wow-delay="500ms" data-src="{{ asset('assets/img/portfolio/08.jpg') }}" data-sub-html="<h4 class='text-white'>Team Proposal #04</h4><p>Business</p>">
                        <div class="portfolio-style1">
                            <div class="portfolio-img overflow-hidden">
                                <img src="{{ asset('assets/img/portfolio/08.jpg') }}" class="rounded" alt="...">
                            </div>
                            <div class="portfolio-text rounded">
                                <div class="h-100 d-table">
                                    <div class="d-table-cell align-bottom">
                                        <span class="text-uppercase display-31 d-block mb-1 font-weight-600 text-white">Business</span>
                                        <h3 class="mb-0 h5"><a href="#!" class="text-white">Team Proposal</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4 mt-4 items finance wow fadeIn" data-wow-delay="600ms" data-src="{{ asset('assets/img/portfolio/09.jpg') }}" data-sub-html="<h4 class='text-white'>Clients Advice #05</h4><p>Finance</p>">
                        <div class="portfolio-style1">
                            <div class="portfolio-img overflow-hidden">
                                <img src="{{ asset('assets/img/portfolio/09.jpg') }}" class="rounded" alt="...">
                            </div>
                            <div class="portfolio-text rounded">
                                <div class="h-100 d-table">
                                    <div class="d-table-cell align-bottom">
                                        <span class="text-uppercase display-31 d-block mb-1 font-weight-600 text-white">Finance</span>
                                        <h3 class="mb-0 h5"><a href="#!" class="text-white">Clients Advice</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4 mt-4 items marketing wow fadeIn" data-wow-delay="700ms" data-src="{{ asset('assets/img/portfolio/10.jpg') }}" data-sub-html="<h4 class='text-white'>Workplace Results #06</h4><p>Marketing</p>">
                        <div class="portfolio-style1">
                            <div class="portfolio-img overflow-hidden">
                                <img src="{{ asset('assets/img/portfolio/10.jpg') }}" class="rounded" alt="...">
                            </div>
                            <div class="portfolio-text rounded">
                                <div class="h-100 d-table">
                                    <div class="d-table-cell align-bottom">
                                        <span class="text-uppercase display-31 d-block mb-1 font-weight-600 text-white">Marketing</span>
                                        <h3 class="mb-0 h5"><a href="#!" class="text-white">Workplace Results</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </section>
@endsection
