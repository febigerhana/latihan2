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
    return view('welcome');
});

Route::get('/template', function () {
    return view('template.base');
});

Route::get('/detail', function () {
    return view('template.detail');
});

Route::get('/detail2', function () {
    return view('template.detail2');
});
Route::get('/login', function () {
    return view('template.login');
});