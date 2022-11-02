<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pengawasanController;
use App\Http\Controllers\pemanfaatanController;

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
    return view('sidebar');
});

Route::get('pengawasan', [pengawasanController::class, 'pengawasan'])->name('pengawasan');

Route::get('pemanfaatan', [pemanfaatanController::class, 'pemanfaatan'])->name('pemanfaatan');