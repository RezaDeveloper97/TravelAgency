@extends('layouts.panel.master')
 
@section('title', 'افزودن پیگیری پاسپورت')
 
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
        <form action="{{ route('api.add-passport-track') }}" method="POST">
            @csrf
            <div class="row gx-4">
                <div class="col-lg-8">
                    <div class="card mb-4">
                        <div class="card-header">نام</div>
                        <div class="card-body">
                            <input class="form-control" name="first_name" type="text" required>
                        </div>
                    </div>

                    <div class="card card-header-actions mb-4">
                        <div class="card-header">
                           نام خانوادگی
                        </div>
                        <div class="card-body">
                            <input class="form-control" name="last_name" type="text" required>
                        </div>
                    </div>

                    <div class="card mb-4">
                        <div class="card-header">شماره پاسپورت</div>
                        <div class="card-body">
                            <input class="form-control" name="passport" dir="ltr" type="text" required>
                        </div>
                    </div>

                    <div class="card mb-4">
                        <div class="card-header">وضعیت</div>
                        <div class="card-body">
                            <select class="form-control" name="status" required>
                                <option>در پروسه ارسال می باشد</option>
                                <option>به VAC تحویل داده شد</option>
                                <option>از VAC تحویل گرفته شده و در حال ارسال به ایران می باشد</option>
                                <option>مدارک در دفتر تهران آماده تحویل می باشد</option>
                            </select>
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