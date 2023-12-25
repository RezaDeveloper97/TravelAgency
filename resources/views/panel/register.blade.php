<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>SB Admin pro - قالب داشبورد مدیریت بوت‌استرپ - ثبت نام پیشفرض</title>
    <link rel="stylesheet" href="{{ customAsset('assets/css/fonts.css') }}">
    <link rel="stylesheet" href="{{ customAsset('assets/css/boxicons.css') }}">
    <link rel="stylesheet" href="{{ customAsset('assets/css/style.css') }}">

</head>
<body>

    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container-xl px-4 is-rtl">
                    <div class="row justify-content-center">
                        <div class="col-lg-7">

                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header justify-content-center"><h3 class="fw-light my-2">ایجاد حساب کاربری</h3></div>
                                <div class="card-body">

                                    <form id="formAuthentication" action="default.html" method="post">

                                        <div class="row gx-3">
                                            <div class="col-md-6">
                                                <!-- Form Group (first name)-->
                                                <div class="mb-3">
                                                    <label class="small mb-1" for="inputFirstName">نام</label>
                                                    <input class="form-control" id="inputFirstName" type="text" placeholder="نام را وارد کنید">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <!-- Form Group (last name)-->
                                                <div class="mb-3">
                                                    <label class="small mb-1" for="inputLastName">نام خانوادگی</label>
                                                    <input class="form-control" id="inputLastName" type="text" placeholder="نام خانوادگی را وارد کنید">
                                                </div>
                                            </div>
                                        </div>

                                        <!-- ایمیل -->
                                        <div class="mb-3">
                                            <label class="small mb-1" for="inputEmailAddress">ایمیل</label>
                                            <input class="form-control" dir="ltr" name="inputEmailAddress" id="inputEmailAddress" type="email" aria-describedby="emailHelp" placeholder="ایمیل خود را وارد کنید">
                                        </div>

                                        <!-- رمز عبور -->
                                        <div class="row gx-3">
                                            <div class="col-md-6">
                                                <!-- Form Group (password)-->
                                                <div class="mb-3">
                                                    <label class="small mb-1" for="inputPassword">رمز عبور</label>
                                                    <input class="form-control" dir="ltr" id="inputPassword" type="password" placeholder="رمز عبور را وارد کنید">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <!-- Form Group (confirm password)-->
                                                <div class="mb-3">
                                                    <label class="small mb-1" for="inputConfirmPassword">تایید رمز عبور</label>
                                                    <input class="form-control" dir="ltr" id="inputConfirmPassword" type="password" placeholder="رمز عبور رادوباره وارد کنید">
                                                </div>
                                            </div>
                                        </div>





                                        <div class="mb-3">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="inputTerms" name="inputTerms">
                                                <label class="form-check-label" for="inputTerms">
                                                    من موافقم با
                                                    <a href="javascript:void(0);">سیاست حریم خصوصی و قوانین</a>
                                                </label>
                                            </div>
                                        </div>

                                        <a class="btn btn-primary" href="{{ route('panel.register') }}">عضویت</a>
                                    </form>
                                </div>
                                <div class="card-footer text-center">
                                    <div class="small"><a href="{{ route('panel.login') }}">قبلا حساب ایجاد کردید؟ وارد شوید</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        <div id="layoutAuthentication_footer">
            <footer class="footer-admin mt-auto footer-dark is-rtl">
               
            </footer>
        </div>
    </div>

    <script src="{{ customAsset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ customAsset('assets/js/scripts.js') }}"></script>
    <script src="{{ customAsset('assets/js/jquery.js') }}"></script>
    <script src="{{ customAsset('assets/js/FormValidation/FormValidation.min.js') }}"></script>
    <script src="{{ customAsset('assets/js/FormValidation/Bootstrap5.min.js') }}"></script>
    <script src="{{ customAsset('assets/js/FormValidation/AutoFocus.min.js') }}"></script>
    <script src="{{ customAsset('assets/js/auth-base.js') }}"></script>


</body>
</html>