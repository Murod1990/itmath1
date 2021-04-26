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

Route::get('/phpone','Darscontroller@php1')->name('darslar.php1');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('index');

Route::get('/welcome', function () {
    return view('welcome');
});
Route::post('/sendmail','MailController@build');