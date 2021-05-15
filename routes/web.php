<?php
//namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
//use App\Http\Controllers;

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
    return view('front.main');
})->name('home');

Auth::routes(['verify' => true]);

Route::prefix('admin')->middleware('CheckRole')->group(function(){

Route::get('/', 'App\Http\Controllers\back\AdminController@index')->name('admin.index');
Route::get('/users', 'App\Http\Controllers\back\UserController@index')->name('admin.users');
Route::get('/users/status/{user}', 'App\Http\Controllers\back\UserController@updatestatus')->name('admin.user.status');
Route::get('/users/delete/{user}', 'App\Http\Controllers\UserController@destroy')->name('admin.user.delete');
Route::get('/profile/{user}', 'App\Http\Controllers\back\UserController@edit')->name('admin.profile');
Route::post('/profileupdate/{user}', 'App\Http\Controllers\back\UserController@update')->name('admin.profileupdate');

});
Route::prefix('admin/categories')->middleware('CheckRole')->group(function(){

Route::get('/', 'App\Http\Controllers\back\CategoryController@index')->name('admin.categories');
Route::get('/create', 'App\Http\Controllers\back\CategoryController@create')->name('admin.categories.create');
Route::post('/store', 'App\Http\Controllers\back\CategoryController@store')->name('admin.categories.store');
Route::get('/edit/{category}', 'App\Http\Controllers\back\CategoryController@edit')->name('admin.categories.edit');
Route::post('/update/{category}', 'App\Http\Controllers\back\CategoryController@update')->name('admin.categories.update');
Route::get('/destroy/{category}', 'App\Http\Controllers\back\CategoryController@destroy')->name('admin.categories.destroy');
    
});

Route::prefix('admin/articles')->middleware('CheckRole')->group(function(){

Route::get('/', 'App\Http\Controllers\back\ArticleController@index')->name('admin.articles');
Route::get('/create', 'App\Http\Controllers\back\ArticleController@create')->name('admin.articles.create');
Route::post('/store', 'App\Http\Controllers\back\ArticleController@store')->name('admin.articles.store');
Route::get('/edit/{article}', 'App\Http\Controllers\back\ArticleController@edit')->name('admin.articles.edit');
Route::post('/update/{article}', 'App\Http\Controllers\back\ArticleController@update')->name('admin.articles.update');
Route::get('/destroy/{article}', 'App\Http\Controllers\back\ArticleController@destroy')->name('admin.articles.destroy');
Route::get('/status/{article}', 'App\Http\Controllers\back\ArticleController@updatestatus')->name('admin.articles.status');

});    

Route::prefix('admin/comments')->middleware('CheckRole')->group(function(){

Route::get('/', 'App\Http\Controllers\back\CommentController@index')->name('admin.comments');
Route::get('/edit/{comment}', 'App\Http\Controllers\back\CommentController@edit')->name('admin.comments.edit');
Route::post('/update/{comment}', 'App\Http\Controllers\back\CommentController@update')->name('admin.comments.update');
Route::get('/destroy/{comment}', 'App\Http\Controllers\back\CommentController@destroy')->name('admin.comments.destroy');
Route::get('/status/{comment}', 'App\Http\Controllers\back\CommentController@updatestatus')->name('admin.comments.status');
            
    });   
Route::prefix('admin/portfolios')->middleware('CheckRole')->group(function(){

Route::get('/', 'App\Http\Controllers\back\PortfolioController@index')->name('admin.portfolios');
Route::get('/create', 'App\Http\Controllers\back\PortfolioController@create')->name('admin.portfolios.create');
Route::post('/store', 'App\Http\Controllers\back\PortfolioController@store')->name('admin.portfolios.store');
Route::get('/edit/{portfolio}', 'App\Http\Controllers\back\PortfolioController@edit')->name('admin.portfolios.edit');
Route::post('/update/{portfolio}', 'App\Http\Controllers\back\PortfolioController@update')->name('admin.portfolios.update');
Route::get('/destroy/{portfolio}', 'App\Http\Controllers\back\PortfolioController@destroy')->name('admin.portfolios.destroy');
Route::get('/status/{portfolio}', 'App\Http\Controllers\back\PortfolioController@updatestatus')->name('admin.portfolios.status');
});                   
        


Route::get('/profile/{user}', 'App\Http\Controllers\UserController@edit')->name('profile')->middleware(['auth','verified']);
Route::post('/profile/{user}', 'App\Http\Controllers\UserController@update')->name('profileupdate');
Route::get('/articles', 'App\Http\Controllers\front\ArticleController@index')->name('articles');
Route::get('/article/{article}', 'App\Http\Controllers\front\ArticleController@show')->name('article');
Route::post('/comment/{article}', 'App\Http\Controllers\front\CommentController@store')->name('comment.store');




Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/register', [App\Http\Controllers\auth\RegisterController::class, 'showRegisterationForm'])->name('register');
Route::get('/login', [App\Http\Controllers\auth\LoginController::class, 'showLoginForm'])->name('login');

Route::group(['prefix' => 'laravel-Filemanager', 'middleware' => ['web', 'auth']], function () {

    \UniSharp\LaravelFilemanager\Lfm::routes();

});
Route::group(['middleware' => 'auth'], function () {
    Route::get('/laravel-Filemanager', '\UniSharp\LaravelFilemanager\Controllers\LfmController@show');
    Route::post('/laravel-Filemanager/upload', '\UniSharp\LaravelFilemanager\Controllers\UploadController@upload');
 });