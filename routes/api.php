<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('produtos', 'ProdutoController@index');
Route::get('produtos/{id}', 'ProdutoController@show');
Route::post('produtos', 'ProdutoController@store');
Route::put('produtos/{id}', 'ProdutoController@update');
Route::delete('produtos/{id}', 'ProdutoController@destroy');

Route::PUT('vender/{id}', 'ProdutoController@venderUmProd');
Route::PUT('vender', 'ProdutoController@venderVariosProd');
