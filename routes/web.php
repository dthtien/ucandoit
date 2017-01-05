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
//lazada
Route::get('save-adi-prd','ProductsController@getAdidlzdProduct');
Route::get('save-pala-prd','ProductsController@getPalalzdProduct');
Route::get('save-nike-prd','ProductsController@getNikelzdProduct');
Route::get('save-conv-prd','ProductsController@getConvlzdProduct');
Route::get('save-asic-prd','ProductsController@getAsiclzdProduct');
Route::get('save-nbl-prd','ProductsController@getNbllzdProduct');
Route::get('save-puma-prd','ProductsController@getPumalzdProduct');
//adayroi
Route::get('save-tesadr-prd','ProductsController@getAdayroi');
Route::get('view','ProductsController@viewProducts');