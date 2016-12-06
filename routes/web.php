<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('root');
});

//Dosen Login
Route::get('dosen/login', 'DosenAuth\LoginController@showLoginForm');
Route::post('dosen/login', 'DosenAuth\LoginController@login')->name('dosen.login');
Route::post('dosen/logout', 'DosenAuth\LoginController@logout');

//Dosen Register
Route::get('dosen/register', 'DosenAuth\RegisterController@showRegistrationForm');
Route::post('dosen/register', 'DosenAuth\RegisterController@register');

//Dosen Passwords
Route::post('dosen/password/email', 'DosenAuth\ForgotPasswordController@sendResetLinkEmail');
Route::post('dosen/password/reset', 'DosenAuth\ResetPasswordController@reset');
Route::get('dosen/password/reset', 'DosenAuth\ForgotPasswordController@showLinkRequestForm');
Route::get('dosen/password/reset/{token}', 'DosenAuth\ResetPasswordController@showResetForm');


//Mahasiswa Login
Route::get('mahasiswa/login', 'MahasiswaAuth\LoginController@showLoginForm');
Route::post('mahasiswa/login', 'MahasiswaAuth\LoginController@login')->name('mahasiswa.login');
Route::post('mahasiswa/logout', 'MahasiswaAuth\LoginController@logout');

//Mahasiswa Register
Route::get('mahasiswa/register', 'MahasiswaAuth\RegisterController@showRegistrationForm');
Route::post('mahasiswa/register', 'MahasiswaAuth\RegisterController@register');

//Mahasiswa Passwords
Route::post('mahasiswa/password/email', 'MahasiswaAuth\ForgotPasswordController@sendResetLinkEmail');
Route::post('mahasiswa/password/reset', 'MahasiswaAuth\ResetPasswordController@reset');
Route::get('mahasiswa/password/reset', 'MahasiswaAuth\ForgotPasswordController@showLinkRequestForm');
Route::get('mahasiswa/password/reset/{token}', 'MahasiswaAuth\ResetPasswordController@showResetForm');


//Admin Login
Route::get('admin/login', 'AdminAuth\LoginController@showLoginForm');
Route::post('admin/login', 'AdminAuth\LoginController@login')->name('admin.login');
Route::post('admin/logout', 'AdminAuth\LoginController@logout');

//Admin Register
Route::get('admin/register', 'AdminAuth\RegisterController@showRegistrationForm');
Route::post('admin/register', 'AdminAuth\RegisterController@register');

//Admin Passwords
Route::post('admin/password/email', 'AdminAuth\ForgotPasswordController@sendResetLinkEmail');
Route::post('admin/password/reset', 'AdminAuth\ResetPasswordController@reset');
Route::get('admin/password/reset', 'AdminAuth\ForgotPasswordController@showLinkRequestForm');
Route::get('admin/password/reset/{token}', 'AdminAuth\ResetPasswordController@showResetForm');

Route::get('file/materi/{dosen_mk_id}/{file_id}','DataController@get_materi');
Route::get('file/kuis/{kelas_id}/{kuis_id}/{file_name}','DataController@get_kuis');
Route::get('file/submit/{kelas_id}/{kuis_id}/{file_name}','DataController@get_submit');


