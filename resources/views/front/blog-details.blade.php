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
                <h2>جزئیات وبلاگ</h2>
                <ul>
                    <li>
                        <a href="{{ route('front.index') }}">تدورا</a>
                    </li>
                    <li>
                        جزئیات وبلاگ
                    </li>
                </ul>
            </div>
        </div>
        <img src="assets/images/shapes/inner-hero-shape1.png" class="inner-hero-shape1" alt="image">
    </div>
    <!-- Inner Hero Warp End -->
    <!-- Blog Details Warp Start -->
    <div class="blog-details-warp ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="blog-big-warp">
                        <div class="image">
                            <img src="assets/images/blogs/blog-details1.jpg" alt="image">
                        </div>
                        <div class="content">
                            <ul>
                                <li> <img src="assets/images/users/blog4.png" alt="image" style=""> </li>
                                <li> توسط <a href="#">استفان جونز</a> </li>
                                <li> <img src="assets/images/svgs/calendar1.svg" alt="img" style=""> 27 دی 1402 </li>
                                <li> <img src="assets/images/svgs/comment1.svg" alt="img" style=""> <a href="#">2 نظر</a> </li>
                            </ul>
                            <h4>جستجو برای اطلاعات سفر هوایی و رزرو بلیط برای سفر</h4>
                            <p>لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال استاندارد صنعت بوده است.لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال استاندارد صنعت بوده است.لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال استاندارد صنعت بوده است.لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال استاندارد صنعت بوده است.</p>
                            <div class="style-font">
                                <h6>“لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال استاندارد صنعت بوده است.لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال استاندارد صنعت بوده است.”</h6>
                                <p>رندال اشمیت</p>
                                <i class="ri-double-quotes-r"></i>
                            </div>
                            <p>لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال استاندارد صنعت بوده است.لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال استاندارد صنعت بوده است.لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال استاندارد صنعت بوده است.لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال استاندارد صنعت بوده است.</p>
                            <p>لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال استاندارد صنعت بوده است.لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال استاندارد صنعت بوده است.لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال استاندارد صنعت بوده است.</p>
                        </div>
                        <div class="tag-share d-flex align-items-center justify-content-between">
                            <div class="tag">
                                <ul>
                                    <li>
                                        <h3>برچسب ها:</h3>
                                    </li>
                                    <li> <a href="#">مهاجرت</a> </li>
                                    <li> <a href="#">مشاوره ویزا</a> </li>
                                </ul>
                            </div>
                            <div class="share">
                                <ul class="social">
                                    <li>
                                        <h3>اشتراک گذاری:</h3>
                                    </li>
                                    <li> <a href="https://www.facebook.com/" target="_blank"><i class="ri-facebook-circle-line"></i></a> </li>
                                    <li> <a href="https://twitter.com/" target="_blank"><i class="ri-twitter-line"></i></a> </li>
                                    <li> <a href="https://instagram.com/" target="_blank"><i class="ri-instagram-line"></i></a> </li>
                                    <li> <a href="https://pinterest.com/" target="_blank"><i class="ri-pinterest-line"></i></a> </li>
                                </ul>
                            </div>
                        </div>
                        <div class="comments-warp">
                            <h3>2 نظر</h3>
                            <div class="comments">
                                <div class="image"> <img src="assets/images/users/blog-details1.png" alt="image"> </div>
                                <div class="comment-content">
                                    <h5>آرور ولچ</h5>
                                    <p>لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال استاندارد صنعت بوده است.لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال استاندارد صنعت بوده است.</p>
                                </div>
                                <a href="#" class="reply">پاسخ</a>
                            </div>
                            <div class="comments">
                                <div class="image"> <img src="assets/images/users/blog-details2.png" alt="image"> </div>
                                <div class="comment-content">
                                    <h5>آرور ولچ</h5>
                                    <p>لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال استاندارد صنعت بوده است.لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال استاندارد صنعت بوده است.</p>
                                </div>
                                <a href="#" class="reply">پاسخ</a>
                            </div>
                        </div>
                        <div class="leave-warp">
                            <h3>نظر بدهید</h3>
                            <form>
                                <div class="row">
                                    <div class="col-lg-6"> <input type="text" class="form-control" placeholder="نام شما"> </div>
                                    <div class="col-lg-6"> <input type="text" class="form-control" placeholder="ایمیل شما"> </div>
                                    <div class="col-lg-6"> <input type="text" class="form-control" placeholder="تلفن"> </div>
                                    <div class="col-lg-6"> <input type="text" class="form-control" placeholder="وبسایت"> </div>
                                    <div class="col-lg-12"> <textarea type="text" class="form-control" placeholder="نوشتن یک نظر"></textarea> </div>
                                    <div class="col-lg-12"> <button class="default-btn" type="submit">ارسال پیام</button> </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog-small-warp">
                        <div class="input-box">
                            <input type="text" class="form-control" placeholder="جستجو اینجا" /> <button class="default-btn" type="submit"><i class="ri-search-line"></i></button>
                        </div>
                        <div class="all-boxes post-box">
                            <h3>آخرین پست ها</h3>
                            <div class="blog-post d-flex">
                                <a class="thumb" href="blog-details.html"> <span class="full-image cover bg-1"></span> </a>
                                <div class="post-content">
                                    <p><img src="assets/images/svgs/calendar1.svg" alt="image" /> 03 دی 1402</p>
                                    <h5><a href="blog-details.html">لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد.</a></h5>
                                </div>
                            </div>
                            <div class="blog-post d-flex">
                                <a class="thumb" href="blog-details.html"> <span class="full-image cover bg-2"></span> </a>
                                <div class="post-content">
                                    <p><img src="assets/images/svgs/calendar1.svg" alt="image" /> 03 دی 1402</p>
                                    <h5><a href="blog-details.html">لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد.</a></h5>
                                </div>
                            </div>
                            <div class="blog-post d-flex">
                                <a class="thumb" href="blog-details.html"> <span class="full-image cover bg-3"></span> </a>
                                <div class="post-content">
                                    <p><img src="assets/images/svgs/calendar1.svg" alt="image" /> 03 دی 1402</p>
                                    <h5><a href="blog-details.html">لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد.</a></h5>
                                </div>
                            </div>
                            <div class="blog-post d-flex last-blog">
                                <a class="thumb" href="blog-details.html"> <span class="full-image cover bg-4"></span> </a>
                                <div class="post-content">
                                    <p><img src="assets/images/svgs/calendar1.svg" alt="image" /> 03 دی 1402</p>
                                    <h5><a href="blog-details.html">لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد.</a></h5>
                                </div>
                            </div>
                        </div>
                        <div class="all-boxes categories">
                            <h3>دسته بندی ها</h3>
                            <ul>
                                <li><a href="#">تحصیل در خارج</a></li>
                                <li><a href="#">گرین کارت</a></li>
                                <li><a href="#">متقاضیان</a></li>
                                <li><a href="#">بیمه مسافرتی</a></li>
                                <li><a href="#">ویزای مشاوره</a></li>
                                <li><a href="#">ویزای کاری</a></li>
                            </ul>
                        </div>
                        <div class="all-boxes tags">
                            <h3>برچسب ها</h3>
                            <ul>
                                <li><a href="#">مهاجرت</a></li>
                                <li><a href="#">ویزا تجاری</a></li>
                                <li><a href="#">تجاری</a></li>
                                <li><a href="#">مشاوره</a></li>
                                <li><a href="#">ویزا</a></li>
                                <li><a href="#">آموزشی</a></li>
                                <li><a href="#">مسافرت</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Blog Details Warp End -->
    <!-- ****************************************************************************************************** -->
@endsection

{{-- body modules --}}
@prepend('endOfbody')
    
@endprepend