<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BeautySalonFormController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'beauty_salon.index')->name('beauty_salon.index');

Route::view('/about-us', 'beauty_salon.about-us')->name('beauty_salon.about-us');
Route::view('/blog-details', 'beauty_salon.blog-details')->name('beauty_salon.blog-details');
Route::view('/blog-grid', 'beauty_salon.blog-grid')->name('beauty_salon.blog-grid');
Route::view('/blog-list-both-sidebar', 'beauty_salon.blog-list-both-sidebar')->name('beauty_salon.blog-list-both-sidebar');
Route::view('/blog-list-left-sidebar', 'beauty_salon.blog-list-left-sidebar')->name('beauty_salon.blog-list-left-sidebar');
Route::view('/booking', 'beauty_salon.booking')->name('beauty_salon.booking');
Route::view('/contact', 'beauty_salon.contact')->name('beauty_salon.contact');
Route::post('/booking', [BeautySalonFormController::class, 'submitBooking'])->name('beauty_salon.booking.submit');
Route::post('/contact', [BeautySalonFormController::class, 'submitContact'])->name('beauty_salon.contact.submit');
Route::get('/login', [AuthController::class, 'showLogin'])->name('beauty_salon.login');
Route::post('/login', [AuthController::class, 'login'])->name('auth.login.submit');
Route::get('/register', [AuthController::class, 'showRegister'])->name('beauty_salon.register');
Route::post('/register', [AuthController::class, 'register'])->name('auth.register.submit');
Route::get('/forgot-password', [AuthController::class, 'showForgotPassword'])->name('password.request');
Route::post('/forgot-password', [AuthController::class, 'sendResetLink'])->name('password.email');
Route::get('/reset-password/{token}', [AuthController::class, 'showResetPassword'])->name('password.reset');
Route::post('/reset-password', [AuthController::class, 'resetPassword'])->name('password.update');
Route::post('/logout', [AuthController::class, 'logout'])->name('auth.logout');

Route::middleware('auth')->group(function () {
	Route::get('/dashboard', [DashboardController::class, 'redirectByRole'])->name('dashboard');
	Route::get('/user/dashboard', [DashboardController::class, 'userDashboard'])
		->middleware('role:user')
		->name('user.dashboard');
	Route::post('/user/profile', [DashboardController::class, 'updateProfile'])
		->middleware('role:user')
		->name('user.profile.update');
	Route::post('/user/password', [DashboardController::class, 'updatePassword'])
		->middleware('role:user')
		->name('user.password.update');
	Route::get('/admin/dashboard', [DashboardController::class, 'adminDashboard'])
		->middleware('role:admin')
		->name('admin.dashboard');
	Route::post('/admin/bookings/{booking}/status', [DashboardController::class, 'updateBookingStatus'])
		->middleware('role:admin')
		->name('admin.bookings.status');
});

Route::view('/portfolio-grid-2', 'beauty_salon.portfolio-grid-2')->name('beauty_salon.portfolio-grid-2');
Route::view('/post-gallery', 'beauty_salon.post-gallery')->name('beauty_salon.post-gallery');
Route::view('/post-image', 'beauty_salon.post-image')->name('beauty_salon.post-image');
Route::view('/service', 'beauty_salon.service')->name('beauty_salon.service');
Route::view('/services-details', 'beauty_salon.services-details')->name('beauty_salon.services-details');
Route::view('/shop-cart', 'beauty_salon.shop-cart')->name('beauty_salon.shop-cart');
Route::view('/shop-checkout', 'beauty_salon.shop-checkout')->name('beauty_salon.shop-checkout');
Route::view('/shop-columns-sidebar', 'beauty_salon.shop-columns-sidebar')->name('beauty_salon.shop-columns-sidebar');
Route::view('/shop-columns', 'beauty_salon.shop-columns')->name('beauty_salon.shop-columns');
Route::view('/shop-login', 'beauty_salon.shop-login')->name('beauty_salon.shop-login');
Route::view('/shop-product-details', 'beauty_salon.shop-product-details')->name('beauty_salon.shop-product-details');
Route::view('/shop-register', 'beauty_salon.shop-register')->name('beauty_salon.shop-register');
Route::view('/shop-wishlist', 'beauty_salon.shop-wishlist')->name('beauty_salon.shop-wishlist');
Route::view('/team', 'beauty_salon.team')->name('beauty_salon.team');

