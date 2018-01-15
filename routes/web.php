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

Route::get('/', 'ItemsController@get')->name('items');
Route::get('/remove/{id}', 'ItemsController@remove')->name('remove');
Route::get('/add', 'ItemsController@add')->name('add');
Route::post('/add', 'ItemsController@addSave')->name('add');
Route::get('/edit/{id}', 'ItemsController@edit')->name('edit');
Route::post('/edit/{id}', 'ItemsController@editSave')->name('edit');
