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
            <h2>درباره تدورا</h2>
            <ul><li> <a href="{{ route('front.index') }}">تدورا</a> </li> <li>درباره تدورا</li></ul>
        </div>
    </div>
    <img src="front-assets/images/shapes/inner-hero-shape1.png" class="inner-hero-shape1" alt="image">
</div>
<!-- Inner Hero Warp End -->
<div class="inner-blog-warp pt-100 pb-75 ">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <p>
                    رویای مهاجرت از منطقه‌ایی به منطقه‌ی دیگه از قدیم رواج‌ داشته و امروزه با روش های مدرن تر و‌ قانون های به روز تر انجام‌ میشه.
                    
                </p>

                <p>من ( تدورا )‌ با این روش‌ها در این راه میتوانم خط روشنی در امتداد کمک‌ به خودت باشم.
                </p>
                <p>هدف تو‌ و من راهنمایی هایی درست و فارغ از جذب مشتریه که در کمال ناباوری در این حوضه کمتر دیدی.</p>
                <p>گزینه ی کاملا درست برات انتخاب شده همسفر.
                </p>
                <p>من‌ به تو اطلاعات دقیق میدم ، اطلاعات من شاید با باور های تو و حرفهایی که در خصوص مهاجرت زده میشه در تضاد باشه ، ولی با اطمینان بیشتر میتونی روی گذینه های پیش روت حساب باز کنی.
                </p>

                <p>
                    با تجربه های تدورا اینجا هفت ساله که مسیر روشنه.

                </p>
                <p>
                    دستت رو‌ با دستام میگیرم‌ و با هم‌ به مسیرمون ادامه میدیم.

                </p>
                <p>
                    تو‌تنها نیستی که اخه، نگران نباش 

                </p>
                <p>
                    سازمان خصوصی تدورا
                </p>
            </div>
        </div>
    </div>
    </div>
@endsection

{{-- body modules --}}
@prepend('endOfbody')
    
@endprepend