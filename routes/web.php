<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\DestinationController;
use App\Http\Controllers\RvsController;
use App\Http\Controllers\BlogController;

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

Route::get('/', [FrontController::class, 'welcome']);
Route::get('/contact-us', [FrontController::class, 'contact'])->name('contact-us');
Route::get('/about-us', [FrontController::class, 'about'])->name('about-us');
Route::get('/list-rv/{id}', [FrontController::class, 'listRv'])->name('list-rv');
Route::get('/web/login', [FrontController::class, 'webLogin'])->name('web-login');
Route::get('/web/register', [FrontController::class, 'webRegister'])->name('web-register');
Route::get('/web/rvdetail/{id}', [FrontController::class, 'RvDetail'])->name('web-detail');
// Route::get('/coursedetail/{id?}', [FrontController::class, 'course_detail'])->name('coursedetail');
Route::match(['get', 'post'], '/search', [FrontController::class, 'rvs_search'])->name('search');
Route::get('/blogs', [FrontController::class, 'blog'])->name('blogs');
Route::get('/blog-detail/{id}', [FrontController::class, 'blogDetail'])->name('blogDetail');
Route::get('/affiliate_market', [FrontController::class, 'affiliate_market'])->name('affiliate_market');
Route::get('/join_term', [FrontController::class, 'join_term'])->name('join_term');
// Route::post('/booking', [BookingController::class, 'booking'])->name('booking');
Route::get('/list-destinations', [FrontController::class, 'destinations'])->name('list-destinations');

Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::resource('user', UserController::class);
    Route::resource('role', RoleController::class);
    Route::resource('permission', PermissionController::class);
    Route::resource('destination', DestinationController::class);
    Route::resource('rvs', RvsController::class);
    Route::resource('blog', BlogController::class);
    Route::get('/rv/approve/{rv}', [App\Http\Controllers\RvsController::class, 'rvApprove'])->name('rv_status_approve');
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/vendor', [App\Http\Controllers\UserController::class, 'vendor'])->name('user.vendor');
    Route::get('/vendor/{user}', [App\Http\Controllers\UserController::class, 'vendorDetail'])->name('vendor_details');
    Route::get('/customer', [App\Http\Controllers\UserController::class, 'customer'])->name('user.customer');
    Route::get('/profile', [App\Http\Controllers\UserController::class, 'profile'])->name('user.profile');
    Route::post('/user_profile', [App\Http\Controllers\UserController::class, 'user_profile'])->name('users.profile');
    Route::post('/user_password', [App\Http\Controllers\UserController::class, 'user_password'])->name('user.user_password');
    Route::post('/booking', [App\Http\Controllers\BookingController::class, 'booking'])->name('booking');
    Route::get('/booking/listing', [App\Http\Controllers\BookingController::class, 'index'])->name('booking.index');
    Route::get('/booking/{booking}/status/{status}', [App\Http\Controllers\BookingController::class, 'status'])->name('booking.status_update');


    //HomePage
    Route::get('/list-rvs', [FrontController::class, 'myrvs'])->name('web-myrvs');
});
