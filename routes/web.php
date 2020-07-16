<?php

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

Route::get('/',[
	'as' => 'home_page',
	'uses' => 'Site@home_page',
]);

Route::get('/nos_classes',[
	'as' => 'nosClasse',
	'uses' => 'Site@nosClasses',
]);

Route::get('/detail_cours',[
	'as' => 'detailCours',
	'uses' => 'Site@detailCours',
]);

Route::get('/l_ecole',[
	'as' => 'page_ecole',
	'uses' => 'Site@page_ecole',
]);

Route::get('/emplois',[
	'as' => 'emplois',
	'uses' => 'Site@emplois',
]);

Route::get('/evenement',[
	'as' => 'evenement',
	'uses' => 'Site@evenement',
]);

Route::get('/projets',[
	'as' => 'projets',
	'uses' => 'Site@projet',
]);

Route::get('/cours',[
	'as' => 'cours',
	'uses' => 'Site@cours',
]);


Route::get('/administrateur', [
	'as' => 'administrateur',
	'uses' => 'Admin@index'
]);

Route::get('/formulaire-enseignant', [
	'as' => 'add_master',
	'uses' => 'Admin@add_master'
]);
Route::post('/nouvelle-enseignant', [
	'as' => 'save_master',
	'uses' => 'Admin@save_master'
]);

Route::get('/formulaire-workshop', [
	'as' => 'add_workshop',
	'uses' => 'Admin@add_workshop'
]);

Route::any('/inscription', 'Site@inscription')->name('inscription');
