<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\ContactController; // Always call your controllers 
use App\Http\Controllers\PagesController;

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

Route::get('/', [PagesController::class, 'getHome'])->name('home');

Route::get('/contact', [PagesController::class, 'getContact'])->name('contact');

Route::get('/about', [PagesController::class, 'getAbout'])->name('about');

Route::post('contact/submit', [ContactController::class, 'submit'])->name('contact-form-submit'); //naming a route and using it on a form

Route::get('contact/messages',[ContactController::class, 'getMessages'])->name('get-messages');