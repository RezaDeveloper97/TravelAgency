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
                            لیست فرم تماس با ما
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
                            <th>نام</th>
                            <th>آدرس ايميل</th>
                            <th>تلفن</th>
                            <th>موضوع</th>
                            <th>پیام</th>
                            <th>تاریخ ارسال</th>
                            <th>عملیات</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>نام</th>
                            <th>آدرس ايميل</th>
                            <th>تلفن</th>
                            <th>موضوع</th>
                            <th>پیام</th>
                            <th>تاریخ ارسال</th>
                            <th>عملیات</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach($contacts as $row)
                            <tr>
                                <td>{{ $row->full_name }}</td>
                                <td>{{ $row->email }}</td>
                                <td>{{ $row->tel }}</td>
                                <td>{{ $row->title }}</td>
                                <td>{{ $row->content }}</td>
                                <td dir="ltr">{{ $row->created_at }}</td>
                                <td>
                                    <a href="{{ route('forms.contact-view', $row->id) }}" class="btn btn-datatable btn-icon btn-transparent-dark me-2"><i class="bx bx-show"></i></a>
                                    <a href="{{ route('api.contact-remove', $row->id) }}" class="btn btn-datatable btn-icon btn-transparent-dark"><i class="bx bx-trash"></i></a>
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