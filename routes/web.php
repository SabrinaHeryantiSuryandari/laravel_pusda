<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\view;
use App\Http\Controllers\AsetController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;

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
    return view('index.admin');
});

// CRUD
// route untuk input data yg telah terverifikasi
Route::get('/verified-create', function () {
    return view('create');
});

// route untuk input data yg belum terverifikasi
Route::get('/create', function () {
    return view('create');
});
// Route::get('/tambah', function () {
//     return view('guest.tambah');
// });
// Route::get('/pengguna', function () {
//     return view('admin.pengguna');
// });
// Route::get('/tamu', function () {
//     return view('tamu');
// });

Auth::routes();
Auth::routes(['verify' => false]);

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/admin',[view::class, 'index']);
Route::get('/masuk',[view::class, 'login']);
Route::post('/save',[view::class, 'save']);

Route::get('/guest',[GuestController::class, 'index'])->name('guest');

Route::get('/pengguna',[view::class, 'pengguna']);

//tambahkan kode berikut
Route::resource('/asets', AsetController::class);

Route::resource('/regis', RegisterController::class);
// Route::resource('/save', App\Http\Controllers\view::class,'save');


// Route::resource('/getusr',[App\Http\Controllers\AdminController::class, 'index']);