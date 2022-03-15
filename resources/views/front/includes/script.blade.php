<!-- All JS is here -->
<script src="{{ asset('/') }}assets/js/vendor/modernizr-3.11.7.min.js"></script>
<script src="{{ asset('/') }}assets/js/vendor/jquery-3.6.0.min.js"></script>
<script src="{{ asset('/') }}assets/js/vendor/jquery-migrate-3.3.2.min.js"></script>
<script src="{{ asset('/') }}assets/js/vendor/popper.min.js"></script>
<script src="{{ asset('/') }}assets/js/vendor/bootstrap.min.js"></script>
<script src="{{ asset('/') }}assets/js/plugins/wow.js"></script>
<script src="{{ asset('/') }}assets/js/plugins/scrollup.js"></script>
<script src="{{ asset('/') }}assets/js/plugins/aos.js"></script>
<script src="{{ asset('/') }}assets/js/plugins/magnific-popup.js"></script>
<script src="{{ asset('/') }}assets/js/plugins/jquery.syotimer.min.js"></script>
<script src="{{ asset('/') }}assets/js/plugins/swiper.min.js"></script>
<script src="{{ asset('/') }}assets/js/plugins/imagesloaded.pkgd.min.js"></script>
<script src="{{ asset('/') }}assets/js/plugins/isotope.pkgd.min.js"></script>
<script src="{{ asset('/') }}assets/js/plugins/jquery-ui.js"></script>
<script src="{{ asset('/') }}assets/js/plugins/jquery-ui-touch-punch.js"></script>
<script src="{{ asset('/') }}assets/js/plugins/jquery.nice-select.min.js"></script>
<script src="{{ asset('/') }}assets/js/plugins/waypoints.min.js"></script>
<script src="{{ asset('/') }}assets/js/plugins/counterup.min.js"></script>
<script src="{{ asset('/') }}assets/js/plugins/select2.min.js"></script>
<script src="{{ asset('/') }}assets/js/plugins/easyzoom.js"></script>
<script src="{{ asset('/') }}assets/js/plugins/slinky.min.js"></script>
<script src="{{ asset('/') }}assets/js/plugins/ajax-mail.js"></script>
<!-- Main JS -->
<script src="{{ asset('/') }}assets/js/main.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    $(function() {
        $.ajaxSetup({
            headers : {
                'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content'),
            }
        });
    });
</script>
@yield('front-js')
