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


//basic usage file blade artinya menfirim argument ke dalam file home.blade.php
Route::get('/', function () {
    return view('home',
        ['name' => 'Cristian Elza', 
        'role' => 'admin',
        'buah' => ['pisang', 'apel','jeruk', 'semangka', 'kiwi']
    ]);
});

//basic usage file blade artinya menfirim argument ke dalam file about.blade.php
Route::get('/about', function() {
    return view('about');
});






