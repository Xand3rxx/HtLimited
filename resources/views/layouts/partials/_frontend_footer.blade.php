<!-- ======= Footer ======= -->
<footer id="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-md-6 footer-contact">
                    <a href="{{ route('frontend.index') }}" class="logo mr-auto"><img src="{{ asset('img/logo.png') }}"
                            alt="HT Limited logo" class="img-fluid"></a>
                    {{-- <h3><img src="{{ asset('img/logo.png') }}" width="75%" alt="HT Limited logo"></h3> --}}
                    <br /><br />
                    <p>{{ config('site-settings.site_description') }}</p>
                </div>

                <div class="col-lg-5 col-md-6 footer-links">
                    <h4>Contact Us</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <strong class="mr-1">Address:</strong> {{
                            config('site-settings.site_address') }}</li>
                        <li><i class="bx bx-chevron-right"></i> <strong class="mr-1">Phone:</strong> {{
                            config('site-settings.site_phone_number')
                            }}@if(!empty(config('site-settings.site_alternative_phone_number'))), {{
                            config('site-settings.site_alternative_phone_number') }}@endif</li>
                        <li><i class="bx bx-chevron-right"></i> <strong class="mr-1">Email:</strong> {{
                            config('site-settings.email') }}</li>
                        <li><i class="bx bx-chevron-right"></i> <strong class="mr-1">Working Hours:</strong> {{
                            config('site-settings.site_working_hours') }}</li>
                    </ul>
                </div>

                <div class="col-lg-2 col-md-6 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="{{ route('frontend.index') }}">Home</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="{{ route('frontend.about') }}">About us</a>
                        </li>
                        <li><i class="bx bx-chevron-right"></i> <a href="{{ route('frontend.services') }}">Services</a>
                        </li>
                        <li><i class="bx bx-chevron-right"></i> <a href="{{ route('frontend.contact') }}">Contact Us</a>
                        </li>
                        {{-- <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li> --}}
                    </ul>
                </div>



                <div class="col-lg-2 col-md-6 footer-newsletter">
                    <h4>Sponsored</h4>
                    <script type="text/javascript">
                        google_ad_client = "ca-pub-8232357139186190"; google_ad_width = 400; google_ad_height = 90; google_ad_format = "728x90_as"; google_ad_type = "text_image"; google_color_border = "FFFFFF"; google_color_bg = "0000FF"; google_color_link = "FFFFFF"; google_color_text = "000000"; google_color_url = "008000";
                    </script>
                    <script type="text/javascript" src="https://pagead2.googlesyndication.com/pagead/show_ads.js">
                    </script>

                    {{-- @push('scripts')
                    {{ config('site-settings.adsense') }}
                    @endpush --}}
                </div>

            </div>
        </div>
    </div>

    <div class="container d-md-flex py-4">

        <div class="mr-md-auto text-center text-md-left">
            <div class="copyright">
                &copy; Copyright {{ date('Y') }} <strong><span>{{ config('site-settings.site_title') }}</span></strong>.
                All Rights Reserved
            </div>

            <div class="col-lg-6 col-md-4 col-6 mt-4">
                <div class="copyright">
                    <h6>Affiliation with</h6>
                </div>

                <div class="client-logo">
                    <a href="https://www.boi.ng/" target="_blank"><img
                            src="{{ asset('assets/frontend/img/clients/affiliation-4.png') }}" width="40%"
                            class="img-fluid"></a>
                </div>
            </div>
        </div>


        <div class="social-links text-center text-md-right pt-3 pt-md-0">
            <a href="{{ config('site-settings.twitter_link') }}" target="_blank" class="twitter"><i
                    class="bx bxl-twitter"></i></a>
            <a href="{{ config('site-settings.facebook_link') }} " target="_blank" class="facebook"><i
                    class="bx bxl-facebook"></i></a>
            <a href="{{ config('site-settings.instagram_link') }}" target="_blank" class="instagram"><i
                    class="bx bxl-instagram"></i></a>
            <a href="{{ config('site-settings.linkedin_link') }}" target="_blank" class="linkedin"><i
                    class="bx bxl-linkedin"></i></a>
        </div>
    </div>
</footer><!-- End Footer -->

<a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

<!-- Vendor JS Files -->
<script src="{{ asset('assets/frontend/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/frontend/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
<script src="{{ asset('assets/frontend/vendor/php-email-form/validate.js') }}"></script>
<script src="{{ asset('assets/frontend/vendor/jquery-sticky/jquery.sticky.js') }}"></script>
<script src="{{ asset('assets/frontend/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('assets/frontend/vendor/venobox/venobox.min.js') }}"></script>
<script src="{{ asset('assets/frontend/vendor/waypoints/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('assets/frontend/vendor/owl.carousel/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets/frontend/vendor/aos/aos.js') }}"></script>

<!-- Template Main JS File -->
<script src="{{ asset('assets/frontend/js/main.js') }}"></script>
<script src="{{ asset('assets/js/sweetalert2.min.js') }}"></script>

<script>
    $(document).ready(function(){
        //Prevent characters or string asides number in phone number input field
        $("#phone_number, #alternative_phone_number, #official_phone_number, #official_phone_number_2, #loan_sum").on("keypress keyup blur", function(event) {
            $(this).val($(this).val().replace(/[^\d].+/, ""));
            if ((event.which < 48 || event.which > 57)) {
                event.preventDefault();
            }
        });
    });

    //Feedback from session message to be displayed with Sweet Alert
    function displayMessage(message, type) {
        const Toast = swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 8000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
        });
        Toast.fire({
            icon: type,
            //   type: 'success',
            title: message
        });
    }
</script>

@stack('scripts')
