<?php

Route::get('/', 'HomeController@index')->name('homepage');

Auth::routes();

Route::get('/dashboard', 'HomeController@dashboard')->name('dashboardUser');

Route::group(['prefix' => 'users'], function () {

    Route::get('/', 'UsersController@index')->name('senaraiUsers');
    Route::get('/add', 'UsersController@create')->name('addUser');
    Route::get('/{id}/edit', 'UsersController@edit')->name('editUser');

});

Route::group(['prefix' => 'projects'], function () {

    Route::get('/', 'ProjectsController@index')->name('senaraiProjects');
    Route::get('/add', 'ProjectsController@create')->name('addProject');
    Route::get('/{id}/edit', 'ProjectsController@edit')->name('editProject');

});

Route::group(['prefix' => 'lokasi'], function () {

    Route::get('/', 'LokasiController@index')->name('senaraiLokasi');
    Route::get('/add', 'LokasiController@create')->name('addLokasi');
    Route::get('/{id}/edit', 'LokasiController@edit')->name('editLokasi');

});