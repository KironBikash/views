<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function(){
	return view('welcome');
});


Route::get('food_items', [
		'uses' => 'FoodController@index',
		'as' => 'food_items'
	]);

Route::get('/about_us', [
		'uses' => 'AboutController@index',
		'as' => 'about_us'
	]);

Route::get('/contact', [
		'uses' => 'ContactController@index',
		'as' => 'contact'
	]);

Route::get('/staffs', [
		'uses' => 'StaffController@index',
		'as' => 'staffs'
	]);


Route::resource('admin', 'AdminController@showAdministrators');
Route::get('modify_food', 'AdminController@showFood');
Route::get('modify_stuff', 'AdminController@showStuff');
Route::get('order', 'AdminController@showOrder');

Route::get('signup', 'AuthenticationController@index');
Route::post('signup', 'AuthenticationController@index');
Route::get('signin', 'LoginController@index');
Route::post('signin', 'LoginController@index');

Route::get('contact', 'ContactController@index');
Route::get('staffs', 'StaffController@index');
Route::get('about_us', 'AboutController@index');
Route::get('food_items', 'FoodController@index');

Route::get('editfood', 'FoodController@create');
Route::post('editdfood', 'FoodController@create');