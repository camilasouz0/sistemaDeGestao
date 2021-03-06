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

/* Route::get('/', function () {
    return view('welcome');
}); */

Route::get('/', ['uses' => 'Controller@homepage']);
Route::get('/cadastro', ['uses' => 'Controller@cadastrar']);

//rota login
Route::get('/login', ['uses' => 'Controller@fazerLogin']);
Route::post('/login', ['as' => 'user.login', 'uses' => 'DashboardController@auth']);
Route::get('/dashboard', ['as' => 'user.dashboard', 'uses' => 'DashboardController@index']);

//Route::get('user', ['as' => 'user.index', 'uses' => 'UsersController@index']);

Route::resource('user', 'UsersController');
Route::resource('instituition', 'InstituitionsController');
Route::resource('group', 'GroupsController');
Route::resource('instituition.product', 'ProductsController');

Route::post('group/{group_id}/user', ['as' => 'group.user.store', 'uses' => 'GroupsController@userStore']);


