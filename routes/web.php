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


Route::get('/',[
    'uses'=>'HomeController@index',
    'as'=>'index'
]);
Route::get('/formula',[
    'uses'=>'HomeController@formula',
    'as'=>'formula'
]);
Route::get('/tekhnik',[
    'uses'=>'HomeController@tekhnik',
    'as'=>'tekhnik'
]);

Route::get('/jenis_mineral',[
    'uses'=>'HomeController@jenis_mineral',
    'as'=>'jenis_mineral'
]);

Route::get('/jenis_mineral/{id}',[
    'uses'=>'HomeController@jenis_mineral_detail',
    'as'=>'jenis_mineral_detail'
]);

Route::get('/tekhnik_continue/{id}',[
    'uses'=>'HomeController@tekhnik_continue',
    'as'=>'tekhnik_continue'
]); 

Route::get('/sumber_mineral',[
    'uses'=>'HomeController@sumber_mineral',
    'as'=>'sumber_mineral'
]); 

Route::get('/sumber_detail/{id}',[
    'uses'=>'HomeController@sumber_detail',
    'as'=>'sumber_detail'
]); 

Route::get('formula/calclaktasi', [
    'as'   => 'ajax.calclaktasi',
    'uses' => 'HomeController@AjaxCalcLaktasi'
]);

Route::post('formula/calculate',[
    'as' => 'calculate.pakan',
    'uses' => 'HomeController@calculate'
]);

Route::get('premix/ingredientlist',[
    'as' => 'ingredientlist',
    'uses' => 'HomeController@ingredient'
]);

Route::get('/premix/ingredientlist_t', 'HomeController@ingredient_t')->name('ingredientlist_t');
Route::get('/premix/ingredientlist_data', 'HomeController@ingredient_data')->name('ingredientlist_data');

Route::get('premix/calculate_premix',[
    'as'=> 'calculatepremix',
    'uses'=> 'HomeController@calculate_premix'
]);

Route::get('/totalpremix',[
    'uses'=>'HomeController@totalpremix',
    'as'=>'totalpremix'
]);

Route::get('/getcontohpremix/{id}', 'ListContohPremixController@get');
Route::get('/getpremixes', 'HomeController@get_premixes');