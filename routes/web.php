<?php

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
    return view('index');
});

Route::get('/login', function () {
    return view('back-end.index');
})->name('login');

Route::get('/', 'beritacontroller@index')->name('index1');


Route::get('/detil{id}', 'beritacontroller@show');

Route::get('/register', function () {
    return view('login.login');
})->name('login1');

Route::resource('user', 'UserController');
Route::get('/delete/{id}', 'UserController@destroy');
Route::post('/login', 'logincontroller@index')->name('login');
Route::get('/logout', 'logincontroller@logout')->name('logout');
Route::get('/home', 'HomeController@index')->name('home');
