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



// accounts
Route::get('register', 'Auth\RegisterController@registerPage');
Route::post('register', 'Auth\RegisterController@register');
Route::get('login', 'Auth\LoginController@loginPage');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LogoutController@logout');

// Auth::routes();

Route::get('/', 'HomepageController@index');
Route::get('admin', 'AdminController@index');


Route::get('/participant', 'ParticipantController@index');

Route::prefix('participant')->middleware(['has_verify_email'])->group(function () {
	Route::get('/registration', 'ParticipantController@registrationPage');
	Route::post('/registration/choose-cabang', 'ParticipantRegistrationController@chooseCabang')->name('choose.cabang');
});


Route::get('/home', 'HomeController@index')->name('home');


Route::get('email', function() {
    return view('email.index');
});