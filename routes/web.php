<?php

use Illuminate\Support\Facades\Route;

// Home Route 

// Dashboard Route 
Route::prefix('/dashboard')->group(function (){
    Route::get('/', 'DataController@index');
});