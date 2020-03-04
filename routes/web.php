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
Route::get('/search_draft_shift', 'ShiftController@search_draft_shift');
Route::get('/make_draft_shift', 'ShiftController@make_draft_shift');
Route::get('/company_setting', 'AdminController@company_setting');
Route::get('/employee_setting', 'AdminController@employee_setting');
Route::post('/employee_setting', 'AdminController@employee_setting_send');
Route::get('/eachday_calendar', 'Calendar_formController@getCalendarDates');
Route::get('/main_menu', 'AdminController@main_menu');
Route::get('/saystem_setting', 'AdminController@saystem_setting');
Route::get('/saystem_setting__company_setting', 'AdminController@saystem_setting__company_setting');
Route::post('/saystem_setting__company_setting', 'AdminController@saystem_setting__company_setting__post');
Route::get('/saystem_setting__employee_setting', 'AdminController@saystem_setting__employee_setting');
Route::get('/', 'TopController@top');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
