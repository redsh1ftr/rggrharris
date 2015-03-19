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
	return Redirect::route('casketIndex', 'all');
});

Route::get('/tesst/2', function()
{
	return View::make('vaults.editlistr');
});

Route::resource('central', 'CentralsController');
Route::model('central', 'Central');

Route::resource('caskets', 'CasketsController');
Route::get('/allcasket/{type}', array('as' => 'casketIndex', 'uses' => 'CasketsController@index'));
Route::get('/somecasket/{type}', array('as' => 'casketSubTypeIndex', 'uses' => 'CasketsController@indexSubtype'));
Route::model('casket', 'Casket');

Route::resource('vaults', 'VaultsController');
Route::model('vault', 'Vault');

Route::resource('administrator', 'AdminsController');
Route::model('admin', 'Admin');

Route::resource('lifes_reflection', 'LifesReflectionsController');
Route::model('lifes_reflection', 'LifesReflection');

Route::resource('flowers', 'FlowersController');
Route::model('flower', 'Flower');

Route::resource('infos', 'InfosController');
Route::model('info', 'Info');

Route::resource('caskettypes', 'CasketTypesController');
Route::model('casket_types', 'CasketType');

Route::resource('casketsubtypes', 'CasketSubTypesController');
Route::model('casketsubtype', 'CasketSubType');

Route::resource('caskettypesindex', 'CasketTypeIndicesController');
Route::model('casket_types_index', 'CasketTypeIndex');