<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('panel.index');
})->name('panel.index');

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
