<?php

use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[HomeController::class,'index'])->name('home.index');
Route::get('/about',[HomeController::class,'about'])->name('home.about');
Route::get('/team',[HomeController::class,'team'])->name('home.team');
Route::get('/services',[HomeController::class,'services'])->name('home.services');
Route::get('/show/services',[HomeController::class,'showServices'])->name('home.show-services');
Route::get('/ourcompany',[HomeController::class,'ourcompany'])->name('home.ourCompany');
Route::get('/Our_Portfolio',[HomeController::class,'OurPortfolio'])->name('home.OurPortfolio');
Route::get('/checkout',[HomeController::class,'checkout'])->name('home.checkout');
Route::get('/legal',[HomeController::class,'legal'])->name('home.legal');
Route::get('/faq',[HomeController::class,'faq'])->name('home.faq');
Route::get('/contact',[HomeController::class,'contact'])->name('home.contact');
Route::get('/blog',[HomeController::class,'blog'])->name('home.blog');
Route::get('/show/blog',[HomeController::class,'showBlog'])->name('home.blog-show');

//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->middleware(['auth', 'verified'])->name('dashboard');
//
//Route::middleware('auth')->group(function () {
//    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
//});
//
//require __DIR__.'/auth.php';
