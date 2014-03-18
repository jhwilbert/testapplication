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

Route::get('admin/login', array('uses' => 'Admin\AdminController@login', 'as' => 'login'));
Route::post('admin/login', array('uses' => 'Admin\AdminController@do_login'));
Route::get('admin/logout', array('uses' => 'Admin\AdminController@logout', 'as' => 'logout'));
Route::get('admin/', array('uses' => 'Admin\AdminController@index', 'as' => 'admin_index'));
Route::get('admin/users', array('uses' => 'Admin\AdminController@users', 'as' => 'admin_users'));

Route::resource('admin/projects', 'Admin\ProjectController');
Route::resource('admin/projects.images', 'Admin\ProjectImageController', array('except' => array('index')));