<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\{AuthController, ProfileController};
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

Route::get('/admin/login', [AuthController::class, 'getLogin'])->name('getLogin');
Route::post('/admin/login', [AuthController::class, 'postLogin'])->name('postLogin');

Route::get('/admin/dashboard', [ProfileController::class, 'getLogin'])->name('dashboard');