<?php

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

Route::get('/', function () {
    return view('child');
});
Route::get('/home', function () {
    return view('welcome', ['name' => 'Ximena', 'records' => ['Record 1']]);
});
Route::get('/child', function () {
    return view('child');
});
