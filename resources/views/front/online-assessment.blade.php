@extends('layouts.front')
 
@section('title', 'Theodoraworld')
 
{{-- head modules --}}
@prepend('endOfhead')
    
@endprepend

@section('content')
<div class="inner-banner-warp">
    <div class="container">
        <div class="inner-hero-content">
            <h2>فرم ارزیابی برای شما</h2>
            <ul>
                <li><a href="index.html">خانه</a></li>
                <li>فرم ارزیابی</li>
            </ul>
        </div>
    </div>
    <!--<img src="assets/images/shapes/inner-hero-shape1.png" class="inner-hero-shape1" alt="image" />-->
</div>
<div class="contact-warp pt-5 pb-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 shadow-sm" style="background: #F7F9FA;">
                <div class="row pt-3">
                    <div class="col-lg-3">
                        <div class="mb-3">
                            <label for="firstName" class="form-label">نام و نام خانوادگی</label>
                            <input name="fnamelname" type="text" class="form-control" id="lastname" placeholder="" value="" required="" />
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="mb-3">
                            <label for="firstName" class="form-label"> سن </label>
                            <input name="age" type="text" class="form-control" id="firstName" placeholder="" value="" required="" />
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="mb-3">
                            <label for="firstName" class="form-label"> تاهل </label>
                            <select name="status" class="form-select" id="country" required>
                                <option value="">انتخاب کنید...</option>
                                <option>مجرد</option>
                                <option>متاهل</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="mb-3">
                            <label for="firstName" class="form-label"> ساکن </label>
                            <input name="location" type="text" class="form-control" id="firstName" placeholder="" value="" required="" />
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="mb-3">
                            <label for="firstName" class="form-label"> سطح زبان انگلیسی </label>
                            <select name="en-level" class="form-select" id="country" required>
                                <option value="">انتخاب کنید...</option>
                                <option>هیچ</option>
                                <option>در حال خواندن هستم</option>
                                <option>مدرک زبان IELTS دارم</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="mb-3">
                            <label for="firstName" class="form-label"> نمره مدرک زبان انگلیسی </label>
                            <input name="en-score" type="text" class="form-control" id="firstName" placeholder="" value="" required="" disabled />
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="mb-3">
                            <label for="firstName" class="form-label">تسلط به زبان فرانسه </label>
                            <select name="fr-level" class="form-select" id="country" required>
                                <option value="">انتخاب کنید...</option>
                                <option>هیچ</option>
                                <option>در حال خواندن هستم</option>
                                <option>مدرک زبان TEF یا TCF دارم</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="mb-3">
                            <label for="firstName" class="form-label"> مدرک و نمره زبان فرانسه </label>
                            <input name="fr-score" type="text" class="form-control" id="firstName" placeholder="" value="" required="" disabled />
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="mb-3">
                            <label for="firstName" class="form-label"> رشته تحصیلی </label>
                            <input name="field-study" type="text" class="form-control" id="firstName" placeholder="" value="" required="" />
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="mb-3">
                            <label for="firstName" class="form-label">گرایش تحصیلی </label>
                            <input name="academic-orientation" type="text" class="form-control" id="firstName" placeholder="" value="" required="" />
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="mb-3">
                            <label for="firstName" class="form-label" >گپ تحصیلی (مدت زمانی که از پایان تحصیل گذشته) </label>
                            <input name="edu-gap" type="text" class="form-control" id="firstName" placeholder="" value="" required="" />
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="mb-3">
                            <label for="firstName" class="form-label"> عنوان شغل شما </label>
                            <input name="job-name" type="text" class="form-control" id="firstName" placeholder="" value="" required="" />
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="mb-3">
                            <label for="firstName" class="form-label"> سوابق شغلی</label>
                            <input name="work-experience" type="text" class="form-control" id="firstName" placeholder="" value="" required="" />
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="mb-3">
                            <label for="firstName" class="form-label"> مدت اشتغال </label>
                            <input name="employment-period" type="text" class="form-control" id="firstName" placeholder="" value="" required="" />
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="mb-3">
                            <label for="firstName" class="form-label" style="font-size:0.9rem"> سابقه مدیریت یا بیزینس و اینکه چند درصد سهام به نام متقاضی است </label>
                            <input name="management-experience" type="text" class="form-control" id="firstName" placeholder="" value="" required="" />
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="mb-3">
                            <label for="firstName" class="form-label"> سابقه مدیریت با پروانه مطب یا جواز کسب </label>
                            <select name="business-license" class="form-select" id="country" required>
                                <option value="">انتخاب کنید...</option>
                                <option>مدیر ارشد</option>
                                <option>مدیر میان</option>
                                <option>سایر</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="mb-3">
                            <label for="firstName" class="form-label"> دارائی نقدی شما</label>
                            <input name="cash-assets" type="text" class="form-control" id="firstName" placeholder="" value="" required="" />
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="mb-3">
                            <label for="firstName" class="form-label">  دارائی غیر نقدی شما</label>
                            <input name="non-cash-assets" type="text" class="form-control" id="firstName" placeholder="" value="" required="" />
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="mb-3">
                            <label for="firstName" class="form-label"> تمایل شما از چه روشی مهاجرتی است </label>
                            <select name="migration-method" class="form-select" id="country" required>
                                <option value="">انتخاب کنید...</option>
                                <option>تحصیلی</option>
                                <option>کاری</option>
                                <option>سرمایه گذاری</option>
                                <option>غیره</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="mb-3">
                            <label for="firstName" class="form-label"> چگونگی آشنایی با ما </label>
                            <select name="get-know" class="form-select" id="country" required>
                                <option value="">انتخاب کنید...</option>
                                <option>گوگل</option>
                                <option>تلگرام</option>
                                <option>اینستاگرام</option>
                                <option>دوستان و آشنایان</option>
                                <option>ایمیل</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="mb-3">
                            <label for="firstName" class="form-label"> تلفن تماس ( واتس اپ )</label>
                            <input name="whatsapp" type="text" class="form-control" dir="ltr" id="firstName" placeholder="" value="" required="" />
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="mb-3">
                            <label for="firstName" class="form-label"> آدرس ايميل فعال</label>
                            <input name="active-email" type="text" class="form-control" dir="ltr" id="firstName" placeholder="" value="" required="" />
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="mb-3">
                            <hr />
                            <label for="firstName" class="form-label">
                                چه ویزا هایی دریافت کردین و‌ به چه کشور هایی سفر داشتید؟ 
                                <button class="btn btn-primary btn-sm">+&nbsp;افزودن موارد بیشتر</button>
                            </label>
                            <div class="row">
                                <div class="col-lg-3">
                                    <label for="firstName" class="form-label">کشور</label>
                                    <input name="visas" type="text" class="form-control" dir="ltr" id="firstName" placeholder="" value="" required="" />
                                </div>
                                <div class="col-lg-3">
                                    <label for="firstName" class="form-label"> نوع ویزا</label>
                                    <select name="type-visa" class="form-select" id="country" required>
                                        <option value="">انتخاب کنید...</option>
                                        <option>توریستس </option>
                                        <option>کاری</option>
                                        <option>تجاری </option>
                                        <option>تحصیلی </option>
                                    </select>
                                </div>
                                <div class="col-lg-3">
                                    <label for="firstName" class="form-label">تاریخ ورود</label>
                                    <input name="enter-date" type="text" class="form-control" dir="ltr" id="firstName" placeholder="" value="" required="" />
                                </div>
                                <div class="col-lg-3">
                                    <label for="firstName" class="form-label">تاریخ خروج</label>
                                    <input name="exit-date" type="text" class="form-control" dir="ltr" id="firstName" placeholder="" value="" required="" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="mb-3">
                            <div class="form-floating">
                                <textarea name="description" class="form-control" placeholder="" id="floatingTextarea2" style="height: 100px"></textarea>
                                <label for="floatingTextarea2">توضیحات</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="mb-3">
                            <div class="form-floating">
                                <textarea name="tip" class="form-control" placeholder="" id="floatingTextarea2" style="height: 100px"></textarea>
                                <label for="floatingTextarea2">آیا نکته خاصی برای وکیل و مشاور خود‌ دارید؟</label>
                            </div>
                        </div>
                    </div>
                    <div class="fw-bold">
                        بعد از تکمیل و اطمینان از صحت فرم‌ بالا ، دکمه ثبت را بزنید تا در ۴۸ ساعت آینده مشاور اختصاصی شما ارتباط شرکت را با شما آغاز کند .
                    </div>
                    <div class="d-flex justify-content-center">
                        <a href="#" class="default-btn my-3"><span>ثبت</span> </a>
                    </div>
                </div>
        </div>
    </div>
</div>
</div>
@endsection

{{-- body modules --}}
@prepend('endOfbody')
    
@endprepend