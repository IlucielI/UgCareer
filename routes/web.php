<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome1');
})->name('home');

Route::get('/certification', 'CertificationController@index')->name('certificate.front.index');

Route::get('/certification/details', 'CertificationController@details')->name('certificate.front.details');

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
Route::get('/homeadmin', 'HomeController@homeadmin')->name('homeadmin');
Route::resource('alumni', 'App\Http\Controllers\Backend\AlumniController', ['except' => ['show']]);
Route::resource('company', 'App\Http\Controllers\Backend\CompanyController');
Route::resource('kabkota', 'App\Http\Controllers\Backend\KabkotaController');
Route::resource('prodi', 'App\Http\Controllers\Backend\ProdiController');
Route::resource('certificates', 'App\Http\Controllers\Backend\CertificatesController');
Route::resource('jobseekers', 'App\Http\Controllers\Backend\JobsController');
Route::resource('events', 'App\Http\Controllers\Backend\EventsController');
Route::resource('forums', 'App\Http\Controllers\Backend\ForumsController');
Route::get('/profile/edit/{id}', 'App\Http\Controllers\Backend\ProfileController@edit')->name('profile.edit');
Route::put('/profile/update', 'App\Http\Controllers\Backend\ProfileController@update')->name('profile.update');
Route::put('/profile/password', 'App\Http\Controllers\Backend\ProfileController@password')->name('profile.password');
