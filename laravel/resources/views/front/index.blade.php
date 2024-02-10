@extends('layouts.front')
 
@section('title', 'Theodoraworld')
 
{{-- head modules --}}
@prepend('endOfhead')
    
@endprepend

@section('content')
    
<!-- Hero Warp Start -->
<div class="hero-warp">
    <div class="container-fluid">
        <div class="inner-hero-warp">
            <div class="row align-items-end">
                <div class="col-lg-6">
                    <div class="hero-content">
                        <h2>باز هم‌ سلام اینجا خونه‌ی تدورا هست و‌ من هم‌ تدورا هستم</h1>
                        <p>از اولین باری که وارد خانه‌ی من میشی، تو‌ مهمان همیشگی این خونه میشی و‌ قرار داستان مهاجرت خودت رو چند سال بعد برای بچه هات تعریف کنی اینجا خبری از چهارچوب های خشک مهاجرتی نیست، پس هر وقت خواستی میتونی سوال بپرسی و من تا وقتی که ببینم‌ تو‌ به‌ مقصد رسیدی پیشتم‌‌.</p>
                        <p>ببین خجالت نکشیا، ‌هروقت خواستی سوالاتو‌ بپرس</p>
                        {{-- <div class="hero-btn">
                            <a href="contact.html" class="default-btn">تماس با ما</a>
                            <a href="apply.html" class="default-btn style2">مرور کن</a>
                        </div> --}}
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="hero-image">
                        <img src="front-assets/images/hero/hero2.png" alt="image">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Hero Warp End -->
<!-- Immigration Warp Start -->
{{-- <div class="immigration-warp pb-75">
    <div class="container style1">
        <div class="section-title style1">
            <span class="title">گواهی آموزشی</span>
            <h2>آموزش مهاجرتی را که شایسته آن هستید بیاورید</h2>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-4 col-sm-6" data-cue="slideInUp">
                <div class="immigration-widget">
                    <div class="image">
                        <img src="front-assets/images/immigrations/immigration1.jpg" alt="image">
                        <div class="icon">
                            <a href="visa-details.html"><i class="ri-arrow-left-line"></i></a>
                        </div>
                    </div>
                    <div class="content">
                        <span>آزمون شهروندی</span>
                        <h3>
                            <a href="visa-details.html">برای ویزای جدید آنلاین درخواست دهید</a>
                        </h3>
                        <p>
                            جذب و آماده سازی کارشناسان با استعداد برای بیش از 25 سال. ما یک ارزش منحصر به فرد ارائه می دهیم...
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6" data-cue="slideInUp">
                <div class="immigration-widget">
                    <div class="image">
                        <img src="front-assets/images/immigrations/immigration2.jpg" alt="image">
                        <div class="icon">
                            <a href="visa-details.html"><i class="ri-arrow-left-line"></i></a>
                        </div>
                    </div>
                    <div class="content">
                        <span>آیلتس دانش</span>
                        <h3>
                            <a href="visa-details.html">برنامه های مهاجرتی واجد شرایط</a>
                        </h3>
                        <p>
                            جذب و آماده سازی کارشناسان با استعداد برای بیش از 25 سال. ما یک ارزش منحصر به فرد ارائه می دهیم...
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6" data-cue="slideInUp">
                <div class="immigration-widget">
                    <div class="image">
                        <img src="front-assets/images/immigrations/immigration3.jpg" alt="image">
                        <div class="icon">
                            <a href="visa-details.html"><i class="ri-arrow-left-line"></i></a>
                        </div>
                    </div>
                    <div class="content">
                        <span>آیلتس دانش</span>
                        <h3>
                            <a href="visa-details.html">ترکیب ویزای درخواستی</a>
                        </h3>
                        <p>
                            جذب و آماده سازی کارشناسان با استعداد برای بیش از 25 سال. ما یک ارزش منحصر به فرد ارائه می دهیم...
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<!-- Immigration Warp End -->
<!-- About Warp Start -->
<div class="about-warp pb-100">
    <div class="container style1">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="about-image">
                    <div class="row">
                        <div class="col-lg-8 col-sm-7">
                            <div class="image">
                                <img src="front-assets/images/abouts/about1.jpg" alt="image">
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-5">
                            <div class="image">
                                <img src="front-assets/images/abouts/about2.jpg" class="about2" alt="image">
                            </div>
                            <div class="image last-image">
                                <img src="front-assets/images/abouts/about3.jpg" class="about3" alt="image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-content single-section ">
                    {{-- <span class="title">درباره شرکت ما</span> --}}
                    <h2>مشاور آنلاین</h2>
                    <p>یادت هست گفته بودم که هر سوالی داشتی میتونی ازمون بپرسی ، شاید به خودت بگی چجوری ؟  خیلی راحته</p>
                    <p>ما تنها نیستیم ، افراد با تجربه و‌ پر انرژیی هستند که قرار جوابمون رو بدن، تو فقط فرم ارزیابی رو‌ کامل پر کن ، تو‌ قسمت توضیحات سوال ‌ها رو‌ بپرس ، بعد یکم صبر کنیم تا گوشیت زنگ‌ بخوره و ببینیم جوابش چی میتونه باشه</p>
                    <p class="fs-4">راستی اینو بهت نگفتم ، چون تو‌ دوست منی بدون هیچ هزینه‌ی میتونی مشاوره بگیری</p>
                    <ul class="about-list"> <li> <i class="flaticon-double-check"></i> بازدید هندی، پزشکی، تجاری و هر دسته دیگر پردازش ویزا. </li> <li> <i class="flaticon-double-check"></i> اروپا، انگلستان، ایالات متحده آمریکا، کانادا و هر کشور دیگری از پردازش ویزا بازدید می کنند. </li> <li> <i class="flaticon-double-check"></i> بازنشستگی بریتانیا، پاسپورت بریتانیا، بررسی و تجدید نظر. ویزای کار عمان و قطر </li> <li> <i class="flaticon-double-check"></i> ترجمه انگلیسی، گواهی دفتر اسناد رسمی، بلیط هواپیما و رزرو هتل. </li> </ul>
                    <div class="about-btn-warp d-flex align-items-center">
                        <a href="about.html" class="default-btn">مرور کن</a>
                        <ul class="support">
                            <li>
                                <div class="icon">
                                    <img src="front-assets/images/svgs/about1.svg" alt="image">
                                </div>
                            </li>
                            <li>
                                <div class="content">
                                    <span>پشتیبانی 24/7</span>
                                    <a href="tel:99654892986" dir="ltr">+ 99 (65489) 2986</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About Warp End -->
<!-- Application Warp Start -->
<div class="application-warp">
    <div class="container-fluid">
        <div class="inner-warp pb-75 pt-100">
            <div class="container style1">
                <div class="section-title style1">
                    <span class="title">سفرهای کاربردی</span>
                    <h2>اجازه دهید سفر شما به سرزمین رویایی را ترتیب دهیم</h2>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-3 col-sm-6" data-cue="slideInUp">
                        <div class="application-widget">
                            <div class="heading-icon d-flex align-items-center">
                                <div class="icon">
                                    <i class="flaticon-passport"></i>
                                </div>
                                <h3>گذرنامه</h3>
                            </div>
                            <p>لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال استاندارد صنعت بوده است.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6" data-cue="slideInUp">
                        <div class="application-widget">
                            <div class="heading-icon d-flex align-items-center">
                                <div class="icon">
                                    <i class="flaticon-languages"></i>
                                </div>
                                <h3>ترجمه</h3>
                            </div>
                            <p>لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال استاندارد صنعت بوده است.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6" data-cue="slideInUp">
                        <div class="application-widget">
                            <div class="heading-icon d-flex align-items-center">
                                <div class="icon">
                                    <i class="flaticon-visa"></i>
                                </div>
                                <h3>ویزا</h3>
                            </div>
                            <p>لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال استاندارد صنعت بوده است.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6" data-cue="slideInUp">
                        <div class="application-widget">
                            <div class="heading-icon d-flex align-items-center">
                                <div class="icon">
                                    <i class="flaticon-passport-1"></i>
                                </div>
                                <h3>مهاجرت</h3>
                            </div>
                            <p>لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال استاندارد صنعت بوده است.</p>
                        </div>
                    </div>
                </div>
            </div>
            <img src="front-assets/images/shapes/application-shape1.png" class="application-shape1" alt="image">
        </div>
    </div>
</div>
<!-- Application Warp End -->
<!-- Services Warp Start -->
<div class="service-warp">
    <div class="container-fluid">
        <div class="inner-service-warp">
            <div class="container style1">
                <div class="service-widget">
                    <div class="row align-items-end">
                        <div class="col-lg-4 col-md-5">
                            <div class="service-content">
                                <h2>خدمات شرکت ویزا از نمایندگان مجرب ما</h2>
                                <ul class="service-list"> <li> <i class="flaticon-point"></i> ورود و خروج از کشور </li> <li> <i class="flaticon-point"></i> ویزاهای تمام کشور </li> <li> <i class="flaticon-point"></i> تابعیت کشور </li> <li> <i class="flaticon-point"></i> استقرار در کشور </li> <li> <i class="flaticon-point"></i> راهنما و پشتیبانی </li> </ul>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-7">
                            <div class="service-image">
                                <img src="front-assets/images/services/service-1.png" alt="image">
                                <img src="front-assets/images/shapes/servie-shape2.png" class="service-2" alt="image">
                            </div>
                        </div>
                    </div>
                    <img src="front-assets/images/shapes/servie-shape1.png" class="service-1" alt="image">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Services Warp End -->
<!-- Feedback Warp Start -->
{{-- <div class="feedback-warp pt-100 pb-75">
    <div class="container style1">
        <div class="section-title style1"> <span class="title">بازخورد مشتریان</span> <h2>آنها در مورد ما چه می گویند؟ با هم بودن</h2> </div>
        <div class="row justify-content-center">
            <div class="col-lg-4 col-sm-6" data-cue="slideInUp">
                <div class="feedback-widget">
                    <div class="content">
                        <p>من در سال گذشته با آنها کار کرده ام و به طور مداوم و با کیفیت کار آنها طراحی شده است. آنها چشم تیزبین برای برنامه ریزی دارند و همیشه پروژه ها را به موقع تحویل می دهند.</p>
                    </div>
                    <div class="client d-flex align-items-center justify-content-between">
                        <div class="client-self d-flex align-items-center">
                            <div class="image">
                                <img src="front-assets/images/users/feedback1.png" alt="image">
                            </div>
                            <div class="self">
                                <h4>میگان باخ</h4>
                                <span>مدیر عامل</span>
                            </div>
                        </div>
                        <div class="icon">
                            <img src="front-assets/images/svgs/client.svg" alt="image">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6" data-cue="slideInUp">
                <div class="feedback-widget">
                    <div class="client style2 d-flex align-items-center justify-content-between">
                        <div class="client-self d-flex align-items-center">
                            <div class="image">
                                <img src="front-assets/images/users/feedback2.png" alt="image">
                            </div>
                            <div class="self">
                                <h4>میگان باخ</h4>
                                <span>مدیر عامل</span>
                            </div>
                        </div>
                        <div class="icon">
                            <img src="front-assets/images/svgs/client.svg" alt="image">
                        </div>
                    </div>
                    <div class="content style2">
                        <p>
                            من در سال گذشته با آنها کار کرده ام و به طور مداوم و با کیفیت کار آنها طراحی شده است. آنها چشم تیزبین برای برنامه ریزی دارند و همیشه پروژه ها را به موقع تحویل می دهند.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6" data-cue="slideInUp">
                <div class="feedback-widget">
                    <div class="content">
                        <p>
                            من در سال گذشته با آنها کار کرده ام و به طور مداوم و با کیفیت کار آنها طراحی شده است. آنها چشم تیزبین برای برنامه ریزی دارند و همیشه پروژه ها را به موقع تحویل می دهند.
                        </p>
                    </div>
                    <div class="client d-flex align-items-center justify-content-between">
                        <div class="client-self d-flex align-items-center">
                            <div class="image">
                                <img src="front-assets/images/users/feedback3.png" alt="image">
                            </div>
                            <div class="self">
                                <h4>میگان باخ</h4>
                                <span>مدیر عامل</span>
                            </div>
                        </div>
                        <div class="icon">
                            <img src="front-assets/images/svgs/client.svg" alt="image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<!-- Feedback Warp End -->
<!-- Choose Warp Start  -->
<div class="choose-warp">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 p-0">
                <div class="choose-content single-section">
                    <span class="title">چرا ما را انتخاب کنید؟</span>
                    <h2>با مشاوران ما حس تضمین شده را جمع آوری کنید</h2>
                    <p>جذب و آماده سازی کارشناسان با استعداد برای بیش از 25 سال. ما یک پیشنهاد ارزش منحصر به فرد برای هر دو ارائه می دهیم. هرکسی که دوست ندارد یا دنبال نمی کند. با تزریق کلمات تصادفی زمزمه‌ای که اندکی نیستند، به نوعی دچار تغییر شده‌اند</p>
                    <div class="choose-support d-flex align-items-center ">
                        <ul>
                            <li>
                                <div class="icon">
                                    <i class="flaticon-briefcase"></i>
                                </div>
                            </li>
                            <li>
                                پشتیبانی ضروری
                            </li>
                        </ul>

                        <ul>
                            <li>
                                <div class="icon">
                                    <i class="flaticon-interview"></i>
                                </div>
                            </li>
                            <li>
                                فتح مهاجرت مجاز
                            </li>
                        </ul>
                    </div>
                    <div class="choose-list">
                        <ul> <li> <i class="flaticon-double-check"></i> اروپا، انگلستان، ایالات متحده آمریکا، کانادا و هر کشور دیگری از پردازش ویزا بازدید می کنند. </li> <li> <i class="flaticon-double-check"></i> ترجمه انگلیسی، گواهی دفتر اسناد رسمی، بلیط هواپیما و رزرو هتل. </li> </ul>
                    </div>
                    <a href="about.html" class="default-btn">مرور کن</a>
                </div>
            </div>
            <div class="col-lg-6 p-0">
                <div class="choose-image">
                    <div class="choose-card">
                        <div class="icon">
                            <i class="flaticon-immigration"></i>
                        </div>
                        <div class="content">
                            <h4>95,891K</h4>
                            <p>مشتریان در سراسر جهان</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Choose Warp End  -->
<!-- Consultants Warp Start -->
{{-- <div class="consultant-warp ptb-100">
    <div class="container style1">
        <div class="section-title style1">
            <span class="title">افراد حرفه ای</span>
            <h2>با تیم مشاوران مهاجرت ویزای عادی ما آشنا شوید</h2>
        </div>
        <!-- Swiper -->
        <div class="consulting-slider-warp">
            <div class="swiper consultant-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="coverflow-team">
                            <div class="image">
                                <img src="front-assets/images/consultants/consultant1.jpg" alt="image">
                                <ul class="social">
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
                                    <li>
                                        <div class="icon">
                                            <i class="ri-share-line"></i>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="content">
                                <h3>
                                    <a href="team.html">لورتا پروهاسکا</a>
                                </h3>
                                <p>مدیر عامل</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="coverflow-team">
                            <div class="image">
                                <img src="front-assets/images/consultants/consultant2.jpg" alt="image">
                                <ul class="social">
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
                                    <li>
                                        <div class="icon">
                                            <i class="ri-share-line"></i>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="content">
                                <h3>
                                    <a href="team.html">لورتا پروهاسکا</a>
                                </h3>
                                <p>مدیر عامل</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="coverflow-team">
                            <div class="image">
                                <img src="front-assets/images/consultants/consultant3.jpg" alt="image">
                                <ul class="social">
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
                                    <li>
                                        <div class="icon">
                                            <i class="ri-share-line"></i>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="content">
                                <h3>
                                    <a href="team.html">لورتا پروهاسکا</a>
                                </h3>
                                <p>مدیر عامل</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="coverflow-team">
                            <div class="image">
                                <img src="front-assets/images/consultants/consultant1.jpg" alt="image">
                                <ul class="social">
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
                                    <li>
                                        <div class="icon">
                                            <i class="ri-share-line"></i>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="content">
                                <h3>
                                    <a href="team.html">لورتا پروهاسکا</a>
                                </h3>
                                <p>مدیر عامل</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="coverflow-team">
                            <div class="image">
                                <img src="front-assets/images/consultants/consultant4.jpg" alt="image">
                                <ul class="social">
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
                                    <li>
                                        <div class="icon">
                                            <i class="ri-share-line"></i>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="content">
                                <h3>
                                    <a href="team.html">لورتا پروهاسکا</a>
                                </h3>
                                <p>مدیر عامل</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="coverflow-team">
                            <div class="image">
                                <img src="front-assets/images/consultants/consultant5.jpg" alt="image">
                                <ul class="social">
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
                                    <li>
                                        <div class="icon">
                                            <i class="ri-share-line"></i>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="content">
                                <h3>
                                    <a href="team.html">لورتا پروهاسکا</a>
                                </h3>
                                <p>مدیر عامل</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="coverflow-team">
                            <div class="image">
                                <img src="front-assets/images/consultants/consultant1.jpg" alt="image">
                                <ul class="social">
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
                                    <li>
                                        <div class="icon">
                                            <i class="ri-share-line"></i>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="content">
                                <h3>
                                    <a href="team.html">لورتا پروهاسکا</a>
                                </h3>
                                <p>مدیر عامل</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="coverflow-team">
                            <div class="image">
                                <img src="front-assets/images/consultants/consultant2.jpg" alt="image">
                                <ul class="social">
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
                                    <li>
                                        <div class="icon">
                                            <i class="ri-share-line"></i>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="content">
                                <h3>
                                    <a href="team.html">لورتا پروهاسکا</a>
                                </h3>
                                <p>مدیر عامل</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="coverflow-team">
                            <div class="image">
                                <img src="front-assets/images/consultants/consultant3.jpg" alt="image">
                                <ul class="social">

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
                                    <li>
                                        <div class="icon">
                                            <i class="ri-share-line"></i>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="content">
                                <h3>
                                    <a href="team.html">لورتا پروهاسکا</a>
                                </h3>
                                <p>مدیر عامل</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="coverflow-team">
                            <div class="image">
                                <img src="front-assets/images/consultants/consultant1.jpg" alt="image">
                                <ul class="social">
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
                                    <li>
                                        <div class="icon">
                                            <i class="ri-share-line"></i>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="content">
                                <h3>
                                    <a href="team.html">لورتا پروهاسکا</a>
                                </h3>
                                <p>مدیر عامل</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="coverflow-team">
                            <div class="image">
                                <img src="front-assets/images/consultants/consultant4.jpg" alt="image">
                                <ul class="social">
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
                                    <li>
                                        <div class="icon">
                                            <i class="ri-share-line"></i>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="content">
                                <h3>
                                    <a href="team.html">لورتا پروهاسکا</a>
                                </h3>
                                <p>مدیر عامل</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="coverflow-team">
                            <div class="image">
                                <img src="front-assets/images/consultants/consultant5.jpg" alt="image">
                                <ul class="social">
                                    <li>
                                        <a href="https://www.facebook.com/" target="_blank"><i class="ri-facebook-circle-line"></i></a>
                                    </li>
                                    <li>
                                        <a href="https://twitter.com/" target="_blank"><i sclass="ri-twitter-line"></i></a>
                                    </li>
                                    <li>
                                        <a href="https://instagram.com/" target="_blank"><i class="ri-instagram-line"></i></a>
                                    </li>
                                    <li>
                                        <a href="https://pinterest.com/" target="_blank"><i class="ri-pinterest-line"></i></a>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <i class="ri-share-line"></i>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="content">
                                <h3>
                                    <a href="team.html">لورتا پروهاسکا</a>
                                </h3>
                                <p>مدیر عامل</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-scrollbar"></div>
            <div class="swiper-btn">
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </div>
    </div>
</div> --}}
<!-- Consultants Warp End -->
<!-- Benefit Warp Start -->
<div class="benefit-warp pb-100">
    <div class="container style1">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="benefit-image">
                    <img src="front-assets/images/benefits/benefit1.jpg" alt="image">
                    <img src="front-assets/images/benefits/benefit2.jpg" class="benefit2" alt="image">
                    <img src="front-assets/images/benefits/benefit3.jpg" class="benefit3" alt="image">
                    <div class="benefit-card">
                        <h2>36+ <span>سود ما</span></h2>
                        <p>تجربه، ثبت نام و استقرار.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="benefit-content single-section">
                    <span class="title">سود ما</span>
                    <h2>توضیحات نادر برای تعیین سازمان ما</h2>
                    <p>جذب و آماده سازی کارشناسان با استعداد برای بیش از 25 سال. ما یک ارزش پیشنهادی منحصر به فرد برای هر دو ارائه می دهیم. هرکسی که دوست ندارد یا دنبال نمی کند. با تزریق کلمات تصادفی زمزمه‌ای که اندکی نیستند، به نوعی دچار تغییر شده‌اند</p>
                    <ul>
                        <li>
                            <div class="icon">
                                <i class="flaticon-interview"></i>
                            </div>
                            <div class="content">
                                <h5>مصاحبه فوری و کمک ویزا</h5>
                                <p>
                                    جذب و آماده سازی کارشناسان با استعداد برای بیش از 25 سال. ما یک پیشنهاد ارزش منحصر به فرد برای هر دو ارائه می دهیم.
                                </p>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <i class="flaticon-team"></i>
                            </div>
                            <div class="content">
                                <h5>پردازش سریعتر و هزینه موثرتر</h5>
                                <p>
                                    جذب و آماده سازی کارشناسان با استعداد برای بیش از 25 سال. ما یک پیشنهاد ارزش منحصر به فرد برای هر دو ارائه می دهیم.
                                </p>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <i class="flaticon-diplomacy"></i>
                            </div>
                            <div class="content">
                                <h5>پشتیبانی 24 ساعته و ویزای کاری</h5>
                                <p>
                                    جذب و آماده سازی کارشناسان با استعداد برای بیش از 25 سال. ما یک پیشنهاد ارزش منحصر به فرد برای هر دو ارائه می دهیم.
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Benefit Warp End -->
<!-- Blog Warp Start -->
{{-- <div class="blog-warp pb-75">
    <div class="container style1">
        <div class="section-title">
            <span class="title">از وبلاگ ما</span>
            <h2>آخرین بررسی اخبار و مقالات</h2>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-4 col-sm-6" data-cue="slideInUp">
                <div class="blog-card">
                    <div class="image">
                        <a href="blog-details.html"> <img src="front-assets/images/blogs/blog1.jpg" alt="image"></a>
                    </div>
                    <div class="content">
                        <div class="user">
                            <img src="front-assets/images/users/blog1.png" alt="image">
                        </div>
                        <ul class="self d-flex justify-content-between align-items-center"> <li> توسط <a href="#">جان اندرسون</a> </li> <li> <img src="front-assets/images/svgs/calendar1.svg" alt="img"> 21 دی 1402 </li> </ul>
                        <h3>
                            <a href="blog-details.html">اجازه گرفتن انواع مختلف پشتیبان گیری از داده ها را بدهید</a>
                        </h3>
                        <ul class="comment d-flex justify-content-between align-items-center">
                            <li>
                                <img src="front-assets/images/svgs/comment1.svg" alt="img">
                                <a href="#">2 نظر</a>
                            </li>
                            <li>
                                <a href="blog-details.html" class="explore">مرور کن</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6" data-cue="slideInUp">
                <div class="blog-card">
                    <div class="image">
                        <a href="blog-details.html"> <img src="front-assets/images/blogs/blog2.jpg" alt="image"></a>
                    </div>
                    <div class="content">
                        <div class="user">
                            <img src="front-assets/images/users/blog2.png" alt="image">
                        </div>
                        <ul class="self d-flex justify-content-between align-items-center">
                            <li>
                                توسط <a href="#">جان اندرسون</a>
                            </li>
                            <li>
                                <img src="front-assets/images/svgs/calendar1.svg" alt="img">
                                21 دی 1402
                            </li>
                        </ul>
                        <h3>
                            <a href="blog-details.html">اجازه گرفتن انواع مختلف پشتیبان گیری از داده ها را بدهید</a>
                        </h3>
                        <ul class="comment d-flex justify-content-between align-items-center">
                            <li>
                                <img src="front-assets/images/svgs/comment1.svg" alt="img">
                                <a href="#">2 نظر</a>
                            </li>
                            <li>
                                <a href="blog-details.html" class="explore">مرور کن</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6" data-cue="slideInUp">
                <div class="blog-card">
                    <div class="image">
                        <a href="blog-details.html"> <img src="front-assets/images/blogs/blog3.jpg" alt="image"></a>
                    </div>
                    <div class="content">
                        <div class="user">
                            <img src="front-assets/images/users/blog3.png" alt="image">
                        </div>
                        <ul class="self d-flex justify-content-between align-items-center">
                            <li>
                                توسط <a href="#">جان اندرسون</a>
                            </li>
                            <li>
                                <img src="front-assets/images/svgs/calendar1.svg" alt="img">
                                21 دی 1402
                            </li>
                        </ul>
                        <h3>
                            <a href="blog-details.html">اجازه گرفتن انواع مختلف پشتیبان گیری از داده ها را بدهید</a>
                        </h3>
                        <ul class="comment d-flex justify-content-between align-items-center">
                            <li>
                                <img src="front-assets/images/svgs/comment1.svg" alt="img">
                                <a href="#">2 نظر</a>
                            </li>
                            <li>
                                <a href="blog-details.html" class="explore">مرور کن</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<!-- Blog Warp End -->
<!-- Partnership Warp Start -->
<div class="partner-ship-warp">
    <div class="container-fluid">
        <div class="inner-partner ">
            <h4 class="text-center">شراکت ما با این شرکت های جهانی.</h4>

            <div class="swiper partner-slider">
                <div class="swiper-wrapper">

                    <div class="swiper-slide" data-cue="slideInUp">
                        <div class="partner-logo">
                            <a href="#">
                                <img src="front-assets/images/partners/partner1.png" alt="image">
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide" data-cue="slideInUp">
                        <div class="partner-logo">
                            <a href="#">
                                <img src="front-assets/images/partners/partner2.png" alt="image">
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide" data-cue="slideInUp">
                        <div class="partner-logo">
                            <a href="#">
                                <img src="front-assets/images/partners/partner3.png" alt="image">
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide" data-cue="slideInUp">
                        <div class="partner-logo">
                            <a href="#">
                                <img src="front-assets/images/partners/partner4.png" alt="image">
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide" data-cue="slideInUp">
                        <div class="partner-logo">
                            <a href="#">
                                <img src="front-assets/images/partners/partner5.png" alt="image">
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide" data-cue="slideInUp">
                        <div class="partner-logo">
                            <a href="#">
                                <img src="front-assets/images/partners/partner6.png" alt="image">
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide" data-cue="slideInUp">
                        <div class="partner-logo">
                            <a href="#">
                                <img src="front-assets/images/partners/partner7.png" alt="image">
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide" data-cue="slideInUp">
                        <div class="partner-logo">
                            <a href="#">
                                <img src="front-assets/images/partners/partner2.png" alt="image">
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide" data-cue="slideInUp">
                        <div class="partner-logo">
                            <a href="#">
                                <img src="front-assets/images/partners/partner1.png" alt="image">
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- Partnership Warp End -->



@endsection

{{-- body modules --}}
@prepend('endOfbody')
    
@endprepend