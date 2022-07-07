<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\view;
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
Route::get('/laporan', function () {
    return view('admin.laporan');
});
Route::get('/pengguna', function () {
    return view('admin.pengguna');
});
// Route::get('/tamu', function () {
//     return view('tamu');
// });

Auth::routes();
Auth::routes(['verify' => false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/admin',[view::class, 'index']);
Route::get('/masuk',[view::class, 'login']);

Route::get('/guest',[App\Http\Controllers\GuestController::class, 'index'])->name('guest');
Route::get('/tamu',[view::class, 'index']);
// Route::get('/masuk',[view::class, 'tamu']);
//route resource
// Route::get('/post', 'PostController@index');
// Route::match(['get', 'post'],'/tambah',[App\Http\Controllers\TbAsetController::class, "tambah" ]);
// Route::get('/tambah',[ PostController::class, "tambah" ]);
// Route::post('/tambah',[ PostController::class, "tambah" ]);

//tambahkan kode berikut
Route::resource('asets', App\Http\Controllers\AsetController::class);