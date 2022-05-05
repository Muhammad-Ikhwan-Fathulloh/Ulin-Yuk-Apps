<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Ulin Yuk</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600&family=Teko:wght@400;500;600&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('lib')}}/animate/animate.min.css" rel="stylesheet">
    <link href="{{asset('lib')}}/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="{{asset('lib')}}/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('css')}}/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{asset('css')}}/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border position-relative text-primary" style="width: 6rem; height: 6rem;" role="status"></div>
        <img class="position-absolute top-50 start-50 translate-middle" src="img/icons/icon-1.png" alt="Icon">
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-dark p-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="row gx-0 d-none d-lg-flex">
            <div class="col-lg-7 px-5 text-start">
                <div class="h-100 d-inline-flex align-items-center py-3 me-3">
                    <a class="text-body px-2" href="tel:+6281234567890"><i class="fa fa-phone-alt text-primary me-2"></i>+62 812 3456 7890</a>
                    <a class="text-body px-2" href="mailto:ulinyuk@gmail.com"><i class="fa fa-envelope-open text-primary me-2"></i>ulinyuk@gmail.com</a>
                </div>
            </div>
            <div class="col-lg-5 px-5 text-end">
                <div class="h-100 d-inline-flex align-items-center py-3 me-2">
                    <a class="text-body px-2" href="">Terms</a>
                    <a class="text-body px-2" href="">Privacy</a>
                </div>
                <div class="h-100 d-inline-flex align-items-center">
                    <a class="btn btn-sm-square btn-outline-body me-1" href="https://facebook.com/orbitfutureacademy/"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-sm-square btn-outline-body me-1" href="https://twitter.com/orbitacademyid"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-sm-square btn-outline-body me-1" href="https://www.linkedin.com/company/orbitfutureacademy/"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-sm-square btn-outline-body me-0" href="https://www.instagram.com/orbitfutureacademyid/"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
        <a href="index.html" class="navbar-brand ms-4 ms-lg-0">
            <h1 class="text-primary m-0"><img class="me-3" src="{{asset('img')}}/icons/icon-1.png" alt="Icon">Ulin Yuk</h1>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="index.html" class="nav-item nav-link active">Home</a>
                <a href="about.html" class="nav-item nav-link">About</a>
                <!-- <a href="service.html" class="nav-item nav-link">Services</a> -->


                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Services</a>
                    <div class="dropdown-menu border-0 m-0">
                        <a href="destinasi.html" class="dropdown-item">Destination</a>
                        <a href="kuliner.html" class="dropdown-item">Culinary</a>
                    </div>
                </div>

                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu border-0 m-0">
                        <!-- <a href="feature.html" class="dropdown-item">Our Features</a> -->
                        <!-- <a href="project.html" class="dropdown-item">Our Projects</a> -->
                        <a href="team.html" class="dropdown-item">Team Members</a>
                        <!-- <a href="appointment.html" class="dropdown-item">Appointment</a> -->
                        <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                        <a href="contact.html" class="dropdown-item">Contact</a>
                        <!-- <a href="404.html" class="dropdown-item">404 Page</a> -->
                    </div>
                </div>
            </div>
            <a href="/chatbot.html" class="btn btn-primary py-2 px-4 d-none d-lg-block">Chatbot</a>
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Carousel Start -->
    <div class="container-fluid p-0 pb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="owl-carousel header-carousel position-relative">
            <div class="owl-carousel-item position-relative" data-dot="<img src='{{asset('img')}}/carousel/carousel-2.png'>">
                <img class="img-fluid" src="{{asset('img')}}/carousel/carousel-2.png" alt="">
                <div class="owl-carousel-inner">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-10 col-lg-8">
                                <h1 class="display-1 text-white animated slideInDown">Best Website for Bandung Destination Recommended Services</h1>
                                <p class="fs-5 fw-medium text-white mb-4 pb-3">Find your favorite destination you want to visit here.</p>
                                <a href="/about.html" class="btn btn-primary py-3 px-5 animated slideInLeft">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel-item position-relative" data-dot="<img src='{{asset('img')}}/carousel/carousel-1.png'>">
                <img class="img-fluid" src="{{asset('img')}}/carousel/carousel-1.png" alt="">
                <div class="owl-carousel-inner">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-10 col-lg-8">
                                <h1 class="display-1 text-white animated slideInDown">Best Website for Bandung Destination Recommended Services</h1>
                                <p class="fs-5 fw-medium text-white mb-4 pb-3">Find your favorite destination you want to visit here.</p>
                                <a href="/about.html" class="btn btn-primary py-3 px-5 animated slideInLeft">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel-item position-relative" data-dot="<img src='{{asset('img')}}/carousel/carousel-4.png'>">
                <img class="img-fluid" src="{{asset('img')}}/carousel/carousel-4.png" alt="">
                <div class="owl-carousel-inner">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-10 col-lg-8">
                                <h1 class="display-1 text-white animated slideInDown">Best Website for Bandung Destination Recommended Services</h1>
                                <p class="fs-5 fw-medium text-white mb-4 pb-3">Find your favorite destination you want to visit here.</p>
                                <a href="/about.html" class="btn btn-primary py-3 px-5 animated slideInLeft">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Facts Start -->
    <!-- <div class="container-xxl py-5">
        <div class="container pt-5">
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="fact-item text-center bg-light h-100 p-5 pt-0">
                        <div class="fact-icon">
                            <img src="img/icons/icon-2.png" alt="Icon">
                        </div>
                        <h3 class="mb-3">Design Approach</h3>
                        <p class="mb-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="fact-item text-center bg-light h-100 p-5 pt-0">
                        <div class="fact-icon">
                            <img src="img/icons/icon-3.png" alt="Icon">
                        </div>
                        <h3 class="mb-3">Innovative Solutions</h3>
                        <p class="mb-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="fact-item text-center bg-light h-100 p-5 pt-0">
                        <div class="fact-icon">
                            <img src="img/icons/icon-4.png" alt="Icon">
                        </div>
                        <h3 class="mb-3">Project Management</h3>
                        <p class="mb-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet.</p>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Facts End -->


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="about-img">
                        <img class="img-fluid" src="{{asset('img')}}/about/about-1.png" alt="">
                        <img class="img-fluid" src="{{asset('img')}}/about/about-2.png" alt="">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <h4 class="section-title">About Us</h4>
                    <h1 class="display-5 mb-4">A Creative Architecture Agency For Your Dream Home</h1>
                    <p>Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                    <p class="mb-4">Stet no et lorem dolor et diam, amet duo ut dolore vero eos. No stet est diam rebum amet diam ipsum. Clita clita labore, dolor duo nonumy clita sit at, sed sit sanctus dolor eos.</p>
                    <div class="d-flex align-items-center mb-5">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center border border-5 border-primary" style="width: 120px; height: 120px;">
                            <h1 class="display-1 mb-n2" data-toggle="counter-up">24</h1>
                        </div>
                        <div class="ps-4">
                            <h3>Destination</h3>
                            <h3>Culinary</h3>
                            <h3 class="mb-0">Recommendation</h3>
                        </div>
                    </div>
                    <a class="btn btn-primary py-3 px-5" href="">Read More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h4 class="section-title">Our Services</h4>
                <h4 class="display-5 mb-4">We Focused on your Culinary and Tourism Destinations in Bandung, We also provide bots for you to ask.</h4>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item d-flex position-relative text-center h-100">
                        <img class="bg-img" src="{{asset('img')}}/service/service-1.png" alt="">
                        <div class="service-text p-5">
                            <img class="mb-4" src="{{asset('img')}}/icons/icon-5.png" alt="Icon">
                            <h3 class="mb-3">Destinasi</h3>
                            <p class="mb-4">Temukan destinasi wisata favorit anda disini, mulai dari destinasi wisata alam, pendidikan, sejarah, budaya, religi dan lain-lain. Semua kami rekomendasikan kepada anda.</p>
                            <a class="btn" href="/destinasi.html"><i class="fa fa-plus text-primary me-3"></i>Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item d-flex position-relative text-center h-100">
                        <img class="bg-img" src="{{asset('img')}}/service/service-2.png" alt="">
                        <div class="service-text p-5">
                            <img class="mb-4" src="{{asset('img')}}/icons/icon-6.png" alt="Icon">
                            <h3 class="mb-3">Kuliner</h3>
                            <p class="mb-4">Semua rekomendasi kuliner favorit anda dapat anda temukan disini, mulai dari aneka minuman, aneka kue, cemilan atau snack, serta street food.</p>
                            <a class="btn" href="/kuliner.html"><i class="fa fa-plus text-primary me-3"></i>Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item d-flex position-relative text-center h-100">
                        <img class="bg-img" src="{{asset('img')}}/service/service-3.png" alt="">
                        <div class="service-text p-5">
                            <img class="mb-4" src="{{asset('img')}}/icons/icon-7.png" alt="Icon">
                            <h3 class="mb-3">Chatbot</h3>
                            <p class="mb-4">Konsultasikan destinasi serta kuliner yang anda inginkan dengan fitur layanan Chat Bot kami. Kami menghadirkan berbagai rekomendasi destinasi, serta kuliner favorit anda.</p>
                            <a class="btn" href=""><i class="fa fa-plus text-primary me-3"></i>Read More</a>
                        </div>
                    </div>
                </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Feature Start -->
    <!-- <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h4 class="section-title">Why Choose Us!</h4>
                    <h1 class="display-5 mb-4">Why You Should Trust Us? Learn More About Us!</h1>
                    <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                    <div class="row g-4">
                        <div class="col-12">
                            <div class="d-flex align-items-start">
                                <img class="flex-shrink-0" src="img/icons/icon-2.png" alt="Icon">
                                <div class="ms-4">
                                    <h3>Design Approach</h3>
                                    <p class="mb-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="d-flex align-items-start">
                                <img class="flex-shrink-0" src="img/icons/icon-3.png" alt="Icon">
                                <div class="ms-4">
                                    <h3>Innovative Solutions</h3>
                                    <p class="mb-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="d-flex align-items-start">
                                <img class="flex-shrink-0" src="img/icons/icon-4.png" alt="Icon">
                                <div class="ms-4">
                                    <h3>Project Management</h3>
                                    <p class="mb-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="feature-img">
                        <img class="img-fluid" src="img/about/about-3.png" alt="">
                        <img class="img-fluid" src="img/about/about-4.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Feature End -->


    <!-- Project Start -->
    <!-- <div class="container-xxl project py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h4 class="section-title">Our Recommended Destinations</h4>
                <h1 class="display-5 mb-4">Visit Our Latest Projects And Our Innovative Works</h1>
            </div>
            <div class="row g-4 wow fadeInUp" data-wow-delay="0.3s">
                <div class="col-lg-4">
                    <div class="nav nav-pills d-flex justify-content-between w-100 h-100 me-4">
                        <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4 active" data-bs-toggle="pill" data-bs-target="#tab-pane-1" type="button">
                             <h3 class="m-0">01. Modern Complex</h3>
                        </button>
                        <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4" data-bs-toggle="pill" data-bs-target="#tab-pane-2" type="button">
                            <h3 class="m-0">02. Royal Hotel</h3>
                        </button>
                        <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4" data-bs-toggle="pill" data-bs-target="#tab-pane-3" type="button">
                            <h3 class="m-0">03. Mexwel Buiding</h3>
                        </button>
                        <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-0" data-bs-toggle="pill" data-bs-target="#tab-pane-4" type="button">
                            <h3 class="m-0">04. Shopping Complex</h3>
                        </button>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="tab-content w-100">
                        <div class="tab-pane fade show active" id="tab-pane-1">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute img-fluid w-100 h-100" src="img/project-1.jpg"
                                            style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h1 class="mb-3">25 Years Of Experience In Architecture Industry</h1>
                                    <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>Design Approach</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>Innovative Solutions</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>Project Management</p>
                                    <a href="" class="btn btn-primary py-3 px-5 mt-3">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-pane-2">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute img-fluid w-100 h-100" src="img/project-2.jpg"
                                            style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h1 class="mb-3">25 Years Of Experience In Architecture Industry</h1>
                                    <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>Design Approach</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>Innovative Solutions</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>Project Management</p>
                                    <a href="" class="btn btn-primary py-3 px-5 mt-3">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-pane-3">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute img-fluid w-100 h-100" src="img/project-3.jpg"
                                            style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h1 class="mb-3">25 Years Of Experience In Architecture Industry</h1>
                                    <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>Design Approach</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>Innovative Solutions</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>Project Management</p>
                                    <a href="" class="btn btn-primary py-3 px-5 mt-3">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-pane-4">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute img-fluid w-100 h-100" src="img/project-4.jpg"
                                            style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h1 class="mb-3">25 Years Of Experience In Architecture Industry</h1>
                                    <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>Design Approach</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>Innovative Solutions</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>Project Management</p>
                                    <a href="" class="btn btn-primary py-3 px-5 mt-3">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="container-xxl project py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h4 class="section-title">Our Recommended Culinary</h4>
                <h1 class="display-5 mb-4">Visit Our Latest Projects And Our Innovative Works</h1>
            </div>
            <div class="row g-4 wow fadeInUp" data-wow-delay="0.3s">
                <div class="col-lg-4">
                    <div class="nav nav-pills d-flex justify-content-between w-100 h-100 me-4">
                        <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4 active" data-bs-toggle="pill" data-bs-target="#tab-pane-5" type="button">
                             <h3 class="m-0">01. Modern Complex</h3>
                        </button>
                        <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4" data-bs-toggle="pill" data-bs-target="#tab-pane-6" type="button">
                            <h3 class="m-0">02. Royal Hotel</h3>
                        </button>
                        <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4" data-bs-toggle="pill" data-bs-target="#tab-pane-7" type="button">
                            <h3 class="m-0">03. Mexwel Buiding</h3>
                        </button>
                        <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-0" data-bs-toggle="pill" data-bs-target="#tab-pane-8" type="button">
                            <h3 class="m-0">04. Shopping Complex</h3>
                        </button>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="tab-content w-100">
                        <div class="tab-pane fade show active" id="tab-pane-5">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute img-fluid w-100 h-100" src="img/project-1.jpg"
                                            style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h1 class="mb-3">25 Years Of Experience In Architecture Industry</h1>
                                    <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>Design Approach</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>Innovative Solutions</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>Project Management</p>
                                    <a href="" class="btn btn-primary py-3 px-5 mt-3">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-pane-6">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute img-fluid w-100 h-100" src="img/project-2.jpg"
                                            style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h1 class="mb-3">25 Years Of Experience In Architecture Industry</h1>
                                    <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>Design Approach</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>Innovative Solutions</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>Project Management</p>
                                    <a href="" class="btn btn-primary py-3 px-5 mt-3">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-pane-7">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute img-fluid w-100 h-100" src="img/project-3.jpg"
                                            style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h1 class="mb-3">25 Years Of Experience In Architecture Industry</h1>
                                    <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>Design Approach</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>Innovative Solutions</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>Project Management</p>
                                    <a href="" class="btn btn-primary py-3 px-5 mt-3">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-pane-8">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute img-fluid w-100 h-100" src="img/project-4.jpg"
                                            style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h1 class="mb-3">25 Years Of Experience In Architecture Industry</h1>
                                    <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>Design Approach</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>Innovative Solutions</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>Project Management</p>
                                    <a href="" class="btn btn-primary py-3 px-5 mt-3">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Project End -->


    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h4 class="section-title">Team Members</h4>
                <h1 class="display-5 mb-4">METRIC AI</h1>
            </div>

            <div class="row g-0 team-items">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item position-relative">
                        <div class="position-relative">
                            <img class="img-fluid" src="{{asset('img')}}/team/bella.png" alt="">
                            <div class="team-social text-center">
                                <a class="btn btn-square" href="https://linkedin.com/in/bella-septina-ika-hartanti/"><i class="fab fa-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="bg-light text-center p-4">
                            <h3 class="mt-2">Bella Septina Ika Hartanti</h3>
                            <span class="text-primary">Coach</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item position-relative">
                        <div class="position-relative">
                            <img class="img-fluid" src="{{asset('img')}}/team/rusydi.png" alt="">
                            <div class="team-social text-center">
                                <a class="btn btn-square" href="https://linkedin.com/in/rusydimuhammad"><i class="fab fa-linkedin"></i></a>
                                <a class="btn btn-square" href="https://www.instagram.com/rusydimuhammad/"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="bg-light text-center p-4">
                            <h3 class="mt-2">Muhammad Rusydi</h3>
                            <span class="text-primary">AI Engineer</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item position-relative">
                        <div class="position-relative">
                            <img class="img-fluid" src="{{asset('img')}}/team/fanny.png" alt="">
                            <div class="team-social text-center">
                                <a class="btn btn-square" href="https://www.instagram.com/fannyfbryn_/"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="bg-light text-center p-4">
                            <h4 class="mt-2">Fanny Febryani</h3>
                            <span class="text-primary">AI Engineer</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item position-relative">
                        <div class="position-relative">
                            <img class="img-fluid" src="{{asset('img')}}/team/ikhwan.png" alt="">
                            <div class="team-social text-center">
                                <a class="btn btn-square" href="https://www.linkedin.com/in/muhammad-ikhwan-fathulloh-4a9835165/"><i class="fab fa-linkedin"></i></a>
                                <a class="btn btn-square" href="https://instagram/ikhwan_fathulloh/"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="bg-light text-center p-4">
                            <h4 class="mt-2">Muhammad Ikhwan Fathulloh</h3>
                            <span class="text-primary">Back End Developer</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item position-relative">
                        <div class="position-relative">
                            <img class="img-fluid" src="{{asset('img')}}/team/jauhar.png" alt="">
                            <div class="team-social text-center">
                                <a class="btn btn-square" href="https://www.linkedin.com/in/ananda-jauhar-firdaus-313879189/"><i class="fab fa-linkedin"></i></a>
                                <a class="btn btn-square" href="https://www.instagram.com/anandajauhar/"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="bg-light text-center p-4">
                            <h3 class="mt-2">Ananda Jauhar Firdaus</h3>
                            <span class="text-primary">Front End Developer</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item position-relative">
                        <div class="position-relative">
                            <img class="img-fluid" src="{{asset('img')}}/team/rafly.png" alt="">
                            <div class="team-social text-center">
                                <a class="btn btn-square" href="https://www.linkedin.com/in/raframput/"><i class="fab fa-linkedin"></i></a>
                                <a class="btn btn-square" href="https://www.instagram.com/raframput/"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="bg-light text-center p-4">
                            <h3 class="mt-2">Rafly Ramadhani Putra</h3>
                            <span class="text-primary">Front End Developer</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->


    <!-- Appointment Start -->
    <!-- <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h4 class="section-title">Appointment</h4>
                    <h1 class="display-5 mb-4">Make An Appointment To Start Your Dream Project</h1>
                    <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                    <div class="row g-4">
                        <div class="col-12">
                            <div class="d-flex">
                                <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-light" style="width: 65px; height: 65px;">
                                    <i class="fa fa-2x fa-phone-alt text-primary"></i>
                                </div>
                                <div class="ms-4">
                                    <p class="mb-2">Call Us Now</p>
                                    <h3 class="mb-0">+012 345 6789</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="d-flex">
                                <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-light" style="width: 65px; height: 65px;">
                                    <i class="fa fa-2x fa-envelope-open text-primary"></i>
                                </div>
                                <div class="ms-4">
                                    <p class="mb-2">Mail Us Now</p>
                                    <h3 class="mb-0">info@example.com</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="row g-3">
                        <div class="col-12 col-sm-6">
                            <input type="text" class="form-control" placeholder="Your Name" style="height: 55px;">
                        </div>
                        <div class="col-12 col-sm-6">
                            <input type="email" class="form-control" placeholder="Your Email" style="height: 55px;">
                        </div>
                        <div class="col-12 col-sm-6">
                            <input type="text" class="form-control" placeholder="Your Mobile" style="height: 55px;">
                        </div>
                        <div class="col-12 col-sm-6">
                            <select class="form-select" style="height: 55px;">
                                <option selected>Choose Service</option>
                                <option value="1">Service 1</option>
                                <option value="2">Service 2</option>
                                <option value="3">Service 3</option>
                            </select>
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="date" id="date" data-target-input="nearest">
                                <input type="text"
                                    class="form-control datetimepicker-input"
                                    placeholder="Choose Date" data-target="#date" data-toggle="datetimepicker" style="height: 55px;">
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="time" id="time" data-target-input="nearest">
                                <input type="text"
                                    class="form-control datetimepicker-input"
                                    placeholder="Choose Date" data-target="#time" data-toggle="datetimepicker" style="height: 55px;">
                            </div>
                        </div>
                        <div class="col-12">
                            <textarea class="form-control" rows="5" placeholder="Message"></textarea>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary w-100 py-3" type="submit">Book Appointment</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Appointment End -->


    <!-- Contact Start -->

    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h4 class="section-title">Contact Us</h4>
                <h1 class="display-5 mb-4">If You Have Any Query, Please Feel Free Contact Us</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="d-flex flex-column justify-content-between h-100">
                        <div class="bg-light d-flex align-items-center w-100 p-4 mb-4">
                            <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-dark" style="width: 55px; height: 55px;">
                                <i class="fa fa-map-marker-alt text-primary"></i>
                            </div>
                            <div class="ms-4">
                                <p class="mb-2">Address</p>
                                <h3 class="mb-0">Bandung, West Java</h3>
                            </div>
                        </div>
                        <div class="bg-light d-flex align-items-center w-100 p-4 mb-4">
                            <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-dark" style="width: 55px; height: 55px;">
                                <i class="fa fa-phone-alt text-primary"></i>
                            </div>
                            <div class="ms-4">
                                <p class="mb-2">Call Us Now</p>
                                <h3 class="mb-0">+62 812 3456 7890</h3>
                            </div>
                        </div>
                        <div class="bg-light d-flex align-items-center w-100 p-4">
                            <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-dark" style="width: 55px; height: 55px;">
                                <i class="fa fa-envelope-open text-primary"></i>
                            </div>
                            <div class="ms-4">
                                <p class="mb-2">Mail Us Now</p>
                                <h3 class="mb-0">ulinyuk@gmail.com</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <!-- <p class="mb-4">The contact form is currently inactive. Get a functional and working contact form with Ajax & PHP in a few minutes. Just copy and paste the files, add a little code and you're done. <a href="https://htmlcodex.com/contact-form">Download Now</a>.</p> -->
                    <form>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="name" placeholder="Your Name">
                                    <label for="name">Your Name</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="email" placeholder="Your Email">
                                    <label for="email">Your Email</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="subject" placeholder="Subject">
                                    <label for="subject">Subject</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Leave a message here" id="message" style="height: 100px"></textarea>
                                    <label for="message">Message</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Contact End -->


    <!-- Testimonial Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h4 class="section-title">Testimonial</h4>
                <h1 class="display-5 mb-4">Thousands Of Customers Who Trust Us And Our Services</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                <div class="testimonial-item text-center" data-dot="<img class='img-fluid' src='img/testimonial-1.jpg' alt=''>">
                    <p class="fs-5">Aplikasi yang bagus, fiturnya lengkap, rekomendasi yang diberikan sesuai.</p>
                    <h3>Sarah</h3>
                    <span class="text-primary">Sales Manager</span>
                </div>
                <div class="testimonial-item text-center" data-dot="<img class='img-fluid' src='img/testimonial-2.jpg' alt=''>">
                    <p class="fs-5">Banyak pilihan rekomendasi kuliner, tampilannya cukup unik dan menarik, tingkatkan selalu kualitas pelayanan.</p>
                    <h3>Josh</h3>
                    <span class="text-primary">Product Manager</span>
                </div>
                <div class="testimonial-item text-center" data-dot="<img class='img-fluid' src='img/testimonial-3.jpg' alt=''>">
                    <p class="fs-5">Berbagai kuliner bisa ditemukan disini, fitur sangat membantu merekomendasikan kuliner Kota Bandung, hasil akurat, terima kasih.</p>
                    <h3>Farhan</h3>
                    <span class="text-primary">UI/UX Designer</span>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-body footer mt-5 pt-5 px-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-4 col-md-6">
                    <h3 class="text-light mb-4">Address</h3>
                    <p class="mb-2"><i class="fa fa-map-marker-alt text-primary me-3"></i>Bandung, West Java</p>
                    <p class="mb-2"><i class="fa fa-phone-alt text-primary me-3"></i>+62 812 3456 7890</p>
                    <p class="mb-2"><i class="fa fa-envelope text-primary me-3"></i>ulinyuk@gmail.com</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-square btn-outline-body me-1" href="https://twitter.com/orbitacademyid"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square btn-outline-body me-1" href="https://facebook.com/orbitfutureacademy/"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-outline-body me-1" href="https://www.youtube.com/channel/UCsWLJYr7D3tlCeQxriYurnQ"><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-square btn-outline-body me-0" href="https://www.linkedin.com/company/orbitfutureacademy/"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <h3 class="text-light mb-4">Services</h3>
                    <a class="btn btn-link" href="/destinasi.html">Destination</a>
                    <a class="btn btn-link" href="/kuliner.html">Culinary</a>
                </div>
                <div class="col-lg-4 col-md-6">
                    <h3 class="text-light mb-4">Quick Links</h3>
                    <a class="btn btn-link" href="/about.html">About Us</a>
                    <a class="btn btn-link" href="/contact.html">Contact Us</a>
                    <a class="btn btn-link" href="/testimonial.html">Testimonial</a>
                </div>

            </div>
        </div>
        <div class="container-fluid copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a href="#">Ulin Yuk</a>, All Right Reserved.
                    </div>
                    <!-- <div class="col-md-6 text-center text-md-end">
                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        <!-- Designed By <a href="https://htmlcodex.com">HTML Codex</a>
                        <br> Distributed By: <a class="border-bottom" href="https://themewagon.com" target="_blank">ThemeWagon</a>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('lib')}}/wow/wow.min.js"></script>
    <script src="{{asset('lib')}}/easing/easing.min.js"></script>
    <script src="{{asset('lib')}}/waypoints/waypoints.min.js"></script>
    <script src="{{asset('lib')}}/counterup/counterup.min.js"></script>
    <script src="{{asset('lib')}}/owlcarousel/owl.carousel.min.js"></script>
    <script src="{{asset('lib')}}/tempusdominus/js/moment.min.js"></script>
    <script src="{{asset('lib')}}/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="{{asset('lib')}}/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="{{asset('js')}}/main.js"></script>
</body>

</html>
