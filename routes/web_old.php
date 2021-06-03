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

Route::get('/','IndexController@index')->name('index');

Route::get('/contactus','IndexController@contactus')->name('contactus');
Route::get('/products&projects','IndexController@products_projects')->name('products_projects');
Route::get('/privacy-policy','IndexController@privacy_policy')->name('privacy_policy');

Route::get('/about/greeting','AboutController@greeting')->name('greeting');
Route::get('/about/profile','AboutController@profile')->name('profile');
Route::get('/about/clients&partners','AboutController@clients_partners')->name('clients_partners');

Route::get('/blog','NewsController@index')->name('news');

Route::get('/lihat-team-perdivisi','AboutController@lihat_team')->name('lihat-team-perdivisi');

Auth::routes();
Route::get('/admin', 'Admin\AuthController@index')->name('admin');
Route::post('/postLogin','Admin\AuthController@postLogin');
