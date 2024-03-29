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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin', function(){
    return 'you are admin !';
})->middleware(['auth','auth.admin']);



Route::namespace('Admin')->prefix('admin')->middleware(['auth','auth.admin'])->name('admin.')->group(function(){
    Route::resource('/users', 'UserController');
});
Route::namespace('Admin')->prefix('admin')->middleware(['auth','auth.admin'])->name('admin.')->group(function(){
    Route::resource('/visites', 'VisiteController');
});
Route::namespace('Visiteur')->prefix('visiteur')->middleware(['auth','auth.visiteur'])->name('visiteur.')->group(function(){
    Route::resource('/users', 'VisiteurController');
});
Route::namespace('Visiteur')->prefix('visiteur')->middleware(['auth','auth.visiteur'])->name('visiteur.')->group(function(){
    Route::resource('/praticiens', 'PraticienController');
});