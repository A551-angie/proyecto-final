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



Route::get('/vacancies/index', [VacanciesController::class,'index'])->name('home');

Route::get('/vacancies/create', [VacanciesController::class,'create'])->name('vacancies.create');

Route::post('vacancies',[VacanciesController::class, 'store'])->name('vacancies.store');
Route::get('/vacancies/developer', [DeveloperController::class,'developer'])->name('developer.developer');



Route::get('/developer/index', [DeveloperController::class,'index'])->name('developer.index');

Route::get('/developer/create', [DeveloperController::class,'create'])->name('developer.create');Route::get('/developer/developer', [DeveloperController::class,'developer'])->name('developer.developer');