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
Route::get('/a-empresa', array('uses' => 'PagesController@the_company', 'as' => 'the_company'));
Route::get('/projetos', array('uses' => 'ProjectController@index', 'as' => 'projects'));
Route::get('/solucoes', array('uses' => 'SolutionController@index', 'as' => 'solutions'));
Route::get('/clientes', array('uses' => 'ClientController@index', 'as' => 'clients'));

Route::get('/project/{id}', array('uses' => 'ProjectController@show', 'as' => 'show_project'));
Route::get('/solution/{id}', array('uses' => 'SolutionController@show', 'as' => 'show_solution'));

/* admin routes */

Route::get('admin', array('uses' => 'Admin\AdminController@index', 'as' => 'admin_index'));
Route::get('admin/login', array('uses' => 'Admin\AdminController@login', 'as' => 'login'));
Route::post('admin/login', array('uses' => 'Admin\AdminController@do_login'));
Route::get('admin/logout', array('uses' => 'Admin\AdminController@logout', 'as' => 'logout'));
Route::resource('admin/usuarios', 'Admin\UserController');

Route::resource('admin/projects', 'Admin\ProjectController');
Route::resource('admin/projects.images', 'Admin\ProjectImageController', array('except' => array('index')));
Route::resource('admin/megabanners', 'Admin\MegabannerController');