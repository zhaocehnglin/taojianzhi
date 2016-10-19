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

Route::get('/', 'WelcomeController@index');
Route::get('home', 'HomeController@index');
Route::get('index','TjzController@index');
Route::get('indexController','TjzController@indexController');
Route::get('login','TjzController@login');
Route::get('logout','TjzController@logout');
Route::post('login_check','TjzController@login_check');
Route::post('resume_complete/{id}','TjzController@resume_complete');
Route::get('register','TjzController@register');
Route::post('register_check','TjzController@register_check');
Route::get('personal_center','TjzController@personal_center');
Route::get('announce','TjzController@announce');
Route::get('personal_center/{name}','TjzController@gongsi_save');
Route::get('company_announce','TjzController@company_announce');
Route::get('person_announce','TjzController@person_announce');
Route::post('company_announce_check','TjzController@company_announce_check');
Route::get('resume/{id}','TjzController@resume');
Route::get('zhanshi/{id}','TjzController@time');
Route::get('job_buy/{name}','TjzController@job_buy');
Route::get('shopping_car','TjzController@shopping_car');
Route::post('shopping_car_check','TjzController@shopping_car_check');
Route::any('job_check','TjzController@job_check');
Route::get('person_announce/{id}','TjzController@person_announce');
Route::post('person_announce_check/{id}','TjzController@person_announce_check');
Route::get('seller_center','TjzController@seller_center');
Route::post('filtration','TjzController@follow_search');
Route::post('index/filtration','TjzController@follow_search');
Route::get('search','TjzController@search');
Route::post('search_handle','TjzController@search_handle');
Route::get('gongsi/{name}','TjzController@company');
Route::get('company_job_buy/{name}','TjzController@company_job_buy');
Route::get('ceshi','TjzController@ceshi');
//Route::get('http://localhost/shoujiyanzheng/SendSMSDemo.php',function(){});
Route::get('gongsi',function()
{
	return view('taojianzhi/gongsi');
});


Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
