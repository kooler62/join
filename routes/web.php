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

Auth::routes(['register' => false]);

Route::get('/admin', 'HomeController@index')->name('dash');
Route::resource('/admin/companies', 'Admin\CompanyController', ['as' => 'admin']);

Route::resource('companies', 'CompanyController')->only('index', 'show');
Route::resource('employees', 'EmployeeController')->only('show');