
<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>SB Admin pro - قالب داشبورد مدیریت بوت‌استرپ - ورود پیشفرض</title>
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
                        <div class="col-lg-5">

                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header justify-content-center"><h3 class="fw-light my-2">ورود به حساب کاربری</h3></div>
                                <div class="card-body">

                                    <form id="formAuthentication" action="{{ route('api.login') }}" method="post">

                                        <!-- ایمیل -->
                                        <div class="mb-3">
                                            <label class="small mb-1" for="email">نام کاربری</label>
                                            <input class="form-control" name="email" dir="ltr" id="email" type="text" placeholder="نام کاربری خود را وارد کنید">
                                        </div>
                                        <!-- رمز عبور -->
                                        <div class="mb-3">
                                            <label class="small mb-1" for="password">رمز عبور</label>
                                            <div class="input-group input-group-merge has-validation">
                                                <input type="password" name="password" id="password" class="form-control text-end pe-2" dir="ltr" placeholder="رمز عبور خود را وارد کنید" aria-describedby="password">
                                                <span class="input-group-text cursor-pointer"><i id="togglePassword" data-to="#password" class="bx bx-hide togglePasswordEye"></i></span>
                                            </div>
                                        </div>

                                        <a class="action-link" href="register-mobile.html">
                                            ورود با شماره موبایل
                                            <i class="bx bx-left-arrow-alt"></i>
                                        </a>
                                        <a class="action-link" href="forgetpwd.html">
                                            فراموشی رمز عبور
                                            <i class="bx bx-left-arrow-alt"></i>
                                        </a>

                                        <button class="btn btn-primary btn-block w-100" type="submit">ورود</button>
                                    </form>
                                </div>
                                <div class="card-footer text-center">
                                    <div class="small">حساب ایجاد نکردید؟ <a href="register.html">ایجاد کنید</a></div>
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

</body>
</html>