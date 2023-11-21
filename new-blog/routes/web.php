<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

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

    //$post = DB::table('post')->get();

    return view('home');
})->name('home');

Route::get('/contact', function(){

    return view('contact');

})->name('contact');

Route::get('/about', function(){

    return view('about');

})->name('about');

Route::post('contact/submit', 'ContactController@submit')->name('contact-form-submit'); //naming a route and using it on a form