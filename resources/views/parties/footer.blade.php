<!-- FOOTER
        ================================================== -->
<footer class="footer-style1 bg-dark">

    <div class="container">
        <div class="row">

            <div class="col-lg-4 mb-1-9 mb-lg-0 wow fadeIn" data-wow-delay="200ms">
                <img src="{{ asset('assets/img/logos/tw.png') }}" class="mb-4" alt="..." />
                <p class="mb-1-9 text-white w-xxl-85">
                @lang("info.titre.slogan")
                </p>
                <div class="social-icons2">
                    <ul class="ps-0 mb-0">
                        <li><a href="#!"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#!"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#!"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="#!"><i class="fab fa-linkedin-in"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-12 mb-1-9 pb-4 border-bottom border-color-light-white wow fadeIn"
                        data-wow-delay="300ms">
                        <div class="row">
                            <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
                                <div class="d-flex">
                                    <div class="flex-shrink-0">
                                        <i class="ti-mobile display-20 text-secondary"></i>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h4 class="h5 text-white mb-1">Phone</h4>
                                        <p class="mb-0 text-white opacity8 small">@lang("info.titre.phone")</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-5 mb-4 mb-lg-0">
                                <div class="d-flex">
                                    <div class="flex-shrink-0">
                                        <i class="ti-email display-20 text-secondary"></i>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h4 class="h5 text-white mb-1">Email</h4>
                                        <p class="mb-0 text-white opacity8 small">@lang("info.titre.mail")</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="d-flex">
                                    <div class="flex-shrink-0">
                                        <i class="ti-map-alt display-20 text-secondary"></i>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h4 class="h5 text-white mb-1">Adresse</h4>
                                        <p class="mb-0 text-white opacity8 small">@lang("info.titre.address")</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4 mb-1-9 mb-lg-0 wow fadeIn" data-wow-delay="400ms">
                        <h3>Raccourcis</h3>
                        <ul class="ps-0 mb-0">
                            <li><a href="services.html">Qui sommes-nous</a></li>
                            <li><a href="team.html">Nos activités</a></li>
                            <li><a href="contact.html">Nos enseignants</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-lg-4 mb-1-9 mb-lg-0 wow fadeIn" data-wow-delay="500ms">
                        <h3>Raccourcis</h3>
                        <ul class="ps-0 mb-0">
                            <li><a href="portfolio.html">Arcticles</a></li>
                            <li><a href="our-core-values.html">Contact</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="600ms">
                        <h3>Newsletter</h3>
                        <form class="quform" action="quform/newsletter-two.php" method="post"
                            enctype="multipart/form-data" onclick="">

                            <div class="quform-elements">

                                <div class="row">
                                    <!-- Begin Text input element -->
                                    <div class="col-md-12">
                                        <div class="quform-element mb-0">
                                            <div class="quform-input">
                                                <input class="form-control" id="email_address" type="text"
                                                    name="email_address" placeholder="Abonnez-vous avec nous" />
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Text input element -->

                                    <!-- Begin Submit button -->
                                    <div class="col-md-12 mt-2">
                                        <div class="quform-submit-inner">
                                            <button class="butn-style1 secondary m-0 w-100"
                                                type="submit">Inscription</button>
                                        </div>
                                        <div class="quform-loading-wrap text-start mt-3"><span
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

    <div class="footer-bar wow fadeIn" data-wow-delay="200ms">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p>&copy; <span class="current-year"></span> Praxis et site crée par<a href="silasmas.com"
                         target="blank"   class="text-secondary text-primary-hover"> Sdev </a></p>
                </div>
            </div>
        </div>
    </div>

</footer>
