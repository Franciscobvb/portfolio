<?php

Route::get('/', 'Controller@index');
Route::get('/mantenimiento', 'Controller@mantenimiento');

/*==== Registro de Actividades Influencers ====*/
Route::get('/regactivinf/{associateid}', 'regactivinf\regActivInfController@index');

/*==== Registro de FINANZAS SALUDABLES ====*/
Route::get('/finzssaludable/{associateid}', 'PropSaludable\PropSaludableController@index');
Route::get('/geteventsfzssal', 'PropSaludable\PropSaludableController@getEventsFzsSal');
Route::get('/finzssalstatuspers/{associateid}', 'PropSaludable\PropSaludableController@finzsSalStatusPers');
Route::get('/finzssalsrepo/{associateid}', 'PropSaludable\PropSaludableController@finzsSalRepo');
Route::get('/getreportfzssal', 'PropSaludable\PropSaludableController@getReportFzsSal');
Route::post('/finszsalsave', 'PropSaludable\PropSaludableController@finszSalSave');