@extends('layouts.front')
 
@section('title', 'Theodoraworld')
 
{{-- head modules --}}
@prepend('endOfhead')
    
@endprepend

@section('content')
    <!-- Inner Hero Warp Start -->
    <div class="inner-banner-warp">
        <div class="container">
            <div class="inner-hero-content">
                <h2>ویزای توریستی</h2>
                <ul><li><a href="{{ route('front.index') }}">تدورا</a> </li> <li>ویزای توریستی</li></ul>
            </div>
        </div>
        <img src="front-assets/images/shapes/inner-hero-shape1.png" class="inner-hero-shape1" alt="image">
    </div>
    <!-- Inner Hero Warp End -->
    <div class="inner-blog-warp pt-100 pb-75 ">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                 
                    <p> همان‌طور که قبلا در اینستاگرام ما رویت کردین ، إلمان های گرفتن ویزای توریستی مستقل داشتن حداقل یکی از موارد زیر میباشد.</p>      
                        <ul>
                            <li>تعداد سفرهای متعدد شما ( به خصوص‌ شنگن )</li>
                            <li>دارا بودن شغل و پوزیشن مناسب و دلایل برگشت</li>
                            <li>داشتن دعوت نامه معتبر</li>
                        </ul>
                    <p>ویزای توریستی در اصل به دو صورت میباشد</p>
                    <p>ویزای توریستی ( مستقل ) که در بالا توضیح دادیم و ویزای توریستی ( همراه ) که معمولا برای افراد خانواده‌ی شخصی که ویزای تحصیلی کانادا را دریافت کرده صادر میشود که به صورت نرمال فرزندان زیر هجده سال را هم‌ در بر میگیرد که با این سبک تمامی افراد خانواده همزمان باهم به خاک‌کانادا وارد میشوند.</p>
                </div>
            </div>
        </div>
        </div>

@endsection

{{-- body modules --}}
@prepend('endOfbody')
    
@endprepend