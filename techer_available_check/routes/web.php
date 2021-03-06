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

//Route::get('/', function () {
//    return view('frontEnd.home.home');
//});

Route::get('/',[
   'uses'=>'userController@home',
    'as'=>'home'

]);

//Route::get('/registrationview',function (){
//    return view('frontEnd.registration');
//})->name('registrationview');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


    Route::post('insert',[
        'uses'=>'userController@insert',
        'as'=>'registration'

    ]);
    Route::post('teacherlogin',[
        'uses'=>'userController@login',
        'as'=>'teacherlogin'
    ]);

    Route::get('adminlogout/{email}',[
        'uses'=>'userController@logout',
        'as'=>'adminlogout'
    ]);



