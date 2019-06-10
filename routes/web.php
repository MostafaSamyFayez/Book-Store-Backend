<?php

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


    Route::get('/auth/regs','LoginController@registerform');
    Route::post('/auth/regs/save','LoginController@registered');
    Route::get('/auth/login','LoginController@loginform');
    Route::post('/auth/login/save','LoginController@logined');
    
    Route::middleware('is_admin')->group(function(){
    Route::get('helloadmin',function() {return "I'm admin";});
    Route::get('/author/create','AuthorController@create');
    Route::post('/author/store','AuthorController@store');
        
        
    Route::get('/library/create','LibraryController@create');
    Route::post('/library/store','LibraryController@store');
        
    Route::get('/book/create','BookController@create');
    Route::post('/book/store','BookController@store');
        
    Route::get('/librarybook/create','LibraryBookController@create');
    Route::post('/librarybook/store','LibraryBookController@store');

        
        
    });
        
    Route::middleware('is_user')->group(function(){
        
        
    });
    
    Route::get('error500','LoginController@error500');
