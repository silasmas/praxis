@extends("layouts.template",["titre"=>"Detail du Professeur"])


@section("content")
@include("parties.bannier")

<!-- TEAM
        ================================================== -->
<section class="pt-17 pt-xxl-20">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xxl-11">
                <div class="bg-white border-radius-10 box-shadow-large pt-0 p-1-6 p-lg-1-9 p-xxl-6 mb-1-9 mb-lg-6">
                    <div class="row">
                        <div class="col-lg-6 mb-1-9 mb-lg-0 position-relative wow fadeIn" data-wow-delay="200ms">
                            <div>
                                <img src="{{ asset('storage/'.$prof->profil) }}" class="border-radius-10 mt-n5"
                                    alt="...">
                                {{-- <img src="{{ asset('assets/img/shape/03.png') }}" class="team-single-img"
                                    alt="..."> --}}
                            </div>
                        </div>
                        <div class="col-lg-6 wow fadeIn position-relative" data-wow-delay="400ms">
                            <div class="pt-lg-1-9 pt-xxl-6 ps-lg-1-6 ps-xxl-6">
                                <h2 class="mb-3 mb-xl-4">{{ $prof->prenom.' '.$prof->nom }}</h2>
                                <ul class="list-unstyled mb-1-9">
                                    <li class="mb-2"><span class="fs-5 me-2 font-weight-600">Position:</span> {{
                                        $prof->titre }}</li>
                                    <li class="mb-2"><span
                                            class="fs-5 me-2 font-weight-600">Experience:</span>@lang("info.titre.experience")
                                    </li>
                                    <li class="mb-2"><span class="fs-5 me-2 font-weight-600">Email:</span>
                                        @lang("info.titre.mail")</li>
                                    {{-- <li class="mb-2"><span class="fs-5 me-2 font-weight-600">Website:</span>
                                        www.example.com</li> --}}
                                    <li><span class="fs-5 me-2 font-weight-600">Phone:</span> @lang("info.titre.phone")
                                    </li>
                                </ul>
                                <div>
                                    <ul class="ps-0 mb-0 social-icons-style1">
                                        <li><a target="blank" href="{{ $prof->fb }}"><i
                                                    class="fab fa-facebook-f"></i></a></li>
                                        <li><a target="blank" href="{{ $prof->insta }}"><i
                                                    class="fab fa-instagram"></i></a></li>
                                        <li><a target="blank" href="{{ $prof->x }}"><i class="fab fa-youtube"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            {{-- <img src="img/content/sign.png"
                                class="position-absolute right-5 bottom-n5 d-none d-sm-block" alt="..."> --}}
                        </div>
                    </div>
                </div>
                <h2 class="h3 mb-3 mb-lg-4 wow fadeIn" data-wow-delay="100ms">Biographie</h2>
                <div class="wow fadeIn" data-wow-delay="200ms">
                    <p class="mb-1-9 mb-lg-6">
                        {!! $prof->biographie !!}
                    </p>
                </div>
                <div class="row">
                    <div class="col-lg-12 wow fadeIn" data-wow-delay="400ms">
                        <div class="bg-white border-radius-10 shadow-light p-1-9 wow fadeIn" data-wow-delay="200ms">
                            <h3 class="mb-3 mb-lg-4">Laissez moi un message</h3>
                            <form class="contact quform" id="formContactProf" onsubmit="event.preventDefault();add('#formContactProf', 'POST', '../addNewMessageProf')">
                                <div class="quform-elements">
                                    <div class="row">
                                        <!-- Begin Text input element -->
                                        <input hidden class="form-control" value="{{ isset($prof)?$prof->id:"" }}"
                                            id="enseignant_id" type="text" name="enseignant_id" placeholder="" />
                                        <div class="col-md-6">
                                            <div class="quform-element form-group">
                                                <label for="name">Votre nom complet<span
                                                        class="quform-required">*</span></label>
                                                <div class="quform-input">
                                                    <input class="form-control" id="name" type="text" name="name"
                                                        placeholder="Votre nom" />
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Text input element -->

                                        <!-- Begin Text input element -->
                                        <div class="col-md-6">
                                            <div class="quform-element form-group">
                                                <label for="email">Votre Email <span
                                                        class="quform-required">*</span></label>
                                                <div class="quform-input">
                                                    <input class="form-control" id="email" type="text" name="email"
                                                        placeholder="Votre email" />
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Text input element -->

                                        <!-- Begin Text input element -->
                                        <div class="col-md-6">
                                            <div class="quform-element form-group">
                                                <label for="subject">Objet du message<span
                                                        class="quform-required">*</span></label>
                                                <div class="quform-input">
                                                    <input class="form-control" id="subject" type="text" name="subject"
                                                        placeholder="Objet de votre message" />
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Text input element -->

                                        <!-- Begin Text input element -->
                                        <div class="col-md-6">
                                            <div class="quform-element form-group">
                                                <label for="phone">Numéro de contact</label>
                                                <div class="quform-input">
                                                    <input class="form-control" id="phone" type="text" name="phone"
                                                        placeholder="Votre numéro de contact" />
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Text input element -->

                                        <!-- Begin Textarea element -->
                                        <div class="col-md-12">
                                            <div class="quform-element form-group">
                                                <label for="message">Votre Message <span
                                                        class="quform-required">*</span></label>
                                                <div class="quform-input">
                                                    <textarea class="form-control h-100" id="message" name="message"
                                                        rows="3" placeholder="Laissez moi votre message"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Textarea element -->

                                        <!-- Begin Submit button -->
                                        <div class="col-md-12">
                                            <div class="quform-submit-inner">
                                                <button class="butn-style1" type="submit"><span>Envoyer</span></button>
                                            </div>
                                            <div class="quform-loading-wrap text-start"><span
                                                    class="quform-loading"></span></div>
                                        </div>
                                        <!-- End Submit button -->

                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
@endsection
