<?php
use App\Models\Page;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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





Route::get('/', [HomeController::class, 'index']);

Route::group(['namespace' => 'App\Http\Controllers\Admin', 'prefix' => 'admin', 'middleware' => 'admin'], function() {

  Route::group(['namespace' => 'Post'], function() {

    Route::get('/post', IndexController::class)->name('admin.post.index');

  });

});

Route::group(['namespace' => 'App\Http\Controllers\Post'], function() {

  Route::get('/posts', IndexController::class)->name('post.index');
  Route::get('/posts/create', CreateController::class)->name('post.create');

  Route::post('/posts', StoreController::class)->name('post.store');

  Route::get('/posts/{post}', ShowController::class)->name('post.show');

  Route::get('/posts/{post}/edit', EditController::class)->name('post.edit');

  Route::patch('/posts/{post}', UpdateController::class)->name('post.update');

  Route::delete('/posts/{post}', DestroyController::class)->name('post.destroy');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
