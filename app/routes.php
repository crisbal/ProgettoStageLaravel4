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

Route::get('/', 'StageController@index');
Route::get('/stage', 'StageController@mostraNuovoProgetto');
Route::post('/stage', 'StageController@faiNuovoProgetto');

Route::get('/stage/{id}', 'StageController@mostraStage');

Route::get('/studenti', 'StudentiController@mostraStudenti');
Route::get('/studente/{id}', 'StudentiController@mostraSpecifico');

Route::get('/aziende', 'AziendeController@mostraAziende');
Route::get('/aziende/{id}', 'AziendeController@mostraSpecifica');


Route::get('/documento/progettoFormativo/{stageId}/{studenteId}', 'DocumentiController@generaProgettoFormativo');
Route::get('/documento/convenzione/{stageId}', 'DocumentiController@generaConvenzione');

Route::group(array('prefix' => 'api'), function()
{

    Route::get('azienda/{idAzienda}', 'ApiController@mostraAzienda');

});


Route::get('/riempi', 'ExcelController@riempi');