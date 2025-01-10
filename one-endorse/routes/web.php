<?php
use App\Http\Controllers\blog\NewsLatter\NewsLatterController;
use App\Http\Controllers\blog\BlogController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::view('/about','pages.about');
Route::view('/contact','pages.contact');
Route::view('/blogs','blog.blogs');
Route::view('/faqs','pages.faqs');

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
Route::post('/newsletter/subscribe', [NewsLatterController::class, 'subscribe'])->name('newsletter.subscribe');

require __DIR__.'/auth.php';
