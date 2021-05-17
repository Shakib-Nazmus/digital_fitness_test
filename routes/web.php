<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'FrontEnd\HomeController@index')->name('frontEnd.home');
/*--------------------user registtation start-------------------------*/
Route::get('/user-info', 'FrontEnd\RegistrationController@reg')->name('user.info');
Route::post('/user-info/store', 'FrontEnd\RegistrationController@regStore')->name('user.info.store');
/*--------------------user registtation end-------------------------*/

/*--------------------company information start-------------------------*/
Route::get('/company-info', 'FrontEnd\CompanyController@index')->name('company.info');
Route::post('/company-info/store', 'FrontEnd\CompanyController@store')->name('company.info.store');
/*--------------------company information end-------------------------*/


Auth::routes();

Route::group(['namespace' => 'BackEnd', 'middleware' => ['auth'] ], function(){

    Route::get('/dashboard', 'HomeController@index')->name('dashboard');

    Route::prefix('profiles')->group(function(){
        Route::get('/view', 'ProfileController@view')->name('profiles.view');
        Route::get('/edit/', 'ProfileController@edit')->name('profiles.edit');
        Route::post('/update/', 'ProfileController@update')->name('profiles.update');
        Route::get('/password/view', 'ProfileController@passwordView')->name('profiles.password.view');
        Route::post('/password/update', 'ProfileController@passwordUpdate')->name('profiles.password.update');
    });


});

