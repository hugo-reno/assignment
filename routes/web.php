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

Route::get('/', function () {
    return view('welcome');
});


Route::get('index', function () {
    return view('index');
});


Route::get('loginSignup', function () {
    return view('loginSignup');
});


Route::get('login', function () {
    return view('login');
});

Route::get('map', function () {
    return view('map');
});


Route::get('eAdmin', function () {
    return view('eAdmin');
});


Route::get('contact', function () {
    return view('contact');
});


Route::get('about', function () {
    return view('about');
});


route::get ('index','informationController@index');



route::post('loginSignup','informationController@store');
//route::get('loginSignup/submit','informationController@login');

route::post('login','informationController@login');
route::get ('map','informationController@map');

route::get ('eAdmin','informationController@eAdmin');


route::get ('eAdmin','informationController@billCalculation');


Route::get('billTesting', function () {
    return view('billTesting');
});


route::get ('billTesting','informationController@billCalculation');



Route::get('bank', function () {
    return view('bank');
});


route::get ('bank','informationController@bankData');


route::get ('\bank\submit','informationController@bankAmount');
