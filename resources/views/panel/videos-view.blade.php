@extends('layouts.panel.master')
 
@section('title', 'ویرایش ویدیو جدید')
 
{{-- head modules --}}
@prepend('endOfhead')
    <!--  Image Upload Plugin CSS -->
    <link href="{{ customAsset('assets/plugins/filepond/filepond.min.css')}}" rel="stylesheet" />
    <link href="{{ customAsset('assets/plugins/filepond/FilePondPluginImagePreview.min.css') }}" rel="stylesheet" />
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
                            ویرایش ویدئو
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="container-xl px-4 mt-n10 is-rtl">
        <form action="{{ route('api.update-video', $video->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row gx-4">
                <div class="col-lg-8">
                    <div class="card mb-4">
                        <div class="card-header">عنوان ویدئو</div>
                        <div class="card-body">
                            <input required class="form-control" name="title" id="postTitleInput" type="text" value="{{ $video->title }}" />
                        </div>
                    </div>

                    <div class="card card-header-actions mb-4">
                        <div class="card-header">
                            توضیحات ویدئو
                        </div>
                        <div class="card-body">
                            <textarea required class="form-control" name="description" id="exampleFormControlTextarea1" rows="4">{{ $video->description }}</textarea>
                        </div>
                    </div>

                    <div class="card mb-4">
                        <div class="card-header">لینک ویدئو</div>
                        <div class="card-body">
                            <input class="form-control" name="video_link" id="postTitleInput" dir="ltr" type="text" value="{{ $video->video_link }}">
                        </div>
                    </div>

                    <div class="card mb-4">
                        <div class="card-header">آپلود فایل ویدئو</div>
                        <div class="card-body">
                            <input type="file" class="form-control" name="video_file" />
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
                                <button type="submit" class="fw-500 btn btn-primary">انتشار ویدئو</button>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-4">
                        <div class="card-header">آپلود تصویر ویدئو </div>
                        <div class="card-body">
                            <div class="multiple-file-upload">
                                <input type="file" class="form-control" name="cover" />
                                @if($video->cover != '')
                                <img class="img-fluid" src="{{ asset('storage/' . $video->cover) }}" alt="" />
                                @endif
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
    <script src="{{ customAsset('assets/plugins/filepond/filepond.min.js') }}"></script>
    <script src="{{ customAsset('assets/plugins/filepond/FilePondPluginFileValidateType.min.js') }}"></script>
    <script src="{{ customAsset('assets/plugins/filepond/FilePondPluginImageExifOrientation.min.js') }}"></script>
    <script src="{{ customAsset('assets/plugins/filepond/FilePondPluginImagePreview.min.js') }}"></script>
    <script src="{{ customAsset('assets/plugins/filepond/FilePondPluginImageCrop.min.js') }}"></script>
    <script src="{{ customAsset('assets/plugins/filepond/FilePondPluginImageResize.min.js') }}"></script>
    <script src="{{ customAsset('assets/plugins/filepond/FilePondPluginImageTransform.min.js') }}"></script>
    <script src="{{ customAsset('assets/plugins/filepond/filepondPluginFileValidateSize.min.js') }}"></script>

    <script>
        //File Pond
        // We want to preview images, so we register
        // the Image Preview plugin, We also register
        // exif orientation (to correct mobile image
        // orientation) and size validation, to prevent
        // large files from being added
        FilePond.registerPlugin(
            FilePondPluginImagePreview,
            FilePondPluginImageExifOrientation,
            FilePondPluginFileValidateSize,
            // FilePondPluginImageEdit
        );

        // Select the file input and use
        // create() to turn it into a pond
        var ecommerce = FilePond.create(document.querySelector('.file-upload-image'));
        var ecommerce = FilePond.create(document.querySelector('.file-upload-video'));





    </script>
@endprepend