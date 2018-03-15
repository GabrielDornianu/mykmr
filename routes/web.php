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
Auth::routes();

Route::group(['prefix' => 'admin', 'middleware' => 'checkadmin'], function(){
  Route::get('/', [
    'uses' => 'AdminController@index',
    'as'   => 'index'
  ]);

  Route::get('/stiri', [
    'uses' => 'AdminController@index_news',
    'as'   => 'news'
  ]);

  Route::get('/stiri/adauga', [
    'uses' => 'AdminController@create_news',
    'as'   => 'news.create'
  ]);

  Route::post('/stiri/salveaza', [
    'uses' => 'AdminController@store_news',
    'as'   => 'news.store'
  ]);

  Route::get('/stiri/arunca/{id}', [
    'uses' => 'AdminController@dump_news',
    'as'   => 'news.dump'
  ]);

  Route::get('/stiri/editare/{id}', [
    'uses' => 'AdminController@edit_news',
    'as'   => 'news.edit'
  ]);

  Route::post('/stiri/updateaza/{id}', [
    'uses' => 'AdminController@update_news',
    'as'   => 'news.update'
  ]);

  Route::get('/stiri/aruncate', [
    'uses' => 'AdminController@trashed_news',
    'as'   => 'news.trashed'
  ]);

  Route::get('/stiri/distruge/{id}', [
    'uses' => 'AdminController@destroy_news',
    'as'   => 'news.destroy'
  ]);

  Route::get('/stiri/restaureaza/{id}', [
    'uses' => 'AdminController@restore_news',
    'as'   => 'news.restore'
  ]);

  Route::get('/setari', [
    'uses' => 'AdminController@settings',
    'as'   => 'settings'
  ]);

  Route::post('/setari/update', [
    'uses' => 'AdminController@settings_update',
    'as'   => 'settings.update'
  ]);
});

Route::get('/', [
  'uses' => 'FrontendController@index',
  'as'   => 'index'
]);

Route::get('/functionalitati', [
  'uses' => 'FrontendController@functionalitati',
  'as'   => 'functionalitati'
]);

Route::get('/beneficii', [
  'uses' => 'FrontendController@beneficii',
  'as'   => 'beneficii'
]);

Route::get('/pret', [
  'uses' => 'FrontendController@pret',
  'as'   => 'pret'
]);

Route::get('/servicii', [
  'uses' => 'FrontendController@servicii',
  'as'   => 'servicii'
]);

Route::get('/companie', [
  'uses' => 'FrontendController@companie',
  'as'   => 'companie'
]);

Route::get('/contact', [
  'uses' => 'FrontendController@contact',
  'as'   => 'contact'
]);

Route::get('/demo', [
  'uses' => 'FrontendController@demo',
  'as'   => 'demo'
]);
