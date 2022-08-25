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

Route::get('/', [AuthController::class, 'index']);
Route::get('/login', [AuthController::class, 'getLoginForm']);
Route::post('/login', [AuthController::class, 'getPostLogin']);
Route::get('/logout', [AuthController::class, 'getLogout']);
Route::group(['prefix' => 'admin','middleware' => ['admin:Administrator']], function () {
    Route::get('/home', [AdminController::class, 'index']);
    Route::get('/student/delete/{id}', [AdminController::class, 'delete']);
    Route::get('/student/edit/{id}', [AdminController::class, 'edit']);
    Route::post('/student/update', [AdminController::class, 'update']);
    Route::get('/student/download', [AdminController::class, 'download']);
    Route::post('/search', [AdminController::class, 'search']);
    Route::get('/parent', [AdminController::class, 'getParents']);
});
Route::group(['prefix' => 'manager','middleware' => ['manager:Administrator']], function () {
    Route::get('/home', [ManagerController::class, 'index']);
});

// Route::get('/pass', function () {
//     dd(bcrypt('admin'));
// });
