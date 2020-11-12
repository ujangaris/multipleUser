<?php

use Illuminate\Support\Facades\Route;

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

Route::group(['middleware' => ['web']], function () {
    Auth::routes();

});

Route::group(['middleware' => ['web', 'auth']], function () {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/', function(){
        if(Auth()->user()->admin ==1){
            return view('user.home_user');
        }
        return view('user.home_user');
    });
});

Route::get('admin',['middleware' => ['web', 'auth', 'admin'], function () {
    return view('admin.home_admin');
}]);

