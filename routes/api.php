<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ApiController;

Route::post('login', [ApiController::class, 'authenticate']);
Route::group(['middleware' => ['jwt.admin']], function () {
    Route::post('students', [ApiController::class, 'getStudent']);
});
Route::group(['middleware' => ['jwt.manager']], function () {
    Route::post('manager', [ApiController::class, 'getManager']);
});
