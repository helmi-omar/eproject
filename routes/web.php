<?php

Route::get('/', function () {

    $message = 'Selamat Datang';
    $field_nama = '<input type="text" name="nama_user">';

    return view('welcome', compact('message', 'field_nama') );
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboardUser');

Route::group(['prefix' => 'users'], function () {

    Route::get('/', function () {
        return view('users/senarai');
    })->name('senaraiUsers');

    Route::get('/add', function () {
        return view('users/borang_add');
    })->name('addUser');

    Route::get('/{id}/edit', function () {
        return view('users/borang_edit');
    })->name('editUser');

});

Route::group(['prefix' => 'projects'], function () {

    Route::get('/', function () {
        return view('projects/senarai');
    })->name('senaraiProjects');

    Route::get('/add', function () {
        return view('projects/borang_add');
    })->name('addProject');

    Route::get('/{id}/edit', function () {
        return view('projects/borang_edit');
    })->name('editProject');

});

Route::group(['prefix' => 'lokasi'], function () {

    Route::get('/', function () {
        return view('lokasi/senarai');
    })->name('senaraiLokasi');

    Route::get('/add', function () {
        return view('lokasi/borang_add');
    })->name('addLokasi');

    Route::get('/{id}/edit', function () {
        return view('lokasi/borang_edit');
    })->name('editLokasi');

});