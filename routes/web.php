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
Route::get('/blog/{slug}','NewsController@show');

Route::get('/lihat-team-perdivisi','AboutController@lihat_team')->name('lihat-team-perdivisi');

Route::get('/products/security','ProductsController@security');
Route::get('/products/infrastructure','ProductsController@it');
Route::get('/products/prima-village','ProductsController@village');
Route::get('/products/prima-school','ProductsController@school');
Route::get('/products/prima-meet','ProductsController@meet');
Route::get('/products/prima-development','ProductsController@dev');
Route::get('/products/smart-campus','ProductsController@campus');

Auth::routes();
Route::get('/admin', 'Admin\AuthController@index')->name('admin');
Route::post('/postLogin','Admin\AuthController@postLogin')->name('login');
Route::post('/logout', 'Admin\AuthController@logout')->name('logout');

//article management
Route::get('/admin/articles','Admin\ArticleController@index')->name('articles.management')->middleware('auth');
Route::get('/admin/articles/add','Admin\ArticleController@create')->middleware('auth');
Route::post('/admin/articles/submit','Admin\ArticleController@store')->name('article.submit')->middleware('auth');
Route::delete('/admin/articles/delete/{id}', 'Admin\ArticleController@destroy')->middleware('auth');