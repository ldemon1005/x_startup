<?php
use \Illuminate\Support\Facades\Route;
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

Route::group(['namespace' => 'Admin','middleware' => 'CheckLoginAdmin','prefix' => 'admin'],function (){
    Route::get('','IndexController@index')->name('admin');
    Route::group(['prefix' => 'account'],function (){
        Route::get('','AccountController@index')->name('list_user');
        Route::get('/update_status/{id}','AccountController@update_status')->name('update_status');
    });
});




Route::get('login', 'Admin\LoginController@getLogin')->middleware('CheckLogoutAdmin');
// Route::post('login', 'Admin\LoginController@postLogin');

Route::post('login', [ 'as' => 'login', 'uses' => 'Admin\LoginController@postLogin']);

Route::get('logout', 'Admin\LoginController@getLogout');
Route::get('lockscreen', 'Admin\LoginController@getLockScreen');
Route::post('lockscreen', 'Admin\LoginController@postLockScreen');
