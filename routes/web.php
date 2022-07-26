<?php
use App\Http\Controllers\Blog\PostController;
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

Route::get('/', 'WelcomeController@index')->name('welcome');
Route::get('blog/posts/{post}',[PostController::class,'show'])->name('blog.show');
Route::get('blog/category/{category}',[PostController::class,'category'])->name('blog.category');
Route::get('blog/tag/{tag}',[PostController::class,'tag'])->name('blog.tag');

Auth::routes();
Route::middleware(['auth'])->group(function () {
    Route::resource('categories','CategoryController');
    Route::resource('posts','PostController');
    Route::resource('tags', 'TagController');
});
Route::middleware(['auth','admin'])->group(function () {
    Route::get('users', 'UserController@index')->name('users.index');
    Route::post('users/{user}/makeAdmin', 'UserController@makeAdmin')->name('users.makeAdmin');
});
Route::get('/home', 'HomeController@index')->name('home');
