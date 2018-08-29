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
        Route::get('/update_status_account/{id}','AccountController@update_status')->name('update_status_account');
    });

    Route::group(['prefix' => 'group'],function (){
        Route::get('','GroupController@index')->name('list_group');
        Route::get('/update_status_group/{id}','GroupController@update_status')->name('update_status_group');
        Route::get('/detail_group/{id}','GroupController@detail_group')->name('detail_group');
    });

    Route::group(['prefix' => 'question'],function (){
        Route::get('','QuestionController@index')->name('list_question');
        Route::get('/update_status_question/{id}','QuestionController@update_status')->name('update_status_question');
        Route::get('/form_send_mail/{id}','QuestionController@form_send_mail')->name('form_send_mail');
        Route::post('/send_email','QuestionController@send_email')->name('send_mail');
    });

    Route::group(['prefix' => 'article'],function (){
        Route::get('','ArticleController@index')->name('list_article');
        Route::get('/update_status_article/{id}','ArticleController@update_status')->name('update_status_article');
        Route::get('/delete_article/{id}','ArticleController@delete_article')->name('delete_article');
        Route::get('form_article/{id}','ArticleController@form_article')->name('form_article');
        Route::post('action_article','ArticleController@action_article')->name('action_article');
    });
});

Route::group(['namespace' => 'Client'],function (){
    Route::get('','IndexController@index')->name('home');

    Route::post('action_question','IndexController@action_question')->name('action_question');

    Route::get('login_client','AuthController@form_login')->name('login_client');
    Route::post('post_login_client','AuthController@login')->name('post_login_client');
    Route::get('register_client','AuthController@form_register')->name('register_client');
    Route::post('post_register_client','AuthController@register')->name('post_register_client');
});



Route::get('login', 'Admin\LoginController@getLogin')->middleware('CheckLogoutAdmin');
// Route::post('login', 'Admin\LoginController@postLogin');

Route::post('login', [ 'as' => 'login', 'uses' => 'Admin\LoginController@postLogin']);

Route::get('logout', 'Admin\LoginController@getLogout');
Route::get('lockscreen', 'Admin\LoginController@getLockScreen');
Route::post('lockscreen', 'Admin\LoginController@postLockScreen');


Route::get('home',function(){
    return view('guest.home');
});
Route::get('test',function(){
    return view('client.group-4');
});