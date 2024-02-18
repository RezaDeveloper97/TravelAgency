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
                <li><a href="{{ route('front.index') }}">تدورا</a></li>
                <li>تماس با ما</li>
            </ul>
        </div>
    </div>
    <img src="front-assets/images/shapes/inner-hero-shape1.png" class="inner-hero-shape1" alt="image" />
</div>

<div class="contact-warp pt-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="contact-content">
                    <p>ما می دانیم که هیچ دو کسب و کار مشابه نیستند، و به همین دلیل است که ما راه حل های نرم افزاری سفارشی را برای رفع نیازهای خاص شما ارائه می دهیم.</p>
               <p>شماره‌ی واتس آپ برات میزارم ولی حتما قبل از زنگ زدن ، فرم‌ارزیابی رو‌ پر کن تا اطلاعات روی سیستم‌ باشه تا راحت تر و کامل‌ تر بهت روش مهاجرتی معرفی کنم تا سه سوت برسی به مقصد 
            </p>
            <p>راستی یه ایمیل هم برات میزارم که فکر نکنم‌ بهش نیاز داشته باشی ولی ضرر نداره 
                تدورا برای ارسال فایل قراردادش از این ایمیل استفاده میکنه. </p>
                <p><a href="mailto:info@theodoraworld.com" href="_blank">info@theodoraworld.com</a></p>
                <p>
                    اوه اوه داشت یادم ‌میرفت ، اینستاگرام تدورا رو‌ از دست بدی از کلی ویدوهای ‌ آموزشی و‌ باحال جا میمونی 
قسمت هایلایت‌ها رو‌ حتما چک‌ کن و مسافرای قبلیمون رو‌ ببین و‌ خودت رو‌ جای اونا تصور کن ، چون قراره تو هم کم کم چمدون رو‌ جمع کنی و‌ راهی بشی .
                </p>
                <p>
                    <div class="contact-share">
                        <ul class="social">
                            <li><h3>اینستاگرام تدورا:</h3></li>
                            {{-- <li>
                                <a href="https://www.facebook.com/" target="_blank"><i class="ri-facebook-circle-line"></i></a>
                            </li> --}}
                            {{-- <li>
                                <a href="https://twitter.com/" target="_blank"><i class="ri-twitter-line"></i></a>
                            </li> --}}
                            <li>
                                <a href="https://www.instagram.com/theodoraworld.official/" target="_blank"><i class="ri-instagram-line"></i></a>
                            </li>
                            {{-- <li>
                                <a href="https://pinterest.com/" target="_blank"><i class="ri-pinterest-line"></i></a>
                            </li> --}}
                        </ul>
                    </div>
                </p>
                <p>
                    منتظرت میمونم تا فرم رو‌ پر کنی عزیزم
                </p>
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