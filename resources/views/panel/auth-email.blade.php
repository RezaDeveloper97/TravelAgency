<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>SB Admin pro - قالب داشبورد مدیریت بوت‌استرپ - تایید ایمیل پایه</title>
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
                        <div class="col-lg-4">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header justify-content-center"><h3 class="fw-light my-2">تایید ایمیل</h3></div>
                                <div class="card-body">
                                    <form id="formAuthentication" action="basic.html" method="post">
                                        <p class="desc">
                                            یک لینک به همراه دستورالعمل های لازم به ایمیل
                                            <span>info@email.com</span>
                                            <br>
                                            ارسال شده لطفا برای ادامه ایمیل خود را بررسی کنید.
                                        </p>
                                        <a class="btn btn-primary btn-block w-100" href="{{ route('panel.login') }}">فعلا رد شو</a>
                                    </form>
                                </div>
                                <div class="card-footer text-center">
                                    <div class="small">ایمیل دریافت نکردید؟ <a href="{{ route('panel.auth-email') }}">ارسال دوباره</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        <div id="layoutAuthentication_footer">
            <footer class="footer-admin mt-auto is-rtl">
            </footer>
        </div>
    </div>

    <script src="{{ customAsset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ customAsset('assets/js/scripts.js') }}"></script>
    <script src="{{ customAsset('assets/js/jquery.js') }}"></script>

</body>
</html>