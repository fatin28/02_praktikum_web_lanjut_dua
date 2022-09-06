<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\HomeCompanyController;
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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/', [PageController::class, 'index']); 

// Route::get('/about', [PageController::class, 'about']); 

// Route::get('/articles/{id}', [PageController::class, 'articles']); 

// Route::get('/', [HomeController::class, '__invoke']);

// Route::get('/', [AboutController::class, '__invoke']);

// Route::get('/{id}', [ArticleController::class, '__invoke']);

Route::get('/home', [HomeCompanyController::class, 'home']);

#Route prefix
Route::prefix('category')->group(function () {
    Route::get('{id}', [HomeCompanyController::class, 'product']);
});

Route::get('news/{id?}', [HomeCompanyController::class, 'news']);

#Route prefix
Route::prefix('program')->group(function () {
    Route::get('{id}', [HomeCompanyController::class, 'program']);
});

Route::get('/aboutUs', [HomeCompanyController::class, 'aboutUs']);

Route::resource('contactUs', HomeCompanyController::class);
