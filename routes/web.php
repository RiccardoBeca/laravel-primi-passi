<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {

    $data = [

        'user' => 'Moccariol Bocattins',
        'favourite_colors' => ['orange','black','purple'],
        'occupation' => 'scammer',

    ];
    return view('home', $data);
})->name('home');


Route::get('/about', function() {

    return view('about');

})->name('about');

Route::get('/contact_us', function() {

    return view('contact_us');

})->name('contact_us');
