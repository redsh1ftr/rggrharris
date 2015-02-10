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
Route::get('/allcasket/{type}', array('as' => 'casketIndex', 'uses' => 'CasketsController@index'));
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