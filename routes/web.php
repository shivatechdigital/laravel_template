<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\ContentBlockController;
use App\Http\Controllers\Admin\GalleryItemController;
use App\Http\Controllers\Admin\BillingController;
use App\Http\Controllers\Admin\MembershipPlanController;
use App\Http\Controllers\Admin\PricingPlanController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\SocialLinkController;
use App\Http\Controllers\Admin\TemplateEditorController;
use App\Http\Controllers\Admin\TeamMemberController;
use App\Http\Controllers\BeautySalonFormController;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MembershipController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ContentController::class, 'home'])->name('beauty_salon.index');

Route::get('/about-us', [ContentController::class, 'about'])->name('beauty_salon.about-us');
Route::view('/blog-details', 'beauty_salon.blog-details')->name('beauty_salon.blog-details');
Route::view('/blog-grid', 'beauty_salon.blog-grid')->name('beauty_salon.blog-grid');
Route::view('/blog-list-both-sidebar', 'beauty_salon.blog-list-both-sidebar')->name('beauty_salon.blog-list-both-sidebar');
Route::view('/blog-list-left-sidebar', 'beauty_salon.blog-list-left-sidebar')->name('beauty_salon.blog-list-left-sidebar');
Route::view('/booking', 'beauty_salon.booking')->name('beauty_salon.booking');
Route::get('/contact', [ContentController::class, 'contact'])->name('beauty_salon.contact');
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
Route::get('/membership-plans', [MembershipController::class, 'index'])->name('beauty_salon.memberships');

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
	Route::post('/membership-plans/{membership}/purchase', [MembershipController::class, 'purchase'])
		->middleware('role:user')
		->name('beauty_salon.memberships.purchase');
	Route::get('/admin/dashboard', [DashboardController::class, 'adminDashboard'])
		->middleware('role:admin')
		->name('admin.dashboard');
	Route::post('/admin/bookings/{booking}/status', [DashboardController::class, 'updateBookingStatus'])
		->middleware('role:admin')
		->name('admin.bookings.status');

	Route::middleware('role:admin')->prefix('admin')->name('admin.')->group(function () {
		Route::resource('services', ServiceController::class)->except(['show']);
		Route::resource('pricing', PricingPlanController::class)->except(['show']);
		Route::resource('gallery', GalleryItemController::class)->except(['show']);
		Route::resource('team-members', TeamMemberController::class)->except(['show']);
		Route::resource('social-links', SocialLinkController::class)->except(['show']);
		Route::resource('memberships', MembershipPlanController::class)->except(['show']);
		Route::get('billing', [BillingController::class, 'index'])->name('billing.index');
		Route::get('billing/create', [BillingController::class, 'create'])->name('billing.create');
		Route::post('billing', [BillingController::class, 'store'])->name('billing.store');
		Route::get('billing/{billing}', [BillingController::class, 'show'])->name('billing.show');
		Route::resource('content-blocks', ContentBlockController::class)->only(['index', 'edit', 'update']);

		Route::get('/pages', [TemplateEditorController::class, 'index'])->name('pages.index');
		Route::get('/pages/{file}/edit', [TemplateEditorController::class, 'edit'])->name('pages.edit');
		Route::put('/pages/{file}', [TemplateEditorController::class, 'update'])->name('pages.update');
	});
});

Route::get('/portfolio-grid-2', [ContentController::class, 'gallery'])->name('beauty_salon.portfolio-grid-2');
Route::view('/post-gallery', 'beauty_salon.post-gallery')->name('beauty_salon.post-gallery');
Route::view('/post-image', 'beauty_salon.post-image')->name('beauty_salon.post-image');
Route::get('/service', [ContentController::class, 'services'])->name('beauty_salon.service');
Route::get('/pricing', [ContentController::class, 'pricing'])->name('beauty_salon.pricing');
Route::view('/services-details', 'beauty_salon.services-details')->name('beauty_salon.services-details');
Route::view('/shop-cart', 'beauty_salon.shop-cart')->name('beauty_salon.shop-cart');
Route::view('/shop-checkout', 'beauty_salon.shop-checkout')->name('beauty_salon.shop-checkout');
Route::view('/shop-columns-sidebar', 'beauty_salon.shop-columns-sidebar')->name('beauty_salon.shop-columns-sidebar');
Route::view('/shop-columns', 'beauty_salon.shop-columns')->name('beauty_salon.shop-columns');
Route::view('/shop-login', 'beauty_salon.shop-login')->name('beauty_salon.shop-login');
Route::view('/shop-product-details', 'beauty_salon.shop-product-details')->name('beauty_salon.shop-product-details');
Route::view('/shop-register', 'beauty_salon.shop-register')->name('beauty_salon.shop-register');
Route::view('/shop-wishlist', 'beauty_salon.shop-wishlist')->name('beauty_salon.shop-wishlist');
Route::get('/team', [ContentController::class, 'team'])->name('beauty_salon.team');

