<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function (){
    return view('index');
});

/***************COMPANIE**************************/
Route::get('/Companie', function(){
    return view('Companie.voirCompanie');
});

Route::get('/Companie/Ajout', function(){
    return view('Companie.ajoutCompanie');
});

Route::get('/Comnpanie/Modifier', function(){
    return view('Companie.modifierCompanie');
});

Route::get('/Companie/Supprimer', function(){
    return view('Companie.supprimerCompanie');
});

/**************GISEMENT***************************/
Route::get('/Gisement', function(){
    return view('/Gisement.voirGisement');
});

Route::get('/Gisement/Ajout', function(){
    return view('Gisement.ajoutGisement');
});

Route::get('Gisement/Modifier', function(){
    return view('Gisement.modifierGisement');
});

Route::get('Gisement/Supprimer', function(){
    return view('Gisement.supprimerGisement');
});