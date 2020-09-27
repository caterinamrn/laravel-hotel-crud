<?php

use Illuminate\Support\Facades\Route;

Route::get('/',function(){return view('home');}) -> name('home');

Route::get('/stanze', 'StanzaController@index') -> name('stanze-index');
Route::get('/stanze/{id}', 'StanzaController@show') -> name('stanza-show');
