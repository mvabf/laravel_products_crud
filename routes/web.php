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
    return view('index');
});

Route::get('/products', 'ProductController@index');
Route::get('/departments', 'DepartmentController@index');
Route::get('/departments/new', "DepartmentController@create");
Route::post('/departments', 'DepartmentController@store');
Route::get('departments/delete/{id}', 'DepartmentController@destroy');