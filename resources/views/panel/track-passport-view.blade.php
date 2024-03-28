@extends('layouts.panel.master')
 
@section('title', 'پیگیری پاسپورت')
 
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
                            پیگیری پاسپورت
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="container-xl px-4 mt-n10 is-rtl">
        <form action="" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row gx-4">
                <div class="col-lg-8">
                    <div class="card mb-4">
                        <div class="card-header">نام</div>
                        <div class="card-body">
                            <input class="form-control" name="" id="" type="text">
                        </div>
                    </div>

                    <div class="card card-header-actions mb-4">
                        <div class="card-header">
                           نام خانوادگی
                        </div>
                        <div class="card-body">
                            <input class="form-control" name="" id="" type="text">
                        </div>
                    </div>

                    <div class="card mb-4">
                        <div class="card-header">شماره پاسپورت</div>
                        <div class="card-body">
                            <input class="form-control" name="" id="" dir="ltr" type="text">
                        </div>
                    </div>

                  
                    
                </div>
                <div class="col-lg-4">  
                    <div class="card card-header-actions mb-4">
                        <div class="card-header">
                            ذخیره سازی
                        </div>
                        <div class="card-body">
                            <div class="d-grid">
                                <button type="submit" class="fw-500 btn btn-primary">ثبت</button>
                            </div>
                        </div>
                    </div>
                    
                    
                </div>
            </div>
        </form>
    </div>
</main>
<footer class="footer-admin mt-auto footer-light is-rtl">
    <div class="container-xl px-4">
        <div class="row">
            
        </div>
    </div>
</footer>
@endsection

{{-- body modules --}}
@prepend('endOfbody')


@endprepend