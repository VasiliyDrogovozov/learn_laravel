<?php
use App\Models\Page;
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



Route::get('/', function() {
  return '<h1>Hello friend!</h1>';
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
