<?php

Route::get('/', function () {
    return view('index');
});

/*==== Registro de Actividades Influencers ====*/
Route::get('/regactivinf/{associateid}', 'regactivinf\regActivInfController@index');

/*==== Registro de FINANZAS SALUDABLES ====*/
Route::get('/finzssaludable/{associateid}', 'PropSaludable\PropSaludableController@index')->name('index');
Route::get('/geteventsfzssal', 'PropSaludable\PropSaludableController@getEventsFzsSal');
Route::get('/finzssalstatuspers/{associateid}', 'PropSaludable\PropSaludableController@finzsSalStatusPers');
Route::get('/finzssalsrepo/{associateid}', 'PropSaludable\PropSaludableController@finzsSalRepo');
Route::get('/getreportfzssal', 'PropSaludable\PropSaludableController@getReportFzsSal');
Route::post('/finszsalsave', 'PropSaludable\PropSaludableController@finszSalSave');
Route::get('/finzsSalDelEvent', 'PropSaludable\PropSaludableController@finzsSalDelEvent');
Route::post('/finzsSalUpdateEvent', 'PropSaludable\PropSaludableController@finzsSalUpdateEvent');
Route::get('/finzsSalMktRepo', 'PropSaludable\PropSaludableController@finzsSalMktRepo');
Route::get('/finzsSalMktRepoData', 'PropSaludable\PropSaludableController@finzsSalMktRepoData');
Route::post('/finzsSalMail', 'PropSaludable\PropSaludableController@finzsSalMail');
Route::get('/finzsSalMailView', 'PropSaludable\PropSaludableController@finzsSalMailView');
Route::get('/internaMailPlatfomr', 'PropSaludable\PropSaludableController@internaMailPlatfomr');

/*==== UK Volume History Report ====*/
Route::get('/volumehistory/{associateid}/{lang}', 'VolumeHistory\VolumeHistoryController@index');
Route::get('/getReportGenUKRetailPV/{associateid}/{periodo}', 'VolumeHistory\VolumeHistoryController@getReportGenUKRetailPV');
Route::get('/getTotalsGenUkRetailPV/{associateid}/{periodo}', 'VolumeHistory\VolumeHistoryController@getTotalsGenUkRetailPV');

/*==== MyNikkenLatam ====*/
Route::get('/genRadial/{associateid}', 'myNikkenLatam\myNikkenLatamController@genRadial');
Route::get('/getDataGenPers', 'myNikkenLatam\myNikkenLatamController@getDataGenPers');
Route::get('/genLateral', 'myNikkenLatam\myNikkenLatamController@genLateral');

/*==== Pre Inscripcion a Influencers ====*/
Route::get('/preInscInfluencer', 'preInscInfluencer\PreInscInfluencerController@index');
Route::get('/preInscInfForm/{lang}/{associateid?}', 'preInscInfluencer\PreInscInfluencerController@preInscInfForm');
Route::get('/preInscInfGetSponsors', 'preInscInfluencer\PreInscInfluencerController@preInscInfGetSponsors');
Route::get('/preInscInfSave', 'preInscInfluencer\PreInscInfluencerController@preInscInfSave');
Route::get('/preInscInfvalidateEmail', 'preInscInfluencer\PreInscInfluencerController@preInscInfvalidateEmail');
Route::post('/preInscInfGenealogy', 'preInscInfluencer\PreInscInfluencerController@preInscInfGenealogy');
Route::post('/preInscInfLoginprocess', 'preInscInfluencer\PreInscInfluencerController@preInscInfLoginprocess');
Route::get('/preInscInfpdf', 'preInscInfluencer\PreInscInfluencerController@preInscInfpdf');
Route::get('/preInscInfValidaSponsor', 'preInscInfluencer\PreInscInfluencerController@preInscInfValidaSponsor');
Route::get('/preInscInfRecoveracount', 'preInscInfluencer\PreInscInfluencerController@preInscInfRecoveracount');
Route::get('/preInscInfReturnInc', 'preInscInfluencer\PreInscInfluencerController@preInscInfReturnInc');
Route::get('/updatePreInsc', 'preInscInfluencer\PreInscInfluencerController@updatePreInsc');
Route::get('/preInscInfGetDepartamento', 'preInscInfluencer\PreInscInfluencerController@preInscInfGetDepartamento');
Route::get('/preInscInfGetProvincias', 'preInscInfluencer\PreInscInfluencerController@preInscInfGetProvincias');
Route::get('/preInscInfGetResindeceOne', 'preInscInfluencer\PreInscInfluencerController@preInscInfGetResindeceOne');
Route::get('/preInscInfGetResindeceTwo', 'preInscInfluencer\PreInscInfluencerController@preInscInfGetResindeceTwo');
Route::get('/preInscInfSponsorGen/{lang}/{associateid}', 'preInscInfluencer\PreInscInfluencerController@preInscInfSponsorGen');

/*==== My Nikken Latam Centro de Inormación ====*/
Route::get('/myNikLatInfoCenterLogin', 'myNikLatInfoCenter\myNikLatInfoCenterController@myNikLatInfoCenterLogin')->name('loginC');
Route::post('/myNikLatInfoCenter', 'myNikLatInfoCenter\myNikLatInfoCenterController@myNikLatInfoCenter');
Route::post('/cenInfMyNkSavePost', 'myNikLatInfoCenter\myNikLatInfoCenterController@cenInfMyNkSavePost');
Route::get('/myNikLatViewPost', 'myNikLatInfoCenter\myNikLatInfoCenterController@myNikLatViewPost');
Route::get('/getLastPost', 'myNikLatInfoCenter\myNikLatInfoCenterController@getLastPost');

/*=== Convocatoria Mayo ===*/
Route::get('/convMayo/{associateid}', 'convMayo\convMayoController@index');
Route::get('/coMyGetGen', 'convMayo\convMayoController@coMyGetGen');
Route::get('/coMyGetGenPla', 'convMayo\convMayoController@coMyGetGenPla');
Route::get('/convMayoRepo', 'convMayo\convMayoController@reporteInterno');
Route::get('/convMayoRepoGetData', 'convMayo\convMayoController@reporteInternoData');

/*=== Simulador Plan de Influencia 3.0 ===*/
Route::get('/influencia30/{associateid?}', 'influencia30\influencia30Controller@influencia30');
Route::get('/simInfGetIntervals', 'influencia30\influencia30ControllerTest@simInfGetIntervals');
Route::get('/simInfGmetBonos', 'influencia30\influencia30Controller@simInfGmetBonos');
Route::get('/simInfPdfView', 'influencia30\influencia30Controller@simInfPdfView');

Route::get('/influencia30Test/{associateid?}', 'influencia30\influencia30ControllerTest@influencia30');
Route::get('/simInfGmetBonosTest', 'influencia30\influencia30ControllerTest@simInfGmetBonos');
Route::get('/simInfPdfViewTest', 'influencia30\influencia30ControllerTest@simInfPdfView');

/*=== Controlador Plan de Influencia ===*/
Route::get('/PlanInfluencia/{associateid}','PlanInfluencia\nikkenController@nikkenChallenge'); 
Route::get('/pdf/{associateid}', 'PlanInfluencia\nikkenController@printPDF');
Route::post('/excel/{associateid}', 'PlanInfluencia\nikkenController@ExcelKinya');
Route::post('/excelKinyaPlus/{associateid}', 'PlanInfluencia\nikkenController@ExcelKinyaPlus');
Route::post('/excelKintai/{associateid}', 'PlanInfluencia\nikkenController@ExcelKintai');
Route::post('/exceljugadores/{associateid}', 'PlanInfluencia\nikkenController@ExcelJugadores');
Route::get('/getInfoInfluencia', 'PlanInfluencia\nikkenController@getInfoInfluencia');
route::get('testEdoCuenta', 'PlanInfluencia\nikkenController@testEdoCuenta');
Route::get('InfContGetPDF', 'PlanInfluencia\nikkenController@printPDF');

/*=== Kingo ===*/
Route::get('pimag_connection/{associateid}', 'Kingo\KingoController@index');
Route::get('pimag_connectionTest/{associateid}', 'Kingo\KingoController@indexTest');
Route::get('pimag_connectionClub/{associateid}', 'Kingo\KingoController@indexTestClub');
Route::get('kgGetRank', 'Kingo\KingoController@getRank');
Route::get('kgGetDetail', 'Kingo\KingoController@kgGetDetail');
Route::get('kgGetordenClub', 'Kingo\KingoController@kgGetordenClub');

/*=== Club Viajeros Premium ===*/
Route::get('viajeros_premium/{associateid}', 'ViajerosPro\ViajerosProController@index');
Route::get('vpGetMonts', 'ViajerosPro\ViajerosProController@vpGetMonts');
Route::get('vpGetRank', 'ViajerosPro\ViajerosProController@vpGetRank');