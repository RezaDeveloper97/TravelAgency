@extends('layouts.panel.master')
 
@section('title', 'افزودن به سبد خرید')
 
{{-- head modules --}}
@prepend('endOfhead')
    <link href="{{ customAsset('assets/plugins/tom-select/tom-select.default.min.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ customAsset('assets/css/easymde.min.css') }}">

    <!--  Image Upload Plugin CSS -->
    <link href="{{ customAsset('assets/plugins/filepond/filepond.min.css') }}" rel="stylesheet" />
    <link href="{{ customAsset('assets/plugins/filepond/FilePondPluginImagePreview.min.css') }}" rel="stylesheet" />

    <!--  Tags CSS -->
    <link href="{{ customAsset('assets/plugins/tagify/tagify.css') }}" rel="stylesheet" />
    <link href="{{ customAsset('assets/plugins/tagify/custom-tagify.css') }}" rel="stylesheet" />
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
                            افزودن محصول
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="container-xl px-4 mt-n10 is-rtl">
        <div class="row gx-4">
            <div class="col-lg-8">
                <div class="card mb-4">
                    <div class="card-header">عنوان</div>
                    <div class="card-body"><input class="form-control" id="postTitleInput" type="text" placeholder="عنوان پست را وارد کنید..."></div>
                </div>
                <div class="card card-header-actions mb-4">
                    <div class="card-header">
                        ویژگی های مهم
                       
                    </div>
                    <div class="card-body"><textarea class="lh-base form-control" type="text" placeholder="متن پیش نمایش را وارد کنید..." rows="4"></textarea></div>
                </div>
                <div class="card card-header-actions mb-4">
                    <div class="card-header">
                        متن
                      
                    </div>
                    <div class="card-body">
                        <textarea id="postEditor"></textarea>
                    </div>
                </div>



                <div class="card card-header-actions mb-4 mb-lg-0">
                    <div class="card-header">
                        متن
                    </div>

                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-3">
                                <ul class="nav nav-pills flex-column" id="cardPillVertical" role="tablist">
                                    <li class="nav-item"><a class="nav-link active" id="overview-pill-vertical" href="#one" data-bs-toggle="tab" role="tab" aria-controls="overview" aria-selected="true">موجودی انبار</a></li>
                                    <li class="nav-item"><a class="nav-link" id="example-pill-vertical" href="#two" data-bs-toggle="tab" role="tab" aria-controls="example" aria-selected="false">ویژگی ها</a></li>
                                    <li class="nav-item"><a class="nav-link" id="example-pill-vertical" href="#three" data-bs-toggle="tab" role="tab" aria-controls="example" aria-selected="false">سومی</a></li>
                                </ul>
                            </div>
                            <div class="col-md-9">
                                <div class="tab-content" id="cardPillContentVertical">
                                    <div class="tab-pane fade show active" id="one" role="tabpanel" aria-labelledby="overview-pill-vertical">
                                        <div>
                                            <div class="mb-3"><label for="exampleFormControlInput1">تعداد موجودی محصول در انبار</label><input class="form-control" id="exampleFormControlInput1" dir="ltr" type="text" placeholder=""></div>
                                            <div class="mb-3"><label for="exampleFormControlInput1">آستانه کم‌بودن موجودی انبار</label><input class="form-control" id="exampleFormControlInput1" dir="ltr" type="text" placeholder=""></div>
                                            <div class="mb3-3">
                                                <div class="form-check">
                                                    <input class="form-check-input" id="flexCheckDefault" type="checkbox" value="">
                                                    <label class="form-check-label" for="flexCheckDefault">فروش تکی</label>
                                                    <p class="text-muted">خریدها را به 1 مورد در هر سفارش محدود کنید</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="two" role="tabpanel" aria-labelledby="example-pill-vertical">
                                        <div class="d-flex gap-2">
                                            <button class="btn btn-secondary" type="button">افزودن جدید</button>
                                        
                                            <select id="select-beast" class="flex-grow-1" placeholder="ویژگی موجود" autocomplete="off">
                                                <option value="">جستجو و انتخاب</option>
                                                <option value="1">رنگ</option>
                                                <option value="2">سایز</option>
                                                <option value="3">وزن</option>
                                                <option value="4">اندازه</option>
                                            </select>

                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="three" role="tabpanel" aria-labelledby="example-pill-vertical">
                                        <div>
                                            three
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
            <div class="col-lg-4">  
                <div class="card card-header-actions mb-4">
                    <div class="card-header">
                        ذخیره سازی
                    </div>
                    <div class="card-body">
                        <div class="d-grid mb-3"><button class="fw-500 btn btn-primary-soft text-primary">پیش نویس</button></div>
                        <div class="d-grid"><button class="fw-500 btn btn-primary">انتشار پست</button></div>
                    </div>
                </div>



                <div class="card mb-4">
                    <div class="card-header">آپلود تصاویر محصول</div>
                    <div class="card-body">
                        <div class="multiple-file-upload">
                            <input type="file"
                                   class="filepond file-upload-multiple"
                                   name="filepond"
                                   id="product-images"
                                   multiple
                                   data-allow-reorder="true"
                                   data-instant-upload="false"
                                   data-max-file-size="1MB"
                                   data-max-files="10">
                        </div>
                    </div>
                </div>


                <div class="card mb-4">
                    <div class="card-header">اطلاعات</div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1">برچسب ها</label>
                            <input id="tags" class="product-tags" value="">
                        </div>
                    </div>
                </div>


       


            </div>
        </div>

    </div>
</main>
<footer class="footer-admin mt-auto footer-light is-rtl">
    

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
<script src="{{ customAsset('assets/plugins/tagify/tagify.min.js') }}"></script>
<script src="{{ customAsset('assets/plugins/tom-select/tom-select.base.js') }}"></script>

<script src="{{ customAsset('assets/js/easymde.min.js') }}"></script>
<script>
    var easyMDE = new EasyMDE({
        element: document.getElementById('postEditor'),
        toolbar: ['bold', 'italic', 'heading', '|', 'quote', 'unordered-list', 'ordered-list', '|', 'link', 'image', '|', 'preview', 'guide'],
        initialValue: '',
        direction: 'rtl',
        status: [], // Optional usage

    })


</script>

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
    var ecommerce = FilePond.create(document.querySelector('.file-upload-multiple'));





    //Product Tags
    // The DOM element you wish to replace with Tagify
    var input = document.querySelector('.product-tags');

    // initialize Tagify on the above input node reference
    new Tagify(input)




    // Select Box

    new TomSelect("#select-beast", {
        create: true,
        sortField: {
            field: "text",
            direction: "asc"
        }
    });
</script>

@endprepend