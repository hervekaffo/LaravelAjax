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

// page de demarrage de l'application
Route::get('/','TestController@loaddata')->name('home');

// afficher le formulaire d'ajout
Route::get('/add','TestController@addForm')->name('showAddForm');

// enregistrer un nouvel element
Route::post('/addItem','TestController@store')->name('StoreInDB');

//
Route::get('/ajax','TestController@ajax');
