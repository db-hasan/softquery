@extends('frontend/layouts')
@section('content')
    <main>
        <!-- # serivce Section -->
        <div id="banner" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2000">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#banner" data-bs-slide-to="0" class="active" aria-current="true"
                    aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#banner" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#banner" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('/images/banner-00.jpg') }}" class="d-block w-100 carousel-img" alt="...">
                    <div class="carousel-caption">
                        <div class="container banner-fade-element banner-fade-up">
                            <div class="banner-content">
                                <p>COACHING, CONSULTING, TRAINING & KEYNOTES</p>
                                <div class="banner-desc">
                                    <h1 class="banner-fade-element banner-fade-left">We are bringing overseas education
                                        within everyone’s
                                        reach.</h1>
                                    <div class="touch-apply">
                                        <button type="button">GET IN TOUCH</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('/images/banner-02.jpg') }}" class="d-block w-100 carousel-img" alt="...">
                    <div class="carousel-caption">
                        <div class="container banner-fade-element banner-fade-down">
                            <div class="banner-content w-100">
                                <div class="text-center">
                                    <p>COACHING, CONSULTING, TRAINING & KEYNOTES</p>
                                    <div class="banner-desc">
                                        <h1 class="banner-fade-element banner-fade-left">Planning to study abroad?</h1>
                                        <div class="touch-apply">
                                            <button type="button">GET IN TOUCH</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src=" {{ asset('images/banner-03.png') }}" class="d-block w-100 carousel-img" alt="...">
                    <div class="carousel-caption">
                        <div class="container banner-fade-element banner-fade-up">
                            <div class="banner-content">
                                <p>COACHING, CONSULTING, TRAINING & KEYNOTES</p>
                                <div class="banner-desc">
                                    <h1 class="banner-fade-element banner-fade-left">A gateway to excellence in global
                                        education.</h1>
                                    <div class="touch-apply">
                                        <button type="button">GET IN TOUCH</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- # serivce Section -->
        <section id="serivce"
            style="background-image: url({{ asset('images/bg-content-03.jpg') }}); background-size: cover;">
            <div class="container">
                <div class="text-center fade-element fade-down">
                    <div class="section-title">
                        <span>FEATURED SERVICES</span>
                    </div>
                    <div class="section-heading">
                        <h2 id="fade-text-3" class="mb-0 pb-0">We help to get Consultation!</h2>
                        <p class="service-text">We offer a wide range of specialized services to meet the unique needs of
                            students and
                            professionals at different stages of their educational journey.
                            Our core services include:
                        </p>
                    </div>
                </div>
                <div class="services">
                    <div class="row g-4">
                        <div class="col-12 col-sm-6 col-md-6 col-lg-4 flip-box fade-element fade-left">
                            <div class="flip-box-inner">
                                <div class="flip-box-front">
                                    <div class="service-box">
                                        <div class="text-center">
                                            <i class='bx bx-cog'></i>
                                            <h5>Education Counseling</h5>
                                            <p class="service-text-font">Expert guidance to help you explore various
                                                academic
                                                options and
                                                career paths, allowing you to make well-informed decisions for a successful
                                                educational journey.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="flip-box-back"
                                    style="background-image: url({{ asset('images/service-01.jpg ') }}); background-size: cover;">
                                    <div class="service-box">
                                        <div class="service-box-back">
                                            <div class="d-flex align-items-center">
                                                <i class='bx bx-cog'></i>
                                                <h5>Education Counseling</h5>
                                            </div>
                                            <p class="service-text-back">Expert guidance to help you explore various
                                                academic
                                                options and
                                                career paths, allowing you to make well-informed decisions for a successful
                                                educational journey.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6 col-lg-4 flip-box fade-element fade-down">
                            <div class="flip-box-inner">
                                <div class="flip-box-front">
                                    <div class="service-box">
                                        <div class="text-center">
                                            <i class='bx bxs-bank'></i>
                                            <h5>Admission Process</h5>
                                            <p class="service-text-font">From start to finish, we strive to provide
                                                efficient
                                                support, streamlining the
                                                application process for universities across the world.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="flip-box-back"
                                    style="background-image: url({{ asset('images/service-02.jpg ') }}); background-size: cover;">
                                    <div class="service-box">
                                        <div class="service-box-back">
                                            <div class="d-flex align-items-center">
                                                <i class='bx bxs-bank'></i>
                                                <h5>Admission Process</h5>
                                            </div>
                                            <p class="service-text-back">From start to finish, we strive to provide
                                                efficient
                                                support, streamlining the
                                                application process for universities across the world.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6 col-lg-4 flip-box fade-element fade-left">
                            <div class="flip-box-inner">
                                <div class="flip-box-front">
                                    <div class="service-box">
                                        <div class="text-center">
                                            <i class='bx bxs-analyse'></i>
                                            <h5>Visa Application</h5>
                                            <p class="service-text-font">Receive expert assistance and continuous support
                                                throughout your visa
                                                application journey to ensure a seamless and prosperous experience.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="flip-box-back"
                                    style="background-image: url({{ asset('images/service-04.jpg ') }}); background-size: cover;">
                                    <div class="service-box">
                                        <div class="service-box-back">
                                            <div class="d-flex align-items-center">
                                                <i class='bx bxs-analyse'></i>
                                                <h5>Visa Application</h5>
                                            </div>
                                            <p class="service-text-back">Receive expert assistance and continuous support
                                                throughout your visa
                                                application journey to ensure a seamless and prosperous experience.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6 col-lg-4 flip-box fade-element fade-right">
                            <div class="flip-box-inner">
                                <div class="flip-box-front">
                                    <div class="service-box">
                                        <div class="text-center">
                                            <i class='bx bxs-bar-chart-alt-2'></i>
                                            <h5>Scholarship Facilities</h5>
                                            <p class="service-text-font">Gain access to thorough scholarship information,
                                                allowing you to fully
                                                optimize your chances of securing financial support.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="flip-box-back"
                                    style="background-image: url({{ asset('images/service-03.jpg ') }}); background-size: cover;">
                                    <div class="service-box">
                                        <div class="service-box-back">
                                            <div class="d-flex align-items-center">
                                                <i class='bx bxs-bar-chart-alt-2'></i>
                                                <h5>Scholarship Facilities</h5>
                                            </div>
                                            <p class="service-text-back">Gain access to thorough scholarship information,
                                                allowing you to fully
                                                optimize your chances of securing financial support.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-sm-6 col-md-6 col-lg-4 flip-box fade-element fade-down">
                            <div class="flip-box-inner">
                                <div class="flip-box-front">
                                    <div class="service-box">
                                        <div class="text-center">
                                            <i class='bx bx-user-voice'></i>
                                            <h5>Travel Assistance</h5>
                                            <p class="service-text-font">Hassle-free travel arrangements to kickstart your
                                                educational adventure.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="flip-box-back"
                                    style="background-image: url({{ asset('images/service-05.jpg ') }}); background-size: cover;">
                                    <div class="service-box">
                                        <div class="service-box-back">
                                            <div class="d-flex align-items-center">
                                                <i class='bx bx-user-voice'></i>
                                                <h5>Travel Assistance</h5>
                                            </div>
                                            <p class="service-text-back">Hassle-free travel arrangements to kickstart your
                                                educational adventure.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6 col-lg-4 flip-box fade-element fade-right">
                            <div class="flip-box-inner">
                                <div class="flip-box-front">
                                    <div class="service-box">
                                        <div class="text-center">
                                            <i class='bx bx-globe'></i>
                                            <h5>Pre-Departure Guidance and Post-Arrival Support</h5>
                                            <p class="service-text-font">Assistance in securing comfortable and
                                                suitable accommodation, enhancing the overall study experience.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="flip-box-back"
                                    style="background-image: url({{ asset('images/service-06.jpg ') }}); background-size: cover;">
                                    <div class="service-box">
                                        <div class="service-box-back">
                                            <div class="d-flex align-items-center">
                                                <i class='bx bx-globe'></i>
                                                <h5>Pre-Departure Guidance and Post-Arrival Support</h5>
                                            </div>
                                            <p class="service-text-back">Assistance in securing comfortable and
                                                suitable accommodation, enhancing the overall study experience.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- # features Section -->
        <section id="features">
            <div class="container">
                <div class="text-center fade-element fade-down">
                    <div class="section-title">
                        <span>FEATURED SERVICES</span>
                    </div>
                    <div class="section-heading">
                        <h2 id="fade-text-3" class="mb-0 pb-0">We help to get Consultation!</h2>
                        <p class="service-text">We offer a wide range of specialized services to meet the unique needs of
                            students and
                            professionals at different stages of their educational journey.
                            Our core services include:
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-4 text-center align-items-end">
                        <img src="{{ asset('images/features.png') }}" class="img-fluid p-4" alt="">
                    </div>

                    <div class="col-xl-8 d-flex res_feature_img">
                        <div class="row align-self-center gy-4">
                            <div class="col-md-6 icon-box">
                                <i class="fa-brands fa-meetup"></i>
                                <div>
                                    <h4>User interface Design</h4>
                                    <p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip
                                    </p>
                                </div>
                            </div>

                            <div class="col-md-6 icon-box">
                                <i class="fa-brands fa-meetup"></i>
                                <div>
                                    <h4>Backend Development</h4>
                                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                                    </p>
                                </div>
                            </div>

                            <div class="col-md-6 icon-box">
                                <i class="fa-brands fa-meetup"></i>
                                <div>
                                    <h4>Speed Optimization</h4>
                                    <p>Expedita veritatis consequuntur nihil tempore laudantium vitae denat pacta</p>
                                </div>
                            </div>

                            <div class="col-md-6 icon-box">
                                <i class="fa-brands fa-meetup"></i>
                                <div>
                                    <h4>SEO Optimization</h4>
                                    <p>Et fuga et deserunt et enim. Dolorem architecto ratione tensa raptor marte</p>
                                </div>
                            </div>

                            <div class="col-md-6 icon-box">
                                <i class="fa-brands fa-meetup"></i>
                                <div>
                                    <h4>Application Testing</h4>
                                    <p>Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere</p>
                                </div>
                            </div>

                            <div class="col-md-6 icon-box">
                                <i class="fa-brands fa-meetup"></i>
                                <div>
                                    <h4>Content Uploads</h4>
                                    <p>Est autem dicta beatae suscipit. Sint veritatis et sit quasi ab aut inventore</p>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </section>


        <!-- # stats Section -->
        <section id="stats">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-3 col-md-6 fade-element fade-down">
                        <div class="stats-item d-flex align-items-center w-100 h-100">
                            <i class="bi bi-emoji-smile color-blue flex-shrink-0"></i>
                            <div>
                                <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1"
                                    class="purecounter">232</span>
                                <p>Happy Clients</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 fade-element fade-down">
                        <div class="stats-item d-flex align-items-center w-100 h-100">
                            <i class="bi bi-journal-richtext color-orange flex-shrink-0" style="color: #ee6c20;"></i>
                            <div>
                                <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1"
                                    class="purecounter">521</span>
                                <p>Projects</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 fade-element fade-down">
                        <div class="stats-item d-flex align-items-center w-100 h-100">
                            <i class="bi bi-headset color-green flex-shrink-0" style="color: #15be56;"></i>
                            <div>
                                <span data-purecounter-start="0" data-purecounter-end="1463"
                                    data-purecounter-duration="1" class="purecounter">1463</span>
                                <p>Hours Of Support</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 fade-element fade-down">
                        <div class="stats-item d-flex align-items-center w-100 h-100">
                            <i class="bi bi-people color-pink flex-shrink-0" style="color: #bb0852;"></i>
                            <div>
                                <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1"
                                    class="purecounter">15</span>
                                <p>Hard Workers</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- # portfolio Section -->
        <section id="portfolio">
            <div class="container">
                <div class="text-center fade-element fade-down">
                    <div class="section-title">
                        <span>FEATURED SERVICES</span>
                    </div>
                    <div class="section-heading">
                        <h2 id="fade-text-3" class="mb-0 pb-0">We help to get Consultation!</h2>
                        <p class="service-text">We offer a wide range of specialized services to meet the unique needs of
                            students and
                            professionals at different stages of their educational journey.
                            Our core services include:
                        </p>
                    </div>
                </div>
                <div class="d-flex justify-content-center" id="filter-buttons">
                    <ul class="tap rounded card_color ">
                        <li class="btn py-3 active" data-filter="all">All Works</li>
                        <li class="btn py-3" data-filter="tap1">Website</li>
                        <li class="btn py-3" data-filter="tap2">Software</li>
                        <li class="btn py-3" data-filter="tap3">Markting</li>
                    </ul>
                </div>

                <div class="row mt-4" id="filterable-cards">
                    <div class="col-md-3 col-sm-6 pb-4" data-name="card1" data-filter="tap1">
                        <div class="card p-0">
                            <div class="p_img position-relative">
                                <img src="{{ asset('images/project_thumbnail_1.jpg') }}" class="card-img-top"
                                    alt="..." />
                                <div class="product-btn position-absolute top-50 start-50 translate-middle ">
                                    <div class="text-center text-light p_heading my-3">
                                        <div class="p_name"><a href="#">Al Madina Pharmaceuticals</a></div>
                                        <span class="p-cate"><a href="#">Healthcare & Fitness</a></span>
                                    </div>
                                    <div class="d-flex p_btn justify-content-center">
                                        <a class="button" href="#">Read More <i
                                                class="fa-solid fa-arrow-right"></i></a>
                                        <a class="button" href="#">View Demo <i
                                                class="fa-solid fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body p-2 px-3 d-flex align-items-center">
                                <span><img src="https://retinasoft.com.bd/assets/img/its/coding.png" alt=""
                                        style="width: 50px;"></span>
                                <span class="p_comp"><a href="#">Al Madina</a></span>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6 pb-4" data-name="card2" data-filter="tap2">
                        <div class="card p-0">
                            <div class="p_img position-relative">
                                <img src="{{ asset('images/project_thumbnail_8.jpg') }}" class="card-img-top"
                                    alt="..." />
                                <div class="product-btn position-absolute top-50 start-50 translate-middle ">
                                    <div class="text-center text-light p_heading my-3">
                                        <div class="p_name"><a href="#">XFNTY GAMING</a></div>
                                        <span class="p-cate"><a href="#">Business Portfolio</a></span>
                                    </div>
                                    <div class="d-flex p_btn justify-content-center">
                                        <a class="button" href="#">Read More <i
                                                class="fa-solid fa-arrow-right"></i></a>
                                        <a class="button" href="#">View Demo <i
                                                class="fa-solid fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body p-2 px-3 d-flex align-items-center">
                                <span><img src="https://retinasoft.com.bd/assets/img/its/coding.png" alt=""
                                        style="width: 50px;"></span>
                                <span class="p_comp"><a href="#">XFNTY GAMING</a></span>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6 pb-4" data-name="card3" data-filter="tap3">
                        <div class="card p-0">
                            <div class="p_img position-relative">
                                <img src="{{ asset('images/project_thumbnail_2.jpg') }}" class="card-img-top"
                                    alt="..." />
                                <div class="product-btn position-absolute top-50 start-50 translate-middle ">
                                    <div class="text-center text-light p_heading my-3">
                                        <div class="p_name"><a href="#">Shoe Master Footwear</a></div>
                                        <span class="p-cate"><a href="#">Business Portfolio</a></span>
                                    </div>
                                    <div class="d-flex p_btn justify-content-center">
                                        <a class="button" href="#">Read More <i
                                                class="fa-solid fa-arrow-right"></i></a>
                                        <a class="button" href="#">View Demo <i
                                                class="fa-solid fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body p-2 px-3 d-flex align-items-center">
                                <span><img src="https://retinasoft.com.bd/assets/img/its/coding.png" alt=""
                                        style="width: 50px;"></span>
                                <span class="p_comp"><a href="#">Shoe Master</a></span>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6 pb-4" data-name="card1" data-filter="tap1">
                        <div class="card p-0">
                            <div class="p_img position-relative">
                                <img src="{{ asset('images/project_thumbnail_6.jpg') }}" class="card-img-top"
                                    alt="..." />
                                <div class="product-btn position-absolute top-50 start-50 translate-middle ">
                                    <div class="text-center text-light p_heading my-3">
                                        <div class="p_name"><a href="#">Ahyan Jute Mills</a></div>
                                        <span class="p-cate"><a href="#">Business Portfolio</a></span>
                                    </div>
                                    <div class="d-flex p_btn justify-content-center">
                                        <a class="button" href="#">Read More <i
                                                class="fa-solid fa-arrow-right"></i></a>
                                        <a class="button" href="#">View Demo <i
                                                class="fa-solid fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body p-2 px-3 d-flex align-items-center">
                                <span><img src="https://retinasoft.com.bd/assets/img/its/coding.png" alt=""
                                        style="width: 50px;"></span>
                                <span class="p_comp"><a href="#">Jute Mills</a></span>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6 pb-4" data-name="card2" data-filter="tap2">
                        <div class="card p-0">
                            <div class="p_img position-relative">
                                <img src="{{ asset('images/project_thumbnail_4.jpg') }}" class="card-img-top"
                                    alt="..." />
                                <div class="product-btn position-absolute top-50 start-50 translate-middle ">
                                    <div class="text-center text-light p_heading my-3">
                                        <div class="p_name"><a href="#">Business Page</a></div>
                                        <span class="p-cate"><a href="#">e-Commerce</a></span>
                                    </div>
                                    <div class="d-flex p_btn justify-content-center">
                                        <a class="button" href="#">Read More <i
                                                class="fa-solid fa-arrow-right"></i></a>
                                        <a class="button" href="#">View Demo <i
                                                class="fa-solid fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body p-2 px-3 d-flex align-items-center">
                                <span><img src="https://retinasoft.com.bd/assets/img/its/coding.png" alt=""
                                        style="width: 50px;"></span>
                                <span class="p_comp"><a href="#">Business Page</a></span>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6 pb-4" data-name="card3" data-filter="tap3">
                        <div class="card p-0">
                            <div class="p_img position-relative">
                                <img src="{{ asset('images/project_thumbnail_5.jpg') }}" class="card-img-top"
                                    alt="..." />
                                <div class="product-btn position-absolute top-50 start-50 translate-middle ">
                                    <div class="text-center text-light p_heading my-3">
                                        <div class="p_name"><a href="#">Bd Current News24</a></div>
                                        <span class="p-cate"><a href="#">Blog & News Media</a></span>
                                    </div>
                                    <div class="d-flex p_btn justify-content-center">
                                        <a class="button" href="#">Read More <i
                                                class="fa-solid fa-arrow-right"></i></a>
                                        <a class="button" href="#">View Demo <i
                                                class="fa-solid fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body p-2 px-3 d-flex align-items-center">
                                <span><img src="https://retinasoft.com.bd/assets/img/its/coding.png" alt=""
                                        style="width: 50px;"></span>
                                <span class="p_comp"><a href="#">News24</a></span>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6 pb-4" data-name="card1" data-filter="tap1">
                        <div class="card p-0">
                            <div class="p_img position-relative">
                                <img src="{{ asset('images/project_thumbnail_6.jpg') }}" class="card-img-top"
                                    alt="..." />
                                <div class="product-btn position-absolute top-50 start-50 translate-middle ">
                                    <div class="text-center text-light p_heading my-3">
                                        <div class="p_name"><a href="#">Business Portfolio</a></div>
                                        <span class="p-cate"><a href="#">Portfolio</a></span>
                                    </div>
                                    <div class="d-flex p_btn justify-content-center">
                                        <a class="button" href="#">Read More <i
                                                class="fa-solid fa-arrow-right"></i></a>
                                        <a class="button" href="#">View Demo <i
                                                class="fa-solid fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body p-2 px-3 d-flex align-items-center">
                                <span><img src="https://retinasoft.com.bd/assets/img/its/coding.png" alt=""
                                        style="width: 50px;"></span>
                                <span class="p_comp"><a href="#">Portfolio</a></span>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6 pb-4" data-name="card2" data-filter="tap2">
                        <div class="card p-0">
                            <div class="p_img position-relative">
                                <img src="{{ asset('images/project_thumbnail_7.jpg') }}" class="card-img-top"
                                    alt="..." />
                                <div class="product-btn position-absolute top-50 start-50 translate-middle ">
                                    <div class="text-center text-light p_heading my-3">
                                        <div class="p_name"><a href="#">Voetmanschap</a></div>
                                        <span class="p-cate"><a href="#">e-Commerce</a></span>
                                    </div>
                                    <div class="d-flex p_btn justify-content-center">
                                        <a class="button" href="#">Read More <i
                                                class="fa-solid fa-arrow-right"></i></a>
                                        <a class="button" href="#">View Demo <i
                                                class="fa-solid fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body p-2 px-3 d-flex align-items-center">
                                <span><img src="https://retinasoft.com.bd/assets/img/its/coding.png" alt=""
                                        style="width: 50px;"></span>
                                <span class="p_comp"><a href="#">Voetmanschap</a></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- # award Section -->
        <section id="award"
            style="background-image: url( {{ asset('images/bg-content-05.png') }}); background-size: cover;">
            <div class="container">
                <div class="">
                    <div class="award-title pb-5">
                        <h1 class="fade-element fade-left">Professional Accreditation &<span style="color: red;">
                                Membership
                            </span></h1>
                    </div>
                </div>
                <div class="d-flex owl-carousel fade-element fade-down">
                    <div class="mx-2">
                        <div class="card h-100">
                            <div class="card-body">
                                <div class="award-img">
                                    <img src="{{ asset('images/awards-1.png') }}" class="img-fluid" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mx-2">
                        <div class="card h-100">
                            <div class="card-body">
                                <div class="award-img">
                                    <img src="{{ asset('images/awards-2.png') }}" class="img-fluid" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mx-2">
                        <div class="card h-100">
                            <div class="card-body">
                                <div class="award-img">
                                    <img src="{{ asset('images/awards-3.png') }}" class="img-fluid" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mx-2">
                        <div class="card h-100">
                            <div class="card-body">
                                <div class="award-img">
                                    <img src="{{ asset('images/awards-4.png') }}" class="img-fluid" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mx-2">
                        <div class="card h-100">
                            <div class="card-body">
                                <div class="award-img">
                                    <img src="{{ asset('images/awards-5.png') }}" class="img-fluid" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mx-2">
                        <div class="card h-100">
                            <div class="card-body">
                                <div class="award-img">
                                    <img src="{{ asset('images/awards-6.png') }}" class="img-fluid" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mx-2">
                        <div class="card h-100">
                            <div class="card-body">
                                <div class="award-img">
                                    <img src="{{ asset('images/awards-7.png') }}" class="img-fluid" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mx-2">
                        <div class="card h-100">
                            <div class="card-body">
                                <div class="award-img">
                                    <img src="{{ asset('images/awards-9.png') }}" class="img-fluid" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mx-2">
                        <div class="card h-100">
                            <div class="card-body">
                                <div class="award-img">
                                    <img src="{{ asset('images/awards-6.png') }}" class="img-fluid" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        @include('frontend.contactCard')
        @include('frontend.footerCard')
    </main>
@endsection
