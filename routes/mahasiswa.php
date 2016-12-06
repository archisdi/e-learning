<?php

Route::get('/home', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('mahasiswa')->user();

    //dd($users);

    return view('mahasiswa.home');
})->name('home');

Route::group(['namespace' => 'Mahasiswa'], function () {
    Route::get('/materi', 'MateriController@index')->name('materi.index');
    Route::get('/materi/{id}', 'MateriController@show')->name('materi.show');

    Route::get('kuis/', 'KuisController@index')->name('kuis.index');
    Route::get('kuis/{id}', 'KuisController@show')->name('kuis.show');
    Route::get('kuis/{id_kelas}/{id_kuis}', 'KuisController@detail')->name('kuis.detail');
    Route::post('kuis/{id_kelas}/{id_kuis}', 'KuisController@submit')->name('kuis.submit');

    Route::get('nilai/', 'NilaiController@index')->name('nilai.index');
    Route::get('nilai/{id}', 'NilaiController@show')->name('nilai.show');
    Route::get('nilai/{id_kelas}/{id_kuis}', 'NilaiController@detail')->name('nilai.detail');
});