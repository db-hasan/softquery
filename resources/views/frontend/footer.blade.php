    <!-- Vendor JS Files -->
    <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('jquery/jquery-3.7.1.min.js') }} "></script>
    <script src="{{ asset('frontend/js/main.js') }}"></script>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@srexi/purecounterjs/dist/purecounter_vanilla.js"></script>
    
    <script>
        new PureCounter();
    </script>

    <script>
        $(document).ready(function() {
            $('.owl-carousel').owlCarousel({
                loop: true,
                nav: true,
                autoplay: true,
                autoplayTimeout: 3000, // Set autoplay timeout to 3 second
                responsive: {
                    0: {
                        items: 1
                    },
                    500: {
                        items: 2
                    },
                    800: {
                        items: 3
                    },
                    1000: {
                        items: 4
                    }
                }
            });
        });
    </script>
