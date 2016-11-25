<?php

Route::get('/home', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('admin')->user();

    //dd($users);

    return view('admin.home');
})->name('home');

Route::group(['prefix' => 'data'], function () {
    Route::resource('mahasiswa', 'Admin\MahasiswaController');
    Route::resource('dosen', 'Admin\DosenController');
    Route::resource('matakuliah', 'Admin\MatakuliahController');
    Route::resource('kelas', 'Admin\KelasController');
});

