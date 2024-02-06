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

Route::prefix('/admin')->group(function () {

    Route::get('/', function () {
        return view('panel.index');
    })->name('panelIndex');

    Route::get('/products', function () {
        return view('panel.shop-products');
    })->name('panel.products');

    Route::get('/add-product', function () {
        return view('panel.shop-addproduct');
    })->name('panel.add-product');

    Route::get('/login', function () {
        return view('panel.login');
    })->name('panel.login');

    Route::get('/register', function () {
        return view('panel.login');
    })->name('panel.register');

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

Route::get('/index', function () {
    return view('front.index');
})->name('front.index');

Route::get('/online-assessment', function () {
    return view('front.online-assessment');
})->name('front.online-assessment');

Route::get('/contact', function () {
    return view('front.contact');
})->name('front.contact');

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
