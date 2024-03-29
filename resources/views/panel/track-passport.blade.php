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
                            لیست پیگیری
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="container-xl px-4 mt-n10 is-rtl">
        <div class="card mb-4">
            <div class="card-header"><a href="{{ route('panel.passport-new') }}" class="fw-500 btn btn-primary">افزودن پاسپورت جدید</a></div>
            <div class="card-body">


                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>نام</th>
                            <th>نام خانوادگی</th>
                            <th>شماره پاسپورت</th>
                            <th>تاریخ ثبت</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>نام</th>
                            <th>نام خانوادگی</th>
                            <th>شماره پاسپورت</th>
                            <th>وضعیت</th>
                            <th>تاریخ ثبت</th>
                            <th>عملیات</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach($followPassports as $followPassport)
                            <tr>
                                <td>
                                    {{ $followPassport->first_name }}
                                </td>
                                <td>
                                    {{ $followPassport->last_name }}
                                </td>
                                <td>
                                    {{ $followPassport->passport }}
                                </td>
                                <td>
                                    {{ $followPassport->status }}
                                </td>
                                <td>
                                    {{ $followPassport->created_at }}
                                </td>
                                <td>
                                    <a href="{{ route('panel.passport-view', $followPassport->id) }}" class="btn btn-datatable btn-icon btn-transparent-dark me-2"><i class="bx bx-show"></i></a>
                                    <a href="{{ route('api.remove-passport-track', $followPassport->id) }}" class="btn btn-datatable btn-icon btn-transparent-dark"><i class="bx bx-trash"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>

@endsection

{{-- body modules --}}
@prepend('endOfbody')
<script src="{{ customAsset('assets/js/simple-datatables%40latest.js') }}"></script>
<script src="{{ customAsset('assets/js/simple-datatables%40demo.js') }}"></script>
@endprepend