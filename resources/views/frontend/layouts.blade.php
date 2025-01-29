@include('frontend.header')

<body>


    <!----------------------------------------------------------------
        # Heard start
    ---------------------------------------------------------------->
    <header>
        <!----------------------------------------------------------------
        # navbar start
        ---------------------------------------------------------------->
        <section class="fixed-top" id="header">
            <div class="nav">
                <div class="nav_bar container">
                    <div class="logo">
                        <a href="" class="text-info" style="text-decoration: none;">
                            <img src="{{ asset('images/logo.png') }}" alt="">
                        </a>
                    </div>
                    <div class="menu">
                        <ul>
                            <li class="home"><a href="">Home</a></li>
                            <li class="service">Service
                                <i class='bx bxs-chevron-down arrow'></i>
                                <ul class="sub-menu-service">
                                    <li><a href="">Website Development</a></li>
                                    <li><a href="">Software Development</a></li>
                                    <li><a href="">App Development</a></li>
                                    <li><a href="">Ads Boosting</a></li>
                                    <li><a href="">SEO Optimization</a></li>
                                    <li><a href="">Graphics & Animation</a></li>
                                </ul>
                            </li>
                            <li class="product">Product
                                <i class='bx bxs-chevron-down arrow'></i>
                                <div class="megamenu pb-4">
                                    <ul class="menu-list">
                                        <li class="sub_menu_list">
                                            <a class="d-flex" href="">
                                                <span class="img-icon">
                                                    <img src="{{ asset('images/icon_4.png') }}" alt="">
                                                </span>
                                                <div class="sub_menu_content">
                                                    <span class="sub_menu_heading">ERP System</span><br>
                                                    <span class="sub_menu_desc">Single & Multy Vendor eCommerce</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="sub_menu_list">
                                            <a class="d-flex" href="">
                                                <span class="img-icon">
                                                    <img src="{{ asset('images/icon_4.png') }}" alt="">
                                                </span>
                                                <div class="sub_menu_content">
                                                    <span class="sub_menu_heading">POS Software</span><br>
                                                    <span class="sub_menu_desc">Single & Multy Vendor eCommerce</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="sub_menu_list">
                                            <a class="d-flex" href="">
                                                <span class="img-icon">
                                                    <img src="{{ asset('images/icon_4.png') }}" alt="">
                                                </span>
                                                <div class="sub_menu_content">
                                                    <span class="sub_menu_heading">Inventory</span><br>
                                                    <span class="sub_menu_desc">Single & Multy Vendor eCommerce</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="sub_menu_list">
                                            <a class="d-flex" href="">
                                                <span class="img-icon">
                                                    <img src="{{ asset('images/icon_4.png') }}" alt="">
                                                </span>
                                                <div class="sub_menu_content">
                                                    <span class="sub_menu_heading">eCommerce</span><br>
                                                    <span class="sub_menu_desc">Single & Multy Vendor eCommerce</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="sub_menu_list">
                                            <a class="d-flex" href="">
                                                <span class="img-icon">
                                                    <img src="{{ asset('images/icon_4.png') }}" alt="">
                                                </span>
                                                <div class="sub_menu_content">
                                                    <span class="sub_menu_heading">Pharmacy</span><br>
                                                    <span class="sub_menu_desc">Single & Multy Vendor eCommerce</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="sub_menu_list">
                                            <a class="d-flex" href="">
                                                <span class="img-icon">
                                                    <img src="{{ asset('images/icon_4.png') }}" alt="">
                                                </span>
                                                <div class="sub_menu_content">
                                                    <span class="sub_menu_heading">Appointment</span><br>
                                                    <span class="sub_menu_desc">Single & Multy Vendor eCommerce</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="sub_menu_list">
                                            <a class="d-flex" href="">
                                                <span class="img-icon">
                                                    <img src="{{ asset('images/icon_4.png') }}" alt="">
                                                </span>
                                                <div class="sub_menu_content">
                                                    <span class="sub_menu_heading">Restaurant</span><br>
                                                    <span class="sub_menu_desc">Single & Multy Vendor eCommerce</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="sub_menu_list">
                                            <a class="d-flex" href="">
                                                <span class="img-icon">
                                                    <img src="{{ asset('images/icon_4.png') }}" alt="">
                                                </span>
                                                <div class="sub_menu_content">
                                                    <span class="sub_menu_heading">School Manage</span><br>
                                                    <span class="sub_menu_desc">Single & Multy Vendor eCommerce</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="sub_menu_list">
                                            <a class="d-flex" href="">
                                                <span class="img-icon">
                                                    <img src="{{ asset('images/icon_4.png') }}" alt="">
                                                </span>
                                                <div class="sub_menu_content">
                                                    <span class="sub_menu_heading">Hotel Booking</span><br>
                                                    <span class="sub_menu_desc">Single & Multy Vendor eCommerce</span>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="about"><a href="">About us</a></li>
                            <li class="hires"><a href="">Hire's</a></li>
                        </ul>
                    </div>
                    <button type="button" class="btn menu_icon" id="menuButton">
                        <i class="bx bx-menu-alt-right"></i>
                    </button>
                </div>
            </div>
        </section>

        <!----------------------------------------------------------------
        # sidebar start
        ---------------------------------------------------------------->
        <div class="menu-container" id="menuContainer">
            <div class="menu-heading d-flex justify-content-between">
                <h3 class="menu-title">Quick Link</h3>
                <button class="btn" id="closeMenu">
                    <i class="fa-solid fa-xmark fa-xl px-3" style="color: #f3124a;"></i>
                </button>
            </div>
            <div class="menu-list custom-scrollbar">
                <div class="menu-bottom">
                    <h6 class="menu-sub-heading">Our Service Pages</h6>
                    <a href="" class="d-flex justify-content-between align-items-center">
                        <li>Website Development</li>
                        <i class="fa-solid fa-angle-right"></i>
                    </a>
                    <a href="" class="d-flex justify-content-between align-items-center">
                        <li>Software Development</li>
                        <i class="fa-solid fa-angle-right"></i>
                    </a>
                    <a href="" class="d-flex justify-content-between align-items-center">
                        <li>App Development</li>
                        <i class="fa-solid fa-angle-right"></i>
                    </a>
                    <a href="" class="d-flex justify-content-between align-items-center">
                        <li>Ads Boosting</li>
                        <i class="fa-solid fa-angle-right"></i>
                    </a>
                    <a href="" class="d-flex justify-content-between align-items-center">
                        <li>SEO Optimization</li>
                        <i class="fa-solid fa-angle-right"></i>
                    </a>
                    <a href="" class="d-flex justify-content-between align-items-center">
                        <li>Graphics & Animation</li>
                        <i class="fa-solid fa-angle-right"></i>
                    </a>
                </div>
                <div class="menu-bottom">
                    <h6 class="menu-sub-heading">Help & Guidelines</h6>
                    <a href="" class="d-flex justify-content-between align-items-center">
                        <li>About us</li>
                        <i class="fa-solid fa-angle-right"></i>
                    </a>
                    <a href="" class="d-flex justify-content-between align-items-center">
                        <li>Terms & Condition</li>
                        <i class="fa-solid fa-angle-right"></i>
                    </a>
                </div>
                <div class="">
                    <h6 class="menu-sub-heading">Our Software List </h6>
                    <a href="" class="d-flex justify-content-between align-items-center">
                        <li>ERP Software</li>
                        <i class="fa-solid fa-angle-right"></i>
                    </a>
                    <a href="" class="d-flex justify-content-between align-items-center">
                        <li>POS Software</li>
                        <i class="fa-solid fa-angle-right"></i>
                    </a>
                    <a href="" class="d-flex justify-content-between align-items-center">
                        <li>Inventory </li>
                        <i class="fa-solid fa-angle-right"></i>
                    </a>
                    <a href="" class="d-flex justify-content-between align-items-center">
                        <li>Pharmacy </li>
                        <i class="fa-solid fa-angle-right"></i>
                    </a>

                    <a href="" class="d-flex justify-content-between align-items-center">
                        <li>Booking Appointment</li>
                        <i class="fa-solid fa-angle-right"></i>
                    </a>
                    <a href="" class="d-flex justify-content-between align-items-center">
                        <li>Hospital Management</li>
                        <i class="fa-solid fa-angle-right"></i>
                    </a>
                    <a href="" class="d-flex justify-content-between align-items-center">
                        <li>Employee Management</li>
                        <i class="fa-solid fa-angle-right"></i>
                    </a>
                </div>
            </div>
        </div>
 
        <div style="padding-top: 65px;"></div>
    </header>



    {{-- ------------content part-------------- --}}
    @yield('content')
    {{-- ------------content part-------------- --}}

    <!----------------------------------------------------------------
        # Heard start
    ---------------------------------------------------------------->

    <footer>
        <section class="" id="footer">
            <div class="footer">
                <div class="container pt-5">
                    <div class="row">
                        <div class="col-sm-9 col-md-8 col-lg-5 pb-5">
                            <a href="" class="logo" style="text-decoration: none;">
                                <img src="{{ asset('images/logo.png') }}" alt="">
                            </a>
                            <p class="sub_content pe-4">We specialize in converting your Vision about your website into
                                Reality. Welcome to SOFT QUERY
                                Limited, a specialist web design
                                and development agency based in Bangladesh.</p>
                            <h4 class="widget-heading">Subscribe to our newsletter:</h4>
                            <form class="">
                                <input type="text" class="form-control subscribe" id="subscribe"
                                    placeholder="name@example.com">
                                <button type="button" class="btn btn-primary subscribe-button"><i
                                        class="fa fa-rss pe-2"></i>Subscribe</button>
                            </form>
                        </div>
                        <div class="col-sm-3 col-md-4 col-lg-2 pb-5 footer_two">
                            <div>
                                <h4 class="widget-heading">Quick Links</h4>
                                <ul class="widget-link">
                                    <li><a href="">Ads Boosting</a></li>
                                    <li><a href="">Seo Service</a></li>
                                    <li><a href="">Hire's</a></li>
                                    <li><a href="">About Us</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-5 col-md-6 col-lg-2 pb-5 footer_tre">
                            <h4 class="widget-heading">Our Services</h4>
                            <ul class="widget-link">
                                <li><a href="">Webiste</a></li>
                                <li><a href="">Software </a></li>
                                <li><a href="">App Dev</a></li>
                                <li><a href="">UX/UI Design</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-7 col-md-6 col-lg-3 pb-5">
                            <h4 class="widget-heading">Contact info</h4>
                            <ul class="widget-content">
                                <li><i class="fa-solid fa-location-dot me-2"></i> Mohammadour, Dhaka Bangladesh
                                </li>
                                <li><i class="fas fa-envelope me-2"></i><a class="text-dark"
                                        href="mailto:softqry@gmail.com">softqry@gmail.com</a></li>
                                <li><i class="fas fa-phone me-2"></i> +880 1723629080</li>
                                <li><i class="fa-solid fa-location-crosshairs me-2"></i> <a href="">Get Directions<i
                                            class="fa-solid fa-square-arrow-up-right ms-2"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="row d-flex align-items-center pb-4">
                        <div class="col-lg-7">Copyrights © 2022 All Rights Reserved.</div>
                        <div class="col-lg-5">
                            <div class="payment_gateway">
                                <img class="gateway" src="{{ asset('images/gateway-1.png') }}" alt="">
                                <img class="gateway" src="{{ asset('images/gateway-2.png') }}" alt="">
                                <img class="gateway" src="{{ asset('images/gateway-3.png') }}" alt="">
                                <img class="gateway" src="{{ asset('images/gateway-4.png') }}" alt="">
                                <img class="gateway" src="{{ asset('images/gateway-5.png') }}" alt="">
                                <img class="gateway" src="{{ asset('images/gateway-6.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </footer>

    @include('frontend.footer')
</body>

</html>
