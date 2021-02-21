<?php

use App\Http\Controllers\Web\AboutController;
use App\Http\Controllers\Web\EquipmentController;
use App\Http\Controllers\Web\IndexController;
use App\Http\Controllers\Web\MembersController;
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