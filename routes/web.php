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

Route::get('/login', 'PagesController@login');

Route::get('/register', 'PagesController@register');

Route::get('/home', 'PagesController@home');

Route::get('/jobs', 'PagesController@jobs');

Route::get('/notifications', 'PagesController@notifications');

Route::get('/network', 'PagesController@network');

Route::get('/chats', 'PagesController@chats');

Route::get('/profile', 'PagesController@profile');

Route::get('/savedseeds', 'PagesController@savedseeds');

Route::get('/connections', 'PagesController@connections');

Route::get('/peoplefollowing', 'PagesController@peoplefollowing');

Route::get('/groups', 'PagesController@groups');

Route::get('/newsletters', 'PagesController@newsletters');

Route::get('/jobs/saved', 'PagesController@savedjobs');

Route::get('/jobs/applied', 'PagesController@appliedjobs');

Route::get('/shop', 'PagesController@shophome');



