<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OnlineAssessmentModelController;
use App\Models\onlineAssessmentModel;
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
    // dd($request->except('_token'));
    onlineAssessmentModel::create($request->all());   
    return "ok";
})->name('api.online.assessment');