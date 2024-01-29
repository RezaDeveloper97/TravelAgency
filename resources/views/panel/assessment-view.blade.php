@extends('layouts.panel.master')
 
@section('title', 'داشبورد')
 
{{-- head modules --}}
@prepend('endOfhead')
    
@endprepend

@section('content')
<main>
    <header class="page-header page-header-dark bg-gradient-custom-to-custom pb-10 is-rtl">
        <div class="container-xl px-4">
            <div class="page-header-content pt-4">
                <div class="row align-items-center justify-content-between">
                    <div class="col-auto mt-4">
                        <h1 class="page-header-title">
                            <i class="ms-1 me-1 bx bx-filter"></i>
                            جزئیات فرم
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="container-xl px-4 mt-n10 is-rtl">
        <div class="card mb-4">
            <div class="card-header">جدول داده ها</div>
            <div class="card-body">
                
               <div class="row">
                <div class="col-lg-3">
                    <div class="mb-3">
                        <label for="firstName" class="form-label">نام و نام خانوادگی</label>
                        <input readonly required name="fnamelname" type="text" class="form-control" id="lastname"    />
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="mb-3">
                        <label for="firstName" class="form-label"> سن </label>
                        <input readonly name="age" type="text" class="form-control"     />
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="mb-3">
                        <label for="firstName" class="form-label"> تاهل </label>
                        <select disabled name="status" class="form-select" id="country" required>
                            <option >انتخاب کنید...</option>
                            <option>مجرد</option>
                            <option>متاهل</option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="mb-3">
                        <label for="firstName" class="form-label"> ساکن </label>
                        <input readonly name="location" type="text" class="form-control"     />
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="mb-3">
                        <label for="firstName" class="form-label"> سطح زبان انگلیسی </label>
                        <select disabled name="en-level" class="form-select" id="country" required>
                            <option >انتخاب کنید...</option>
                            <option>هیچ</option>
                            <option>در حال خواندن هستم</option>
                            <option>مدرک زبان IELTS دارم</option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="mb-3">
                        <label for="firstName" class="form-label"> نمره مدرک زبان انگلیسی </label>
                        <input readonly name="en-score" type="text" class="form-control"     disabled />
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="mb-3">
                        <label for="firstName" class="form-label">تسلط به زبان فرانسه </label>
                        <select disabled name="fr-level" class="form-select" id="country" required>
                            <option >انتخاب کنید...</option>
                            <option>هیچ</option>
                            <option>در حال خواندن هستم</option>
                            <option>مدرک زبان TEF یا TCF دارم</option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="mb-3">
                        <label for="firstName" class="form-label"> مدرک و نمره زبان فرانسه </label>
                        <input readonly name="fr-score" type="text" class="form-control"     disabled />
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="mb-3">
                        <label for="firstName" class="form-label"> رشته تحصیلی </label>
                        <input readonly name="field-study" type="text" class="form-control"     />
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="mb-3">
                        <label for="firstName" class="form-label">گرایش تحصیلی </label>
                        <input readonly name="academic-orientation" type="text" class="form-control"     />
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="mb-3">
                        <label for="firstName" class="form-label" >گپ تحصیلی (مدت زمانی که از پایان تحصیل گذشته) </label>
                        <input readonly name="edu-gap" type="text" class="form-control"     />
                    </div>
                </div>
                <hr class="my-3">
                <p>سوابق شغلی خود را وارد کنید </p>
                <div id="rowJobs">
                    <div class="row">
                <div class="col-lg-3">
                    <div class="mb-3">
                        <label for="firstName" class="form-label"> عنوان شغل شما </label>
                        <input readonly name="job-name" type="text" class="form-control"     />
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="mb-3">
                        <label for="firstName" class="form-label"> سوابق شغلی</label>
                        <input readonly name="work-experience" type="text" class="form-control"     />
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="mb-3">
                        <label for="firstName" class="form-label"> مدت اشتغال </label>
                        <input readonly name="employment-period" type="text" class="form-control"     />
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="mb-3">
                        <label for="firstName" class="form-label" style="font-size:0.9rem"> سابقه مدیریت یا بیزینس و اینکه چند درصد سهام به نام متقاضی است </label>
                        <input readonly name="management-experience" type="text" class="form-control"     />
                    </div>
                </div>
            </div>
            </div>
            <hr class="my-3">
                <div class="col-lg-4">
                    <div class="mb-3">
                        <label for="firstName" class="form-label"> سابقه مدیریت با پروانه مطب یا جواز کسب </label>
                        <select disabled name="business-license" class="form-select" id="country" required>
                            <option >انتخاب کنید...</option>
                            <option>مدیر ارشد</option>
                            <option>مدیر میان</option>
                            <option>سایر</option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="mb-3">
                        <label for="firstName" class="form-label"> دارائی نقدی شما</label>
                        <input readonly name="cash-assets" type="text" class="form-control"     />
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="mb-3">
                        <label for="firstName" class="form-label">دارائی غیر نقدی شما</label>
                        <input readonly name="non-cash-assets" type="text" class="form-control"     />
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="mb-3">
                        <label for="firstName" class="form-label"> تمایل شما از چه روشی مهاجرتی است </label>
                        <select disabled name="migration-method" class="form-select" id="country" required>
                            <option >انتخاب کنید...</option>
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
                        <select disabled name="get-know" class="form-select" id="country" required>
                            <option >انتخاب کنید...</option>
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
                        <input readonly required name="whatsapp" type="text" class="form-control" dir="ltr"     />
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="mb-3">
                        <label for="firstName" class="form-label"> آدرس ايميل فعال</label>
                        <input readonly required name="active-email" type="text" class="form-control" dir="ltr"     />
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="mb-3">
                        <hr />
                        <label for="firstName" class="form-label">
                            چه ویزا هایی دریافت کردین و‌ به چه کشور هایی سفر داشتید؟ 
                        </label>
                        <div id="rowCountries">
                            <div class="row">
                                <div class="col-lg-3">
                                    <label for="visas" class="form-label">کشور</label>
                                    <input readonly name="visas[]" type="text" class="form-control" dir="ltr"     />
                                </div>
                                <div class="col-lg-3">
                                    <label for="type-visa" class="form-label"> نوع ویزا</label>
                                    <select disabled name="type-visa[]" class="form-select" required>
                                        <option >انتخاب کنید...</option>
                                        <option>توریستس </option>
                                        <option>کاری</option>
                                        <option>تجاری </option>
                                        <option>تحصیلی </option>
                                    </select>
                                </div>
                                <div class="col-lg-3">
                                    <label for="enter-date" class="form-label">تاریخ ورود</label>
                                    <input readonly name="enter-date[]" type="text" class="form-control" dir="ltr"     />
                                </div>
                                <div class="col-lg-3">
                                    <label for="exit-date" class="form-label">تاریخ خروج</label>
                                    <input readonly name="exit-date[]" type="text" class="form-control" dir="ltr"     />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="mb-3">
                        <div class="form-floating">
                            <textarea readonly name="description" class="form-control"  id="floatingTextarea2" style="height: 100px"></textarea>
                            <label for="floatingTextarea2">توضیحات</label>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="mb-3">
                        <div class="form-floating">
                            <textarea readonly name="tip" class="form-control"  id="floatingTextarea2" style="height: 100px"></textarea>
                            <label for="floatingTextarea2">آیا نکته خاصی برای وکیل و مشاور خود‌ دارید؟</label>
                        </div>
                    </div>
                </div>
               </div>
                
            </div> 

            </div>
        </div>
    </div>
</main>


@endsection

{{-- body modules --}}
@prepend('endOfbody')


@endprepend