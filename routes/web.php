<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PengawasanController;
use App\Http\Controllers\DpemanfaatanController;
use PhpOffice\PhpSpreadsheet\Calculation\MathTrig\Round;
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

Route::group(['middleware' => 'web'], function () {
    // Route::auth();

    //Login
    Route::get('/', [LoginController::class, 'login'])->name('login');
    Route::post('actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');

    //Home
    Route::get('home', [HomeController::class, 'index'])->name('home');
    Route::post('actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout');
    
    Route::get('user', function () {
        return view('user');
    })->name('user');
    
    // register
    Route::get('register', [RegisterController::class, 'register'])->name('register');
    Route::post('register/action', [RegisterController::class, 'actionregister'])->name('actionregister');
    
    // pemanfaatan
    Route::get('/pemanfaatan', [DpemanfaatanController::class, 'index'])->name('pemanfaatan.index');
    Route::get('/form-dpemanfaatan', [DpemanfaatanController::class, 'create'])->name('form-dpemanfaatan');
    Route::post('/simpan-dpemanfaatan', [DpemanfaatanController::class, 'store'])->name('simpan-dpemanfaatan');
    Route::get('edit-pemanfaatan/{id}',[DpemanfaatanController::class, 'edit'])->name('edit-pemanfaatan');
    Route::post('/updatepemanfaatan',[DpemanfaatanController::class, 'update'])->name('updatepemanfaatan');
    Route::get('/hapus-pemanfaatan/{id}',[DpemanfaatanController::class, 'delete'])->name('hapus-pemanfaatan');

    // pengawasan
    Route::get('/pengawasan', [PengawasanController::class,'index'])->name('pengawasan.index');
    Route::get('/Create-Pengawasan',[PengawasanController::class,'create'])->name('Create-Pengawasan');
    Route::post('/simpan-Pengawasan',[PengawasanController::class,'store'])->name('simpan-Pengawasan');
    Route::get('/edit-pengawasan/{id}',[PengawasanController::class,'edit'])->name('edit-pengawasan');
    Route::post('/update-pengawasan/{id}',[PengawasanController::class,'update'])->name('update-pengawasan');
    Route::get('/delete-pengawasan/{id}',[PengawasanController::class,'destroy'])->name('delete-pengawasan');

});

// Route::get('/', function () {
//     return view('sidebar');
// });

