<?php

Route::get('/', 'Controller@index');
Route::get('/mantenimiento', 'Controller@mantenimiento');

/*==== Registro de Actividades Influencers ====*/
Route::get('/regactivinf/{associateid}', 'regactivinf\regActivInfController@index');

/*==== Registro de FINANZAS SALUDABLES ====*/
Route::get('/finszsaludable/{associateid}', 'PropSaludable\PropSaludableController@index');
Route::get('/finszsalstatuspers/{associateid}', 'PropSaludable\PropSaludableController@finszSalStatusPers');
Route::get('/finszsalsrepo/{associateid}', 'PropSaludable\PropSaludableController@finszsalRepo');