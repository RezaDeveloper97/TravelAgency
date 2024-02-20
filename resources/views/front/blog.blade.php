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
                <h2>وبلاگ</h2>
                <ul><li><a href="{{ route('front.index') }}">تدورا</a> </li> <li> وبلاگ</li></ul>
            </div>
        </div>
        <img src="front-assets/images/shapes/inner-hero-shape1.png" class="inner-hero-shape1" alt="image">
    </div>
    <!-- Inner Hero Warp End -->
    <!-- Inner Blog Warp Start -->
    <div class="inner-blog-warp pt-100 pb-75 ">
        <div class="container">
            <div class="row justify-content-center">

                <div class="col-lg-4 col-sm-6" data-cue="slideInUp">
                    <div class="blog-card">
                        <div class="image">
                            <a href="#"><img src="front-assets/images/blogs/blog1.jpg" alt="image"></a>
                        </div>
                        <div class="content">
                            <h3>
                                <a href="{{ route('front.blog-details')}}">عنوان خبر</a>
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6" data-cue="slideInUp">
                    <div class="blog-card">
                        <div class="image">
                            <a href="#"> <img src="front-assets/images/blogs/blog1.jpg" alt="image"></a>
                        </div>
                        <div class="content">
                            <h3>
                                <a href="{{ route('front.blog-details') }}">عنوان خبر</a>
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6" data-cue="slideInUp">
                    <div class="blog-card">
                        <div class="image">
                            <a href="#"> <img src="front-assets/images/blogs/blog1.jpg" alt="image"></a>
                        </div>
                        <div class="content">
                            <h3>
                                <a href="{{ route('front.blog-details')}}">عنوان خبر</a>
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6" data-cue="slideInUp">
                    <div class="blog-card">
                        <div class="image">
                            <a href="#"> <img src="front-assets/images/blogs/blog1.jpg" alt="image"></a>
                        </div>
                        <div class="content">
                            <h3>
                                <a href="{{ route('front.blog-details')}}">عنوان خبر</a>
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6" data-cue="slideInUp">
                    <div class="blog-card">
                        <div class="image">
                            <a href="#"> <img src="front-assets/images/blogs/blog1.jpg" alt="image"></a>
                        </div>
                        <div class="content">
                            <h3>
                                <a href="{{ route('front.blog-details')}}">عنوان خبر</a>
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6" data-cue="slideInUp">
                    <div class="blog-card">
                        <div class="image">
                            <a href="#"> <img src="front-assets/images/blogs/blog1.jpg" alt="image"></a>
                        </div>
                        <div class="content">
                            <h3>
                                <a href="{{ route('front.blog-details')}}">عنوان خبر</a>
                            </h3>
                        </div>
                    </div>
                </div>



            </div>
            <div class="visa-btn text-center">
                <a href="#" class="default-btn">بیشتر</a>
            </div>
        </div>
    </div>
@endsection

{{-- body modules --}}
@prepend('endOfbody')
    
@endprepend