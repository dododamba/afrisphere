<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::group(['middleware' => ['app.cors', 'json.response']], function () {

    Route::post('/login', 'Auth\ApiAuthController@login')->name('login.api');
    Route::post('/contact-message/store','API\\v1\\ContactController@store');

    Route::middleware('auth:api')->group(function () {

        Route::apiResource('caracteristiques-pompes','CaracteristiquePompeController');
        Route::apiResource('maintenances','MaintenanceController');
        Route::apiResource('operations','OperationController');
        Route::apiResource('pompes','PompeController');
        Route::apiResource('sites','SiteController');
        Route::apiResource('type-operations','TypeOperationController');
        Route::get('logs','API\\v1\\LogsController@index');
        Route::get('users','API\\v1\\UsersController@index');
        Route::post('logout', 'Auth\\ApiAuthController@logout');
        Route::post('user-add-technicien','API\\v1\\UsersController@storeTech');

    
    });
});
