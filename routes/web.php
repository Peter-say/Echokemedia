<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Users\DashboardController;
use App\Http\Controllers\Dashboard\ProfileController;


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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

 


Route::prefix("admin")->as("admin.")->middleware(["verified", "admin"])->group(function () {
     Route::get('/dashboard' , [App\Http\Controllers\Dashboard\AdminController::class, 'admin'])->name('dashboard');
     Route::get('/over_view' , [App\Http\Controllers\Dashboard\VideosController::class, 'over_view'])->name('over_view');
     Route::get('/create' , [App\Http\Controllers\Dashboard\VideosController::class, 'create_video'])->name('create');

       Route::resource('profile' , ProfileController::class);
});

Route::prefix("user")->as("user.")->middleware("verified")->group(function () {
 Route::resource('dashboard' , DashboardController::class);
});