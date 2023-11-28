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

// TASK ROUTES
Route::controller(\App\Http\Controllers\TasksController::class)->group(function () {
    Route::get('/tasks/get_sessions', 'testing');
});

// CONSULTANT ROUTES
Route::controller(\App\Http\Controllers\ConsultantController::class)->group(function () {
    Route::get('/consultants','index');
    Route::get('/consultants/detail', 'detail');
    Route::post('/consultants/save', 'store');
    Route::post('/consultants/deed/save', 'deed_store');
    Route::post('/consultants/deed/delete', 'deed_delete');
    Route::post('/consultants/owner/save', 'owner_store');
    Route::get('/consultants/owner/truncate', 'owner_truncate');
    Route::post('/consultants/owner/detail', 'owner_detail');
    Route::post('/consultants/company/sbu', 'sbu_store');
    Route::post('/consultants/company/iujk', 'iujk_store');
    Route::post('/consultants/company/siup', 'siup_store');
    Route::post('/consultants/company/nib', 'nib_store');
    Route::post('/consultants/personil/save', 'personil_store');
    Route::post('/consultants/upload', 'store_file');
    Route::post('/consultants/user/save', 'user_store');
});

// USER ROUTES
Route::controller(\App\Http\Controllers\UsersController::class)->group(function () {
    Route::get('/users', 'index');
    Route::get('/users/forgot', 'forgot');
    Route::post('/users/save', 'store');

    // auth request
    Route::post('authentications/signin', 'signin');
    Route::get('authentications/signout', 'signout');

    Route::get('/users/get_users', [\App\Http\Controllers\UsersController::class, 'get_users_json']);
    Route::get('/users/get_users_forgot_request_json', [\App\Http\Controllers\UsersController::class, 'get_users_forgot_request_json']);
    Route::get('/users/get_reset_password', [\App\Http\Controllers\UsersController::class, 'get_reset_password']);
});

Route::get('/tasks/get_roads', [\App\Http\Controllers\TasksController::class, 'get_roads']);
Route::get('/tasks/get_report_by_days', [\App\Http\Controllers\TasksController::class, 'get_report_by_days']);
