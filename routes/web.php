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

Route::get("/", "App\Http\Controllers\IndexController@showIndex");

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


route::get('/acceuil', function () {
    return view('accueil');
});

Route::get('users', 'App\Http\Controllers\UserController@index')->name('users');

 Route::get('users/create', 'App\Http\Controllers\UserController@create');
 Route::post('users/create', 'App\Http\Controllers\UserController@store');

Route::get('users/edit/{id}', 'App\Http\Controllers\UserController@edit');
Route::post('users/edit/{id}', 'App\Http\Controllers\UserController@update');
Route::delete('users/delete/{id}', 'App\Http\Controllers\UserController@destroy');


Route::get('annonces', 'App\Http\Controllers\AnnonceController@index')->name('annonces');

 Route::get('annonces/create', 'App\Http\Controllers\AnnonceController@create');
 Route::post('annonces/create', 'App\Http\Controllers\AnnonceController@store');

Route::get('annonces/edit/{id}', 'App\Http\Controllers\AnnonceController@edit');
Route::post('annonces/edit/{id}', 'App\Http\Controllers\AnnonceController@update');
Route::delete('annonces/delete/{id}', 'App\Http\Controllers\AnnonceController@destroy');


Route::get('annonces/search', 'App\Http\Controllers\AnnonceController@search')->name('search');





