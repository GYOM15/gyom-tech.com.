<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\NewsletterController;

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
Route::post('/newsletter/register', [NewsletterController::class, 'register'])->name('newsletter.register');

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/blog', function () {
    return view('blog');
})->name('blog');
Route::get('/blog-angular-1', function () {
    return view('blog.introduction-test-driven-development-angular');
})->name('introduction-test-driven-development-angular');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');
Route::post('/contact', [
    ContactController::class, 'send'
])->name('contact.send');


Route::get('/projets', function () {
    return view('projets');
})->name('projets');

Route::get('/services', function () {
    return view('services');
})->name('services');

Route::get('/services-details', function () {
    return view('services-details.services-details');
})->name('services-details');

