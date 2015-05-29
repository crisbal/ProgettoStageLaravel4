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

//Route::get('/beta', 'StageController@beta');
Route::get('/home', 'StageController@index');
Route::get('/', function()
{
    		return View::make("login");
});

Route::get('/progetto', 'StageController@mostraNuovoProgetto');
Route::post('/progetto', 'StageController@faiNuovoProgetto');

Route::get('/progetto/{id}', 'StageController@mostraStage');

Route::get('/studenti', 'StudentiController@mostraStudenti');
Route::get('/studente/{id}', 'StudentiController@mostraSpecifico');

Route::get('/aziende', 'AziendeController@mostraAziende');
Route::get('/aziende/{id}', 'AziendeController@mostraSpecifica');

Route::group(array('prefix' => 'documento'), function()
{
    Route::get('/progettoFormativo/{stageId}/{studenteId}', 'DocumentiController@faiDownloadProgettoFormativo');
    Route::get('/convenzione/{stageId}/{studenteId}', 'DocumentiController@faiDownloadConvenzione');

    Route::get('/progetto/{stageId}', 'StageController@faiArchiviaProgetto');

});

Route::group(array('prefix' => 'api'), function()
{

    Route::get('azienda/{idAzienda}', 'ApiController@mostraAzienda');
    Route::get('tutor/{idTutor}', 'ApiController@mostraTutor');
    Route::get('studente/{idTutor}', 'ApiController@mostraStudente');
});

Route::group(array('prefix' => 'amministrazione'), function()
{
	Route::get('/', 'AmministrazioneController@menu');
    Route::get('/aggiungiClasse', 'AmministrazioneController@mostraCreaClasse');
	Route::post('/aggiungiClasse', 'AmministrazioneController@faiCreaClasse');

	Route::get('/aggiungiAziende', 'AmministrazioneController@mostraCreaAziende');
	Route::post('/aggiungiAziende', 'AmministrazioneController@faiCreaAziende');

	Route::get('/azienda/{idAzienda}/modifica', 'AziendeController@modificaAzienda');
	Route::post('/azienda/{idAzienda}/modifica', 'AziendeController@faiModificaAzienda');
	
	Route::get('/azienda/aggiungi', 'AziendeController@mostraNuovaAzienda');
	Route::post('/azienda/aggiungi', 'AziendeController@faiNuovaAzienda');	

	Route::get('/azienda/{idAzienda}/elimina', 'AziendeController@eliminaAzienda');

	Route::get('/studente/{idStudente}/modifica', 'StudentiController@mostraModificaStudente');
	Route::post('/studente/{idStudente}/modifica', 'StudentiController@faiModificaStudente');
	
});