<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\GroupController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/groups', [GroupController::class, 'index']);

Route::get('/groups/create', [GroupController::class, 'create']);

Route::post('/groups', [GroupController::class, 'store']);

Route::get('/groups/{group}', [GroupController::class, 'show']);

Route::get('/groups/{group}/students/create', [StudentController::class, 'create']);

Route::post('/groups/{group}/students', [StudentController::class, 'store']);

Route::get('/groups/{group}/students/{student}', [StudentController::class, 'show']);


