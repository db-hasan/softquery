<!--================== footer section =================-->
<section id="footer" style="background-image: url({{ asset('images/bg-content-05.png') }}); background-size: cover;">
    <div class="container mb-4">
        <div class="row g-4">
            <div class="col-sm-12 col-lg-5 office">
                <p class="footer-heading fade-element fade-down">Our Office</p>
                <div class="row ">
                    <div class="col-sm-6 mb-3">
                        <p class="footer-sub-heading fade-element fade-down">Dhaka Branch (Head Office)</p>
                        <a href="">Al-Minar, House-37 (Level-3
                            & 4), Road-15, Block-D, Banani, Dhaka, Bangladesh</a>
                    </div>
                    <div class="col-sm-6 mb-3">
                        <p class="footer-sub-heading fade-element fade-down">Australia Branch</p>
                        <a href="">Suite 1, 38 Railway Parade, Lakemba NSW 2195, Australia</a>
                    </div>
                    <div class="col-sm-6 mb-3">
                        <p class="footer-sub-heading fade-element fade-down">Khulna Branch</p>
                        <a href="">18/A (4th floor of Aarong Building), Eden Plaza, KDA New Market, Khulna,
                            Bangladesh.
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4 service-contact">
                <p class="footer-heading fade-element fade-down">Services</p>
                <div class="row">
                    <div class="col">
                        <div><a href="">Counselling</a></div>
                        <div><a href="">Admission</a></div>
                        <div><a href="">Visa Guidance</a></div>
                    </div>
                    <div class="col">
                        <div><a href="">Scholarship</a></div>
                        <div><a href="">Travel Assistance</a></div>
                        <div><a href="">Arrival Support</a></div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <p class="footer-heading fade-element fade-down">Contact Us</p>
                <ul class="footer-list service-contact">
                    <li><i class='bx bxs-phone-call'></i><a href="mailto:contact@proinfoedu.com"
                            class="ps-3">contact@proinfoedu.com</a>
                    </li>
                    <li><i class='bx bx-envelope'></i><a href="" class="ps-3">+880 1519-393939</a>
                    </li>
                </ul>
                <p class="footer-heading fade-element fade-down">Follow Us</p>
                <div class="social-icon fade-element fade-down">
                    <a href="https://www.facebook.com/proinfobd" target="_blank"><button type="button"><i
                                class='bx bxl-facebook'></i></button></a>
                    <a href="https://www.linkedin.com/company/proinfoedu/" target="_blank"><button type="button"><i
                                class='bx bxl-linkedin'></i></button></a>
                    <a href="https://www.youtube.com/channel/UC_ZQ7ocnm54IfKY4MMvOTfQ" target="_blank"><button
                            type="button"><i class='bx bxl-youtube'></i></button></a>
                    <a href="https://www.instagram.com/proinfoedu/" target="_blank"><button type="button"><i
                                class='bx bxl-instagram'></i></button></a>
                    <a href="https://x.com/ProInfoEduCons1" target="_blank">
                        <button type="button">
                            <i class="fa-brands fa-x-twitter" style="font-size: 17px;"></i>
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <section class="copyright">
        <div class="row mt-3">
            <div class="col">
                <span>©2024 Pro Info & Edu Consultant. All Rights Reserved.</span>
            </div>
            <div class="col text-end">
                <span>Privacy Policy | Terms & Conditions | Cookie Policy</span>
            </div>
        </div>

    </section>
</section>

<!--================== footer section =================-->


<script src="{{ asset('frontend/js/jquery-3.6.0.min.js') }}"></script>
<script src="{{ asset('frontend/purecounter/purecounter_vanilla.js') }}"></script>

<script src="{{ asset('frontend/js/bootstrap-5.3.2.bundle.min.js') }}"></script>
<script src="{{ asset('frontend/js/main.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/glightbox/dist/js/glightbox.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

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
<script>
    @if (Session::has('success'))
        toastr.options = {
            "closeButton": true,
            "progressBar": true
        }
        toastr.success("{{ session('success') }}");
    @endif

    @if (Session::has('error'))
        toastr.options = {
            "closeButton": true,
            "progressBar": true
        }
        toastr.error("{{ session('error') }}");
    @endif

    @if (Session::has('info'))
        toastr.options = {
            "closeButton": true,
            "progressBar": true
        }
        toastr.info("{{ session('info') }}");
    @endif

    @if (Session::has('warning'))
        toastr.options = {
            "closeButton": true,
            "progressBar": true
        }
        toastr.warning("{{ session('warning') }}");
    @endif
</script>
</body>

</html>
