<?php

Route::get('/', 'HomeController@index')->name('homepage');

Auth::routes();

Route::get('/dashboard', 'HomeController@dashboard')->name('dashboardUser');

Route::group(['prefix' => 'users'], function () {

    Route::get('/', 'UsersController@index')->name('senaraiUsers');
    Route::get('/add', 'UsersController@create')->name('addUser');
    Route::post('/add', 'UsersController@store')->name('storeUser');
    Route::get('/{id}/edit', 'UsersController@edit')->name('editUser');
    Route::patch('/{id}', 'UsersController@update')->name('updateUser');
    Route::delete('/{id}', 'UsersController@destroy')->name('deleteUser');

});

Route::group(['prefix' => 'projects'], function () {

    Route::get('/', 'ProjectsController@index')->name('senaraiProjects');
    Route::get('/add', 'ProjectsController@create')->name('addProject');
    Route::get('/{id}/edit', 'ProjectsController@edit')->name('editProject');

});

Route::group(['prefix' => 'lokasi'], function () {

    Route::get('/', 'LokasiController@index')->name('senaraiLokasi');
    Route::get('/add', 'LokasiController@create')->name('addLokasi');
    Route::post('add', 'LokasiController@store')->name('storeLokasi');
    Route::get('/{id}/edit', 'LokasiController@edit')->name('editLokasi');

});