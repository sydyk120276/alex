<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\MainController;

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

Route::get('/', 'App\Http\Controllers\MainController@index')->name('homs');
Route::get('/article/{slug}', 'App\Http\Controllers\PostController@show')->name('posts.single');

Route::group(['prefix' => 'admin', 'namespace' => 'App\Http\Controllers\Admin', 'middleware' => 'admin'], function() {
  Route::get('/', 'MainController@index') -> name('admin.index');
  Route::resource('/categories', 'CategoryController');
  Route::resource('/tags', 'TagController');
  Route::resource('/posts', 'PostController');
  Route::resource('/abouts', 'AboutController');
  Route::resource('/galleries', 'GalleryController');
  Route::resource('/projects', 'ProjectController');
  Route::resource('/services', 'ServiceController');
  Route::resource('/developments', 'DevelopmentController');
  Route::resource('/forms', 'FormController');
  Route::resource('/footers', 'FooterController');
  Route::resource('/mains', 'MainsController');
  Route::resource('/headers', 'HeaderController');
});

Route::group(['middleware' => 'guest'], function ( ){
  Route::get('/register', 'App\Http\Controllers\UserController@create')->name('register.create');
  Route::post('/register', 'App\Http\Controllers\UserController@store')->name('register.store');
  Route::get('/login', 'App\Http\Controllers\UserController@loginForm')->name('login.create');
  Route::post('/login', 'App\Http\Controllers\UserController@login')->name('login');
});

Route::get('/logout', 'App\Http\Controllers\UserController@logout')->name('logout')->middleware('auth');