<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OnlineAssessmentModelController;
use App\Models\onlineAssessmentJobsModel;
use App\Models\onlineAssessmentModel;
use App\Models\onlineAssessmentVisasModel;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::prefix('/admin')
    ->middleware('auth:admin')
    ->group(function () {

        Route::get('/', function () {
            return view('panel.index');
        })->name('panelIndex');

        Route::get('/products', function () {
            return view('panel.shop-products');
        })->name('panel.products');

        Route::get('/add-product', function () {
            return view('panel.shop-addproduct');
        })->name('panel.add-product');

        Route::get('/forgetpwd', function () {
            return view('panel.login');
        })->name('panel.forgetpwd');

        Route::get('/auth-email', function () {
            return view('panel.login');
        })->name('panel.auth-email');

        Route::get('/posts/add', function () {
            return view('panel.post-add');
        })->name('panel.add');
    });

Route::get('/admin/login', function () {
    return view('panel.login');
})->name('login');

// Route::get('/register', function () {
//     return view('panel.login');
// })->name('panel.register');

Route::get('/forms/assessment', function () {
    return view('panel.assessment');
})->name('forms.assessment');

Route::get('/forms/assessment-view/{id}', function ($id) {
    $onlineAssessmentModel = onlineAssessmentModel::findOrFail($id);
    $onlineAssessmentJobsModel = onlineAssessmentJobsModel::where('online_assessment_id', $id)->get();
    $onlineAssessmentVisasModel = onlineAssessmentVisasModel::where('online_assessment_id', $id)->get();
    return view('panel.assessment-view', compact('onlineAssessmentModel', 'onlineAssessmentJobsModel', 'onlineAssessmentVisasModel'));
})->name('forms.assessment-view');

Route::get('/blank', function () {
    return view('front.blank');
})->name('front.blank');

Route::get('/', function () {
    return view('front.index');
})->name('front.index');

Route::get('/online-assessment', function () {
    return view('front.online-assessment');
})->name('front.online-assessment');

Route::get('/contact', function () {
    return view('front.contact');
})->name('front.contact');

Route::get('/work-visa', function () {
    return view('front.work-visa');
})->name('front.work-visa');

Route::get('/coaching', function () {
    return view('front.coaching');
})->name('front.coaching');

Route::get('/tourist-visa', function () {
    return view('front.tourist-visa');
})->name('front.tourist-visa');

Route::get('/study-visa', function () {
    return view('front.study-visa');
})->name('front.study-visa');

Route::get('/blog', function () {
    return view('front.blog');
})->name('front.blog');

Route::get('/blog-details', function () {
    return view('front.blog-details');
})->name('front.blog-details');

Route::get('/about', function () {
    return view('front.about');
})->name('front.about');

Route::get('/pickup-passport', function () {
    return view('front.pickup-passport');
})->name('front.pickup-passport');

Route::post('req/online/assessment', function (Request $request) {
    $allReq = $request->all();
    $onlineAssessmentModel = onlineAssessmentModel::create($request->all());
    $allReq['online_assessment_id'] = $onlineAssessmentModel->id;

    if (is_array($allReq['job-name'])) {
        foreach ($allReq['job-name'] as $key => $row) {
            onlineAssessmentJobsModel::create([
                'online_assessment_id' => $onlineAssessmentModel->id,
                'job-name' => $allReq['job-name'][$key],
                'work-experience' => $allReq['work-experience'][$key],
                'employment-period' => $allReq['employment-period'][$key],
                'management-experience' => $allReq['management-experience'][$key],
            ]);
        }
    }

    if (is_array($allReq['visas'])) {
        foreach ($allReq['visas'] as $key => $row) {
            onlineAssessmentVisasModel::create([
                'online_assessment_id' => $onlineAssessmentModel->id,
                'visas' => $allReq['visas'][$key],
                'type-visa' => $allReq['type-visa'][$key],
                'enter-date' => $allReq['enter-date'][$key],
                'exit-date' => $allReq['exit-date'][$key],
            ]);
        }
    }

    return redirect()->to(route('front.online-assessment'));
})->name('api.online.assessment');


Route::post('req/login', function (Request $request) {
    if (\Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {
        return true;
    }

    return false;
})->name('api.login');