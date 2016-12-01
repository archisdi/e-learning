<?php

Route::get('/home', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('dosen')->user();

    //dd($users);

    return view('dosen.home');
})->name('home');

Route::group(['prefix' => 'materi', 'namespace' => 'Dosen'], function () {
    Route::get('/', 'MateriController@index')->name('materi.index');
    Route::get('/{id}', 'MateriController@show')->name('materi.show');
    Route::get('/{id}/upload', 'MateriController@create')->name('materi.create');
    Route::post('/{id}', 'MateriController@store')->name('materi.store');
});

Route::group(['prefix' => 'kuis', 'namespace' => 'Dosen'], function () {
    Route::get('/', 'KuisController@index')->name('kuis.index');
    Route::get('/{id}', 'KuisController@show')->name('kuis.show');

});

