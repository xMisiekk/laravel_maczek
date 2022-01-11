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

Route::post('dishes','DishController@getDishes');
Route::post('dishes/create','DishController@createDish');
Route::post('dishes/{dish}/update','DishController@updateDish');
Route::post('dishes/{dish}','DishController@getDish');
Route::post('dishes/{dish}/delete','DishController@deleteDish');


Route::post('sets','SetController@getSets');
Route::post('sets/create','SetController@createSet');
Route::post('sets/{set}/update','SetController@updateSet');
Route::post('sets/{set}','SetController@getSet');
Route::post('sets/{set}/delete','SetController@deleteSet');

Route::post('import','ImportController@importTables');
Route::post('export','ExportController@exportTables');



