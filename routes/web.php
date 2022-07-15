<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\view;
use App\Http\Controllers\AsetController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PemilikController;
use Illuminate\Contracts\View\View as ViewView;
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
    return view('admin.editpemilik');
});

// route untuk input data yg belum terverifikasi
Route::get('/create', function () {
    return view('admin.create');
});
Route::get('/tambah', function () {
    return view('admin.pemilik');
});
// Route::get('/editpemilik', function () {
//     return view('admin.editpemilik');
// });
// Route::get('/tamu', function () {
//     return view('tamu');
// });

Auth::routes();
Auth::routes(['verify' => false]);
// Auth::routes(['verify' => true]);

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/admin',[view::class, 'index']);
Route::get('/masuk',[view::class, 'login']);
Route::post('/save',[view::class, 'save']);
// Route::delete('/delete',[view::class, 'delete']);

Route::get('/guest',[GuestController::class, 'index'])->name('guest');

Route::get('/pengguna',[view::class, 'pengguna']);
// Route::dele('/delete',[view::class, 'destroy']);
// Route::delete('/pengguna/{id}', 'view@destroy')->name('pengguna.destroy');

//tambahkan kode berikut
Route::resource('/asets', AsetController::class);
Route::resource('/delete', view::class);

Route::resource('/pemilik', PemilikController::class);
// Route::resource('/pengguna', View::class);
// Route::resource('/save', App\Http\Controllers\view::class,'save');


// Route::resource('/getusr',[App\Http\Controllers\AdminController::class, 'index']);