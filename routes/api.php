<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ApiController;

Route::post('login', [ApiController::class, 'authenticate']);
Route::group(['middleware' => ['jwt.admin']], function () {
    Route::post('students', [ApiController::class, 'getStudent']);
    Route::post('student', [ApiController::class, 'getStudentById']);
    Route::post('parents', [ApiController::class, 'getAllParents']);
    Route::post('parent', [ApiController::class, 'getParentById']);
});
Route::group(['middleware' => ['jwt.manager']], function () {
    Route::post('manager', [ApiController::class, 'getManager']);
});
