<?php
// Pages
Route::get('/', 'PageController@index');
Route::get('/about', 'PageController@about');
Route::get('/contact', 'PageController@contact');


//Exchange Pages
Route::get('/exchange', 'ExchangeController@exchange');
Route::post('/exchange/submit', 'ExchangeController@submit');
Route::get('/exchange/details', 'ExchangeController@details');

//Update Pages
Route::get('/exchange/{id}/edit', 'ExchangeController@edit');
Route::put('/exchange/{id}', 'ExchangeController@update');

//Delete Pages
Route::get('/exchange/{id}/delete', 'ExchangeController@delete');
Route::delete('/exchange/{id}', 'ExchangeController@destroy');




