@extends('layouts.front')
 
@section('title', 'Theodoraworld')
 
{{-- head modules --}}
@prepend('endOfhead')
    
@endprepend

@section('content')
<div class="inner-banner-warp">
    <div class="container">
        <div class="inner-hero-content">
            <h2>تماس با ما</h2>
            <ul>
                <li><a href="index.html">خانه</a></li>
                <li>تماس با ما</li>
            </ul>
        </div>
    </div>
    <img src="assets/images/shapes/inner-hero-shape1.png" class="inner-hero-shape1" alt="image" />
</div>

<div class="contact-warp pt-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="contact-content">
                    <h4>عشق به گوش دادن از شما. در تماس باشید</h4>
                    <p>ما می دانیم که هیچ دو کسب و کار مشابه نیستند، و به همین دلیل است که ما راه حل های نرم افزاری سفارشی را برای رفع نیازهای خاص شما ارائه می دهیم.</p>
                    <div class="row">
                        <div class="col-lg-6 col-sm-6">
                            <div class="contact-list">
                                <ul>
                                    <li>ساعت های کاری ما</li>
                                    <li>دوشنبه - جمعه</li>
                                    <li>8:00 صبح تا 5:00 عصر</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div class="contact-list">
                                <ul>
                                    <li>ساعت های کاری ما</li>
                                    <li>دوشنبه - جمعه</li>
                                    <li>8:00 صبح تا 5:00 عصر</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-sm-6">
                            <div class="contact-list">
                                <ul>
                                    <li>ایمل به ما</li>
                                    <li><a href="mailto: hello@ekey.com"> hello@ekey.com</a></li>
                                    <li><a href="mailto: hello@ekey.com"> hello@ekey.com</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div class="contact-list">
                                <ul>
                                    <li>در تماس باشید</li>
                                    <li><a href="tel:99654892986">+ 99 (65489) 2986</a></li>
                                    <li><a href="tel:12468880653">+1-246-888-0653</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="contact-share">
                        <ul class="social">
                            <li><h3>اشتراک گذاری:</h3></li>
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
            <div class="col-lg-6">
                <div class="contact-form">
                    <h4>ارسال یک پیام</h4>
                    <form>
                        <input type="text" class="form-control" name="contactName" placeholder="نام کامل" /> 
                        <input type="text" class="form-control" name="contactEmail" placeholder="آدرس ایمیل" />
                        <input type="text" class="form-control" name="contactTell" placeholder="تلفن" />
                        <input type="text" class="form-control" name="contactSubject" placeholder="موضوع" /> 
                        <textarea type="text" class="form-control" name="contactMsg" placeholder="پیام"></textarea>
                        <button class="default-btn" type="submit">ارسال پیام</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Map Warp Start -->
<div class="map-warp">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4206.881913615064!2d144.9583169121518!3d-37.82282719240604!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d5163a32863%3A0xca74d4a632044682!2sCrowne%20Plaza%20Melbourne%2C%20an%20IHG%20Hotel!5e0!3m2!1sen!2sbd!4v1674978061624!5m2!1sen!2sbd"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
<!-- Map Warp End -->
@endsection

{{-- body modules --}}
@prepend('endOfbody')
    
@endprepend