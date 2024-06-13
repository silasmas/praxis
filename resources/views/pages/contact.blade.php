@extends("layouts.template",["titre"=>"Articles"])


@section("content")
@include("parties.bannier")

  <!-- CONTACT INFO
        ================================================== -->
        <section class="bg-light-gray">
            <div class="container">
                <div class="title-style3 text-center mb-2-9 mb-lg-6 wow fadeIn" data-wow-delay="100ms">
                    <span>Nos Contacts</span>
                    <h2 class="mb-0 h1">Nous sommes là pour vous aider</h2>
                </div>
                <div class="row mt-n4">
                    <div class="col-md-6 col-xl-4 mt-4 wow fadeInUp" data-wow-delay="200ms">
                        <div class="card card-style10 border-0 border-radius-10 ms-4 h-100">
                            <div class="card-heading mt-4 position-relative">
                                <h3 class="h5 mb-0 text-white">Addresse</h3>
                                <i class="icon-map display-7 text-white opacity2 position-absolute top-n10 end-0"></i>
                            </div>
                            <div class="card-body p-1-9">
                                <p class="mb-0">@lang("info.titre.address")</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-4 mt-4 wow fadeInUp" data-wow-delay="400ms">
                        <div class="card card-style10 border-0 border-radius-10 ms-4 h-100">
                            <div class="card-heading mt-4 position-relative">
                                <h3 class="h5 mb-0 text-white">Téléphone</h3>
                                <i class="icon-mobile display-7 text-white opacity2 position-absolute top-n10 end-0"></i>
                            </div>
                            <div class="card-body p-1-9">
                                <p class="mb-1">@lang("info.titre.phone")</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-4 mt-4 wow fadeInUp" data-wow-delay="600ms">
                        <div class="card card-style10 border-0 border-radius-10 ms-4 h-100">
                            <div class="card-heading mt-4 position-relative">
                                <h3 class="h5 mb-0 text-white">Email</h3>
                                <i class="icon-chat display-7 text-white opacity2 position-absolute top-n10 end-0"></i>
                            </div>
                            <div class="card-body p-1-9">
                                <p class="mb-1">@lang("info.titre.mail")</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- CONTACT FORM
        ================================================== -->
        <section class="overflow-visible">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10 wow fadeIn" data-wow-delay="400ms">
                        <div class="primary-shadow bg-white p-1-6 p-sm-2-9 rounded z-index-9 position-relative">
                            <h2 class="mb-1-9">Ecrivez-nous</h2>
                            <form class="contact quform" id="formContact" onsubmit="event.preventDefault();add('#formContact', 'POST', '../addNewMessage')">
                                <div class="quform-elements">
                                    <div class="row">
                                        <!-- Begin Text input element -->
                                        <div class="col-md-6">
                                            <div class="quform-element form-group">
                                                <label for="name">Votre nom complet<span class="quform-required">*</span></label>
                                                <div class="quform-input">
                                                    <input class="form-control" id="name" type="text" name="name" placeholder="Votre nom" />
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Text input element -->

                                        <!-- Begin Text input element -->
                                        <div class="col-md-6">
                                            <div class="quform-element form-group">
                                                <label for="email">Votre Email <span class="quform-required">*</span></label>
                                                <div class="quform-input">
                                                    <input class="form-control" id="email" type="text" name="email" placeholder="Votre email" />
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Text input element -->

                                        <!-- Begin Text input element -->
                                        <div class="col-md-6">
                                            <div class="quform-element form-group">
                                                <label for="subject">Objet du message<span class="quform-required">*</span></label>
                                                <div class="quform-input">
                                                    <input class="form-control" id="subject" type="text" name="subject" placeholder="Objet de votre message" />
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Text input element -->

                                        <!-- Begin Text input element -->
                                        <div class="col-md-6">
                                            <div class="quform-element form-group">
                                                <label for="phone">Numéro de contact</label>
                                                <div class="quform-input">
                                                    <input class="form-control" id="phone" type="text" name="phone" placeholder="Votre numéro de contact" />
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Text input element -->

                                        <!-- Begin Textarea element -->
                                        <div class="col-md-12">
                                            <div class="quform-element form-group">
                                                <label for="message">Votre Message <span class="quform-required">*</span></label>
                                                <div class="quform-input">
                                                    <textarea class="form-control h-100" id="message" name="message" rows="3" placeholder="Laissez-nous votre message"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Textarea element -->

                                        <!-- Begin Submit button -->
                                        <div class="col-md-12">
                                            <div class="quform-submit-inner">
                                                <button class="butn-style1" type="submit"><span>Envoyer</span></button>
                                            </div>
                                            <div class="quform-loading-wrap text-start"><span class="quform-loading"></span></div>
                                        </div>
                                        <!-- End Submit button -->

                                    </div>
                                </div>
                            </form>
                            <img src="{{ asset('assets/img/shape/03.png') }}" class="position-absolute top-n5 right-n5" alt="...">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- CONTACT MAP
        ================================================== -->
        <iframe class="map" src="https://maps.google.com/maps?q=london&t=&z=13&ie=UTF8&iwloc=&output=embed" scrolling="no" marginheight="0" marginwidth="0"></iframe>


@endsection
