<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>SB Admin pro - قالب داشبورد مدیریت بوت‌استرپ - فراموشی رمز عبور پایه</title>
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
                                <div class="card-header justify-content-center"><h3 class="fw-light my-2">فراموشی رمز عبور</h3></div>
                                <div class="card-body">

                                    <form id="formAuthentication" action="basic.html" method="post">
                                        <!-- ایمیل -->
                                        <div class="mb-3">
                                            <label class="small mb-3" for="inputEmailAddress">ایمیل خود را وارد کنید ما دستورالعمل ها را برای بازنشانی رمز عبور برای شما ارسال خواهیم کرد.</label>
                                            <input class="form-control" dir="ltr" name="inputEmailAddress" id="inputEmailAddress" type="email" aria-describedby="emailHelp" placeholder="ایمیل خود را وارد کنید">
                                        </div>

                                        <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                            <a class="small" href="{{ route('panel.login') }}">بازگشت به ورود</a>
                                            <a class="btn btn-primary" href="{{ route('panel.restpwd') }}">بازنشانی رمزعبور</a>
                                        </div>

                                    </form>
                                </div>
                                <div class="card-footer text-center">
                                    <div class="small"><a href="{{ route('panel.register') }}">نیاز به حساب کاربری دارید؟ ثبت نام کنید!</a></div>
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