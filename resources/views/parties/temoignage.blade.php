<section class="mx-xl-5 border-radius-xl-10 bg-light-gray">
    <div class="container">
        <div class="mb-2-6 mb-md-5 mx-auto text-center wow fadeIn w-md-90 w-lg-70 w-xl-60 w-xxl-50" data-wow-delay="200ms">
            <span class="text-uppercase d-block mb-2 font-weight-600 small text-primary letter-spacing-2">Temoignages</span>
            <h2 class="h1 mb-0">Ce que disent et pensent nos étudiants</h2>
        </div>
        <div class="row justify-content-center wow fadeIn" data-wow-delay="200ms">
            <div class="col-lg-8 col-xl-7 text-center">
                <div class="testimonial-style1 owl-carousel owl-theme">
                    @forelse ($temoignages as $t)
                    <div class="temoignage">
                        <i class="ti-quote-left display-10 text-secondary mb-4 d-block"></i>
                        <div class="textePartiel">
                            <p class="mb-5 display-28 display-md-26 display-lg-24">
                                {{ Str::limit($t->message, 400, '...') }}
                            </p>
                            @if (strlen($t->message)>400)
                            <button type="button" class="butn-style1" data-bs-toggle="modal" data-bs-target="#scrollable">
                                Lire la suite
                                </button>
                            @endif
                        </div>
                        {{-- <button class="boutonLireSuite">Lire la suite</button> --}}
                        <div class="texteComplet" style="display: none;">
                            <p>
                                {{ $t->message }}
                            </p>
                        </div>
                        {{-- <button class="boutonVoirMoins" style="display: none;">Voir moins</button> --}}
                        <div class="d-flex justify-content-center align-items-center">
                            <div class="me-3">
                                <img width="60" src="{{ asset('assets/img/avatar/default.jpg') }}" class="rounded-circle" alt="...">
                            </div>
                            <div class="text-start">
                                <h6 class="mb-0">{{ $t->nom }}</h6>
                                <span class="small">{{ $t->profession }}</span>
                            </div>
                        </div>
                    </div>
                @empty

                @endforelse


                </div>
            </div>
        </div>
    </div>
    @include("parties.modale")
</section>
