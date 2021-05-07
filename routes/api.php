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
Route::get('/postmani','PytcController@postmani'); // Barcha qiymatlarni olish uchun ishlatiladi
Route::get('/postmani/{id}','PytcController@postmaniedit'); //qiymatning id sini tanlash uchun ishlatiladi
Route::post('/postmani','PytcController@inserta'); // qiymat qo'shish uchun ishlatiladi
Route::put('/postmani/{id}','PytcController@editwer');//qiymatlarni  edit qilish uchun ishlatiladi
Route::delete('/postmani/{id}','PytcController@delateas');