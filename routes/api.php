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

Route::get('todos', 'Todo\TodoController@index');

Route::get('todos', 'Todo\TodoController@index', ['middleware' => 'cors', function()
{
    return \Response::json(\App\TodoController::with('id', 'label'));
}]);

//Route::get('breweries', ['middleware' => 'cors', function()
//{
//    return \Response::json(\App\Brewery::with('beers', 'geocode')->paginate(10), 200);
//}]);