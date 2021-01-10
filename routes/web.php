<?php

Route::get('/',[
    'uses' => 'FrontendController@frontend',
    'as' => '/'
]);



Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

// doctor info

Route::get('/doctors/add-doctors',[
    'uses' => 'DoctorsController@addDoctors',
    'as' => 'add-doctors'
    ]);

Route::post('/doctors/new-doctor', [
    'uses' => 'DoctorsController@newDoctor',
    'as' => 'new-doctor'
]);

Route::get('/doctors/manage-doctors', [
    'uses' => 'DoctorsController@manageDoctor',
    'as' => 'manage-doctors'
]);

Route::get('/doctors/edit-doctors/{id}', [
    'uses' => 'DoctorsController@editDoctor',
    'as' => 'edit-doctors'
]);

Route::post('/doctors/update-doctor', [
    'uses' => 'DoctorsController@updateDoctor',
    'as' => 'update-doctor'
]);

Route::post('/doctors/delete-doctors', [
    'uses' => 'DoctorsController@deleteDoctor',
    'as' => 'delete-doctors'
]);

//patient info

Route::get('/patients/search-doctors', [
    'uses' => 'AppoinmentController@searchDoctors',
    'as' => 'search-doctors'
]);

Route::post('/patients/new-search', [
    'uses' => 'AppoinmentController@newSearch',
    'as' => 'new-search'
]);

Route::get('/patients/manage-patients', [
    'uses' => 'AppoinmentController@managePatients',
    'as' => 'manage-patients'
]);

Route::get('/patients/edit-patients/{id}', [
    'uses' => 'AppoinmentController@editPatients',
    'as' => 'edit-patients'
]);

Route::post('/patients/update-patients', [
    'uses' => 'AppoinmentController@updatePatients',
    'as' => 'update-patients'
]);

Route::post('/patients/delete-patients/{id}', [
    'uses' => 'AppoinmentController@deletePatients',
    'as' => 'delete-patients'
]);



Route::get('/patients/add-patients', [
    'uses' => 'AppoinmentController@addPatients',
    'as' => 'add-patients'
]);

Route::post('/patients/new-patients', [
    'uses' => 'AppoinmentController@newPatients',
    'as' => 'new-patients'
]);


