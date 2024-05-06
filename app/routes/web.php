<?php

use App\Http\Controllers\WindowController;
use App\Http\Controllers\DesktopController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//User Login
Route::get('/', [WindowController::class, 'showLogin']);

Route::post('/access', [DesktopController::class, 'access'])->name('access');

Route::get('/desktop', [DesktopController::class, 'showDesktop'])->middleware('auth')->name('desktop');

