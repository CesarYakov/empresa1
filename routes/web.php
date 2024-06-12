<?php
$servicios=[/*
    ['titulo'='Servicio 01'],
    ['titulo'='Servicio 02'],
    ['titulo'='Servicio 03'],
    ['titulo'='Servicio 04'],
    ['titulo'='Servicio 05'],*/
    ];

use Illuminate\Support\Facades\Route;
Route::view('/','home')->name('home');
Route::view('nosotros','nosotros')->name('nosotros');

Route::view('servicios','ServiciosController@index')->name('servicios.index');
Route::view('servicios/{id}','ServiciosController@show')->name('servicios.show');

##Route::get('servicios', "App\Http\Controllers\ServiciosController@index")->name('servicios');
Route::view('contacto','contacto')->name('contacto');
Route::view('contacto','ContactoController@store');
