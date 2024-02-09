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
                            لیست فرم ارزیابی
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


                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>نام و نام خانوادگی</th>
                            <th>تلفن تماس (whatsapp)</th>
                            <th>آدرس ايميل</th>
                            <th>تاریخ ارسال فرم</th>
                            <th>عملیات</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>نام و نام خانوادگی</th>
                            <th>تلفن تماس (whatsapp)</th>
                            <th>آدرس ايميل</th>
                            <th>تاریخ ارسال فرم</th>
                            <th>عملیات</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @php
                            $onlineAssessmentModel = \App\Models\onlineAssessmentModel::all();
                        @endphp
                        @foreach($onlineAssessmentModel as $row)
                            <tr>
                                <td>{{ $row->fnamelname }}</td>
                                <td>{{ $row->whatsapp }}</td>
                                <td>{{ $row['active-email'] }}</td>
                                <td>{{ $row->created_at }}</td>
                                <td>
                                    <a href="{{ route('forms.assessment-view', $row->id) }}" class="btn btn-datatable btn-icon btn-transparent-dark me-2"><i class="bx bx-show"></i></a>
                                    <button class="btn btn-datatable btn-icon btn-transparent-dark"><i class="bx bx-trash"></i></button>
                                </td>
                            </tr>
                        @endforeach 
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>
<footer class="footer-admin mt-auto footer-light is-rtl">
    <div class="container-xl px-4">
        <div class="row">
            <div class="col-md-6 small">طراحی شده با ❤️ ارائه شده در وب‌سایت راست‌چین</div>
            <div class="col-md-6 text-md-end small">
                <a href="#!">قوانین و مقررات</a>
                ·
                <a href="#!">لایسنس ها</a>
            </div>
        </div>
    </div>
</footer>
@endsection

{{-- body modules --}}
@prepend('endOfbody')
<script src="{{ customAsset('assets/js/simple-datatables%40latest.js') }}"></script>
<script src="{{ customAsset('assets/js/simple-datatables%40demo.js') }}"></script>
@endprepend