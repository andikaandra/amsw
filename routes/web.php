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
ROute::get('verify/email/{hash}', 'ParticipantController@verifyEmail');

// Auth::routes();

Route::get('/', 'HomepageController@index');
Route::get('admin', 'AdminController@index');


// amin routes
// TODO: add middleware
Route::prefix('admin')->group(function() {
    // team routes
    Route::get('teams', 'ParticipantManagementController@getAllTeams');
    Route::get('teams/{id}/participants', 'ParticipantManagementController@getParticipantsByCompId');
    Route::put('teams/{id}/accept', 'ParticipantManagementController@acceptParticipant');
    Route::put('teams/{id}/decline', 'ParticipantManagementController@declineParticipant');
    Route::get('participant/{id}/files', 'ParticipantManagementController@downloadParticipantFiles');

    // payments
    Route::get('payments/{id}', 'ParticipantManagementController@viewPayment');

    // comps routes
    Route::get('competitions', 'CompetitionManagementController@getAllCompetitions');
    Route::get('competitions/{comp_id}', 'CompetitionManagementController@findCompetition');
    Route::put('competitions/{comp_id}', 'CompetitionManagementController@updateCompetition');

    // registrations
    Route::get('registration/essay', 'AdminController@essayRegistration');
    Route::get('registration/literature-review', 'AdminController@litRevRegistration');
    Route::get('registration/public-poster', 'AdminController@pubPosRegistration');
    Route::get('registration/research-paper', 'AdminController@researchPaperRegistration');
    Route::get('registration/educational-video', 'AdminController@educationalVideoRegistration');

    // submissions
    Route::get('submissions', 'SubmissionController@getAllSubmissions');
    Route::put('submissions/{comp_id}', 'SubmissionController@acceptSubmission');
    Route::get('submissions/{id}', 'SubmissionController@getSubmissionDetails');

    Route::get('verify/submissions/educational-video', 'AdminController@educationalVideoSubmission');
    Route::get('verify/submissions/essay', 'AdminController@essaySubmission');
    Route::get('verify/submissions/literature-review', 'AdminController@litrevSubmission');
    Route::get('verify/submissions/public-poster', 'AdminController@pubposSubmission');
    Route::get('verify/submissions/research-paper', 'AdminController@researchPaperSubmission');


    Route::get('download/submissions/{id}', 'SubmissionController@downloadSubmission');
});



Route::get('/participant', 'ParticipantController@index');

Route::prefix('participant')->middleware(['has_verify_email'])->group(function () {
	Route::get('/registration', 'ParticipantController@registrationPage');
    Route::post('/registration/choose-cabang', 'ParticipantRegistrationController@chooseCabang')->name('choose.cabang');

    Route::get('/download/templates/cv', 'ParticipantController@getCVTemplate');


    Route::middleware(['has_choose_cabang'])->group(function () {
        Route::post('/registration/upload-data', 'ParticipantRegistrationController@uploadData')->name('upload.data');
        Route::post('/reset/data', 'ParticipantRegistrationController@resetData')->name('reset.data');

        Route::middleware(['has_verified_by_admin'])->group(function () {
            Route::get('/teams', 'ParticipantController@teamsPage');
            Route::get('/submission', 'ParticipantController@submissionPage');

            Route::post('/upload/submission', 'ParticipantRegistrationController@uploadSubmission')->name('upload.submission');
        });
    });
});


Route::get('/home', 'HomeController@index')->name('home');


Route::get('email', function() {
    return view('email.index');
});