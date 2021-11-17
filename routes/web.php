<?php


Route::get('/series', 'SeriesController@index');
Route::get('/series/adicionar', 'SeriesController@adicionar');
Route::post('/series/adicionar', 'SeriesController@store'); //store porque é para salvar
