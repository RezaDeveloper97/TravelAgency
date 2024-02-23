
<!doctype html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- Links Of CSS File -->
    <link rel="stylesheet" href="{{ asset('front-assets/css/bootstrap.rtl.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front-assets/fonts/remixicon.css') }}">
    <link rel="stylesheet" href="{{ asset('front-assets/fonts/flaticon_mycollection.css') }}">
    <link rel="stylesheet" href="{{ asset('front-assets/css/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front-assets/css/scrollCue.css') }}">
    <link rel="stylesheet" href="{{ asset('front-assets/css/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('front-assets/css/rtl.css') }}">
    <link rel="stylesheet" href="{{ asset('front-assets/css/responsive.css') }}">

    <!-- Title -->
    <title>@yield('title')</title>
    <link rel="icon" type="image/svg" href="{{ asset('front-assets/images/favicon.svg') }}">

    @stack('endOfhead')
</head>
<body>

    <!-- Start preloader Area -->
    <div class="preloader-area position-fixed text-center" id="preloader">
        <div class="loader">
            <div class="l_main">
                <div class="l_square"><span></span><span></span><span></span></div>
                <div class="l_square"><span></span><span></span><span></span></div>
                <div class="l_square"><span></span><span></span><span></span></div>
                <div class="l_square"><span></span><span></span><span></span></div>
            </div>
        </div>
    </div>
    <!-- End preloader Area -->
    <!-- Top Header Warp Start -->
    {{-- <div class="top-header-warp">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-xl-7 col-lg-8">
                    <div class="header-widget">
                        <ul class="header-contact">
                            <li>
                                <i class="ri-mail-line"></i>
                                <a href="/cdn-cgi/l/email-protection#f098959c9c9fb0959b9589de939f9d"><span class="__cf_email__" data-cfemail="3e565b5252517e5b555b47105d5153">[email&#160;protected]</span></a>
                            </li>
                            <li>
                                <i class="ri-map-pin-line"></i>
                                <p>ایران ، استان تهران ، میدان آزادی</p>
                            </li>
                            <li>
                                <i class="ri-time-line"></i>
                                <p>دوشنبه - شنبه: 9.00 صبح تا 10.00 عصر</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-4">
                    <div class="header-widget d-flex align-items-center style2">
                        <div class="input-box">
                            <form>
                                <input type="text" class="form-control" placeholder="دنبال چی میگردی؟">
                                <button class="search-btn" type="submit">
                                    <i class="ri-search-line"></i>
                                </button>
                            </form>
                        </div>
                        <ul class="social">
                            <li>
                                <h6>دنبال کنید:</h6>
                            </li>
                            <li>
                                <a href="https://www.facebook.com/" target="_blank"><i class="ri-facebook-circle-line"></i></a>
                            </li>
                            <li>
                                <a href="https://twitter.com/" target="_blank"><i class="ri-twitter-line"></i></a>
                            </li>
                            <li>
                                <a href="https://instagram.com/" target="_blank"><i class="ri-instagram-line"></i></a>
                            </li>
                            <li>
                                <a href="https://pinterest.com/" target="_blank"><i class="ri-pinterest-line"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Top Header Warp End -->
    <!-- Start Navbar Area -->
    <nav class="navbar navbar-expand-lg" id="navbar">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('front.index')}}">
                <img src="front-assets/images/logo.png" class="logo-mobile" alt="logo">
            </a>
            <button class="navbar-toggler" data-bs-toggle="offcanvas" href="#navbarOffcanvas" role="button" aria-controls="navbarOffcanvas">
                <span class="burger-menu">
                    <span class="top-bar"></span>
                    <span class="middle-bar"></span>
                    <span class="bottom-bar"></span>
                </span>
            </button>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a href="{{ route('front.index')}}" class="nav-link  with-image">
                            صفحه اصلی
                            <img src="front-assets/images/svgs/navbar1.svg" class="navbar-image" alt="image">
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="javascript:void(0)" class="dropdown-toggle nav-link with-image">
                            ویزا
                            <img src="front-assets/images/svgs/navbar1.svg" class="navbar-image" alt="image">
                        </a>
                        <ul class="dropdown-menu">
                            <li class="nav-item">
                                <a href="{{ route('front.study-visa')}}" class="nav-link">ویزای تحصیلی</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('front.work-visa')}}" class="nav-link">ویزای کاری</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('front.tourist-visa')}}" class="nav-link">ویزای توریستی</a>
                            </li>
                        </ul>
                    </li>
                    
                    {{-- <li class="nav-item">
                        <a href="javascript:void(0)" class="dropdown-toggle nav-link with-image">
                            وقت سفارت
                            <img src="front-assets/images/svgs/navbar1.svg" class="navbar-image" alt="image">
                        </a>
                        <ul class="dropdown-menu">
                            <li class="nav-item">
                                <a href="coaching.html" class="nav-link">وقت سفارت کانادا</a>
                            </li>
                        </ul>
                    </li> --}}
                    <li class="nav-item">
                        <a href="{{ route('front.pickup-passport') }}" class="nav-link  with-image">
                            پیکاپ پاسپورت 
                            <img src="front-assets/images/svgs/navbar1.svg" class="navbar-image" alt="image">
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('front.blog') }}" class="nav-link  with-image">
                            وبلاگ
                            <img src="front-assets/images/svgs/navbar1.svg" class="navbar-image" alt="image">
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('front.coaching') }}" class="nav-link  with-image">
                            رضایت مشتری ها
                            <img src="front-assets/images/svgs/navbar1.svg" class="navbar-image" alt="image">
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('front.about') }}" class="nav-link  with-image">
                            درباره تدورا
                            <img src="front-assets/images/svgs/navbar1.svg" class="navbar-image" alt="image">
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('front.contact') }}" class="nav-link  with-image">
                            تماس با ما
                            <img src="front-assets/images/svgs/navbar1.svg" class="navbar-image" alt="image">
                        </a>
                    </li>
                </ul>

                <div class="others-option d-flex align-items-center">
                    <div class="option-item">
                        <ul>
                            <li>
                                <div class="icon">
                                    <a href="tel:99654892986"><img src="front-assets/images/svgs/phone1.svg" alt="image"></a>
                                </div>
                            </li>
                            <li>
                                <div class="content">
                                    <span>تماس در هر زمان</span>
                                    <a href="tel:+905010777477" dir="ltr">+905010777477</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="option-item style2">
                        <a href="{{ route('front.online-assessment')}}" class="default-btn"><span>فرم ارزیابی</span> </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <!-- End Navbar Area -->
    <!-- Start Mobile Device Navbar Area -->
    <div class="responsive-navbar offcanvas offcanvas-end" tabindex="-1" id="navbarOffcanvas">
        <div class="offcanvas-header">
            <a href="{{ route('front.index')}}" class="logo d-inline-block">
                <img src="front-assets/images/logo.png" width="150" alt="logo">
            </a>
            <button type="button" class="close-btn" data-bs-dismiss="offcanvas" aria-label="Close">
                <i class="ri-close-line"></i>
            </button>
        </div>
        <div class="offcanvas-body">
            <div class="accordion" id="navbarAccordion">
                <div class="accordion-item">
                    <a class="accordion-button without-icon" href="{{ route('front.index')}}">
                        صفحه اصلی
                    </a>
                </div>
                <div class="accordion-item">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        ویزا 
                    </button>
                    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#navbarAccordion">
                        <div class="accordion-body">
                            <div class="accordion" id="navbarAccordion2">
                                <div class="accordion-item">
                                    <a href="{{ route('front.study-visa') }}" class="accordion-link">ویزای تحصیلی</a>
                                    <a href="{{ route('front.work-visa') }}" class="accordion-link">ویزای کاری</a>
                                    <a href="{{ route('front.tourist-visa') }}" class="accordion-link">ویزای توریستی</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <a class="accordion-button without-icon" href="{{ route('front.pickup-passport') }}">
                        پیکاپ پاسپورت
                    </a>
                </div>
                <div class="accordion-item">
                    <a class="accordion-button without-icon" href="{{ route('front.blog') }}">
                        وبلاگ
                    </a>
                </div>

                <div class="accordion-item">
                    <a class="accordion-button without-icon" href="{{ route('front.coaching') }}">
                        رضایت مشتری ها
                    </a>
                </div>
                <div class="accordion-item">
                    <a class="accordion-button without-icon" href="{{ route('front.about') }}">
                   درباره تدورا
                    </a>
                </div>
                <div class="accordion-item">
                    <a class="accordion-button without-icon" href="{{ route('front.contact') }}">
                   تماس با ما
                    </a>
                </div>
            </div>
            <div class="others-option d-flex align-items-center">
              
                
                <div class="option-item">
                    <a href="{{ route('front.online-assessment')}}" class="default-btn">فرم ارزیابی</a>
                </div>
            </div>
        </div>
    </div>
    <!-- End Mobile Device Navbar Area -->
    <!-- Hero Warp Start -->
    @yield("content")




<!-- Both Warp Start -->
<div class="both-warp">
    <div class="footer-warp pt-100 pb-75">
        <div class="container style1">
            <div class="row">
                
                
            </div>
        </div>
    </div>
    <div class="copy-right-warp">
        <div class="container style1">
            <div class="inner-copy-warp">
                <p>© <span>Theodoraworld</span> تمامی حقوق محفوظ است</a></p>
            </div>
        </div>
    </div>
    <img src="front-assets/images/shapes/footer-shape.png" class="footer-shape" alt="image">
</div>
<!-- Both Warp End -->
    <!-- Scroll Top Btn -->
    <div class="top-button-icon">
        <button id="scrollTopBtn">
            <i class="ri-arrow-up-circle-fill"></i>
        </button>
    </div>
    <!-- Scroll Top Btn -->
    <!-- Modal -->
    <!-- <div class="modal fade" id="staticBackdrop1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered video-modal">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <iframe class="video-bg-btn" src="https://www.youtube.com/embed/u9prcUCHlqM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Modal -->
    <!-- Links of JS File -->
    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="{{ asset('front-assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('front-assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('front-assets/js/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('front-assets/js/scrollCue.min.js') }}"></script>

    @stack('endOfbody')

    <script src="{{ asset('front-assets/js/custom.js') }}"></script>
    
</body>
</html>   