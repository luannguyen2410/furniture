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

Route::get('/admin/dashboard','Login@dashboard')->middleware('First');

Route::get('/admin/user','UserController@index')->middleware('adminRole');
Route::post('/admin/user/view','UserController@show')->middleware('adminRole');
Route::post('/admin/user/current/view','UserController@currentShow')->middleware('userRole');
Route::post('/admin/user/current/change','UserController@currentChange')->middleware('userCudRole');
Route::post('/admin/user/current/edit','UserController@currentEdit')->middleware('userCudRole');
Route::post('/admin/user/search','UserController@search')->middleware('adminRole');
Route::post('/admin/user/edit','UserController@edit')->middleware('adminCudRole');
Route::post('/admin/user/delete','UserController@destroy')->middleware('adminCudRole');
Route::post('/admin/user/create','UserController@insert')->middleware('adminCudRole');
Route::post('/admin/user/change','UserController@change')->middleware('adminCudRole');

Route::get('/admin/product','ProductController@index')->middleware('userRole');
Route::post('/admin/product/view','ProductController@show')->middleware('userRole');
Route::post('/admin/product/search','ProductController@search')->middleware('userRole');
Route::post('/admin/product/edit','ProductController@edit')->middleware('userCudRole');
Route::post('/admin/product/delete','ProductController@destroy')->middleware('userCudRole');
Route::post('/admin/product/create','ProductController@insert')->middleware('userCudRole');


Route::get('/admin/login','Login@index');
Route::post('/admin/login/login','Login@login');
Route::get('/admin/logout','Login@logout');

Route::get('role',[
    'middleware' => 'First',
    'uses' => 'TestController@index',
 ]);


 Route::get('/product','ProductViewController@index');
 Route::get('/products','ProductViewController@products');
 Route::post('/product/view','ProductViewController@show');
 Route::get('/contact', function () {
    return view('contact');
});

Route::get('/', 'MainController@index');