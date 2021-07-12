<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\GalleryController;

// use Auth;

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

// Home Page
Route::get('/', [HomeController::class, 'index'])->name('home');

// News Page
Route::get('page', [PageController::class, 'index'])->name('news');
Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'dashboard', 'middleware' => 'auth'], function() {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/news', [NewsController::class, 'index'])->name('news');
    Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery');
});
// Route::get("/logout", function() {
Route::get('/logout', function() {
    Auth::logout();
    return redirect('login');
});
//     return Auth::logout();
// });
