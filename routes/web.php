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

Route::group(['prefix' => 'test'], function () {
    Route::get('init', function () {
        return "This page was initialed on 26 Jan 2022 <br> Reder time : " . round((microtime(true) - LARAVEL_START), 3) . " s";
    });
});