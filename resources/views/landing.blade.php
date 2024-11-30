<link rel="stylesheet" href="{{ asset('partials/css/landing.css') }}">
<link rel="stylesheet" href="{{ asset('partials/css/responsive.css') }}">
<link rel="stylesheet" href="{{ asset('partials/css/theme-dark.css') }}">
<link rel="stylesheet" href="{{ asset('partials/css/bootstrap.min.css') }}">

<link rel="stylesheet" href="{{ asset('partials/css/flaticon.css') }}">
<link rel="stylesheet" href="{{ asset('partials/css/magnific-popup.min.css') }}">
<link rel="stylesheet" href="{{ asset('partials/css/owl.carousel.min.css') }}">

<body>
    <!-- Preloader -->
    {{-- <div class="loader">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="spinner">
                    <div class="rect1"></div>
                    <div class="rect2"></div>
                    <div class="rect3"></div>
                    <div class="rect4"></div>
                    <div class="rect5"></div>
                    </div>
                </div>
            </div>
        </div> --}}
    <!-- End Preloader -->

    <!-- Start Navbar Area -->
    <div class="navbar-area fixed-top">
        <!-- Menu For Mobile Device -->
        <div class="mobile-nav">
            <a href="sass.html" class="logo">
                <img src="assets/img/logo-two.png" alt="Logo">
            </a>
        </div>

        <!-- Menu For Desktop Device -->
        <div class="main-nav">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-md navbar-light">
                    <a class="navbar-brand" href="sass.html">
                        <img src="assets/img/logo.png" class="logo-one" alt="Logo">
                        <img src="assets/img/logo-two.png" class="logo-two" alt="Logo">
                    </a>
                    <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a href="#" class="nav-link dropdown-toggle active">Home <i
                                        class='bx bx-chevron-down'></i></a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="sass.html" class="nav-link active">Sass Startup Demo</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="it-startup.html" class="nav-link">IT Startup Demo</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="digital.html" class="nav-link">Digital Marketing Demo</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link dropdown-toggle">Pages <i
                                        class='bx bx-chevron-down'></i></a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="#" class="nav-link dropdown-toggle">User <i
                                                class='bx bx-chevron-down'></i></a>
                                        <ul class="dropdown-menu">
                                            <li class="nav-item">
                                                <a href="sign-in.html" class="nav-link">Sign In</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="sign-up.html" class="nav-link">Sign Up</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a href="features.html" class="nav-link">Features</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="team.html" class="nav-link">Team</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="testimonials.html" class="nav-link">Testimonials</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="pricing.html" class="nav-link">Pricing</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="faq.html" class="nav-link">FAQ</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="404.html" class="nav-link">404 Error Page</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="privacy-policy.html" class="nav-link">Privacy Policy</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="terms-conditions.html" class="nav-link">Terms & Conditions</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="about.html" class="nav-link">About</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link dropdown-toggle">Services <i
                                        class='bx bx-chevron-down'></i></a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="services.html" class="nav-link">Service Style One</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="services-2.html" class="nav-link">Service Style Two</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="service-details.html" class="nav-link">Service Details</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link dropdown-toggle">Projects <i
                                        class='bx bx-chevron-down'></i></a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="projects.html" class="nav-link">Projects</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="project-details.html" class="nav-link">Project Details</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link dropdown-toggle">Blog <i
                                        class='bx bx-chevron-down'></i></a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="blog.html" class="nav-link">Blog</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="blog-details.html" class="nav-link">Blog Details</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="contact.html" class="nav-link">Contact</a>
                            </li>
                        </ul>
                        <div class="side-nav">
                            <a class="left-btn" href="sign-in.html">
                                <i class='bx bx-log-out'></i>
                                Sign In
                            </a>
                            <a href="projects.html" class="cmn-btn">
                                Start Project
                                <i class='bx bx-plus'></i>
                            </a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- End Navbar Area -->

    <!-- Banner -->
    <div class="banner-area">
        <div class="banner-shape">
            <img class="animate__animated animate__fadeInUp" src="assets/img/sass/banner-main.png" alt="Banner">
            <img src="assets/img/sass/banner-shape1.png" alt="Banner">
            <img src="assets/img/sass/banner-shape2.png" alt="Banner">
            <img src="https://res.cloudinary.com/dwzht4utm/image/upload/v1731092025/banner-shape3_haco8d.png" alt="Banner">
            <img src="assets/img/sass/banner-shape2.png" alt="Banner">
            <img src="https://res.cloudinary.com/dwzht4utm/image/upload/v1731092025/banner-shape3_haco8d.png" alt="Banner">
        </div>
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container-fluid">
                    <div class="banner-content">
                        <span>
                            <img src="assets/img/sass/banner-shape4.png" alt="Shape">
                            Dilx Sass Startup
                        </span>
                        <h1>Manage Your Business Platform</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua Utenim ad minim veniam</p>
                        <div class="banner-btn">
                            <a href="contact.html" class="cmn-btn">
                                Start Project
                                <i class='bx bx-plus'></i>
                            </a>
                            <a class="popup-youtube banner-btn-right"
                                href="http://www.youtube.com/watch?v=0O2aH4XLbto">
                                <i class='bx bx-play'></i>
                                Play Video
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Banner -->

    <!-- Service -->
    <section class="service-area pb-70">
        <div class="service-shape">
            <img src="assets/img/sass/service-shape2.png" alt="Shape">
        </div>
        <div class="container">
            <div class="section-title">
                <span class="sub-title">Offering Services</span>
                <h2>Our Amazing Features</h2>
            </div>
            <div class="row justify-content-center">
                <div class="col-sm-6 col-lg-4">
                    <div class="service-item">
                        <i class="flaticon-cloud-storage"></i>
                        <h3>
                            <a href="service-details.html">Full Security</a>
                        </h3>
                        <p>Lorem ipsum dolor sit ametaut odiut perspiciatis unde omnis iste quuntur alquam quaerat rsit
                            amet</p>
                        <img class="img-one" src="assets/img/sass/service-shape.png" alt="Shape">
                        <img class="img-two" src="assets/img/sass/service-shape1.png" alt="Shape">
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="service-item">
                        <i class="flaticon-clock"></i>
                        <h3>
                            <a href="service-details.html">Fast And Optimized</a>
                        </h3>
                        <p>Lorem ipsum dolor sit ametaut odiut perspiciatis unde omnis iste quuntur alquam quaerat rsit
                            amet</p>
                        <img class="img-one" src="assets/img/sass/service-shape.png" alt="Shape">
                        <img class="img-two" src="assets/img/sass/service-shape1.png" alt="Shape">
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="service-item">
                        <i class="flaticon-save-time"></i>
                        <h3>
                            <a href="service-details.html">Time Saving</a>
                        </h3>
                        <p>Lorem ipsum dolor sit ametaut odiut perspiciatis unde omnis iste quuntur alquam quaerat rsit
                            amet</p>
                        <img class="img-one" src="assets/img/sass/service-shape.png" alt="Shape">
                        <img class="img-two" src="assets/img/sass/service-shape1.png" alt="Shape">
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="service-item">
                        <i class="flaticon-administration"></i>
                        <h3>
                            <a href="service-details.html">Easily Manage</a>
                        </h3>
                        <p>Lorem ipsum dolor sit ametaut odiut perspiciatis unde omnis iste quuntur alquam quaerat rsit
                            amet</p>
                        <img class="img-one" src="assets/img/sass/service-shape.png" alt="Shape">
                        <img class="img-two" src="assets/img/sass/service-shape1.png" alt="Shape">
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="service-item">
                        <i class="flaticon-unlocked"></i>
                        <h3>
                            <a href="service-details.html">Quick Access</a>
                        </h3>
                        <p>Lorem ipsum dolor sit ametaut odiut perspiciatis unde omnis iste quuntur alquam quaerat rsit
                            amet</p>
                        <img class="img-one" src="assets/img/sass/service-shape.png" alt="Shape">
                        <img class="img-two" src="assets/img/sass/service-shape1.png" alt="Shape">
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="service-item">
                        <i class="flaticon-scroll"></i>
                        <h3>
                            <a href="service-details.html">Drag And Drop</a>
                        </h3>
                        <p>Lorem ipsum dolor sit ametaut odiut perspiciatis unde omnis iste quuntur alquam quaerat rsit
                            amet</p>
                        <img class="img-one" src="assets/img/sass/service-shape.png" alt="Shape">
                        <img class="img-two" src="assets/img/sass/service-shape1.png" alt="Shape">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Service -->

    <!-- About -->
    <section class="about-area pb-100">
        <div class="container">
            <div class="row align-items-center  justify-content-center">
                <div class="col-lg-6">
                    <div class="about-content">
                        <div class="section-title">
                            <span class="sub-title">About Us</span>
                            <h2>Our Company Is The Best To Serve</h2>
                        </div>
                        <ul>
                            <li>
                                <i class="flaticon-checkmark"></i>
                                <h4>QR Code Scanner</h4>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiumod tempor
                                    incididunt ut labore</p>
                            </li>
                            <li>
                                <i class="flaticon-checkmark"></i>
                                <h4>CRM Software Management</h4>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiumod tempor
                                    incididunt ut labore</p>
                            </li>
                            <li>
                                <i class="flaticon-checkmark"></i>
                                <h4>Organization Skills & Management</h4>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiumod tempor
                                    incididunt ut labore</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-img">
                        <img src="assets/img/sass/about-main.png" alt="About">
                        <img src="assets/img/sass/about1.png" alt="Shape">
                        <img src="assets/img/sass/about2.png" alt="Shape">
                        <img src="assets/img/sass/about3.png" alt="Shape">
                        <div class="video-wrap">
                            <a href="http://www.youtube.com/watch?v=0O2aH4XLbto" class="popup-youtube">
                                <i class='bx bx-play'></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End About -->

    <!-- Inquiry -->
    <section class="inquiry-area">
        <div class="inquiry-shape">
            <img src="assets/img/sass/inquiry1.png" alt="Shape">
            <img src="assets/img/sass/inquiry2.png" alt="Shape">
            <img src="assets/img/sass/inquiry3.png" alt="Shape">
            <img src="assets/img/sass/inquiry4.png" alt="Shape">
            <img src="assets/img/sass/inquiry5.png" alt="Shape">
        </div>
        <div class="container">
            <div class="row align-items-center  justify-content-center">
                <div class="col-lg-5">
                    <div class="inquiry-img">
                        <img src="assets/img/sass/inquiry-main.png" alt="Inquiry">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="inquiry-content">
                        <div class="section-title">
                            <span class="sub-title">Project Inquiry</span>
                            <h2>Have Any Questions Regarding The Project About?</h2>
                        </div>
                        <a href="contact.html" class="cmn-btn">
                            Start Project
                            <i class='bx bx-plus'></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Inquiry -->

    <!-- Feature -->
    <section class="feature-area pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <span class="sub-title">Features</span>
                <h2>We Provide Maximum</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor indunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam</p>
            </div>
            <div class="row align-items-center  justify-content-center">
                <div class="col-lg-6">
                    <div class="feature-img">
                        <img src="assets/img/sass/feature1.png" alt="Feature">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="feature-content">
                        <div class="feature-top">
                            <span>01</span>
                            <h2>Getting Started Page</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et</p>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-sm-6 col-lg-6">
                                <div class="feature-inner">
                                    <i class="flaticon-graphic-design"></i>
                                    <h3>Unique Design</h3>
                                    <p>Lorem ipsum dolor sit ame consetur adipisicing em ipsum</p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-6">
                                <div class="feature-inner">
                                    <i class="flaticon-video-camera"></i>
                                    <h3>Unlimited Video Call</h3>
                                    <p>Lorem ipsum dolor sit ame consetur adipisicing em ipsum</p>
                                </div>
                            </div>
                        </div>
                        <a href="about.html" class="cmn-btn">
                            Read More
                            <i class='bx bx-plus'></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="feature-content">
                        <div class="feature-top">
                            <span>02</span>
                            <h2>Review Code & Illustration</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et</p>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-sm-6 col-lg-6">
                                <div class="feature-inner">
                                    <i class="flaticon-contact"></i>
                                    <h3>Add Favourite contact</h3>
                                    <p>Lorem ipsum dolor sit ame consetur adipisicing em ipsum</p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-6">
                                <div class="feature-inner">
                                    <i class="flaticon-laptop"></i>
                                    <h3>Start Coding Format</h3>
                                    <p>Lorem ipsum dolor sit ame consetur adipisicing em ipsum</p>
                                </div>
                            </div>
                        </div>
                        <a href="about.html" class="cmn-btn">
                            Read More
                            <i class='bx bx-plus'></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="feature-img">
                        <img src="assets/img/sass/feature2.png" alt="Feature">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="feature-img">
                        <img src="assets/img/sass/feature3.png" alt="Feature">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="feature-content">
                        <div class="feature-top">
                            <span>03</span>
                            <h2>Premium Comments Toggling</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et</p>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-sm-6 col-lg-6">
                                <div class="feature-inner">
                                    <i class="flaticon-chat"></i>
                                    <h3>Outdated Comments</h3>
                                    <p>Lorem ipsum dolor sit ame consetur adipisicing em ipsum</p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-6">
                                <div class="feature-inner">
                                    <i class="flaticon-sketch"></i>
                                    <h3>Mordan Design</h3>
                                    <p>Lorem ipsum dolor sit ame consetur adipisicing em ipsum</p>
                                </div>
                            </div>
                        </div>
                        <a href="about.html" class="cmn-btn">
                            Read More
                            <i class='bx bx-plus'></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Feature -->

    <!-- Counter -->
    <section class="counter-area pt-100 pb-70">
        <div class="counter-shape">
            <img src="assets/img/sass/counter-bg.png" alt="Shape">
        </div>
        <div class="container">
            <h2>The Secrets to Life Success People <span>Have Got</span></h2>
            <div class="row justify-content-center">
                <div class="col-6 col-sm-3 col-lg-3">
                    <div class="counter-item">
                        <h3>
                            <span class="odometer" data-count="100">00</span>
                            <span class="target">M</span>
                        </h3>
                        <p>Data Entry</p>
                        <img src="assets/img/sass/counter1.png" alt="Shape">
                    </div>
                </div>
                <div class="col-6 col-sm-3 col-lg-3">
                    <div class="counter-item">
                        <h3>
                            <span class="odometer" data-count="850">00</span>
                            <span class="target">+</span>
                        </h3>
                        <p>Appreciation</p>
                        <img src="assets/img/sass/counter1.png" alt="Shape">
                    </div>
                </div>
                <div class="col-6 col-sm-3 col-lg-3">
                    <div class="counter-item">
                        <h3>
                            <span class="odometer" data-count="1000K">00</span>
                            <span class="target">K</span>
                        </h3>
                        <p>Satisfied Client</p>
                        <img src="assets/img/sass/counter1.png" alt="Shape">
                    </div>
                </div>
                <div class="col-6 col-sm-3 col-lg-3">
                    <div class="counter-item">
                        <h3>
                            <span class="odometer" data-count="140">00</span>
                            <span class="target">K</span>
                        </h3>
                        <p>Response Time</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Counter -->

    <!-- Application -->
    <section class="application-area ptb-100">
        <div class="application-shape">
            <img src="assets/img/sass/application1.png" alt="Shape">
            <img src="assets/img/sass/application2.png" alt="Shape">
        </div>
        <div class="container-fluid p-0">
            <div class="row m-0 align-items-center">
                <div class="col-sm-6 col-lg-7">
                    <div class="application-content">
                        <div class="section-title">
                            <span class="sub-title">Application Building</span>
                            <h2>Way To Build Beautiful Interface's Your Application</h2>
                        </div>
                        <ul>
                            <li>
                                <i class="flaticon-checkmark"></i>
                                QR Code Scanner
                            </li>
                            <li>
                                <i class="flaticon-checkmark"></i>
                                Start Coding Format
                            </li>
                            <li>
                                <i class="flaticon-checkmark"></i>
                                Organizations Skills & Management
                            </li>
                            <li>
                                <i class="flaticon-checkmark"></i>
                                Add Favourite Contact
                            </li>
                            <li>
                                <i class="flaticon-checkmark"></i>
                                Unlimited Video Call
                            </li>
                        </ul>
                        <a href="about.html" class="cmn-btn">
                            Read More
                            <i class='bx bx-plus'></i>
                        </a>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-5 pr-0">
                    <div class="application-img">
                        <img src="assets/img/sass/application-main.png" alt="Application">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Application -->

    <!-- Pricing -->
    <section class="pricing-area pb-70">
        <div class="pricing-shape">
            <img src="assets/img/sass/pricing-shape.png" alt="Shape">
        </div>
        <div class="container">
            <div class="section-title">
                <span class="sub-title">Pricing Plans</span>
                <h2>Affordable Pricing</h2>
            </div>
            <ul class="nav nav-pills" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" href="#pills-home"
                        role="tab" aria-controls="pills-home" aria-selected="true">
                        <i class='bx bx-plus'></i>
                        Monthly Plan
                    </a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" href="#pills-profile"
                        role="tab" aria-controls="pills-profile" aria-selected="false">
                        <i class='bx bx-plus'></i>
                        Yearly Plan
                    </a>
                </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                    aria-labelledby="pills-home-tab">
                    <div class="row justify-content-center">
                        <div class="col-sm-6 col-lg-4 p-0">
                            <div class="pricing-item">
                                <div class="top">
                                    <span>
                                        <i class="flaticon-checkmark"></i>
                                        Free
                                    </span>
                                </div>
                                <div class="middle">
                                    <h3><span class="left">$</span> 0.00/<span class="right">Month</span></h3>
                                </div>
                                <div class="end">
                                    <ul>
                                        <li>
                                            <i class="flaticon-curved-arrow-pointing-to-right"></i>
                                            Google Analytics
                                            <i class="flaticon-exclamation two"></i>
                                        </li>
                                        <li>
                                            <i class="flaticon-curved-arrow-pointing-to-right"></i>
                                            Drag & Drop Widgets
                                        </li>
                                        <li>
                                            <i class="flaticon-curved-arrow-pointing-to-right"></i>
                                            Mobile + Desktop Apps
                                        </li>
                                        <li>
                                            <i class="flaticon-curved-arrow-pointing-to-right"></i>
                                            Messenger Integration
                                            <i class="flaticon-exclamation two"></i>
                                        </li>
                                        <li>
                                            <i class="flaticon-curved-arrow-pointing-to-right"></i>
                                            100 ChatBot Triggers
                                        </li>
                                        <li>
                                            <i class="flaticon-curved-arrow-pointing-to-right"></i>
                                            Visitor Info
                                        </li>
                                        <li>
                                            <i class="flaticon-curved-arrow-pointing-to-right"></i>
                                            Quick Response
                                            <i class="flaticon-exclamation two"></i>
                                        </li>
                                        <li>
                                            <i class="flaticon-curved-arrow-pointing-to-right"></i>
                                            24/7 Live Chat
                                        </li>
                                        <li>
                                            <i class="flaticon-curved-arrow-pointing-to-right"></i>
                                            Email Integration
                                        </li>
                                        <li>
                                            <i class="flaticon-curved-arrow-pointing-to-right"></i>
                                            Visitor Notes
                                        </li>
                                        <li>
                                            <i class="flaticon-curved-arrow-pointing-to-right"></i>
                                            Integration Email
                                            <i class="flaticon-exclamation two"></i>
                                        </li>
                                    </ul>
                                    <a href="pricing.html" class="cmn-btn">
                                        Get Started
                                        <i class='bx bx-plus'></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4 p-0">
                            <div class="pricing-item two">
                                <div class="top">
                                    <span>
                                        <i class="flaticon-checkmark"></i>
                                        Starter
                                    </span>
                                </div>
                                <div class="middle">
                                    <h3><span class="left">$</span> 49.99/<span class="right">Month</span></h3>
                                </div>
                                <div class="end">
                                    <ul>
                                        <li>
                                            <i class="flaticon-curved-arrow-pointing-to-right"></i>
                                            Google Analytics
                                            <i class="flaticon-exclamation two"></i>
                                        </li>
                                        <li>
                                            <i class="flaticon-curved-arrow-pointing-to-right"></i>
                                            Drag & Drop Widgets
                                        </li>
                                        <li>
                                            <i class="flaticon-curved-arrow-pointing-to-right"></i>
                                            Mobile + Desktop Apps
                                        </li>
                                        <li>
                                            <i class="flaticon-curved-arrow-pointing-to-right"></i>
                                            Messenger Integration
                                            <i class="flaticon-exclamation two"></i>
                                        </li>
                                        <li>
                                            <i class="flaticon-curved-arrow-pointing-to-right"></i>
                                            100 ChatBot Triggers
                                        </li>
                                        <li>
                                            <i class="flaticon-curved-arrow-pointing-to-right"></i>
                                            Visitor Info
                                        </li>
                                        <li>
                                            <i class="flaticon-curved-arrow-pointing-to-right"></i>
                                            Quick Response
                                            <i class="flaticon-exclamation two"></i>
                                        </li>
                                        <li>
                                            <i class="flaticon-curved-arrow-pointing-to-right"></i>
                                            24/7 Live Chat
                                        </li>
                                        <li>
                                            <i class="flaticon-curved-arrow-pointing-to-right"></i>
                                            Email Integration
                                        </li>
                                        <li>
                                            <i class="flaticon-curved-arrow-pointing-to-right"></i>
                                            Visitor Notes
                                        </li>
                                        <li>
                                            <i class="flaticon-curved-arrow-pointing-to-right"></i>
                                            Integration Email
                                            <i class="flaticon-exclamation two"></i>
                                        </li>
                                    </ul>
                                    <a href="pricing.html" class="cmn-btn">
                                        Get Started
                                        <i class='bx bx-plus'></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6   col-lg-4 p-0">
                            <div class="pricing-item">
                                <div class="top">
                                    <span>
                                        <i class="flaticon-checkmark"></i>
                                        Enterprise
                                    </span>
                                </div>
                                <div class="middle">
                                    <h3><span class="left">$</span> 56.00/<span class="right">Month</span></h3>
                                </div>
                                <div class="end">
                                    <ul>
                                        <li>
                                            <i class="flaticon-curved-arrow-pointing-to-right"></i>
                                            Google Analytics
                                            <i class="flaticon-exclamation two"></i>
                                        </li>
                                        <li>
                                            <i class="flaticon-curved-arrow-pointing-to-right"></i>
                                            Drag & Drop Widgets
                                        </li>
                                        <li>
                                            <i class="flaticon-curved-arrow-pointing-to-right"></i>
                                            Mobile + Desktop Apps
                                        </li>
                                        <li>
                                            <i class="flaticon-curved-arrow-pointing-to-right"></i>
                                            Messenger Integration
                                            <i class="flaticon-exclamation two"></i>
                                        </li>
                                        <li>
                                            <i class="flaticon-curved-arrow-pointing-to-right"></i>
                                            100 ChatBot Triggers
                                        </li>
                                        <li>
                                            <i class="flaticon-curved-arrow-pointing-to-right"></i>
                                            Visitor Info
                                        </li>
                                        <li>
                                            <i class="flaticon-curved-arrow-pointing-to-right"></i>
                                            Quick Response
                                            <i class="flaticon-exclamation two"></i>
                                        </li>
                                        <li>
                                            <i class="flaticon-curved-arrow-pointing-to-right"></i>
                                            24/7 Live Chat
                                        </li>
                                        <li>
                                            <i class="flaticon-curved-arrow-pointing-to-right"></i>
                                            Email Integration
                                        </li>
                                        <li>
                                            <i class="flaticon-curved-arrow-pointing-to-right"></i>
                                            Visitor Notes
                                        </li>
                                        <li>
                                            <i class="flaticon-curved-arrow-pointing-to-right"></i>
                                            Integration Email
                                            <i class="flaticon-exclamation two"></i>
                                        </li>
                                    </ul>
                                    <a href="pricing.html" class="cmn-btn">
                                        Get Started
                                        <i class='bx bx-plus'></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                    <div class="row justify-content-center">
                        <div class="col-sm-6 col-lg-4 p-0">
                            <div class="pricing-item">
                                <div class="top">
                                    <span>
                                        <i class="flaticon-checkmark"></i>
                                        Free
                                    </span>
                                </div>
                                <div class="middle">
                                    <h3><span class="left">$</span> 0.00/<span class="right">Year</span></h3>
                                </div>
                                <div class="end">
                                    <ul>
                                        <li>
                                            <i class="flaticon-curved-arrow-pointing-to-right"></i>
                                            Google Analytics
                                            <i class="flaticon-exclamation two"></i>
                                        </li>
                                        <li>
                                            <i class="flaticon-curved-arrow-pointing-to-right"></i>
                                            Drag & Drop Widgets
                                        </li>
                                        <li>
                                            <i class="flaticon-curved-arrow-pointing-to-right"></i>
                                            Mobile + Desktop Apps
                                        </li>
                                        <li>
                                            <i class="flaticon-curved-arrow-pointing-to-right"></i>
                                            Messenger Integration
                                            <i class="flaticon-exclamation two"></i>
                                        </li>
                                        <li>
                                            <i class="flaticon-curved-arrow-pointing-to-right"></i>
                                            100 ChatBot Triggers
                                        </li>
                                        <li>
                                            <i class="flaticon-curved-arrow-pointing-to-right"></i>
                                            Visitor Info
                                        </li>
                                        <li>
                                            <i class="flaticon-curved-arrow-pointing-to-right"></i>
                                            Quick Response
                                            <i class="flaticon-exclamation two"></i>
                                        </li>
                                        <li>
                                            <i class="flaticon-curved-arrow-pointing-to-right"></i>
                                            24/7 Live Chat
                                        </li>
                                        <li>
                                            <i class="flaticon-curved-arrow-pointing-to-right"></i>
                                            Email Integration
                                        </li>
                                        <li>
                                            <i class="flaticon-curved-arrow-pointing-to-right"></i>
                                            Visitor Notes
                                        </li>
                                        <li>
                                            <i class="flaticon-curved-arrow-pointing-to-right"></i>
                                            Integration Email
                                            <i class="flaticon-exclamation two"></i>
                                        </li>
                                    </ul>
                                    <a href="pricing.html" class="cmn-btn">
                                        Get Started
                                        <i class='bx bx-plus'></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4 p-0">
                            <div class="pricing-item two">
                                <div class="top">
                                    <span>
                                        <i class="flaticon-checkmark"></i>
                                        Starter
                                    </span>
                                </div>
                                <div class="middle">
                                    <h3><span class="left">$</span> 49.99/<span class="right">Year</span></h3>
                                </div>
                                <div class="end">
                                    <ul>
                                        <li>
                                            <i class="flaticon-curved-arrow-pointing-to-right"></i>
                                            Google Analytics
                                            <i class="flaticon-exclamation two"></i>
                                        </li>
                                        <li>
                                            <i class="flaticon-curved-arrow-pointing-to-right"></i>
                                            Drag & Drop Widgets
                                        </li>
                                        <li>
                                            <i class="flaticon-curved-arrow-pointing-to-right"></i>
                                            Mobile + Desktop Apps
                                        </li>
                                        <li>
                                            <i class="flaticon-curved-arrow-pointing-to-right"></i>
                                            Messenger Integration
                                            <i class="flaticon-exclamation two"></i>
                                        </li>
                                        <li>
                                            <i class="flaticon-curved-arrow-pointing-to-right"></i>
                                            100 ChatBot Triggers
                                        </li>
                                        <li>
                                            <i class="flaticon-curved-arrow-pointing-to-right"></i>
                                            Visitor Info
                                        </li>
                                        <li>
                                            <i class="flaticon-curved-arrow-pointing-to-right"></i>
                                            Quick Response
                                            <i class="flaticon-exclamation two"></i>
                                        </li>
                                        <li>
                                            <i class="flaticon-curved-arrow-pointing-to-right"></i>
                                            24/7 Live Chat
                                        </li>
                                        <li>
                                            <i class="flaticon-curved-arrow-pointing-to-right"></i>
                                            Email Integration
                                        </li>
                                        <li>
                                            <i class="flaticon-curved-arrow-pointing-to-right"></i>
                                            Visitor Notes
                                        </li>
                                        <li>
                                            <i class="flaticon-curved-arrow-pointing-to-right"></i>
                                            Integration Email
                                            <i class="flaticon-exclamation two"></i>
                                        </li>
                                    </ul>
                                    <a href="pricing.html" class="cmn-btn">
                                        Get Started
                                        <i class='bx bx-plus'></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6   col-lg-4 p-0">
                            <div class="pricing-item">
                                <div class="top">
                                    <span>
                                        <i class="flaticon-checkmark"></i>
                                        Enterprise
                                    </span>
                                </div>
                                <div class="middle">
                                    <h3><span class="left">$</span> 56.00/<span class="right">Year</span></h3>
                                </div>
                                <div class="end">
                                    <ul>
                                        <li>
                                            <i class="flaticon-curved-arrow-pointing-to-right"></i>
                                            Google Analytics
                                            <i class="flaticon-exclamation two"></i>
                                        </li>
                                        <li>
                                            <i class="flaticon-curved-arrow-pointing-to-right"></i>
                                            Drag & Drop Widgets
                                        </li>
                                        <li>
                                            <i class="flaticon-curved-arrow-pointing-to-right"></i>
                                            Mobile + Desktop Apps
                                        </li>
                                        <li>
                                            <i class="flaticon-curved-arrow-pointing-to-right"></i>
                                            Messenger Integration
                                            <i class="flaticon-exclamation two"></i>
                                        </li>
                                        <li>
                                            <i class="flaticon-curved-arrow-pointing-to-right"></i>
                                            100 ChatBot Triggers
                                        </li>
                                        <li>
                                            <i class="flaticon-curved-arrow-pointing-to-right"></i>
                                            Visitor Info
                                        </li>
                                        <li>
                                            <i class="flaticon-curved-arrow-pointing-to-right"></i>
                                            Quick Response
                                            <i class="flaticon-exclamation two"></i>
                                        </li>
                                        <li>
                                            <i class="flaticon-curved-arrow-pointing-to-right"></i>
                                            24/7 Live Chat
                                        </li>
                                        <li>
                                            <i class="flaticon-curved-arrow-pointing-to-right"></i>
                                            Email Integration
                                        </li>
                                        <li>
                                            <i class="flaticon-curved-arrow-pointing-to-right"></i>
                                            Visitor Notes
                                        </li>
                                        <li>
                                            <i class="flaticon-curved-arrow-pointing-to-right"></i>
                                            Integration Email
                                            <i class="flaticon-exclamation two"></i>
                                        </li>
                                    </ul>
                                    <a href="pricing.html" class="cmn-btn">
                                        Get Started
                                        <i class='bx bx-plus'></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Pricing -->

    <!-- Feedback -->
    <section class="feedback-area ptb-100">
        <div class="container">
            <div class="section-title">
                <h2>Client Feedbacks</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore</p>
            </div>
            <div class="outer">
                <div class="shape">
                    <img src="assets/img/sass/feedback-main.png" alt="Main">
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-5">
                        <div id="thumbs" class="owl-carousel owl-theme">
                            <div class="item">
                                <img src="assets/img/sass/feedback1.jpg" alt="Thumb">
                            </div>
                            <div class="item">
                                <img src="assets/img/sass/feedback2.jpg" alt="Thumb">
                            </div>
                            <div class="item">
                                <img src="assets/img/sass/feedback3.jpg" alt="Thumb">
                            </div>
                            <div class="item">
                                <img src="assets/img/sass/feedback1.jpg" alt="Thumb">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div id="big" class="owl-carousel owl-theme">
                            <div class="item">
                                <div class="feedback-content">
                                    <i class="flaticon-left-quote"></i>
                                    <p>Awesome dolor sit amet, consectetur adipisicing elit, sed do eusmod tempor
                                        incididunt ut labore et dolore magna aliquaenminim veniam quis nostrud dolore
                                        magn dolore</p>
                                    <h3>Devit M. Kolin</h3>
                                    <span>CEO & Founder</span>
                                </div>
                            </div>
                            <div class="item">
                                <div class="feedback-content">
                                    <i class="flaticon-left-quote"></i>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                        Ipsum has been the industry's standard dummy text ever since the 1500s, when an.
                                    </p>
                                    <h3>Tom Henry</h3>
                                    <span>Manager</span>
                                </div>
                            </div>
                            <div class="item">
                                <div class="feedback-content">
                                    <i class="flaticon-left-quote"></i>
                                    <p>It is a long established fact that a reader will be distracted by the readable
                                        content of a page when looking at its layout. The point of using Lorem Ipsum is
                                        that it has a more-or-les.</p>
                                    <h3>Jac Jacson</h3>
                                    <span>Director</span>
                                </div>
                            </div>
                            <div class="item">
                                <div class="feedback-content">
                                    <i class="flaticon-left-quote"></i>
                                    <p>Awesome dolor sit amet, consectetur adipisicing elit, sed do eusmod tempor
                                        incididunt ut labore et dolore magna aliquaenminim veniam quis nostrud dolore
                                        magn dolore</p>
                                    <h3>Devit M. Kolin</h3>
                                    <span>CEO & Founder</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Feedback -->

    <!-- Partner -->
    <div class="partner-area">
        <div class="container-fluid p-0">
            <div class="partner-slider owl-theme owl-carousel">
                <div class="partner-item">
                    <img src="assets/img/sass/partner1.png" class="partner-item-logo1" alt="Partner">
                    <img src="assets/img/sass/partner-style1.png" class="partner-item-logo2" alt="Partner">
                </div>
                <div class="partner-item">
                    <img src="assets/img/sass/partner2.png" class="partner-item-logo1" alt="Partner">
                    <img src="assets/img/sass/partner-style2.png" class="partner-item-logo2" alt="Partner">
                </div>
                <div class="partner-item">
                    <img src="assets/img/sass/partner3.png" class="partner-item-logo1" alt="Partner">
                    <img src="assets/img/sass/partner-style3.png" class="partner-item-logo2" alt="Partner">
                </div>
                <div class="partner-item">
                    <img src="assets/img/sass/partner4.png" class="partner-item-logo1" alt="Partner">
                    <img src="assets/img/sass/partner-style4.png" class="partner-item-logo2" alt="Partner">
                </div>
                <div class="partner-item">
                    <img src="assets/img/sass/partner5.png" class="partner-item-logo1" alt="Partner">
                    <img src="assets/img/sass/partner-style5.png" class="partner-item-logo2" alt="Partner">
                </div>
                <div class="partner-item">
                    <img src="assets/img/sass/partner6.png" class="partner-item-logo1" alt="Partner">
                    <img src="assets/img/sass/partner-style6.png" class="partner-item-logo2" alt="Partner">
                </div>
                <div class="partner-item">
                    <img src="assets/img/sass/partner1.png" class="partner-item-logo1" alt="Partner">
                    <img src="assets/img/sass/partner-style1.png" class="partner-item-logo2" alt="Partner">
                </div>
            </div>
        </div>
    </div>
    <!-- End Partner -->

    <!-- FAQ -->
    <div class="faq-area pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <h2>What Do You Want To <span>Know?</span></h2>
            </div>
            <div class="row align-items-center  justify-content-center">
                <div class="col-lg-6">
                    <div class="faq-content">
                        <ul class="accordion">
                            <li>
                                <a>
                                    How can I cancel/pause my subscription?
                                    <i class="flaticon-visibility"></i>
                                    <i class="flaticon-eye two"></i>
                                </a>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniaquis nostrud
                                    ullamco nisi ut aliquip</p>
                            </li>
                            <li>
                                <a>
                                    Does the price go up as my team gets larger?
                                    <i class="flaticon-visibility"></i>
                                    <i class="flaticon-eye two"></i>
                                </a>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniaquis nostrud
                                    ullamco nisi ut aliquip</p>
                            </li>
                            <li>
                                <a>
                                    What access do I have on a free trial?
                                    <i class="flaticon-visibility"></i>
                                    <i class="flaticon-eye two"></i>
                                </a>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniaquis nostrud
                                    ullamco nisi ut aliquip</p>
                            </li>
                            <li>
                                <a>
                                    What access do I have on the free plan?
                                    <i class="flaticon-visibility"></i>
                                    <i class="flaticon-eye two"></i>
                                </a>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniaquis nostrud
                                    ullamco nisi ut aliquip</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="faq-img">
                        <img src="assets/img/sass/faq-main.png" alt="FAQ">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End FAQ -->

    <!-- Mind -->
    <div class="mind-area">
        <div class="container">
            <div class="row align-items-center  justify-content-center">
                <div class="col-lg-5">
                    <div class="mind-left">
                        <h2>Have A Project In Mind? Let's Work Together</h2>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="mind-right">
                        <a href="projects.html" class="cmn-btn">
                            Get Started Project
                            <i class='bx bx-plus'></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Mind -->

    <!-- Footer -->
    <footer class="pt-100 pb-70">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-6 col-lg-3">
                    <div class="footer-item">
                        <div class="footer-logo">
                            <a href="sass.html">
                                <img src="assets/img/logo-two.png" alt="Logo">
                            </a>
                            <p>Lorem ipsum dolor sit amet, consectetur adiisicing elit, sed do eiusmod tempor inc Neque
                                porro quisquam est, qui dolorem magnam aliquam quaerat luptatem.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="footer-item">
                        <div class="footer-links">
                            <h3>Support</h3>
                            <ul>
                                <li>
                                    <a href="faq.html" target="_blank">FAQ</a>
                                </li>
                                <li>
                                    <a href="privacy-policy.html" target="_blank">Privacy Policy</a>
                                </li>
                                <li>
                                    <a href="terms-condiitons.html" target="_blank">Terms & Condiitons</a>
                                </li>
                                <li>
                                    <a href="contact.html" target="_blank">Community</a>
                                </li>
                                <li>
                                    <a href="conatct.html" target="_blank">Contact Us</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-2">
                    <div class="footer-item">
                        <div class="footer-links">
                            <h3>Compnay</h3>
                            <ul>
                                <li>
                                    <a href="about.html" target="_blank">About Us</a>
                                </li>
                                <li>
                                    <a href="services.html" target="_blank">Services</a>
                                </li>
                                <li>
                                    <a href="features.html" target="_blank">Features</a>
                                </li>
                                <li>
                                    <a href="pricing.html" target="_blank">Our Pricing</a>
                                </li>
                                <li>
                                    <a href="blog.html" target="_blank">Latest News</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="footer-item">
                        <div class="footer-address">
                            <h3>Address</h3>
                            <ul>
                                <li>
                                    <span>Address:</span>
                                    2659 Autostrad St, London, UK
                                </li>
                                <li>
                                    <span>Message:</span>
                                    <a
                                        href="https://templates.hibootstrap.com/cdn-cgi/l/email-protection#7119141d1d1e3115181d095f121e1c"><span
                                            class="__cf_email__"
                                            data-cfemail="7119141d1d1e3115181d095f121e1c">[email&#160;protected]</span></a>
                                </li>
                                <li>
                                    <span>Phone:</span>
                                    <a href="tel:2151234567">215 - 123 - 4567</a>
                                </li>
                                <li>
                                    <span>Open:</span>
                                    Mon - Fri/9:00 AM - 6:00 PM
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer -->

    <!-- Copyright -->
    <div class="copyright-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="copyright-item">
                        <p>© Dilx is Proudly Owned by <a href="https://hibootstrap.com/"
                                target="_blank">HiBootstrp</a></p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="copyright-item">
                        <ul>
                            <li>
                                <a href="https://www.facebook.com/login/" target="_blank"><i
                                        class='bx bxl-facebook'></i></a>
                            </li>
                            <li>
                                <a href="https://twitter.com/i/flow/login" target="_blank"><i
                                        class='bx bxl-twitter'></i></a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/accounts/login/" target="_blank"><i
                                        class='bx bxl-instagram'></i></a>
                            </li>
                            <li>
                                <a href="https://www.pinterest.com/" target="_blank"><i
                                        class='bx bxl-pinterest-alt'></i></a>
                            </li>
                            <li>
                                <a href="https://www.youtube.com/" target="_blank"><i class='bx bxl-youtube'></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Copyright -->

    <!-- Go Top -->
    <div class="go-top">
        <i class='bx bx-up-arrow'></i>
        <i class='bx bx-up-arrow'></i>
    </div>
    <!-- End Go Top -->


    <!-- Essential JS -->
    {{-- <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <!-- Form Validator JS -->
        <script src="assets/js/form-validator.min.js"></script>
        <!-- Contact JS -->
        <script src="assets/js/contact-form-script.js"></script>
        <!-- Ajax Chip JS -->
        <script src="assets/js/jquery.ajaxchimp.min.js"></script>
        <!-- Meanmenu JS -->
        <script src="assets/js/jquery.meanmenu.js"></script>
        <!-- Popup JS -->
        <script src="assets/js/jquery.magnific-popup.min.js"></script>
        <!-- Odometer JS -->
        <script src="assets/js/odometer.min.js"></script>
        <script src="assets/js/jquery.appear.js"></script>
        <!-- Owl Carousel JS -->
        <script src="assets/js/owl.carousel.min.js"></script>
        <!-- Thumb Slider JS -->
        <script src="assets/js/thumb-slide.js"></script>
        <!-- Wow JS -->
        <script src="assets/js/wow.min.js"></script>
        <!-- Custom JS -->
        <script src="assets/js/custom.js"></script> --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script src="{{ asset('partials/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('partials/js/jquery.min.js') }}"></script>
    <script src="{{ asset('partials/js/custom.js') }}"></script>
</body>