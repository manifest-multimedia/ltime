<?php

use App\Http\Controllers\AffiliateController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\SearchController;
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

Route::get('/dashboard', function(){
    return redirect('/portal/dashboard');
});


Route::middleware(['referral', 'TrackReferrals'])->group(function () {
   

    Route::get('/', [HomeController::class ,'index'])->name('home');
    
    Route::get('/our-company', function () {
        return view('company');
    });
    Route::get('/our-services', function () {
        return view('services');
    });

    Route::get('/properties', [PropertyController::class, 'index'])->name('properties');

    Route::get('/contact-us', function () {
        return view('contact');
    });

    Route::post('/search', [SearchController::class, 'search'])->name('search');

});


Route::prefix('portal')->middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', [UserController::class, 'dashboard'])->name('dashboard');

    Route::get('/affiliates', [AffiliateController::class, 'index']);

    Route::get('/profile', [UserProfileController::class, 'index']);

    Route::get('/users', [UserController::class, 'index']);

    Route::get('/properties', [PropertyController::class, 'admin']);

    Route::get('/partners', [PartnerController::class, 'index']);

    Route::get('/testimonials', [TestimonialController::class, 'index']);

    Route::get('/settings', [SettingsController::class, 'index']);

});


