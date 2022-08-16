<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin', function () {
    return view('admin/base');
});

Route::get('dashboard', function(){
    return view('admin/dashboard');
});

Route::get('kategori', function(){
    return view('admin/kategori');
});

Route::get('loginmin', function(){
    return view('admin/login-admin');
});



Route::get('landing', function (){
    return view('landing/landing');
});

Route::get('/produk', function () {
    return view('admin/produk');
});

Route::get('/detail', function (){
    return view('/landing/produk-detail');
});

Route::get('login', function (){
    return view('login');
});

Route::get('register', function (){
    return view('register');
});
