@extends('layouts.panel.master')
 
@section('title', 'عنوان')
 
{{-- head modules --}}
@prepend('endOfhead')
    <link rel="stylesheet" href="{{ customAsset('assets/css/persian-datepicker.css') }}" />
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
                                لیست محصولات
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
                                <th>شناسه محصول</th>
                                <th>انبار</th>
                                <th>قیمت</th>
                                <th>دسته ها</th>
                                <th>برچسب ها</th>
                                <th>تاریخ</th>
                                <th>عملیات</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>نام</th>
                                <th>شناسه محصول</th>
                                <th>انبار</th>
                                <th>قیمت</th>
                                <th>دسته ها</th>
                                <th>برچسب ها</th>
                                <th>تاریخ</th>
                                <th>عملیات</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <tr>
                                <td>مهسا امیری</td>
                                <td>طراح سیستم</td>
                                <td>اردبیل</td>
                                <td>61</td>
                                <td>1399/04/25</td>
                                <td>320,800 تومان </td>
                                <td><div class="badge bg-primary text-white rounded-pill">تمام وقت</div></td>
                                <td>
                                    <button class="btn btn-datatable btn-icon btn-transparent-dark me-2"><i class="bx bx-pencil"></i></button>
                                    <button class="btn btn-datatable btn-icon btn-transparent-dark"><i class="bx bx-trash"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>سودابه کرمی</td>
                                <td>حسابدار</td>
                                <td>اراک</td>
                                <td>63</td>
                                <td>1399/07/25</td>
                                <td>170,750 تومان </td>
                                <td><div class="badge bg-warning rounded-pill">درحال بررسی</div></td>
                                <td>
                                    <button class="btn btn-datatable btn-icon btn-transparent-dark me-2"><i class="bx bx-pencil"></i></button>
                                    <button class="btn btn-datatable btn-icon btn-transparent-dark"><i class="bx bx-trash"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>آرش سام</td>
                                <td>نویسنده</td>
                                <td>مازندران</td>
                                <td>66</td>
                                <td>1397/01/12</td>
                                <td>86,000 تومان </td>
                                <td><div class="badge bg-secondary text-white rounded-pill">پاره وقت</div></td>
                                <td>
                                    <button class="btn btn-datatable btn-icon btn-transparent-dark me-2"><i class="bx bx-pencil"></i></button>
                                    <button class="btn btn-datatable btn-icon btn-transparent-dark"><i class="bx bx-trash"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>سارا جمشیدی</td>
                                <td>مدیر شبکه</td>
                                <td>اردبیل</td>
                                <td>22</td>
                                <td>1400/03/29</td>
                                <td>433,060 تومان </td>
                                <td><div class="badge bg-info rounded-pill">قراردادی</div></td>
                                <td>
                                    <button class="btn btn-datatable btn-icon btn-transparent-dark me-2"><i class="bx bx-pencil"></i></button>
                                    <button class="btn btn-datatable btn-icon btn-transparent-dark"><i class="bx bx-trash"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>شیوا کرمانی</td>
                                <td>حسابدار</td>
                                <td>اراک</td>
                                <td>33</td>
                                <td>1395/11/28</td>
                                <td>162,700 تومان </td>
                                <td><div class="badge bg-primary text-white rounded-pill">تمام وقت</div></td>
                                <td>
                                    <button class="btn btn-datatable btn-icon btn-transparent-dark me-2"><i class="bx bx-pencil"></i></button>
                                    <button class="btn btn-datatable btn-icon btn-transparent-dark"><i class="bx bx-trash"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>عسل صورتی</td>
                                <td>هوش مصنوعی</td>
                                <td>تهران</td>
                                <td>61</td>
                                <td>1400/12/02</td>
                                <td>372,000 تومان </td>
                                <td><div class="badge bg-primary text-white rounded-pill">تمام وقت</div></td>
                                <td>
                                    <button class="btn btn-datatable btn-icon btn-transparent-dark me-2"><i class="bx bx-pencil"></i></button>
                                    <button class="btn btn-datatable btn-icon btn-transparent-dark"><i class="bx bx-trash"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>امیر بهرام</td>
                                <td>مدیر خرید</td>
                                <td>مازندران</td>
                                <td>59</td>
                                <td>1400/08/06</td>
                                <td>137,500 تومان </td>
                                <td><div class="badge bg-primary text-white rounded-pill">تمام وقت</div></td>
                                <td>
                                    <button class="btn btn-datatable btn-icon btn-transparent-dark me-2"><i class="bx bx-pencil"></i></button>
                                    <button class="btn btn-datatable btn-icon btn-transparent-dark"><i class="bx bx-trash"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>علی چوبی</td>
                                <td>هوش مصنوعی</td>
                                <td>اراک</td>
                                <td>55</td>
                                <td>1398/10/14</td>
                                <td>327,900 تومان </td>
                                <td><div class="badge bg-primary text-white rounded-pill">تمام وقت</div></td>
                                <td>
                                    <button class="btn btn-datatable btn-icon btn-transparent-dark me-2"><i class="bx bx-pencil"></i></button>
                                    <button class="btn btn-datatable btn-icon btn-transparent-dark"><i class="bx bx-trash"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>حمید عباسی</td>
                                <td>مدیر شبکه</td>
                                <td>مازندران</td>
                                <td>39</td>
                                <td>1397/09/15</td>
                                <td>205,500 تومان </td>
                                <td><div class="badge bg-info rounded-pill">قراردادی</div></td>
                                <td>
                                    <button class="btn btn-datatable btn-icon btn-transparent-dark me-2"><i class="bx bx-pencil"></i></button>
                                    <button class="btn btn-datatable btn-icon btn-transparent-dark"><i class="bx bx-trash"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>صادق علینیا</td>
                                <td>مهندس نرم افزار</td>
                                <td>اردبیل</td>
                                <td>23</td>
                                <td>1395/12/13</td>
                                <td>103,600 تومان </td>
                                <td><div class="badge bg-primary text-white rounded-pill">تمام وقت</div></td>
                                <td>
                                    <button class="btn btn-datatable btn-icon btn-transparent-dark me-2"><i class="bx bx-pencil"></i></button>
                                    <button class="btn btn-datatable btn-icon btn-transparent-dark"><i class="bx bx-trash"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>محمد برزگر</td>
                                <td>مدیر داخلی</td>
                                <td>اصفهان</td>
                                <td>34</td>
                                <td>1395/12/19</td>
                                <td>90,560 تومان </td>
                                <td><div class="badge bg-primary text-white rounded-pill">تمام وقت</div></td>
                                <td>
                                    <button class="btn btn-datatable btn-icon btn-transparent-dark me-2"><i class="bx bx-pencil"></i></button>
                                    <button class="btn btn-datatable btn-icon btn-transparent-dark"><i class="bx bx-trash"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>صبحان اصغری</td>
                                <td>رهبر توسعه</td>
                                <td>اردبیل</td>
                                <td>22</td>
                                <td>1400/03/03</td>
                                <td>342,000 تومان </td>
                                <td><div class="badge bg-primary text-white rounded-pill">تمام وقت</div></td>
                                <td>
                                    <button class="btn btn-datatable btn-icon btn-transparent-dark me-2"><i class="bx bx-pencil"></i></button>
                                    <button class="btn btn-datatable btn-icon btn-transparent-dark"><i class="bx bx-trash"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>مهسا اکرمی</td>
                                <td>مدیر بازاریابی</td>
                                <td>مازندران</td>
                                <td>36</td>
                                <td>1395/10/16</td>
                                <td>470,600 تومان </td>
                                <td><div class="badge bg-primary text-white rounded-pill">تمام وقت</div></td>
                                <td>
                                    <button class="btn btn-datatable btn-icon btn-transparent-dark me-2"><i class="bx bx-pencil"></i></button>
                                    <button class="btn btn-datatable btn-icon btn-transparent-dark"><i class="bx bx-trash"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>ژاله صامتی</td>
                                <td> بازاریاب حضوری</td>
                                <td>اصفهان</td>
                                <td>43</td>
                                <td>1400/12/18</td>
                                <td>313,500 تومان </td>
                                <td><div class="badge bg-primary text-white rounded-pill">تمام وقت</div></td>
                                <td>
                                    <button class="btn btn-datatable btn-icon btn-transparent-dark me-2"><i class="bx bx-pencil"></i></button>
                                    <button class="btn btn-datatable btn-icon btn-transparent-dark"><i class="bx bx-trash"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>پرستو امیری</td>
                                <td>مدیر بازاریابی</td>
                                <td>اصفهان</td>
                                <td>19</td>
                                <td>1398/03/17</td>
                                <td>385,750 تومان </td>
                                <td><div class="badge bg-primary text-white rounded-pill">تمام وقت</div></td>
                                <td>
                                    <button class="btn btn-datatable btn-icon btn-transparent-dark me-2"><i class="bx bx-pencil"></i></button>
                                    <button class="btn btn-datatable btn-icon btn-transparent-dark"><i class="bx bx-trash"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>پیمان حسین پور</td>
                                <td>بازاریاب حضوری</td>
                                <td>اصفهان</td>
                                <td>66</td>
                                <td>1400/11/27</td>
                                <td>198,500 تومان </td>
                                <td><div class="badge bg-primary text-white rounded-pill">تمام وقت</div></td>
                                <td>
                                    <button class="btn btn-datatable btn-icon btn-transparent-dark me-2"><i class="bx bx-pencil"></i></button>
                                    <button class="btn btn-datatable btn-icon btn-transparent-dark"><i class="bx bx-trash"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>سجاد بابایی</td>
                                <td>مدیر ارشد مالی</td>
                                <td>تهران</td>
                                <td>64</td>
                                <td>1398/06/09</td>
                                <td>725,000 تومان </td>
                                <td><div class="badge bg-primary text-white rounded-pill">تمام وقت</div></td>
                                <td>
                                    <button class="btn btn-datatable btn-icon btn-transparent-dark me-2"><i class="bx bx-pencil"></i></button>
                                    <button class="btn btn-datatable btn-icon btn-transparent-dark"><i class="bx bx-trash"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>سودابه بنان</td>
                                <td>مدیر سیستم</td>
                                <td>تهران</td>
                                <td>59</td>
                                <td>1397/04/11</td>
                                <td>237,500 تومان </td>
                                <td><div class="badge bg-primary text-white rounded-pill">تمام وقت</div></td>
                                <td>
                                    <button class="btn btn-datatable btn-icon btn-transparent-dark me-2"><i class="bx bx-pencil"></i></button>
                                    <button class="btn btn-datatable btn-icon btn-transparent-dark"><i class="bx bx-trash"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>احمد سعیدی</td>
                                <td>مهندس نرم افزار</td>
                                <td>اصفهان</td>
                                <td>41</td>
                                <td>1400/10/13</td>
                                <td>132,000 تومان </td>
                                <td><div class="badge bg-warning rounded-pill">درحال بررسی</div></td>
                                <td>
                                    <button class="btn btn-datatable btn-icon btn-transparent-dark me-2"><i class="bx bx-pencil"></i></button>
                                    <button class="btn btn-datatable btn-icon btn-transparent-dark"><i class="bx bx-trash"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>پروانه جلالی</td>
                                <td>مدیریت</td>
                                <td>اردبیل</td>
                                <td>35</td>
                                <td>1400/09/26</td>
                                <td>217,500 تومان </td>
                                <td><div class="badge bg-primary text-white rounded-pill">تمام وقت</div></td>
                                <td>
                                    <button class="btn btn-datatable btn-icon btn-transparent-dark me-2"><i class="bx bx-pencil"></i></button>
                                    <button class="btn btn-datatable btn-icon btn-transparent-dark"><i class="bx bx-trash"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>جلال احمدی</td>
                                <td>رهبر توسعه</td>
                                <td>تهران</td>
                                <td>34</td>
                                <td>1399/09/03</td>
                                <td>345,000 تومان </td>
                                <td><div class="badge bg-primary text-white rounded-pill">تمام وقت</div></td>
                                <td>
                                    <button class="btn btn-datatable btn-icon btn-transparent-dark me-2"><i class="bx bx-pencil"></i></button>
                                    <button class="btn btn-datatable btn-icon btn-transparent-dark"><i class="bx bx-trash"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>کمال احمدی</td>
                                <td>مدیر ارشد بازاریابی</td>
                                <td>تهران</td>
                                <td>40 تومان </td>
                                <td>1397/06/25</td>
                                <td>675,000 تومان </td>
                                <td><div class="badge bg-primary text-white rounded-pill">تمام وقت</div></td>
                                <td>
                                    <button class="btn btn-datatable btn-icon btn-transparent-dark me-2"><i class="bx bx-pencil"></i></button>
                                    <button class="btn btn-datatable btn-icon btn-transparent-dark"><i class="bx bx-trash"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>جمال احمدی</td>
                                <td>پشتیبانی قبل از فروش</td>
                                <td>تهران</td>
                                <td>21</td>
                                <td>1399/12/12</td>
                                <td>106,450 تومان </td>
                                <td><div class="badge bg-secondary text-white rounded-pill">پاره وقت</div></td>
                                <td>
                                    <button class="btn btn-datatable btn-icon btn-transparent-dark me-2"><i class="bx bx-pencil"></i></button>
                                    <button class="btn btn-datatable btn-icon btn-transparent-dark"><i class="bx bx-trash"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>کوروش بهادری</td>
                                <td>مدیر خرید</td>
                                <td>تبریز</td>
                                <td>23</td>
                                <td>1398/09/20 تومان </td>
                                <td>85,600 تومان </td>
                                <td><div class="badge bg-primary text-white rounded-pill">تمام وقت</div></td>
                                <td>
                                    <button class="btn btn-datatable btn-icon btn-transparent-dark me-2"><i class="bx bx-pencil"></i></button>
                                    <button class="btn btn-datatable btn-icon btn-transparent-dark"><i class="bx bx-trash"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>عادله سواری</td>
                                <td>مدیر عامل</td>
                                <td>اصفهان</td>
                                <td>47</td>
                                <td>1397/10/09</td>
                                <td>1,200,000 تومان </td>
                                <td><div class="badge bg-primary text-white rounded-pill">تمام وقت</div></td>
                                <td>
                                    <button class="btn btn-datatable btn-icon btn-transparent-dark me-2"><i class="bx bx-pencil"></i></button>
                                    <button class="btn btn-datatable btn-icon btn-transparent-dark"><i class="bx bx-trash"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>رویا تیموری</td>
                                <td>توسعه دهنده</td>
                                <td>اردبیل</td>
                                <td>42</td>
                                <td>1398/12/22</td>
                                <td>92,575</td>
                                <td><div class="badge bg-primary text-white rounded-pill">تمام وقت</div></td>
                                <td>
                                    <button class="btn btn-datatable btn-icon btn-transparent-dark me-2"><i class="bx bx-pencil"></i></button>
                                    <button class="btn btn-datatable btn-icon btn-transparent-dark"><i class="bx bx-trash"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>مریم تیمورزاده</td>
                                <td>مدیر بازاریابی</td>
                                <td>اتریش</td>
                                <td>28</td>
                                <td>1398/11/14</td>
                                <td>357,650 تومان </td>
                                <td><div class="badge bg-primary text-white rounded-pill">تمام وقت</div></td>
                                <td>
                                    <button class="btn btn-datatable btn-icon btn-transparent-dark me-2"><i class="bx bx-pencil"></i></button>
                                    <button class="btn btn-datatable btn-icon btn-transparent-dark"><i class="bx bx-trash"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>بهرام جلالی</td>
                                <td>مهندس نرم افزار</td>
                                <td>مازندران</td>
                                <td>28</td>
                                <td>1399/06/07</td>
                                <td>206,850 تومان </td>
                                <td><div class="badge bg-primary text-white rounded-pill">تمام وقت</div></td>
                                <td>
                                    <button class="btn btn-datatable btn-icon btn-transparent-dark me-2"><i class="bx bx-pencil"></i></button>
                                    <button class="btn btn-datatable btn-icon btn-transparent-dark"><i class="bx bx-trash"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>فریبا کاملی</td>
                                <td>مدیر ارشد عملیات</td>
                                <td>مازندران</td>
                                <td>48</td>
                                <td>1398/03/11</td>
                                <td>850,000 تومان </td>
                                <td><div class="badge bg-primary text-white rounded-pill">تمام وقت</div></td>
                                <td>
                                    <button class="btn btn-datatable btn-icon btn-transparent-dark me-2"><i class="bx bx-pencil"></i></button>
                                    <button class="btn btn-datatable btn-icon btn-transparent-dark"><i class="bx bx-trash"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>سعید مدرس</td>
                                <td>بازاریابی شبکه ای</td>
                                <td>اراک</td>
                                <td>20 تومان </td>
                                <td>1399/08/14</td>
                                <td>163,000 تومان </td>
                                <td><div class="badge bg-primary text-white rounded-pill">تمام وقت</div></td>
                                <td>
                                    <button class="btn btn-datatable btn-icon btn-transparent-dark me-2"><i class="bx bx-pencil"></i></button>
                                    <button class="btn btn-datatable btn-icon btn-transparent-dark"><i class="bx bx-trash"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>مهدی بهادری</td>
                                <td>هوش مصنوعی</td>
                                <td>تبریز</td>
                                <td>37</td>
                                <td>1399/06/02</td>
                                <td>95,400 تومان </td>
                                <td><div class="badge bg-primary text-white rounded-pill">تمام وقت</div></td>
                                <td>
                                    <button class="btn btn-datatable btn-icon btn-transparent-dark me-2"><i class="bx bx-pencil"></i></button>
                                    <button class="btn btn-datatable btn-icon btn-transparent-dark"><i class="bx bx-trash"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>مهدی بهادری</td>
                                <td>توسعه دهنده</td>
                                <td>اصفهان</td>
                                <td>53</td>
                                <td>1397/10/22</td>
                                <td>114,500 تومان </td>
                                <td><div class="badge bg-primary text-white rounded-pill">تمام وقت</div></td>
                                <td>
                                    <button class="btn btn-datatable btn-icon btn-transparent-dark me-2"><i class="bx bx-pencil"></i></button>
                                    <button class="btn btn-datatable btn-icon btn-transparent-dark"><i class="bx bx-trash"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>مهدی بهادری</td>
                                <td>نویسنده سایت</td>
                                <td>اصفهان</td>
                                <td>27</td>
                                <td>1399/05/07</td>
                                <td>145,000 تومان </td>
                                <td><div class="badge bg-primary text-white rounded-pill">تمام وقت</div></td>
                                <td>
                                    <button class="btn btn-datatable btn-icon btn-transparent-dark me-2"><i class="bx bx-pencil"></i></button>
                                    <button class="btn btn-datatable btn-icon btn-transparent-dark"><i class="bx bx-trash"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>مهدی بهادری</td>
                                <td>رهبر تیم</td>
                                <td>مازندران</td>
                                <td>22</td>
                                <td>1395/10/26</td>
                                <td>235,500 تومان </td>
                                <td><div class="badge bg-primary text-white rounded-pill">تمام وقت</div></td>
                                <td>
                                    <button class="btn btn-datatable btn-icon btn-transparent-dark me-2"><i class="bx bx-pencil"></i></button>
                                    <button class="btn btn-datatable btn-icon btn-transparent-dark"><i class="bx bx-trash"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>مهدی بهادری</td>
                                <td>مدیر امنیت</td>
                                <td>اردبیل</td>
                                <td>46</td>
                                <td>1399/03/09</td>
                                <td>324,050 تومان </td>
                                <td><div class="badge bg-primary text-white rounded-pill">تمام وقت</div></td>
                                <td>
                                    <button class="btn btn-datatable btn-icon btn-transparent-dark me-2"><i class="bx bx-pencil"></i></button>
                                    <button class="btn btn-datatable btn-icon btn-transparent-dark"><i class="bx bx-trash"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>مهدی بهادری</td>
                                <td>بازاریاب حضوری</td>
                                <td>مازندران</td>
                                <td>47</td>
                                <td>1397/12/09</td>
                                <td>85,675</td>
                                <td><div class="badge bg-primary text-white rounded-pill">تمام وقت</div></td>
                                <td>
                                    <button class="btn btn-datatable btn-icon btn-transparent-dark me-2"><i class="bx bx-pencil"></i></button>
                                    <button class="btn btn-datatable btn-icon btn-transparent-dark"><i class="bx bx-trash"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>مهدی بهادری</td>
                                <td>مدیر داخلی</td>
                                <td>مازندران</td>
                                <td>51</td>
                                <td>1395/12/16</td>
                                <td>164,500 تومان </td>
                                <td><div class="badge bg-primary text-white rounded-pill">تمام وقت</div></td>
                                <td>
                                    <button class="btn btn-datatable btn-icon btn-transparent-dark me-2"><i class="bx bx-pencil"></i></button>
                                    <button class="btn btn-datatable btn-icon btn-transparent-dark"><i class="bx bx-trash"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>مهدی بهادری</td>
                                <td>منشی</td>
                                <td>مازندران</td>
                                <td>41</td>
                                <td>1398/02/12</td>
                                <td>109,850 تومان </td>
                                <td><div class="badge bg-primary text-white rounded-pill">تمام وقت</div></td>
                                <td>
                                    <button class="btn btn-datatable btn-icon btn-transparent-dark me-2"><i class="bx bx-pencil"></i></button>
                                    <button class="btn btn-datatable btn-icon btn-transparent-dark"><i class="bx bx-trash"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>مهدی بهادری</td>
                                <td>مدیر سرمایه گذاری</td>
                                <td>مازندران</td>
                                <td>62</td>
                                <td>1397/02/14</td>
                                <td>452,500 تومان </td>
                                <td><div class="badge bg-primary text-white rounded-pill">تمام وقت</div></td>
                                <td>
                                    <button class="btn btn-datatable btn-icon btn-transparent-dark me-2"><i class="bx bx-pencil"></i></button>
                                    <button class="btn btn-datatable btn-icon btn-transparent-dark"><i class="bx bx-trash"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>مهدی بهادری</td>
                                <td>مدیر داخلی</td>
                                <td>اصفهان</td>
                                <td>37</td>
                                <td>1395/12/11</td>
                                <td>136,200 تومان </td>
                                <td><div class="badge bg-primary text-white rounded-pill">تمام وقت</div></td>
                                <td>
                                    <button class="btn btn-datatable btn-icon btn-transparent-dark me-2"><i class="bx bx-pencil"></i></button>
                                    <button class="btn btn-datatable btn-icon btn-transparent-dark"><i class="bx bx-trash"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>مهدی بهادری</td>
                                <td>طراح</td>
                                <td>تهران</td>
                                <td>65</td>
                                <td>1395/09/26</td>
                                <td>645,750 تومان </td>
                                <td><div class="badge bg-primary text-white rounded-pill">تمام وقت</div></td>
                                <td>
                                    <button class="btn btn-datatable btn-icon btn-transparent-dark me-2"><i class="bx bx-pencil"></i></button>
                                    <button class="btn btn-datatable btn-icon btn-transparent-dark"><i class="bx bx-trash"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>مهدی بهادری</td>
                                <td>اپراتور پشتیبانی</td>
                                <td>اتریش</td>
                                <td>64</td>
                                <td>1399/02/03</td>
                                <td>234,500 تومان </td>
                                <td><div class="badge bg-primary text-white rounded-pill">تمام وقت</div></td>
                                <td>
                                    <button class="btn btn-datatable btn-icon btn-transparent-dark me-2"><i class="bx bx-pencil"></i></button>
                                    <button class="btn btn-datatable btn-icon btn-transparent-dark"><i class="bx bx-trash"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>مهدی بهادری</td>
                                <td>مهندس نرم افزار</td>
                                <td>اصفهان</td>
                                <td>38</td>
                                <td>1399/05/03</td>
                                <td>163,500 تومان </td>
                                <td><div class="badge bg-info rounded-pill">قراردادی</div></td>
                                <td>
                                    <button class="btn btn-datatable btn-icon btn-transparent-dark me-2"><i class="bx bx-pencil"></i></button>
                                    <button class="btn btn-datatable btn-icon btn-transparent-dark"><i class="bx bx-trash"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>مهدی بهادری</td>
                                <td>اپراتور پشتیبانی</td>
                                <td>اراک</td>
                                <td>37</td>
                                <td>1397/08/19</td>
                                <td>139,575</td>
                                <td><div class="badge bg-primary text-white rounded-pill">تمام وقت</div></td>
                                <td>
                                    <button class="btn btn-datatable btn-icon btn-transparent-dark me-2"><i class="bx bx-pencil"></i></button>
                                    <button class="btn btn-datatable btn-icon btn-transparent-dark"><i class="bx bx-trash"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>مهدی بهادری</td>
                                <td>توسعه دهنده</td>
                                <td>تهران</td>
                                <td>61</td>
                                <td>1400/08/11</td>
                                <td>98,540 تومان </td>
                                <td><div class="badge bg-primary text-white rounded-pill">تمام وقت</div></td>
                                <td>
                                    <button class="btn btn-datatable btn-icon btn-transparent-dark me-2"><i class="bx bx-pencil"></i></button>
                                    <button class="btn btn-datatable btn-icon btn-transparent-dark"><i class="bx bx-trash"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>مهدی بهادری</td>
                                <td>اپراتور پشتیبانی</td>
                                <td>مازندران</td>
                                <td>47</td>
                                <td>1397/07/07</td>
                                <td>87,500 تومان </td>
                                <td><div class="badge bg-info rounded-pill">قراردادی</div></td>
                                <td>
                                    <button class="btn btn-datatable btn-icon btn-transparent-dark me-2"><i class="bx bx-pencil"></i></button>
                                    <button class="btn btn-datatable btn-icon btn-transparent-dark"><i class="bx bx-trash"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>مهدی بهادری</td>
                                <td>تحلیلگر</td>
                                <td>اتریش</td>
                                <td>64</td>
                                <td>1400/04/09</td>
                                <td>138,575</td>
                                <td><div class="badge bg-primary text-white rounded-pill">تمام وقت</div></td>
                                <td>
                                    <button class="btn btn-datatable btn-icon btn-transparent-dark me-2"><i class="bx bx-pencil"></i></button>
                                    <button class="btn btn-datatable btn-icon btn-transparent-dark"><i class="bx bx-trash"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>مهدی بهادری</td>
                                <td>مهندس نرم افزار</td>
                                <td>تهران</td>
                                <td>63</td>
                                <td>1398/01/04</td>
                                <td>125,250 تومان </td>
                                <td><div class="badge bg-primary text-white rounded-pill">تمام وقت</div></td>
                                <td>
                                    <button class="btn btn-datatable btn-icon btn-transparent-dark me-2"><i class="bx bx-pencil"></i></button>
                                    <button class="btn btn-datatable btn-icon btn-transparent-dark"><i class="bx bx-trash"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>مهدی بهادری</td>
                                <td>مهندس نرم افزار</td>
                                <td>مازندران</td>
                                <td>56</td>
                                <td>1400/06/01</td>
                                <td>115,000 تومان </td>
                                <td><div class="badge bg-primary text-white rounded-pill">تمام وقت</div></td>
                                <td>
                                    <button class="btn btn-datatable btn-icon btn-transparent-dark me-2"><i class="bx bx-pencil"></i></button>
                                    <button class="btn btn-datatable btn-icon btn-transparent-dark"><i class="bx bx-trash"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>مهدی بهادری</td>
                                <td> مدیر شبکه</td>
                                <td>اردبیل</td>
                                <td>43</td>
                                <td>1400/02/01</td>
                                <td>75,650 تومان </td>
                                <td><div class="badge bg-primary text-white rounded-pill">تمام وقت</div></td>
                                <td>
                                    <button class="btn btn-datatable btn-icon btn-transparent-dark me-2"><i class="bx bx-pencil"></i></button>
                                    <button class="btn btn-datatable btn-icon btn-transparent-dark"><i class="bx bx-trash"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>مهدی بهادری</td>
                                <td>مدیر خرید</td>
                                <td>تهران</td>
                                <td>46</td>
                                <td>1399/12/06</td>
                                <td>145,600 تومان </td>
                                <td><div class="badge bg-primary text-white rounded-pill">تمام وقت</div></td>
                                <td>
                                    <button class="btn btn-datatable btn-icon btn-transparent-dark me-2"><i class="bx bx-pencil"></i></button>
                                    <button class="btn btn-datatable btn-icon btn-transparent-dark"><i class="bx bx-trash"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>مهدی بهادری</td>
                                <td>مدیر بازاریابی</td>
                                <td>اصفهان</td>
                                <td>47</td>
                                <td>1399/03/21</td>
                                <td>356,250 تومان </td>
                                <td><div class="badge bg-primary text-white rounded-pill">تمام وقت</div></td>
                                <td>
                                    <button class="btn btn-datatable btn-icon btn-transparent-dark me-2"><i class="bx bx-pencil"></i></button>
                                    <button class="btn btn-datatable btn-icon btn-transparent-dark"><i class="bx bx-trash"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>مهدی بهادری</td>
                                <td>مدیر سیستم</td>
                                <td>اصفهان</td>
                                <td>21</td>
                                <td>1397/02/27</td>
                                <td>103,500 تومان </td>
                                <td><div class="badge bg-primary text-white rounded-pill">تمام وقت</div></td>
                                <td>
                                    <button class="btn btn-datatable btn-icon btn-transparent-dark me-2"><i class="bx bx-pencil"></i></button>
                                    <button class="btn btn-datatable btn-icon btn-transparent-dark"><i class="bx bx-trash"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>مهدی بهادری</td>
                                <td>توسعه دهنده</td>
                                <td>مازندران</td>
                                <td>30 تومان </td>
                                <td>1398/07/14</td>
                                <td>86,500 تومان </td>
                                <td><div class="badge bg-primary text-white rounded-pill">تمام وقت</div></td>
                                <td>
                                    <button class="btn btn-datatable btn-icon btn-transparent-dark me-2"><i class="bx bx-pencil"></i></button>
                                    <button class="btn btn-datatable btn-icon btn-transparent-dark"><i class="bx bx-trash"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>مهدی بهادری</td>
                                <td>مدیر بازاریابی</td>
                                <td>اردبیل</td>
                                <td>51</td>
                                <td>1395/11/13</td>
                                <td>183,000 تومان </td>
                                <td><div class="badge bg-primary text-white rounded-pill">تمام وقت</div></td>
                                <td>
                                    <button class="btn btn-datatable btn-icon btn-transparent-dark me-2"><i class="bx bx-pencil"></i></button>
                                    <button class="btn btn-datatable btn-icon btn-transparent-dark"><i class="bx bx-trash"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>مهدی بهادری</td>
                                <td>مدیر شبکه</td>
                                <td>اتریش</td>
                                <td>29</td>
                                <td>1399/06/27</td>
                                <td>183,000 تومان </td>
                                <td><div class="badge bg-primary text-white rounded-pill">تمام وقت</div></td>
                                <td>
                                    <button class="btn btn-datatable btn-icon btn-transparent-dark me-2"><i class="bx bx-pencil"></i></button>
                                    <button class="btn btn-datatable btn-icon btn-transparent-dark"><i class="bx bx-trash"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>مهدی بهادری</td>
                                <td>پشتیبان مشتریان</td>
                                <td>تهران</td>
                                <td>27</td>
                                <td>1399/01/25</td>
                                <td>112,000 تومان </td>
                                <td><div class="badge bg-secondary text-white rounded-pill">پاره وقت</div></td>
                                <td>
                                    <button class="btn btn-datatable btn-icon btn-transparent-dark me-2"><i class="bx bx-pencil"></i></button>
                                    <button class="btn btn-datatable btn-icon btn-transparent-dark"><i class="bx bx-trash"></i></button>
                                </td>
                            </tr>
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