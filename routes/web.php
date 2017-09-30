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

Route::get("/logout", "Auth\LoginController@logout");
Auth::routes();

Route::group(['middleware' => ['auth']], function ()
{
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/', 'HomeController@index');

    Route::resource('/child-health-records', 'ChildHealthRecordController');
});

Route::group(['middleware' => ['auth'], 'prefix' => 'sales', 'namespace' => 'Sales'], function ()
{
    Route::get('sales-journal/datatable', 'SalesJournalController@datatable');
    Route::resource('sales-journal', 'SalesJournalController');
});


Route::get('/test', function()
{
    return view("skarla-tester");
});


