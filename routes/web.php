<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\PageController;
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
// ********************************************************
/* LATIHAN PERCOBAAN

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/hello', function() {
  //  return 'Hello Word';
//});

Route::get('/hello', [WelcomeController::class,'hello']);

//Route::get('/hello', 'WelcomeController@hello');

Route::resource('photos', PhotoController::class);

********************************************************/
// ********************************************************
/* PRAKTIKUM 1

route::get('/', function() {
    return 'Selamat Datang';
});

route::get('/about', function() {
    echo 'Nama : Deki Firmansyah';
    echo '<br>NIM : 2041720113';
    echo '<br>Kelas : TI 2H';
});

route::get('/articles/{id}', function($id) {
    return 'Ini adalah halaman artikel dengan ID: '.$id;
});
 ********************************************************/
// Praktikum 2

Route::get('/index', [PageController::class,'index']);

Route::get('/about', [PageController::class,'about']);

Route::get('/articles/{id}', [PageController::class,'articles']);