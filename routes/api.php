<?php

use App\Http\Controllers\EcxelController;
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
Route::get('/postmaniescel','EcxelController@postmaniop');// Ecxel bo'yicha Barcha qiymatlarni olish uchun ishlatiladi
Route::get('/post/{id}','EcxelController@postmanieditwq'); // Ecxel bo'yicha qiymatning id sini tanlash uchun ishlatiladi
Route::post('/postinsertyu','EcxelController@postmaninsert'); // Ecxel bo'yicha qo'llanmalar kiritish
Route::put('/edidtorfd/{id}','EcxelController@exeleditor'); //Ecxel bo'yicha qo'llanmalar editor
Route::delete('/excedelet/{id}','EcxelController@deletecxel'); // Ecxel bo'yicha qo'llamna id bo'yicha o'chiradi
