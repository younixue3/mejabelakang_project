<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\PublicationController;
use App\Http\Controllers\HeroController;
use App\Http\Controllers\PublicationIndexController;
use App\Http\Controllers\NewsIndexController;

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
Route::get('page/news/{id}', [HomeController::class, 'show'])->name('page.news');
Route::get('page/gallery/{id}', [HomeController::class, 'showgallery'])->name('page.gallery');
Route::get('page/publication/{id}', [HomeController::class, 'showpublication'])->name('page.publication');
Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/publication', [PublicationIndexController::class, 'index'])->name('publication.index');
Route::get('/news', [NewsIndexController::class, 'index'])->name('news.index');

Route::group(['prefix' => 'dashboard', 'middleware' => 'auth'], function() {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    // News
    Route::get('/news/add', [NewsController::class, 'create'])->name('news.add');
    Route::get('/news/edit/{id}', [NewsController::class, 'edit'])->name('news.edit');
    Route::put('/news/update/{id}', [NewsController::class, 'update'])->name('news.update');
    Route::post('/news/destroy', [NewsController::class, 'destroy'])->name('news.destroy');
    Route::post('/news/store', [NewsController::class, 'store'])->name('news.store');
    Route::get('/news', [NewsController::class, 'index'])->name('news');
    // Gallery
    Route::get('/gallery/add', [GalleryController::class, 'create'])->name('gallery.add');
    Route::get('/gallery/edit/{id}', [GalleryController::class, 'edit'])->name('gallery.edit');
    Route::put('/gallery/update/{id}', [GalleryController::class, 'update'])->name('gallery.update');
    Route::post('/gallery/destroy', [GalleryController::class, 'destroy'])->name('gallery.destroy');
    Route::post('/gallery/store', [GalleryController::class, 'store'])->name('gallery.store');
    Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery');
    // Publication
    Route::get('/publication/add', [PublicationController::class, 'create'])->name('publication.add');
    Route::get('/publication/edit/{id}', [PublicationController::class, 'edit'])->name('publication.edit');
    Route::put('/publication/update/{id}', [PublicationController::class, 'update'])->name('publication.update');
    Route::post('/publication/destroy', [PublicationController::class, 'destroy'])->name('publication.destroy');
    Route::post('/publication/store', [PublicationController::class, 'store'])->name('publication.store');
    Route::get('/publication', [PublicationController::class, 'index'])->name('publication');
    // Hero
    Route::post('/hero/destroy', [HeroController::class, 'destroy'])->name('hero.destroy');
    Route::post('/hero/store', [HeroController::class, 'store'])->name('hero.store');
    Route::get('/hero', [HeroController::class, 'index'])->name('hero');
});
// Route::get("/logout", function() {
Route::get('/logout', function() {
    Auth::logout();
    return redirect('login');
});
//     return Auth::logout();
// });
