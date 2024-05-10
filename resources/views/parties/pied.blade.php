</div>

<!-- SCROLL TO TOP
================================================== -->
<a href="#!" class="scroll-to-top"><i class="fas fa-angle-up" aria-hidden="true"></i></a>

<!-- all js include start -->

<!-- jquery -->
<script src="{{ asset('assets/js/jquery.min.js') }} "></script>

<!-- popper js -->
<script src="{{ asset('assets/js/popper.min.js') }} "></script>

<!-- bootstrap -->
<script src="{{ asset('assets/js/bootstrap.min.js') }} "></script>

<!-- navigation -->
<script src="{{ asset('assets/js/nav-menu.js') }} "></script>

<!-- serch -->
<script src="{{ asset('assets/search/search.js') }} "></script>

<!-- owl carousel -->
<script src="{{ asset('assets/js/owl.carousel.js') }} "></script>

<!-- thumbs js -->
<script src="{{ asset('assets/js/owl.carousel.thumbs.js') }} "></script>

<!-- tab -->
<script src="{{ asset('assets/js/easy.responsive.tabs.js') }} "></script>

<!-- jquery.counterup.min -->
<script src="{{ asset('assets/js/jquery.counterup.min.js') }} "></script>

<!-- stellar js -->
<script src="{{ asset('assets/js/jquery.stellar.min.js') }} "></script>

<!-- waypoints js -->
<script src="{{ asset('assets/js/waypoints.min.js') }} "></script>

<!-- countdown js -->
<script src="{{ asset('assets/js/countdown.js') }} "></script>

<!-- jquery.magnific-popup js -->
<script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }} "></script>

<!-- lightgallery js -->
<script src="{{ asset('assets/js/lightgallery-all.js') }} "></script>

<!-- mousewheel js -->
<script src="{{ asset('assets/js/jquery.mousewheel.min.js') }} "></script>

<!-- isotope.pkgd.min js -->
<script src="{{ asset('assets/js/isotope.pkgd.min.js') }} "></script>

<!-- animated headline js -->
<script src="{{ asset('assets/js/animated-headline.js') }} "></script>

<!-- wow js -->
<script src="{{ asset('assets/js/wow.js') }} "></script>

<!-- lettering js -->
<script src="{{ asset('assets/js/jquery.lettering.js') }} "></script>

<!-- textillate js -->
<script src="{{ asset('assets/js/jquery.textillate.js') }} "></script>

<!-- tilt js -->
<script src="{{ asset('assets/js/tilt.js') }} "></script>

<!--  clipboard js -->
<script src="{{ asset('assets/js/clipboard.min.js') }} "></script>

<!--  prism js -->
<script src="{{ asset('assets/js/prism.js') }} "></script>

<!-- custom scripts -->
<script src="{{ asset('assets/js/main.js') }} "></script>

<!-- form plugins js -->
<script src="{{ asset('assets/quform/js/plugins.js') }} "></script>

<!-- form scripts js -->
{{-- <script src="{{ asset('assets/quform/js/scripts.js') }} "></script> --}}
<script src="{{ asset('assets/custom/sweetalert2/dist/sweetalert2.all.min.js') }}"></script>

<!-- all js include end -->

<script>
    $("#newsletter").on("submit", function (e) {
            e.preventDefault();
            //  alert("register")
            add("#newsletter", 'POST', 'addNewsletter')
    });
    $("#formContact").on("submit", function (e) {
            e.preventDefault();
            //  alert("register")
            add("#formContact", 'POST', 'addNewMessage')
    });
    $("#formContactProf").on("submit", function (e) {
            e.preventDefault();
            add("#formContactProf", 'POST', '../addNewMessageProf')
    });
function add(form, mothode, url) {
        var csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
        var f = form;
        var u = url;
        Swal.fire({
            title: 'Merci de patienter...',
            icon: 'info'
        })
        $.ajax({
            url: u,
            method: mothode,
            data: $(f).serialize(),
            headers: {
                'X-CSRF-TOKEN': csrfToken
            },
            success: function (data) {

                if (!data.reponse) {
                    Swal.fire({
                        title: data.msg,
                        icon: 'error'
                    })
                } else {
                    Swal.fire({
                        title: data.msg,
                        icon: 'success'
                    })
                    $(f)[0].reset();
                    // actualiser();
                }

            },
            error: function(xhr) {
            var errors = xhr.responseJSON.errors;
            var errorMessage = '';
            $.each(errors, function(key, value) {
                errorMessage += value + '\n';
            });
            Swal.fire({
                title: 'Erreur de validation',
                text:errorMessage,
                icon: 'error'
                    })
             }
        });
    }
function actualiser() {
        location.reload();
    }
</script>
</body>

</html>
