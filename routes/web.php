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

Route::get('/selTopCat/{topCatId}/selCat/{catId}', 'PublicController@showCatalog3')
        ->name('catalog3');

Route::get('/selTopCat/{topCatId}', 'PublicController@showCatalog2')
        ->name('catalog2');

Route::get('/publiccontroller', 'PublicController@showCatalog1')
        ->name('catalog1');

Route::view('/where', 'where')
        ->name('where');

Route::view('/who', 'who')
        ->name('who');

Route::view('/accedi', 'accedi')
->name('accedi');

Route::view('/annunci', 'annunci')
->name('annunci');

Route::get('/listacitta', 'CittaController@showListaCitta1')
->name('listacitta1');

Route::view('/', 'home')
->name('home');

Route::view('/homelocatore', 'homelocatore')
->name('homelocatore');
Route::view('/alloggilocatore', 'alloggilocatore')
->name('alloggilocatore');
Route::view('/messaggilocatore', 'messaggilocatore')
->name('messaggilocatore');
Route::view('/profilolocatore', 'profilolocatore')
->name('profilolocatore');

Route::view('/homelocatario', 'homelocatario')
->name('homelocatario');
Route::view('/alloggilocatario', 'alloggilocatario')
->name('alloggilocatario');
Route::view('/messaggilocatario', 'messaggilocatario')
->name('messaggilocatario');
Route::view('/profilolocatario', 'profilolocatario')
->name('profilolocatario');
Route::view('/offri', 'offri')
->name('offri');

Route::get('/admin', 'AdminController@index')
->name('admin');

Route::get('/admin/newproduct', 'AdminController@view_registrati')
->name('registrati');

Route::post('/admin/newproduct', 'AdminController@registrati')
->name('inserimento_dati');

Route::post('/login', 'AdminController@login')
->name('login');

Route::get('/viewLogin', 'AdminController@viewLogin')
->name('viewLogin');

Route::get('/showAnnunci/{citta}', 'CittaController@showAnnuncio')
->name('showAnnuncio');


Route::view('/homelocatario11', 'homelocatario11')
->name('homelocatario11');