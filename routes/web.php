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

Route::get('/', function () {
    return view('lpnyoba');
});
Route::get('/tes', function () {
    return view('tes');
});
Route::get('/regis', function () {
    return view('regis');
});
Route::get('/pin', function () {
    return view('pin');
});
Route::get('/dashboard', function () {
    return view('dashboard');
});
Route::get('/dsaver', function () {
    return view('dsaver');
});
Route::get('/catat', function () {
    return view('catat');
});
Route::get('/analisis', function () {
    return view('analisis');
});
Route::get('/tambah', function () {
    return view('tambahMimpi');
});
Route::get('/profil', function () {
    return view('profile');
});
Route::get('/mimpiku', function () {
    return view('mimpiku');
});

Route::get('/login', [LoginController::class, 'index']);

Route::get('/regis', [App\Http\Controllers\RegistrationController::class, 'create']);
Route::post('/regis', [App\Http\Controllers\RegistrationController::class, 'store']);
//Route::get('/regis', 'RegistrationController@create');
//Route::post('regis', 'RegistrationController@store');
Auth::routes();

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');