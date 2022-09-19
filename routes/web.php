<?php

use App\Http\Controllers\DosenController;
use App\Http\Controllers\ProductController;
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

Route::get('halo', function () {
    return "Halo selamat datang di laravel";
});

Route::get('blog', function () {
    return view('blog');
});

route::get('dosen', [DosenController::class, 'index']);
Route::resource('products', ProductController::class);