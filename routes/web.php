<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\DeveloperController;
use App\Http\Controllers\VacanciesController;

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

/* Route::get('',[HomeController::class, 'index']); */

Route::get('/admin', function () {
    return view('admin.index');
})->middleware(['auth:sanctum', 'verified'])->name('dashboard');


Route::get('/recruiter/index', function () {
    return view('recruiter.index');
});

Route::get('/recruiter/create', function () {
    return view('recruiter.create');
});

// Route::get('/developer/index',function(){
//     return view ('developer.index');

// });

Route::resource('/developer/index', DeveloperController::class);