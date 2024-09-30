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

Route::get('hello/', function () {
    echo 'Hello World!';
});

Route::get('hello/{name}', function($name){
    echo 'Hello ' . $name . '!';
});

Route::view('form', 'form');

Route::post('hello', function(){
    echo 'Created a Item successfully';
});

Route::put('hello/', function () {
    echo 'Updated an Item!';
});

Route::delete('hello/', function () {
    echo 'Deleted an Item!';
});