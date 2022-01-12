<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\UserController;

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
    return view('backview.dashboard');
});


Route::get('/home', [HomeController::class, 'showhome']);
Route::get('/about', [HomeController::class, 'showabout']);
Route::get('/contact', [HomeController::class, 'showcontact']);
Route::get('/dashboard', [HomeController::class, 'showdashboard']);
Route::get('/dashboard/{status}', [HomeController::class, 'showdashboard']);
Route::get('/kategori', [HomeController::class, 'showkategori']);
Route::get('/user', [UserController::class, 'showuser']);
Route::get('/product', [HomeController::class, 'showproduct']);
Route::get('/pelanggan', [HomeController::class, 'showpelanggan']);
Route::get('/registrasi', [HomeController::class, 'showregistrasi']);

Route::get('setting', [SettingController::class,'index']);
Route::post('setting', [SettingController::class,'store']);

Route::prefix('admin')->middleware('auth')->group(function(){
    Route::post('produk/filter', [ProdukController::class, 'filter']);
    Route::resource('produk', ProdukController::class);
    Route::resource('user', UserController::class);
});

Route::get('/login', [AuthController::class, 'showlogin']);
Route::post('/login', [AuthController::class, 'loginprocess']);
Route::post('/logout', [AuthController::class, 'logout']);

Route::get('test-collection', [HomeController::class, 'testCollection']);

//Client
Route::get('home', [ClientController::class, 'showHome']);
Route::post('home/filter', [ClientController::class, 'filter']);
Route::get('produk/{produk}', [ClientController::class, 'showProduk']);
Route::get('pesanan/{produk}', [ClientController::class, 'Pesanan']);

Route::get('/base', function () {
    return view('template.base');
});

Route::get('/table', function () {
    return view('backview.table');
});

Route::get('test-ajax', [HomeController::class, 'testAjax']);