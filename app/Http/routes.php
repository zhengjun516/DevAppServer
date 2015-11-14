<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/* 登录模块路由 */
Route::get('auth/login','Auth\AuthController@getLogin');
Route::post('auth/login','Auth\AuthController@postLogin');
Route::get('auth/logout','Auth\AuthController@getLogout');

/* 注册模块路由 */
Route::get('auth/register','Auth\AuthController@getRegister');
Route::post('auth/register','Auth\AuthController@postRegister');

/* 更改密码模块路由 */
// Password reset link request routes...
Route::get('password/email', 'Auth\PasswordController@getEmail');
Route::post('password/email', 'Auth\PasswordController@postEmail');
// Password reset routes...
Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
Route::post('password/reset', 'Auth\PasswordController@postReset');

/* 文章模块路由 */
Route::get('/', 'ArticleController@index');
Route::get('articles/{id}', 'ArticleController@show');
Route::get('article/create', 'ArticleController@create');
Route::post('article/store', 'ArticleController@store');
Route::get('article/edit/{id}', 'ArticleController@edit');
Route::post('article/update', 'ArticleController@update');
Route::get('admin', 'Backend\AdminController@index');

/* 评论模块路由 */
Route::get('compment/', 'CompmentController@index');