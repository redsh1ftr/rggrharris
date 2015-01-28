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

Route::get('/', function()
{
	return View::make('hello');
});

Route::resource('central', 'CentralsController');
Route::model('central', 'Central');

Route::resource('caskets', 'CasketsController');
Route::model('caskets', 'Casket');

Route::resource('vaults', 'VaultsController');
Route::model('vault', 'Vault');

Route::resource('administrator', 'AdminsController');
Route::model('admin', 'Admin');

Route::resource('vaults', 'VaultsController');
Route::model('vault', 'Vault');

Route::resource('flowers', 'FlowersController');
Route::model('flower', 'Flower');