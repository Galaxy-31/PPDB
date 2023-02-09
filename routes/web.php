<?php

use App\Http\Controllers\DataSiswaController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PpdbController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
use App\Models\DataSiswa;

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
    return view('home.index');
});

Auth::routes();

Route::get('/registrasi', [DataSiswaController::class, 'create'])->name('dataSiswas.create');
Route::get('/dataSiswas', [DataSiswaController::class, 'index'])->name('dataSiswas.index');
Route::get('/success', [DataSiswaController::class, 'showAccount'])->name('dataSiswas.info');
Route::post('/dataSiswas', [DataSiswaController::class, 'store'])->name('dataSiswas.store');
// Route::get('/registrasi', [DataSiswaController::class, 'create'])->name('dataSiswas.create');


Route::group(['middleware' => ['auth']], function ()
{
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::group(['middleware' => ['role:admin']], function ()
    {
        Route::resource('users', UserController::class);
    });
    Route::group(['middleware' => ['role:admin|petugas']], function ()
    {
        
    });
    Route::group(['middleware' => ['role:siswa']], function ()
    {
        
    });
});