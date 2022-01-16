<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\CountyController;
use App\Http\Controllers\MunicipalityController;
use App\Http\Controllers\PassportController;
use App\Http\Controllers\PlaceController;
use App\Http\Controllers\PoliceAdministrationController;
use App\Http\Controllers\UserController;
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

Route::get('/', [HomeController::class, 'dashboard'])->name('dashboard');

Route::get('/counties', 'App\\Http\\Controllers\\CountyController@index')
    ->name('counties.index');
Route::get('/municipalities', 'App\\Http\\Controllers\\MunicipalityController@index')
    ->name('municipalities.index');
Route::get('/passports', 'App\\Http\\Controllers\\PassportController@index')
    ->name('passports.index');
Route::get('/places', 'App\\Http\\Controllers\\PlaceController@index')
    ->name('places.index'); 
Route::get('/police_administrations', 'App\\Http\\Controllers\\PoliceAdministrationController@index')
    ->name('police_administrations.index');
Route::get('/users', 'App\\Http\\Controllers\\UserController@index')
    ->name('users.index');

