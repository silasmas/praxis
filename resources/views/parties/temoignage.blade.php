<section class="mx-xl-5 border-radius-xl-10 bg-light-gray">
    <div class="container">
        <div class="mb-2-6 mb-md-5 mx-auto text-center wow fadeIn w-md-90 w-lg-70 w-xl-60 w-xxl-50" data-wow-delay="200ms">
            <span class="text-uppercase d-block mb-2 font-weight-600 small text-primary letter-spacing-2">Temoignages</span>
            <h2 class="h1 mb-0">Ce que disent et pensent nos étudiants</h2>
        </div>
        <div class="row justify-content-center wow fadeIn" data-wow-delay="200ms">
            <div class="col-lg-8 col-xl-7 text-center">
                <div class="testimonial-style1 owl-carousel owl-theme">
                    <div>
                        <i class="ti-quote-left display-10 text-secondary mb-4 d-block"></i>
                        <p class="mb-5 display-28 display-md-26 display-lg-24">
                           {{ Str::limit(__('info.temoignage.t1'), 500, '...') }}


                        </p>
                        <div class="d-flex justify-content-center align-items-center">
                            <div class="me-3">
                                <img width="60" src="{{ asset('assets/img/avatar/default.jpg') }}" class="rounded-circle" alt="...">
                            </div>
                            <div class="text-start">
                                <h6 class="mb-0">Marla Feza</h6>
                                <span class="small">Etudiante</span>
                            </div>
                        </div>
                    </div>
                    {{-- <div>
                        <i class="ti-quote-left display-10 text-secondary mb-3 d-block"></i>
                        <p class="mb-5 display-28 display-md-26 display-lg-24">I am really satisfied with my business. Your company is truly upstanding and is behind its product 100%. Thank you for making it painless, pleasant and most of all hassle free!</p>
                        <div class="d-flex justify-content-center align-items-center mt-4">
                            <div class="me-3">
                                <img width="60" src="{{ asset('assets/img/avatar/default.jpg') }}" class="rounded-circle" alt="...">
                            </div>
                            <div class="text-start">
                                <h6 class="mb-0">Gregi Ambrose</h6>
                                <span class="small">Languages Researcher</span>
                            </div>
                        </div>
                    </div>
                    <div>
                        <i class="ti-quote-left display-10 text-secondary mb-3 d-block"></i>
                        <p class="mb-5 display-28 display-md-26 display-lg-24">Thanks to business, we've just launched our 5th website! Thank you so much for your help. I don't always clop, but when I do, it's because of business.</p>
                        <div class="d-flex justify-content-center align-items-center mt-4">
                            <div class="me-3">
                                <img width="60" src="{{ asset('assets/img/avatar/default.jpg') }}" class="rounded-circle" alt="...">
                            </div>
                            <div class="text-start">
                                <h6 class="mb-0">Jose Matsuda</h6>
                                <span class="small">Mystery Shopper</span>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</section>
