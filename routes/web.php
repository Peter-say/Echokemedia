<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VideosController;


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

 


Route::prefix("admin")->as("admin.")->namespace("Admin")->middleware(["verified", "admin"])->group(function () {
     Route::get('/dashboard' , [App\Http\Controllers\Dashboard\AdminController::class, 'admin'])->name('dasshboard');
     Route::get('/profile' , [App\Http\Controllers\Dashboard\AdminController::class, 'profile'])->name('profile');
     Route::post('/upload_profile' , [App\Http\Controllers\Dashboard\AdminController::class, 'store'])->name('upload_profile');
    
     Route::get('/over_view' , [App\Http\Controllers\Dashboard\VideosController::class, 'over_view'])->name('over_view');
     Route::get('/create' , [App\Http\Controllers\Dashboard\VideosController::class, 'create_video'])->name('create');

});