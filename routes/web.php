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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'PagesController@loadIndexPage');

Route::get('/search', 'PagesController@loadSearch');
Route::get('/about', 'PagesController@loadAbout');
Route::get('/sign', 'PagesController@loadSign');

Route::get('/daycare_add_window','PagesController@daycare_add_window');
Route::get('/daycare_update_window','PagesController@daycare_update_window');
Route::get('/daycare_delete_window','PagesController@daycare_delete_window');

Route::get('/daycare_profile', 'PagesController@loadDaycareProfile');
Route::get('/daycare_profile/{id}', 'PagesController@loadDaycareProfile');

Route::resource('daycare', 'DaycareController');
Route::post('daycare/update_x', 'DaycareController@update_x');
Route::post('daycare/delete_x', 'DaycareController@delete_x');
Route::post('daycare/search_x', 'DaycareController@search_x');