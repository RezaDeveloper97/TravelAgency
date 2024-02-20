@extends('layouts.panel.master')
 
@section('title', 'داشبورد')
 
{{-- head modules --}}
@prepend('endOfhead')
    
@endprepend

@section('content')
    <main class="is-rtl">
            <header class="py-10 mb-4 bg-gradient-primary-to-secondary">
                <div class="container-xl px-4">
                    <div class="text-center">
                        <h1 class="text-white">به داشبورد مدیریتی خوش آمدید</h1>
                        <p class="lead mb-0 text-white-50">یک قالب حرفه ای بر پایه بوت استرپ5 با ظاهری بسیار دلنشین و جذاب</p>
                        <a href="{{ route('login') }}">login</a>
                    </div>
                </div>
            </header>
            <!-- Main page content-->
            <div class="container-xl px-4">
                <h2 class="mt-5 mb-0">داشبورد ها</h2>
                <p>سه داشبورد مدیریتی در طرح های مختلف</p>
                <hr class="mt-0 mb-4">
                <div class="row">
                    <div class="col-md-6 col-xl-4 mb-4 mb-xl-0">
                        <a class="d-block lift rounded overflow-hidden mb-2" href="dashboard-default.html"><img class="img-fluid" src="{{ customAsset('assets/img/screen/dashboards-default.jpg') }}" alt="..."></a>
                        <div class="text-center small">داشبورد پیشفرض</div>
                    </div>
                    <div class="col-md-6 col-xl-4 mb-4 mb-xl-0">
                        <a class="d-block lift rounded overflow-hidden mb-2" href="dashboard-affiliate.html"><img class="img-fluid" src="{{ customAsset('assets/img/screen/dashboards-affiliate.jpg') }}" alt="..."></a>
                        <div class="text-center small">داشبورد بازاریابی</div>
                    </div>
                    <div class="col-md-6 col-xl-4">
                        <a class="d-block lift rounded overflow-hidden mb-2" href="dashboard-multi.html"><img class="img-fluid" src="{{ customAsset('assets/img/screen/dashboards-multi.jpg') }}" alt="..."></a>
                        <div class="text-center small">داشبورد چند منظوره</div>
                    </div>
                </div>
                <h2 class="mt-5 mb-0">صفحات اپلیکیشن</h2>
                <p>صفحات اپلیکیشن از پیش ساخته شده برای برای کمک به ساخت برنامه شما!</p>
                <hr class="mt-0 mb-4">
                <div class="row">
                    <div class="col-sm-6 col-md-4 col-xl-3 mb-4">
                        <a class="d-block lift rounded overflow-hidden mb-2" href="pages/account/profile-billing.html"><img class="img-fluid" src="{{ customAsset('assets/img/screen/profile-billing.jpg') }}" alt="..."></a>
                        <div class="text-center small">حساب کاربری - صورتحساب</div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-xl-3 mb-4">
                        <a class="d-block lift rounded overflow-hidden mb-2" href="pages/account/profile-notifications.html"><img class="img-fluid" src="{{ customAsset('assets/img/screen/profile-notifications.jpg') }}" alt="..."></a>
                        <div class="text-center small">حساب کاربری - اعلان ها</div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-xl-3 mb-4">
                        <a class="d-block lift rounded overflow-hidden mb-2" href="pages/account/profile.html"><img class="img-fluid" src="{{ customAsset('assets/img/screen/profile.jpg') }}" alt="..."></a>
                        <div class="text-center small">حساب کاربری - پروفایل</div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-xl-3 mb-4">
                        <a class="d-block lift rounded overflow-hidden mb-2" href="pages/account/profile-security.html"><img class="img-fluid" src="{{ customAsset('assets/img/screen/profile-security.jpg') }}" alt="..."></a>
                        <div class="text-center small">حساب کاربری - امنیت</div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-xl-3 mb-4">
                        <a class="d-block lift rounded overflow-hidden mb-2" href="pages/auth/login/basic.html"><img class="img-fluid" src="{{ customAsset('assets/img/screen/auth-login-basic.jpg') }}" alt="..."></a>
                        <div class="text-center small">احراز هویت - ورود پایه</div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-xl-3 mb-4">
                        <a class="d-block lift rounded overflow-hidden mb-2" href="pages/auth/login/cover.html"><img class="img-fluid" src="{{ customAsset('assets/img/screen/auth-login-cover.jpg') }}" alt="..."></a>
                        <div class="text-center small">احراز هویت - ورود کاور</div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-xl-3 mb-4">
                        <a class="d-block lift rounded overflow-hidden mb-2" href="pages/auth/register/mobile.html"><img class="img-fluid" src="{{ customAsset('assets/img/screen/auth-mobile.jpg') }}" alt="..."></a>
                        <div class="text-center small">احراز هویت - ورود ثبت نام با شماره</div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-xl-3 mb-4">
                        <a class="d-block lift rounded overflow-hidden mb-2" href="pages/auth/register/basic.html"><img class="img-fluid" src="{{ customAsset('assets/img/screen/auth-register-basic.jpg') }}" alt="..."></a>
                        <div class="text-center small">احراز هویت - ثبت نام پایه</div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-xl-3 mb-4">
                        <a class="d-block lift rounded overflow-hidden mb-2" href="pages/auth/register/cover.html"><img class="img-fluid" src="{{ customAsset('assets/img/screen/auth-register-cover.jpg') }}" alt="..."></a>
                        <div class="text-center small">احراز هویت - ثبت نام کاور</div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-xl-3 mb-4">
                        <a class="d-block lift rounded overflow-hidden mb-2" href="pages/auth/register/stepbystep.html"><img class="img-fluid" src="{{ customAsset('assets/img/screen/auth-register-step.jpg') }}" alt="..."></a>
                        <div class="text-center small">احراز هویت - ثبت نام چند مرحله ای</div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-xl-3 mb-4">
                        <a class="d-block lift rounded overflow-hidden mb-2" href="pages/auth/forgetpwd/basic.html"><img class="img-fluid" src="{{ customAsset('assets/img/screen/auth-forget-basic.jpg') }}" alt="..."></a>
                        <div class="text-center small">احراز هویت - فراموشی رمز پایه</div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-xl-3 mb-4">
                        <a class="d-block lift rounded overflow-hidden mb-2" href="pages/auth/forgetpwd/cover.html"><img class="img-fluid" src="{{ customAsset('assets/img/screen/auth-forget-cover.jpg') }}" alt="..."></a>
                        <div class="text-center small">احراز هویت - فراموشی رمز کاور</div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-xl-3 mb-4">
                        <a class="d-block lift rounded overflow-hidden mb-2" href="pages/invoice.html"><img class="img-fluid" src="{{ customAsset('assets/img/screen/invoice.jpg') }}" alt="..."></a>
                        <div class="text-center small">فاکتور</div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-xl-3 mb-4">
                        <a class="d-block lift rounded overflow-hidden mb-2" href="pages/articles/base.html"><img class="img-fluid" src="{{ customAsset('assets/img/screen/articles-base.jpg') }}" alt="..."></a>
                        <div class="text-center small">مقالات</div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-xl-3 mb-4">
                        <a class="d-block lift rounded overflow-hidden mb-2" href="pages/articles/category.html"><img class="img-fluid" src="{{ customAsset('assets/img/screen/articles-category.jpg') }}" alt="..."></a>
                        <div class="text-center small">مقالات - دسته بندی</div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-xl-3 mb-4">
                        <a class="d-block lift rounded overflow-hidden mb-2" href="pages/articles/tarh-1.html"><img class="img-fluid" src="{{ customAsset('assets/img/screen/articles-tarh1.jpg') }}" alt="..."></a>
                        <div class="text-center small">مقالات - طرح1</div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-xl-3 mb-4">
                        <a class="d-block lift rounded overflow-hidden mb-2" href="pages/articles/tarh-2.html"><img class="img-fluid" src="{{ customAsset('assets/img/screen/articles-tarh2.jpg') }}" alt="..."></a>
                        <div class="text-center small">مقالات - طرح2</div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-xl-3 mb-4">
                        <a class="d-block lift rounded overflow-hidden mb-2" href="pages/pricing/pricing-1.html"><img class="img-fluid" src="{{ customAsset('assets/img/screen/pricing.jpg') }}" alt="..."></a>
                        <div class="text-center small">تعرفه ها</div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-xl-3 mb-4">
                        <a class="d-block lift rounded overflow-hidden mb-2" href="pages/flows/multi-wizard.html"><img class="img-fluid" src="{{ customAsset('assets/img/screen/flows-multi-wizard.jpg') }}" alt="..."></a>
                        <div class="text-center small">فرم گام به گام مرحله ای</div>
                    </div>
                </div>
                <h2 class="mt-5 mb-0">طرح بندی اصلی</h2>
                <p>طرح از پیش آماده شده برای ساخت صفحات جدید</p>
                <hr class="mt-0 mb-4">
                <div class="row">
                    <div class="col-sm-6 col-md-4 mb-4">
                        <div class="small mb-1">ناوبری</div>
                        <div class="list-group mb-4">
                            <a class="list-group-item list-group-item-action p-3" href="pages/layout/static.html">
                                <div class="d-flex align-items-center justify-content-between">
                                    سایدبار استاتیک
                                    <i class="text-muted bx bx-left-arrow-alt"></i>
                                </div>
                            </a>
                            <a class="list-group-item list-group-item-action p-3" href="pages/layout/dark.html">
                                <div class="d-flex align-items-center justify-content-between">
                                    سایدبار تم تاریک
                                    <i class="text-muted bx bx-left-arrow-alt"></i>
                                </div>
                            </a>
                        </div>

                    </div>
                    <div class="col-sm-6 col-md-4 mb-4">
                        <div class="small mb-1">هدر سایت</div>
                        <div class="list-group">
                            <a class="list-group-item list-group-item-action p-3" href="pages/header/simplified.html">
                                <div class="d-flex align-items-center justify-content-between">
                                    ساده
                                    <i class="text-muted bx bx-left-arrow-alt"></i>
                                </div>
                            </a>
                            <a class="list-group-item list-group-item-action p-3" href="pages/header/compact.html">
                                <div class="d-flex align-items-center justify-content-between">
                                    کامپکت
                                    <i class="text-muted bx bx-left-arrow-alt"></i>
                                </div>
                            </a>
                            <a class="list-group-item list-group-item-action p-3" href="pages/header/overlap.html">
                                <div class="d-flex align-items-center justify-content-between">
                                    همپوشانی
                                    <i class="text-muted bx bx-left-arrow-alt"></i>
                                </div>
                            </a>
                            <a class="list-group-item list-group-item-action p-3" href="pages/header/breadcrumbs.html">
                                <div class="d-flex align-items-center justify-content-between">
                                    نمایش مسیر صفحات
                                    <i class="text-muted bx bx-left-arrow-alt"></i>
                                </div>
                            </a>
                            <a class="list-group-item list-group-item-action p-3" href="pages/header/light.html">
                                <div class="d-flex align-items-center justify-content-between">
                                    تم روشن
                                    <i class="text-muted bx bx-left-arrow-alt"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 mb-4">
                        <div class="small mb-1">طرح بندی اصلی</div>
                        <div class="list-group mb-4">
                            <a class="list-group-item list-group-item-action p-3" href="pages/starter/default.html">
                                <div class="d-flex align-items-center justify-content-between">
                                    پیشفرض
                                    <i class="text-muted bx bx-left-arrow-alt"></i>
                                </div>
                            </a>
                            <a class="list-group-item list-group-item-action p-3" href="pages/starter/minimal.html">
                                <div class="d-flex align-items-center justify-content-between">
                                    مینیمال
                                    <i class="text-muted bx bx-left-arrow-alt"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <footer class="footer-admin mt-auto footer-light is-rtl">
            <div class="container-xl px-4">
                <div class="row">
                    <div class="col-md-6 small">طراحی شده با ❤️</div>
                </div>
            </div>
        </footer>
@endsection

{{-- body modules --}}
@prepend('endOfbody')
    
@endprepend