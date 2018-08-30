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

    Route::group(['prefix' => 'career'],function (){
        Route::get('','CareerController@index')->name('list_career');
        Route::get('/update_status_career/{id}','CareerController@update_status')->name('update_status_career');
        Route::get('/delete_career/{id}','CareerController@delete_career')->name('delete_career');
        Route::get('form_career/{id}','CareerController@form_career')->name('form_career');
        Route::post('action_career','CareerController@action_career')->name('action_career');
    });
});

Route::group(['namespace' => 'Client'],function (){
    Route::get('','IndexController@index')->name('home');

    Route::get('profile','AuthController@profile')->name('profile');

    Route::post('update_user','AuthController@update_user')->name('update_user');

    Route::post('action_question','IndexController@action_question')->name('action_question');

    Route::get('change_pass','AuthController@change_pass')->name('change_pass');

    Route::post('action_change_pass','AuthController@action_change_pass')->name('action_change_pass');

    Route::get('login_client','AuthController@form_login')->name('login_client');
    Route::post('post_login_client','AuthController@login')->name('post_login_client');
    Route::get('register_client','AuthController@form_register')->name('register_client');
    Route::post('post_register_client','AuthController@register')->name('post_register_client');

    Route::get('logout_client','AuthController@logout')->name('logout_client');

    Route::group(['prefix' => 'group','middleware' => 'CheckLoginClient'],function (){
       Route::get('','GroupController@index')->name('group');
       Route::get('group_1','GroupController@group_1')->name('group_1');
       Route::get('group_3','GroupController@group_3')->name('group_3');
       Route::get('group_complete','GroupController@group_complete')->name('group_complete');
       Route::post('action_group','GroupController@action_group')->name('action_group');
       Route::post('action_group_5','GroupController@action_group_5')->name('action_group_5');
       Route::post('action_group_3','GroupController@action_group_3')->name('action_group_3');
       Route::post('add_member','GroupController@add_member')->name('add_member');
       Route::get('remove_member/{id}','GroupController@remove_member')->name('remove_member');
    });

    Route::group(['prefix' => 'article'],function (){
        Route::get('','ArticleController@index')->name('list_article_client');
        Route::get('detail/{slug}','ArticleController@detail')->name('detail_client');
    });
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
    return view('client.news.list');
});