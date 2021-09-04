<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\AdminController;

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
     Route::get('dashboard' , [App\Http\Controllers\Dashboard\AdminController::class, 'admin'])->name('dasshboard');
     Route::get('profile' , [App\Http\Controllers\Dashboard\AdminController::class, 'profile'])->name('profile');

});