<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', 'PageController@index');

Auth::routes();

Route::group(['middleware' => 'auth'], function() {
    Route::get('home', 'HomeController@index')->name('home');
    Route::resource('diagnose', 'DiagnoseController');
    Route::resource('disease', 'DiseaseController');
    Route::resource('symptom', 'SymptomController');

    Route::get('diagnose/{diagnose_id}/symptom/{symptom_id}', 'DiagnoseSymptomController@create');
    Route::post('diagnose/{diagnose_id}/symptom/{symptom_id}', 'DiagnoseSymptomController@store');
});
