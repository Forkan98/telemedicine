<?php

Route::get('/', function () {
    return view('welcome');
});



Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');


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



