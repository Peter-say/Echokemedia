<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Users\DashboardController;
use App\Http\Controllers\Web\ContactUsController;
use App\Http\Controllers\Dashboard\ProfileController;
use App\Http\Controllers\Dashboard\UsersController;
use App\Http\Controllers\Dashboard\PostCategoryController;
use App\Http\Controllers\Users\PostController;
use App\Http\Controllers\Dashboard\AdminPostController;
use App\Http\Controllers\UserPostController;
use App\Mail\NewUserWelcomeMail;

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

Route::get('/', [App\Http\Controllers\Web\WelcomeController::class, 'index'])->name('/');
Route::get('/music_list', [App\Http\Controllers\Web\MediaController::class, 'music_list'])->name('music_list');
Route::get('user/{user:username}/post', [App\Http\Controllers\UserPostController::class, 'index'])->name('user.post');
Route::get('category/{id}/post', [App\Http\Controllers\UserPostController::class, 'showCategoryPost'])->name('category.post');

Route::prefix("media")->as("media.")->group(function () {
  Route::get('/about', [App\Http\Controllers\Web\WelcomeController::class, 'about'])->name('about');
  Route::get('/newreleases', [App\Http\Controllers\Web\WelcomeController::class, 'newreleases'])->name('newreleases');
  Route::get('/contact', [App\Http\Controllers\Web\ContactUsController::class, 'index'])->name('contact');
  Route::get('/', [App\Http\Controllers\Web\SharePostController::class, 'share'])->name('share');
  Route::post('/contact', [App\Http\Controllers\Web\ContactUsController::class, 'storeContact']);

  // Route::get('/comment', [App\Http\Controllers\Web\WelcomeController::class, 'comment'])->name('comment');
  Route::post('/comment', [App\Http\Controllers\Web\CommentController::class, 'store'])->name('comment');
  Route::get('/posts', [App\Http\Controllers\Web\WelcomeController::class, 'post'])->name('posts');
  Route::get('/blogs', [App\Http\Controllers\Web\WelcomeController::class, 'blog'])->name('blogs');
  
});

Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/search', [App\Http\Controllers\Web\WelcomeController::class, 'search'])->name('web.search');
Route::get('/post/{post:name}', [App\Http\Controllers\Web\WelcomeController::class, 'show'])->name('post.show');
Route::get('/file/download/{id}', [App\Http\Controllers\Web\WelcomeController::class, 'getFile'])->name('post.download');



Route::prefix("admin")->as("admin.")->middleware(["verified", "admin"])->group(function () {
  Route::get('/dashboard', [App\Http\Controllers\Dashboard\AdminController::class, 'admin'])->name('dashboard');
  Route::get('/users_messages', [App\Http\Controllers\Dashboard\AdminController::class, 'usersMessages'])->name('users_messages');
  Route::get('/over_view', [App\Http\Controllers\Dashboard\VideosController::class, 'over_view'])->name('over_view');
  // Route::get('/create', [App\Http\Controllers\Dashboard\VideosController::class, 'create_video'])->name('create');
  Route::get('/earnings', [App\Http\Controllers\Dashboard\EarningsController::class, 'earnings'])->name('earnings.index');
  Route::resource('post', AdminPostController::class)->middleware('Approved');


  Route::resource('category', PostCategoryController::class);
  Route::resource('profile', ProfileController::class);

  Route::resource('users', UsersController::class);
  Route::get('users/status/{id}',  [App\Http\Controllers\Dashboard\UsersController::class, 'status'])->name('users_status');
  Route::get('/witdraw', [App\Http\Controllers\Dashboard\TransactionController::class, 'witdraw'])->name('witdraw');
});



Route::prefix("user")->as("user.")->middleware("verified")->group(function () {
  Route::resource('dashboard', DashboardController::class);
  Route::get('user/{user}/post', [App\Http\Controllers\Users\DashboardController::class, 'viewposts'])->name('user.post');
  Route::get('/profile', [App\Http\Controllers\Users\ProfileController::class, 'index'])->name('profile');
  Route::get('/edit-profile', [App\Http\Controllers\Users\ProfileController::class, 'edit'])->name('edit-profile');
  Route::put('/update', [App\Http\Controllers\Users\ProfileController::class, 'update'])->name('update');
  Route::get('/earnings', [App\Http\Controllers\Users\DashboardController::class, 'earnings'])->name('earnings');
  Route::get('/user/{user:username}/post', [App\Http\Controllers\UserPostController::class, 'index'])->name('post');

  // Route::resource('category', CategoryController::class);
  Route::resource('post', PostController::class);
});


Route::get('/email', function () {
  return new NewUserWelcomeMail();
});
