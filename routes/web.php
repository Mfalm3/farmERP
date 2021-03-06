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

Auth::routes();


Route::get('/', function () {
    return redirect(route('dashboard'));
});

Route::group(['middleware'=>'auth'],function (){
    /*
    |--------------------------------------------------------------------------
    | Dashboard
    |--------------------------------------------------------------------------
    */
    Route::get('dashboard','HomeController@index')->name('dashboard');
    /*
    |--------------------------------------------------------------------------
    | Profile
    |--------------------------------------------------------------------------
    */
    Route::get('/profile', 'HomeController@profile')->name('profile');
    /*
    |--------------------------------------------------------------------------
    | Seeds Records
    |--------------------------------------------------------------------------
    */
    Route::get('/seed/plant','SeedRecordController@create');
    Route::post('','SeedRecordController@store');

});

