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
                    <div class="row justify-content-center">
                        
                            <div class="contact-form">
                                <form>
                                    
                                    <div class="col-lg-4 mb-3">
                                        <input type="text" class="form-control" name="contactName" readonly placeholder="نام کامل" /> 
                                    </div>
                                    <div class="col-lg-4 mb-3">
                                        <input type="text" class="form-control" name="contactEmail" readonly placeholder="آدرس ایمیل" />
                                    </div>
                                    <div class="col-lg-4 mb-3">
                                        <input type="text" class="form-control" name="contactTell" readonly placeholder="تلفن" />
                                    </div>
                                    <div class="col-lg-4 mb-3">
                                        <input type="text" class="form-control" name="contactSubject" readonly placeholder="موضوع" /> 
                                    </div>
                                    <div class="col-lg-4 mb-3">
                                        <textarea type="text" class="form-control" name="contactMsg" readonly rows="10" placeholder="پیام"></textarea>
                                    </div>
                                    <div class="col-lg-4 mb-3">
                                        <a href="{{ route('panel.videos') }}">بازگشت به لیست</a>
                                    </div>
                                </form>
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
