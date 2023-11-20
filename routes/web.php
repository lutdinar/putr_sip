<?php

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

Route::get('/authentications', function () {
    return view('login');
});

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/tasks', function () {
    return view('task.index');
});

Route::get('/tasks/detail', function () {
    return view('task.detail');
});

Route::get('/tasks/administration', function () {
    return view('task.administration.index');
});

Route::get('/users', function () {
    return view('users/index');
});
Route::get('/users/forgot', function () {
    return view('users/forgot');
});

// CONSULTANT ROUTES
Route::controller(\App\Http\Controllers\ConsultantController::class)->group(function () {
    Route::get('/consultants','index');
    Route::get('/consultants/detail', 'detail');
    Route::post('/consultants/save', 'store');
    Route::post('/consultants/save_deed', 'save_deed');
    Route::post('/consultants/upload', 'store_file');
});

Route::get('/users/get_users', [\App\Http\Controllers\UsersController::class, 'get_users_json']);
Route::get('/users/get_users_forgot_request_json', [\App\Http\Controllers\UsersController::class, 'get_users_forgot_request_json']);
Route::get('/users/get_reset_password', [\App\Http\Controllers\UsersController::class, 'get_reset_password']);
Route::get('/tasks/get_roads', [\App\Http\Controllers\TasksController::class, 'get_roads']);
Route::get('/tasks/get_report_by_days', [\App\Http\Controllers\TasksController::class, 'get_report_by_days']);
