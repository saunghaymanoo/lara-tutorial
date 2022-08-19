<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Manager\ManagerController;
use App\Http\Controllers\Admin\AdminController;

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
Route::get('/login', [AuthController::class, 'getLoginForm']);
Route::post('/login', [AuthController::class, 'getPostLogin']);
Route::get('/logout', [AuthController::class, 'getLogout']);
Route::group(['prefix' => 'admin','middleware' => ['admin:Administrator']], function () {
    Route::get('/home', [AdminController::class, 'index']);
});
Route::group(['prefix' => 'manager','middleware' => ['manager:Administrator']], function () {
    Route::get('/home', [ManagerController::class, 'index']);
});
