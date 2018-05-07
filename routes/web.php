<?php
// Pages
Route::get('/', 'PageController@index');
Route::get('/about', 'PageController@about');
Route::get('/contact', 'PageController@contact');
Route::get('/exchange', 'PageController@exchange');
Route::get('/currency', 'CurrencyController@currency');
Route::get('/currency/calculate', 'CurrencyController@calc');
