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
Route::get('events/home', 'HomeController@index');

Route::get('/post','PosteventController@index')->name('postevent');
Route::get('events/post','PosteventController@index');


Route::post('/save','ConfirmeventController@submit');

Route::post('/update','ConfirmeventController@update');

Route::get('/browse','ConfirmeventController@browse')->name('browse');
Route::get('events/browse','ConfirmeventController@browse');

Route::get('events/{id}',  'ConfirmeventController@showthisevent')->name('showevent');

Route::get('deleteevent/{id}',  'ConfirmeventController@deletethisevent')->name('deleteevent');

Route::get('editevent/{id}',  'ConfirmeventController@editthisevent')->name('editevent');

Route::get('showupload','ConfirmeventController@showupload')->name('showupload');
Route::post('upload','ConfirmeventController@upload')->name('upload');
Route::post('/search', 'ConfirmeventController@search');
Route::get('/aboutus',function () {
    return view('aboutus');
});

Route::get('/contactus',function () {
    return view('contactus');
});
Route::get('/contactus',function () {
    return view('events/contactus');
});