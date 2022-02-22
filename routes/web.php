<?php

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


Auth::routes();
Route::prefix('admin')->middleware('checkrole')->group(function () {
    Route::get('/', 'back\AdminController@index')->name('admin.index');
    Route::get('/users', 'back\UserController@index')->name('admin.users');
    Route::get('/profile/{user}', 'back\UserController@edit')->name('admin.profile');
    Route::post('/profileupdate/{user}', 'back\UserController@update')->name('admin.profileupdate');
    Route::get('/users/status/{user}', 'back\UserController@updatestatus')->name('admin.user.status');
});
Route::prefix('admin/categories')->middleware('checkrole')->group(function () {
    Route::get('/', 'back\CategoryController@index')->name('admin.categories');
    Route::get('/create', 'back\CategoryController@create')->name('admin.categories.create');
    Route::post('/store', 'back\CategoryController@store')->name('admin.categories.store');
    Route::get('/edit/{category}', 'back\CategoryController@edit')->name('admin.categories.edit');
    Route::post('/update/{category}', 'back\CategoryController@update')->name('admin.categories.update');
    Route::get('/destroy/{category}', 'back\CategoryController@destroy')->name('admin.categories.destroy');

});
Route::prefix('admin/articles')->middleware('checkrole')->group(function () {
    Route::get('/', 'back\ArticleController@index')->name('admin.articles');
    Route::get('/create', 'back\ArticleController@create')->name('admin.articles.create');
    Route::post('/store', 'back\ArticleController@store')->name('admin.articles.store');
    Route::get('/edit/{article}', 'back\ArticleController@edit')->name('admin.articles.edit');
    Route::post('/update/{article}', 'back\ArticleController@update')->name('admin.articles.update');
    Route::get('/destroy/{article}', 'back\ArticleController@destroy')->name('admin.articles.destroy');
    Route::get('/status/{article}', 'back\ArticleController@updatestatus')->name('admin.articles.status');
});
Route::prefix('admin/comments')->middleware('checkrole')->group(function () {
    Route::get('/', 'back\CommentController@index')->name('admin.comments');
    Route::get('/edit/{comment}', 'back\CommentController@edit')->name('admin.comments.edit');
    Route::post('/update/{comment}', 'back\CommentController@update')->name('admin.comments.update');
    Route::get('/destroy/{comment}', 'back\CommentController@destroy')->name('admin.comments.destroy');
    Route::get('/status/{comment}', 'back\CommentController@updatestatus')->name('admin.comments.status');
});
Route::get('/', 'front\HomeController@index')->name('home');
//Route::get('/', function () {
//    return view('front.main');
//})->name('home');
Route::get('/login', 'Auth\LoginController@ShowLoginForm')->name('login');
Route::get('/register', 'Auth\RegisterController@ShowRegistrationForm')->name('register');
Route::get('/profile/{user}', 'UserController@edit')->name('profile');
Route::post('/update/{user}', 'UserController@update')->name('profileupdate');
Route::get('/articles', 'front\ArticleController@index')->name('articles');
Route::get('/article/{article}', 'front\ArticleController@show')->name('article');
Route::post('/comment/{article}', 'front\CommentController@store')->name('comment.store');

Route::prefix('admin/portfolios')->middleware('checkrole')->group(function () {
    Route::get('/', 'back\PortfolioController@index')->name('admin.portfolios');
    Route::get('/create', 'back\PortfolioController@create')->name('admin.portfolios.create');
    Route::post('/store', 'back\PortfolioController@store')->name('admin.portfolios.store');
    Route::get('/edit/{portfolio}', 'back\PortfolioController@edit')->name('admin.portfolios.edit');
    Route::post('/update/{portfolio}', 'back\PortfolioController@update')->name('admin.portfolios.update');
    Route::get('/destroy/{portfolio}', 'back\PortfolioController@destroy')->name('admin.portfolios.destroy');
    Route::get('/status/{portfolio}', 'back\PortfolioController@updatestatus')->name('admin.portfolios.status');
});
//*******************************************************************************
//*******************************************************************************
//*******************************************************************************
//*******************************************************************************
//*******************************************************************************
//*******************************************************************************
//*******************************************************************************
//*******************************************************************************
//*******************************************************************************
//*******************************************************************************
//*******************************************************************************
//*******************************************************************************
//*******************************************************************************
//*******************************************************************************
//*******************************************************************************
//*******************************************************************************
//*******************************************************************************
//*******************************************************************************
//*******************************************************************************
//*******************************************************************************
//*******************************************************************************
//*******************************************************************************
//*******************************************************************************
//*******************************************************************************
//*******************************************************************************
//*******************************************************************************
//*******************************************************************************
//*******************************************************************************
//*******************************************************************************
Route::get('/welcome', 'indexController@welcome');
Route::get('/article/{id}', 'indexController@article');
Route::get('/posts', 'postController@index');
Route::get('/orders', 'OrderController@index');

///////////////////Categories Route
Route::get('/categories/create', 'CategoryController@create')->name('create')->middleware('auth');
Route::get('/categories', 'CategoryController@index')->name('categories');
Route::get('/categories/{category}', 'CategoryController@show')->name('show');
Route::get('/categories/edit/{category}', 'CategoryController@edit')->name('edit')->middleware('auth');
Route::get('/categories/destroy/{category}', 'CategoryController@destroy')->name('destroy')->middleware('auth');
Route::put('/categories/update/{category}', 'CategoryController@update')->name('update')->middleware('auth');
Route::post('/categories/store', 'CategoryController@store')->name('store');


//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
