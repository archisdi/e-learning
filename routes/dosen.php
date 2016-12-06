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
    Route::get('/{id}/create', 'KuisController@create')->name('kuis.create');
    Route::post('/{id}/store', 'KuisController@store')->name('kuis.store');
    Route::get('/{id_kelas}/{id_kuis}', 'KuisController@detail')->name('kuis.detail');
});

Route::group(['prefix' => 'nilai', 'namespace' => 'Dosen'], function () {
    Route::get('/', 'NilaiController@index')->name('nilai.index');
    Route::get('/{id}', 'NilaiController@show')->name('nilai.show');
    Route::get('/{id_kelas}/{id_kuis}', 'NilaiController@detail')->name('nilai.detail');
    Route::get('/{id_kelas}/{id_kuis}/{id_mhs_kuis}', 'NilaiController@mahasiswa_detail')->name('nilai.mahasiswa_detail');
    Route::post('/{id_kelas}/{id_kuis}/{id_mhs_kuis}', 'NilaiController@submit')->name('nilai.submit');
});

