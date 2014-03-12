<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', array('uses' => 'HomeController@index', 'as' => 'home'));

/* admin routes */

Route::get('admin/login', array('uses' => 'AdminController@login', 'as' => 'login'));
Route::post('admin/login', array('uses' => 'AdminController@do_login'));
Route::get('admin/logout', array('uses' => 'AdminController@logout', 'as' => 'logout'));
Route::get('admin/', array('uses' => 'AdminController@index', 'as' => 'admin_index'));
Route::get('admin/users', array('uses' => 'AdminController@users', 'as' => 'admin_users'));

Route::resource('admin/projects', 'ProjectController');