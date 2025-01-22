<?php
use App\Http\Controllers\blog\NewsLatter\NewsLatterController;
use App\Http\Controllers\blog\BlogTemp\BlogTemplateController;
use App\Http\Controllers\blog\BlogController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
// google auth
use App\Http\Controllers\Auth\GoogleController;
// routes for see the designs of page it will be remove letter 
use App\Http\Controllers\Auth\EmailVerificationController;
use App\Http\Controllers\Auth\Selection_B_C\SelectionBCController;
// routes for dashboard brands and celebrities 
use App\Http\Controllers\Dashboard\BrandsController;
use App\Http\Controllers\Dashboard\CelebritiesController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
// tables filter and profile
use App\Http\Controllers\Tables\Brands\FindCelebrityController;

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
// routes for see the designs of page it will be remove letter 
Route::get('/email-verification', [EmailVerificationController::class, 'index'])->name('auth.email-verification');
Route::get('/selection', [SelectionBCController::class, 'index'])->name('auth.selection-b-c.email-verification');
// routes for dashboard brands and celebrities 
Route::get('/dashboard/brands', [BrandsController::class, 'index'])->name('dashboard.brands');
Route::get('/dashboard/celebrities', [CelebritiesController::class, 'index'])->name('dashboard.celebrities');
// tables filter and profile
Route::prefix('brands')->group(function () {
    Route::get('/find-celebrity', [FindCelebrityController::class, 'index'])->name('celebrity.index');
    Route::get('/celebrity/{id}', [FindCelebrityController::class, 'show'])->name('profile.celebrity.index');
    Route::post('/celebrity/filter', [FindCelebrityController::class, 'filter'])->name('celebrity.filter');
    Route::post('/celebrity/search', [FindCelebrityController::class, 'search'])->name('celebrity.search');
});

// google auth
Route::get('auth/google', [GoogleController::class, 'redirectToGoogle'])->name('auth.google');
Route::get('auth/google/callback', [GoogleController::class, 'handleGoogleCallback']);
require __DIR__.'/auth.php';
