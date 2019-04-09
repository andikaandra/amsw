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
Route::get('participant', 'ParticipantController@index');
Route::get('participant/registration', 'ParticipantController@registrationPage');
Route::post('participant/registration/choose-cabang', 'ParticipantController@chooseCabang')->name('choose.cabang');


// amin routes
Route::prefix('admin')->group(function() {
    Route::get('teams', 'ParticipantManagementController@getAllTeams');
});







Route::get('/home', 'HomeController@index')->name('home');

Route::get('email', function() {
    return view('email.index');
});