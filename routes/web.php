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
    return view('home');
});

Route::get('/blog', function () {
    return view('posts', [
        "isiBlog" => "ini isi blog dari variabel",
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "nama" => "Rizal Arif",
        "email" => "rizal.arif2001@gmail.com",
        "image" => "rizal.png"
    ]);
});