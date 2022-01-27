<?php

use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Routing\RouteGroup;


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

//calendar
Route::resource('calendar','CalendarController');

//reservations
Route::resource('reservation','ReservationController');
//Route::get('reservation/{reservation}','ReservationController@show');

//routes
Route::resource('route','RouteController');

//route-data
Route::resource('routedata','RouteDataController');

//services
Route::resource('service','ServiceController');

//user-plan
Route::resource('userplan','UserPlanController');

//users
//Route::resource('user','UserController');
Route::get('user/{user}','UserController@getReservate');
