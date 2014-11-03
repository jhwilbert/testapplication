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
Route::get('/contato', array('uses' => 'PagesController@contact', 'as' => 'contact'));
Route::get('/newsfeed', array('uses' => 'NewsfeedController@index', 'as' => 'newsfeed'));

Route::get('/project/{id}', array('uses' => 'ProjectController@show', 'as' => 'show_project'));
Route::get('/solution/{id}', array('uses' => 'SolutionController@show', 'as' => 'show_solution'));

/* english routes */

Route::get('/en', array('uses' => 'HomeController@index_en', 'as' => 'home_en'));
Route::get('/the-company', array('uses' => 'PagesController@the_company', 'as' => 'the_company_en'));
Route::get('/projects', array('uses' => 'ProjectController@index', 'as' => 'projects_en'));
Route::get('/solutions', array('uses' => 'SolutionController@index', 'as' => 'solutions_en'));
Route::get('/clients', array('uses' => 'ClientController@index', 'as' => 'clients_en'));
Route::get('/contact', array('uses' => 'PagesController@contact', 'as' => 'contact_en'));
Route::get('/newsfeed-en', array('uses' => 'NewsfeedController@index', 'as' => 'newsfeed_en'));

Route::get('/project/{id}', array('uses' => 'ProjectController@show', 'as' => 'show_project_en'));
Route::get('/solution/{id}', array('uses' => 'SolutionController@show', 'as' => 'show_solution_en'));

/* admin routes */

Route::get('admin', array('uses' => 'Admin\AdminController@index', 'as' => 'admin_index'));
Route::get('admin/login', array('uses' => 'Admin\AdminController@login', 'as' => 'login'));
Route::post('admin/login', array('uses' => 'Admin\AdminController@do_login'));
Route::get('admin/logout', array('uses' => 'Admin\AdminController@logout', 'as' => 'logout'));
Route::resource('admin/usuarios', 'Admin\UserController');

Route::resource('admin/projects', 'Admin\ProjectController');
Route::resource('admin/projects.images', 'Admin\ProjectImageController', array('except' => array('index')));
Route::resource('admin/megabanners', 'Admin\MegabannerController');