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

Route::get('/post','PosteventController@index')->name('postevent');


Route::post('/save','ConfirmeventController@submit');

Route::post('/update','ConfirmeventController@update');

Route::get('/browse','BrowseController@browse')->name('browse');

Route::get('/events/{id}','BrowseController@showthisevent')->name('showevent');

Route::get('deleteevent/{id}','ConfirmeventController@deletethisevent')->name('deleteevent');

Route::get('editevent/{id}','ConfirmeventController@editthisevent')->name('editevent');

Route::get('showupload','ConfirmeventController@showupload')->name('showupload');
Route::post('upload','ConfirmeventController@upload')->name('upload');
Route::post('/search', 'BrowseController@search');

Route::get('/contactus', function () {
    return view('contactus');
});

Route::get('/about', function () {
    return view('aboutus');
});


Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    return "Cache is cleared";
});