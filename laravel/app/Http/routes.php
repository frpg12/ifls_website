<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/coba', function () {
    return view('coba');
});

Route::get('/cari', function () {
    return view('cari');
});

Route::get('/article/100001', function () {
    return view('100001');
});

Route::get('/profile', function () {
    return view('profile');
});


Route::get('/admin/login', function () {
    return view('login');
});

Route::get('/admin/buat_artikel', function () {
    return view('buat_artikel');
});

Route::get('/admin/edit_artikel/100001', function () {
    return view('edit100001');
});

Route::get('/admin/manajemen_artikel', function () {
    return view('manajemen_artikel');
});

Route::get('/admin/manajemen_artikels', function () {
    return view('manajemen_artikels');
});

Route::get('/admin/manajemen_artikelss', function () {
    return view('manajemen_artikelss');
});


Route::get('/admin/buat_admin', function () {
    return view('buat_admin');
});

Route::get('/admin/manajemen_admin', function () {
    return view('manajemen_admin');
});

Route::get('/admin/manajemen_admins', function () {
    return view('manajemen_admins');
});

Route::get('/admin/edit_profil_ukm', function () {
    return view('edit_profil_ukm');
});


Route::get('/admin/edit_profil_ukms', function () {
    return view('edit_profil_ukms');
});