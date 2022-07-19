<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BaseController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\LeaderController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\SubscriptionController;


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
//Frontend Routes
Route::get('/', [BaseController::class,'home']);
Route::get('/spa', [BaseController::class,'spa'])->name('spa');
Route::get('/medspa', [BaseController::class,'medspa'])->name('medspa');
Route::get('/salon', [BaseController::class,'salon'])->name('salon');
Route::get('/fitness', [BaseController::class,'fitness'])->name('fitness');
Route::get('/company', [BaseController::class,'company'])->name('company');
Route::get('/resources', [BaseController::class,'resource'])->name('resources');
Route::get('/spa_salon_appointment_booking_software', [BaseController::class,'spa_salon_appointment_booking_software']);
Route::get('/spa-salon-point-of-sale-software', [BaseController::class,'spa_salon_point_of_sale_software']);
Route::get('/spa-salon-reporting-analytics', [BaseController::class,'spa_salon_reporting_analytics']);
Route::get('/business-management', [BaseController::class,'business_management']);
Route::get('/spa-salon-marketing-software', [BaseController::class,'spa_salon_marketing_software']);
Route::get('/mobile-solutions', [BaseController::class,'mobile_solutions']);
#Mail Route
Route::post('SendEmail', [EmailController::class, 'Mail'])->name('ContactMail');

//Subscription Routes
	Route::get('/subscription/create', [SubscriptionController::class, 'index'])->name('subscription.create');
	Route::post('order-post', [SubscriptionController::class, 'orderPost'])->name('order-post');

//Admin Routes
Route::get('/admin', [AdminController::class,'index'])->name('login');
Route::post('/admin', [AdminController::class,'makeLogin']);



Route::group(['middleware' => 'auth:admin'],function(){
	Route::get('/logout', [AdminController::class,'logout']);
	Route::get('/dashboard', [AdminController::class,'dashboard']);
	//Home Add Page Routes
	Route::get('/home-add', [PageController::class,'HomeAddPage'])->name('home.add');
	//Solution Add Page Routes
	Route::get('/spa-add', [PageController::class,'SpaAddPage'])->name('spa.add');
	Route::get('/medspa-add', [PageController::class,'MedSpaAddPage'])->name('medspa.add');
    Route::get('/salon-add', [PageController::class,'SalonAddPage'])->name('salon.add');
    Route::get('/fitness-add', [PageController::class,'FitnessAddPage'])->name('fitness.add');
    //Products Add Page Route
    Route::get('/appointments-and-booking-add', [PageController::class,'AppointmentsAndBookingAddPage'])->name('appointments-and-booking.add');
    Route::get('/billing-and-payment-add', [PageController::class,'BillingAndPayments'])->name('billing-and-payments.add');
	Route::get('/business-intelligence-add', [PageController::class,'BusinessIntelligence'])->name('business-intelligence.add');
	Route::get('/business-management-add', [PageController::class,'BusinessManagement'])->name('business-management.add');
	Route::get('/marketing-and-sales-add', [PageController::class,'MarketingAndSales'])->name('marketing-and-sales.add');
	Route::get('/mobile-solutions-add', [PageController::class,'MobileSolutions'])->name('mobile-solutions.add');
	// Company Add Page Route
	Route::get('/company-add', [PageController::class,'CompanyAddPage'])->name('company.add');
	//Page Create
	Route::post('/page-create', [PageController::class,'CreatePage'])->name('page.create');
	// FAQ Routes
	Route::resource('faq', FaqController::class);
	//Post Routes
	Route::resource('posts', PostController::class);
	//Leaders Routes
	Route::resource('leaders', LeaderController::class);
	//History Routes
	Route::resource('history', HistoryController::class);


});
