<?php


Auth::routes();
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');

Route::get('/', 'Auth\LoginController@index');

Route::group(['middleware' => ['auth']], function () {

    Route::prefix('/admin')->group(function () {

        Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
        Route::get('/reports', 'ReportsController@index')->name('reports');
        Route::resource('/users', 'UserController')->except('index', 'show', 'edit', 'update', 'destroy');

    });

});

Route::group(['middleware' => ['auth']], function () {

    Route::prefix('/client')->group(function () {

        Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
        Route::resource('reports', 'ReportsController')->except('edit', 'update', 'destroy');

    });

});

