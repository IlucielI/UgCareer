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
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/homeadmin', 'Backend\HomeController@index')->name('homeadmin');
Route::resource('alumni', 'Backend\AlumniController', ['except' => ['show']]);
Route::resource('users', 'Backend\UserController', ['except' => ['show']]);
Route::resource('company', 'Backend\CompanyController');
Route::resource('kabkota', 'Backend\KabkotaController');
Route::resource('prodi', 'Backend\ProdiController');
Route::resource('certificates', 'Backend\CertificatesController');
Route::resource('jobs', 'Backend\JobsController');
Route::resource('events', 'Backend\EventsController');
Route::resource('forums', 'Backend\ForumsController');
Route::get('/profile/edit/{id}', 'Backend\ProfileController@edit')->name('profile.edit');
Route::put('/profile/update', 'Backend\ProfileController@update')->name('profile.update');
Route::put('/profile/password', 'Backend\ProfileController@password')->name('profile.password');

Route::get('/events', 'Frontend\EventsController@events')->name('events');
Route::get('/subevent', 'Frontend\EventsController@subevent')->name('subevent');
Route::get('/eventdetails', 'Frontend\EventsController@eventdetails')->name('eventdetails');
Route::get('/notfound', 'Frontend\EventsController@notfound')->name('notfound');
