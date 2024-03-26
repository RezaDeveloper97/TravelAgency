@extends('layouts.front')
 
@section('title', 'Theodoraworld')
 
{{-- head modules --}}
@prepend('endOfhead')
    
@endprepend

@section('content')
<div class="inner-banner-warp">
    <div class="container">
        <div class="inner-hero-content">
            <h2>رضایت مشتری</h2>
            <ul>
                <li><a href="{{ route('front.index') }}">تدورا</a></li>
                <li>رضایت مشتری</li>
            </ul>
        </div>
    </div>
    <img src="front-assets/images/shapes/inner-hero-shape1.png" class="inner-hero-shape1" alt="image">
</div>
<!-- inner Coaching Warp Start -->
<div class="inner-coaching-warp pt-100 pb-75">
    <div class="container">
        <div class="row justify-content-center">
            @foreach($videos as $video)
            <div class="col-lg-4 col-sm-6">
                <div class="coaching-box">
                    <div class="image">
                        <img src="{{ asset('storage/' . $video->cover) }}" alt="{{ $video->title }}">
                    </div>
                    <div class="content">
                        <h3>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#videoModal-{{$video->id}}">
                            نمایش
                            </button>
                        </h3>
                        <p>
                            {{ $video->title }}
                        </p>
                    </div>
                </div>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="videoModal-{{$video->id}}" tabindex="-1" aria-labelledby="videoModal-{{$video->id}}Label" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content bg-white">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="videoModal-{{$video->id}}Label">{{ $video->title }}</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <video class="w-100" controls autoplay>
                            <source src="{{ \Storage::exists('/public/' . $video->link) ? asset('storage/' . $video->link) ? $video->link}}" type="video/mp4">
                        </video>
                        <br>
                        <p>
                            {{ $video->description }}
                        </p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">بستن</button>
                    </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection

{{-- body modules --}}
@prepend('endOfbody')
    
@endprepend