<?php

Route::get('/', function () {
    return view('index');
});

/*==== Registro de Actividades Influencers ====*/
Route::get('/regactivinf/{associateid}', 'regactivinf\regActivInfController@index');

/*==== Registro de FINANZAS SALUDABLES ====*/
Route::get('/finzssaludable/{associateid}', 'PropSaludable\PropSaludableController@index');
Route::get('/geteventsfzssal', 'PropSaludable\PropSaludableController@getEventsFzsSal');
Route::get('/finzssalstatuspers/{associateid}', 'PropSaludable\PropSaludableController@finzsSalStatusPers');
Route::get('/finzssalsrepo/{associateid}', 'PropSaludable\PropSaludableController@finzsSalRepo');
Route::get('/getreportfzssal', 'PropSaludable\PropSaludableController@getReportFzsSal');
Route::post('/finszsalsave', 'PropSaludable\PropSaludableController@finszSalSave');
Route::get('/finzsSalDelEvent', 'PropSaludable\PropSaludableController@finzsSalDelEvent');
Route::post('/finzsSalUpdateEvent', 'PropSaludable\PropSaludableController@finzsSalUpdateEvent');
Route::get('/finzsSalMktRepo', 'PropSaludable\PropSaludableController@finzsSalMktRepo');
Route::get('/finzsSalMktRepoData', 'PropSaludable\PropSaludableController@finzsSalMktRepoData');

/*==== UK Volume History Report ====*/
Route::get('volumehistory/{associateid}/{lang}', 'VolumeHistory\VolumeHistoryController@index');

/*==== MyNikkenLatam ====*/
Route::get('/genRadial/{associateid}', 'myNikkenLatam\myNikkenLatamController@genRadial');
Route::get('/getDataGenPers', 'myNikkenLatam\myNikkenLatamController@getDataGenPers');
Route::get('/genLateral', 'myNikkenLatam\myNikkenLatamController@genLateral');