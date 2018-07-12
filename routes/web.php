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
    return view('frontend.welcome');

});
Route::get('/haqqimizda', function () {
    return view('frontend.about-page');

});
Route::get('/elaqe',function (){

    return view('frontend.contact');
});


Route::group(['prefix' => 'restoranlar'], function()
{
    Route::get('/',function (){

        return view('frontend.restaurants');
    });
    Route::get('/birRestoran',"FrontEnd@getOneRestaurant" );
    Route::get('/menu/food/{menuId}','FrontEnd@getFoodsByMenuId'); // burda controllere id_ni gonderiem
});