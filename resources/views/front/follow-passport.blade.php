@extends('layouts.front')

@section('title', 'Theodoraworld')

{{-- head modules --}}
@prepend('endOfhead')
@endprepend

@section('content')
    <!-- Inner Hero Warp Start -->
    <div class="inner-banner-warp">
        <div class="container">
            <div class="inner-hero-content">
                <h2>پیکاپ‌ پاسپورت کانادا</h2>
                <ul>
                    <li> <a href="{{ route('front.index') }}">تدورا</a> </li>
                    <li>پیکاپ‌ پاسپورت کانادا</li>
                </ul>
            </div>
        </div>
        <img src="front-assets/images/shapes/inner-hero-shape1.png" class="inner-hero-shape1" alt="image">
    </div>
    <!-- Inner Hero Warp End -->
    <div class="inner-blog-warp pt-100 pb-75 ">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <form action="{{ route('api.passport-checker') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-4">
                                <input type="text" class="form-control" placeholder="نام" required />
                            </div>
                            <div class="col-md-4">
                                <input type="text" class="form-control" placeholder="نام خانوادگی" required />
                            </div>
                            <div class="col-md-4">
                                <input type="text" class="form-control" name="passport" placeholder="شماره پاسپورت" required />
                            </div>
                            <div class="col-12 mt-4">
                                <button class="btn btn-success" type="submit">پیگیری</button>
                            </div>
                        </div>
                    </form>
                </div>

                @if(session('message'))
                <div class="col-12 mt-4">
                    <div class="mt-5 alert alert-success">{{ session('message') }}</div>
                </div>
                @endif
            </div>
        </div>
    </div>
@endsection

{{-- body modules --}}
@prepend('endOfbody')
@endprepend
