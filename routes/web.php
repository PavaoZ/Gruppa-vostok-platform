<?php

use App\Http\Controllers\Web\AboutController;
use App\Http\Controllers\Web\ContactUsController;
use App\Http\Controllers\Web\EquipmentController;
use App\Http\Controllers\Web\IndexController;
use App\Http\Controllers\Web\LatestUpdatesController;
use App\Http\Controllers\Web\MembersController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [IndexController::class, 'index']);

Route::get('/about', [AboutController::class, 'index']);

Route::get('/equipment', [EquipmentController::class, 'index']);

Route::get('/members', [MembersController::class, 'index']);

Route::get('/contact-us', [ContactUsController::class, 'index']);

Route::get('/latest-updates', [LatestUpdatesController::class, 'index']);

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');

// Auth::routes();

// Route::get('/login', [App\Http\Controllers\LoginController::class, 'index']);
