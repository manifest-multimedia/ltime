<?php

use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class ,'index']);
Route::get('/our-company', function () {
    return view('company');
});
Route::get('/our-services', function () {
    return view('services');
});
Route::get('/our-projects', function () {
    return view('projects');
});
Route::get('/contact-us', function () {
    return view('contact');
});
