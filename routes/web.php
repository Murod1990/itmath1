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
use App\Http\Controllers\Darscontrollerr;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MailController;

Route::get('locale/{locale}',function ($locale)
{
    Session::put('locale',$locale);
    return redirect()->back();
});

Route::get('/', function () {
    return view('index');
});

Route::get('/begines','Darscontroller@boshlandi')->name('darslar.index');

Route::get('/phpr001','Darscontroller@php1');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('index');

Route::get('/welcome','PytcController@saq');
Route::post('/sendmail','MailController@build');
Route::get('/php0457','Darscontroller@ozgar');
Route::get('/sintaksis','Darscontroller@sintaksis');
Route::get('/vrable','Darscontroller@orgauvchi');
Route::get('/malumot-turlari','Darscontroller@maltur');
Route::get('/Satrlar-1','Darscontroller@strlar');

Route::get('/email-adres-xabar', function () {
    return view('emali');
});
Route::get('/laravelda-tilli-sayt-qilish', function () {
    return view('tillisayt');
});



