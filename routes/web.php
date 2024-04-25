<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

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

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/blog', function () {
    return view('blog');
})->name('blog');


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

