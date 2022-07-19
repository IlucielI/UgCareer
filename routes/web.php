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

// Certification Routes
Route::get('certification', 'Frontend\CertificationController@index')->name('certificate.front.index');

Route::get('certification/details', 'Frontend\CertificationController@details')->name('certificate.front.details');
// End Certification Routes

// Forum Routes
Route::get('forum', 'Frontend\ForumController@index')->name('forum.front.index');
// End Forum Routes

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
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

Route::get('/events', 'Frontend\EventsController@events')->name('events');
Route::get('/subevent', 'Frontend\EventsController@subevent')->name('subevent');
Route::get('/eventdetails', 'Frontend\EventsController@eventdetails')->name('eventdetails');
Route::get('/notfound', 'Frontend\EventsController@notfound')->name('notfound');
