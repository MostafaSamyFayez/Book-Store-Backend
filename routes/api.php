<?php

use Illuminate\Http\Request;
Route::post('createuser','ApiController@createuser');
Route::post('loginuser','ApiController@loginuser');
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::middleware('apiuser')->group(function(){

    Route::get('/books','BookController@books');    
    
    });

Route::middleware('apiadmin')->group(function(){
    
    Route::get('/authors','AuthorController@authors');
    
    Route::get('/createbook','ApiController@createbook');
    Route::get('/createlibrary','ApiController@createlibrary');
    Route::get('/createauthor','ApiController@createauthor'); 
        
    });

