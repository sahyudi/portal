<footer id="footer" class="footer">

    <div class="container footer-top">
        <div class="row gy-4">
            <div class="col-lg-5 col-md-12 footer-about">
                <a href="index.html" class="logo d-flex align-items-center">
                    <span class="sitename">Portal LMS Online</span>
                </a>
                <p>Portal LMS Online ada sebuah website informasi publik Layanan Perizinan Pertanahan yang di
                    terbitkan oleh BP Batam</p>
                <div class="social-links d-flex mt-4">
                    <a href="https://twitter.com/bp_batam"><i class="bi bi-twitter-x"></i></a>
                    <a href="https://www.facebook.com/badanpengusahaanbatam/"><i class="bi bi-facebook"></i></a>
                    <a href="https://www.instagram.com/bpbatam/"><i class="bi bi-instagram"></i></a>
                    {{-- <a href=""><i class="bi bi-linkedin"></i></a> --}}
                </div>
            </div>

            <div class="col-lg-3 col-6 footer-links">
                <h4>Menu</h4>
                <ul>
                    <li><a href="/">Beranda</a></li>
                    <li><a href="/services">Layanan</a></li>
                    {{-- <li><a href="/informations">Informasi</a></li> --}}
                    <li><a href="/contact">Contact</a></li>
                </ul>
            </div>

            <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
                <h4>Kontak Kami</h4>
                <p>
                    Jl. Jenderal Ibnu Sutowo No. 1 Batam Centre
                </p>
                <p>Batam, Kepulauan Riau,</p>
                <p>Indonesia</p>
                <p class="mt-4"><strong>Phone:</strong> <span> +62778-462 047 / 462 048</span></p>
                <p><strong>Email:</strong> <span> humas@bpbatam.go.id</span></p>
            </div>

        </div>
    </div>

    <div class="container copyright text-center mt-4">
        <p>© <span>Copyright</span> <strong class="px-1 sitename">ITEBA</strong> <span>All Rights Reserved</span>
        </p>
        <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you've purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
            {{-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> --}}
        </div>
    </div>

</footer>


<!-- Scroll Top -->
<a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
        class="bi bi-arrow-up-short"></i></a>

<!-- Preloader -->
<div id="preloader"></div>

<div id="contact_widget_substrate"></div>
<div id="contact_widget_button" class="contact_widget_left d-flex align-items-center justify-content-center">
    <div class="contact-widget-pulsation"></div>
    <div class="contact-widget-icon text-center d-flex align-items-center justify-content-center"><i
            class="fa fas fa-envelope"></i><span class="contact-widget-text d-none">Contact button</span></div>
    <div class="contact-widget-dropdown d-flex flex-column align-items-start">
        <!-- <a rel="noopener noreferrer" href="https://m.me/my-facebook-messenger" target="_blank" class="contact-widget-item d-flex align-items-center"><span class="contact-widget-item-icon contact-widget-messenger d-flex align-items-center justify-content-center"><i class="fab fa-facebook-messenger"></i></span><span>Messenger</span></a>		 -->
        <a rel="noopener noreferrer" href="https://api.whatsapp.com/send?phone=6281364129386" target="_blank"
            class="contact-widget-item d-flex align-items-center"><span
                class="contact-widget-item-icon contact-widget-whatsapp d-flex align-items-center justify-content-center"><i
                    class="fab fa-whatsapp"></i></span><span>WhatsApp</span></a>
        <a rel="noopener noreferrer" href="https://t.me/+6281364129386" target="_blank"
            class="contact-widget-item d-flex align-items-center"><span
                class="contact-widget-item-icon contact-widget-telegram d-flex align-items-center justify-content-center"><i
                    class="fab fa-telegram"></i></span><span>Telegram</span></a>

        <a rel="noopener noreferrer" href="mailto:herupriyanto@gmail.com"
            class="contact-widget-item d-flex align-items-center"><span
                class="contact-widget-item-icon contact-widget-email d-flex align-items-center justify-content-center"><i
                    class="far fa-envelope fa fa-envelope-open"></i></span><span>herupriyanto@gmail.com</span></a>
        <a href="/kontak-kami" class="contact-widget-item d-flex align-items-center"><span
                class="contact-widget-item-icon contact-widget-contacts d-flex align-items-center justify-content-center"><i
                    class="fas fa fa-address-book"></i></span><span>Kontak Kami</span></a>
    </div>
</div>
<!-- [END] Contact Widget Button -->

<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css" rel="stylesheet"
    media="screen" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    /*********** [START] Contact widget button ***********/
    $(document).ready(function() {
        $('#contact_widget_button').on('click', function() {
            $(this).toggleClass('clicked');
            $('.contact-widget-dropdown').toggleClass('expanded');
            $('.contact-widget-icon .fa-envelope, #back-top').toggleClass('d-none');
            $('.contact-widget-icon .contact-widget-text').toggleClass('d-none');
            $('#contact_widget_substrate').toggleClass('active');
        });

        $('#contact_widget_substrate').on('click', function() {
            $(this).removeClass('active');
            $('.contact-widget-dropdown').removeClass('expanded');
            $('.contact-widget-icon .fa-envelope, #back-top').removeClass('d-none');
            $('.contact-widget-icon .contact-widget-text').toggleClass('d-none');
            $('#contact_widget_button').removeClass('clicked');
        });

        $('.contact-widget-dropdown').click(function(e) {
            e.stopPropagation();
        });
    });
    /*********** [END] Contact widget button ***********/
</script>



<!-- Vendor JS Files -->
<script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
<script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
<script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
<script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
<script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>

<!-- Main JS File -->
<script src="{{ asset('assets/js/main.js') }}"></script>
