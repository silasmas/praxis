<!-- TEAM
        ================================================== -->
        <section>
            <div class="container">
                <div class="mb-2-6 mb-md-5 mx-auto text-center wow fadeIn w-md-90 w-lg-70 w-xl-60 w-xxl-50" data-wow-delay="200ms">
                    <span class="text-uppercase d-block mb-2 font-weight-600 small text-primary letter-spacing-2">Nos Enseignant</span>
                    <h2 class="h1 mb-0">Notre équipe des enseignants pour notre formation.</h2>
                </div>
                <div class="row mt-n1-9">
                    @forelse ($profs as $p)
                        <div class="col-sm-6 col-lg-3 mt-1-9 wow fadeIn" data-wow-delay="200ms">
                        <div class="team-style3">
                            <div class="pb-1-9">
                                <div class="team-image position-relative">
                                    <div class="team-icons">
                                        <span class="team-icon ti-close"></span>
                                        <a href="{{ $p->x }}" target="blank" class="team-icon fab fa-youtube"></a>
                                        <a href="{{ $p->fb }}" target="blank" class="team-icon fab fa-facebook-f"></a>
                                        <a href="{{ $p->insta }}" target="blank" class="team-icon fab fa-instagram"></a>
                                    </div>
                                    <a href="#!" class="team-inner-img">
                                        <img src="{{ asset('assets/img/'.$p->profil) }} " class="rounded-circle" alt="...">
                                    </a>
                                </div>
                            </div>
                            <div class="text-center">
                                <h3 class="h5 mb-1"><a href="{{ route('viewteacher',['id'=>$p->id]) }}">{{ $p->prenom." ".$p->nom }}</a></h3>
                                <span class="small">{{ $p->titre }}</span>
                            </div>
                        </div>
                    </div>
                    @empty

                    @endforelse



                    {{-- <div class="col-sm-6 col-lg-3 mt-1-9 wow fadeIn" data-wow-delay="400ms">
                        <div class="team-style3">
                            <div class="pb-1-9">
                                <div class="team-image position-relative">
                                    <div class="team-icons">
                                        <span class="team-icon ti-close"></span>
                                        <a href="#!" class="team-icon fab fa-twitter"></a>
                                        <a href="#!" class="team-icon fab fa-facebook-f"></a>
                                        <a href="#!" class="team-icon fab fa-instagram"></a>
                                    </div>
                                    <a href="#!" class="team-inner-img">
                                        <img src="{{ asset('assets/img/team/t3.jpg') }} " class="rounded-circle" alt="...">
                                    </a>
                                </div>
                            </div>
                            <div class="text-center">
                                <h3 class="h5 mb-1"><a href="{{ route('viewteacher',['id'=>2]) }}">Blaise Binzangi</a></h3>
                                <span class="small">Professeur</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3 mt-1-9 wow fadeIn" data-wow-delay="600ms">
                        <div class="team-style3">
                            <div class="pb-1-9">
                                <div class="team-image position-relative">
                                    <div class="team-icons">
                                        <span class="team-icon ti-close"></span>
                                        <a href="#!" class="team-icon fab fa-twitter"></a>
                                        <a href="#!" class="team-icon fab fa-facebook-f"></a>
                                        <a href="#!" class="team-icon fab fa-instagram"></a>
                                    </div>
                                    <a href="#!" class="team-inner-img">
                                        <img src="{{ asset('assets/img/team/t4.jpg') }} " class="rounded-circle" alt="...">
                                    </a>
                                </div>
                            </div>
                            <div class="text-center">
                                <h3 class="h5 mb-1"><a href="{{ route('viewteacher',['id'=>3]) }}">Faly Ravoahangy</a></h3>
                                <span class="small">Professeur</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3 mt-1-9 wow fadeIn" data-wow-delay="800ms">
                        <div class="team-style3">
                            <div class="pb-1-9">
                                <div class="team-image position-relative">
                                    <div class="team-icons">
                                        <span class="team-icon ti-close"></span>
                                        <a href="#!" class="team-icon fab fa-twitter"></a>
                                        <a href="#!" class="team-icon fab fa-facebook-f"></a>
                                        <a href="#!" class="team-icon fab fa-instagram"></a>
                                    </div>
                                    <a href="#!" class="team-inner-img">
                                        <img src="{{ asset('assets/img/team/t5.jpg') }} " class="rounded-circle" alt="...">
                                    </a>
                                </div>
                            </div>
                            <div class="text-center">
                                <h3 class="h5 mb-1"><a href="{{ route('viewteacher',['id'=>4]) }}">Henri Blocher</a></h3>
                                <span class="small">Professeur</span>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </section>
