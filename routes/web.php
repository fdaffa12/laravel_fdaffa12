<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('admin/home', 'AdminController@index');

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');
Route::get('admin/logout', 'AdminController@Logout')->name('admin.logout');

//rumah sakit
Route::get('/admin/rumahsakits/', 'RumahSakitController@index')->name('admin.rs');
Route::post('admin/rumahsakits-store', 'RumahSakitController@store')->name('store.rs');
Route::get('admin/rumahsakits/edit/{rs_id}', 'RumahSakitController@edit');
Route::post('admin/rumahsakits-update', 'RumahSakitController@update')->name('update.rs');
Route::get('admin/rumahsakits/delete/{rs_id}', 'RumahSakitController@destroy');


//pasien
Route::get('/admin/pasiens/', 'PasienController@index')->name('admin.pasien');
Route::post('admin/pasiens-store', 'PasienController@store')->name('store.pasien');
Route::get('admin/pasiens/edit/{pasien_id}', 'PasienController@edit');
Route::post('admin/pasiens-update', 'PasienController@update')->name('update.pasien');
Route::get('admin/pasiens/delete/{pasien_id}', 'PasienController@destroy');