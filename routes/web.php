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

Route::get('/dashboard', function () {
    return view('dashboard.home');
});

Route::resource('meals', 'MealsController')->middleware('auth');

Route::resource('plantes', 'PlatesController')->middleware('auth');

Route::resource('qutes', 'QutesController')->middleware('auth');
Route::resource('qutesd', 'QuteddeatilsController')->middleware('auth');
Route::resource('customer', 'CustomerController')->middleware('auth');
Route::resource('options', 'OptionController')->middleware('auth');
Route::resource('details', 'QuteddeatilsController')->middleware('auth');
Route::resource('plantesoption', 'MealplatesController')->middleware('auth');
Route::resource('order', 'OrderController')->middleware('auth');

Route::put('order/{id}/status', 'OrderController@updatestat')->middleware('auth');

Route::get('/', 'frontController@index');
Route::get('/mealsvall/{id}', 'frontController@meals');
Route::get('/qutesv', 'frontController@qutes');
Route::get('/qutesv/{id}', 'frontController@qutesdeatails');
Route::get('/make-order/{id}/meal', 'frontController@handelorder_meal');
Route::get('/make-order/{id}/qute', 'frontController@handelorder_qute');
Route::post('/customer-order', 'frontController@requestorder');
Route::get('/ordermake', 'frontController@ordermake');
Auth::routes();

Route::get('/dashboard', 'DashboardController@index');
