<?php
use App\Http\Controllers\blog\NewsLatter\NewsLatterController;
use App\Http\Controllers\blog\BlogTemp\BlogTemplateController;
use App\Http\Controllers\blog\BlogController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
// google auth
use App\Http\Controllers\Auth\GoogleController;

Route::get('/', function () {
    return view('welcome');
});
Route::view('/about','pages.about');
Route::view('/contact','pages.contact');
Route::view('/blogs','blog.blogs');
Route::view('/faqs','pages.faqs');
Route::view('/terms-condition','term-condition.index');
Route::view('/blog-temp','blog.blog-temp.index');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
// rout 

Route::get('/contact', [ContactController::class, 'showForm'])->name('contact.form');
Route::post('/contact', [ContactController::class, 'submitForm'])->name('contact.submit');
Route::get('/blogs', [BlogController::class, 'index'])->name('blogs.index');
Route::get('/blog-temp', [BlogTemplateController::class, 'index'])->name('blog.temp');
Route::post('/newsletter/subscribe', [NewsLatterController::class, 'subscribe'])->name('newsletter.subscribe');
// google auth
Route::get('auth/google', [GoogleController::class, 'redirectToGoogle'])->name('auth.google');
Route::get('auth/google/callback', [GoogleController::class, 'handleGoogleCallback']);
require __DIR__.'/auth.php';
