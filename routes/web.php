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
    return view('admin');
});
Route::get('/create', function () {
    return view('create');
});
Route::get('/tambah', function () {
    return view('tambah');
});
Route::get('/pengguna', function () {
    return view('pengguna');
});

Auth::routes();
Auth::routes(['verify' => false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/admin',[view::class, 'index']);
Route::get('/masuk',[view::class, 'login']);

//route resource
// Route::get('/post', 'PostController@index');
// Route::match(['get', 'post'],'/tambah',[App\Http\Controllers\TbAsetController::class, "tambah" ]);
// Route::get('/tambah',[ PostController::class, "tambah" ]);
// Route::post('/tambah',[ PostController::class, "tambah" ]);

//tambahkan kode berikut
Route::resource('asets', App\Http\Controllers\AsetController::class);