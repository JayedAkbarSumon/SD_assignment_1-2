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

Route::get('/', 'HomeController@home');
Route::get('/about', 'HomeController@about');
Route::get('/post', 'HomeController@newpost');

Route::get('/logout', 'HomeController@userLogout');
Route::get('/loginn', 'HomeController@userLogin');

Route::post('/user_login', 'HomeController@login');
Route::get('/services', 'HomeController@services');
//admin

Route::get('/admin','AdminController@admin');

Route::group(['middleware' => 'checkloggedin'], function(){
    Route::get('test', 'HomeController@testpage');
    Route::get('/viewpost', 'HomeController@view_post');
    Route::post('/addpost', 'HomeController@add_post');
});

?>
