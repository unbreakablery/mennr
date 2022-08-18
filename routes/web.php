<?php

use App\Http\Controllers\Admin\ContactController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BaseController;
use App\Http\Controllers\SolutionsController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\RourcesController;
use App\Http\Controllers\CustomersController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PricingController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\PlanController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\LeaderController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\SocialMediaController;
use App\Http\Controllers\SubscriptionController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\FrontUserController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FreeDemosController;

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
Route::get('/', [BaseController::class, 'home']);

// Route::prefix('solutions')->group(function () {
// 	Route::get('spa', [SolutionsController::class, 'spa'])->name('spa');
// 	Route::get('medical-spa', [SolutionsController::class, 'medical_spa'])->name('medspa');
// 	Route::get('salon', [SolutionsController::class, 'salon'])->name('salon');
// 	Route::get('fitness', [SolutionsController::class, 'fitness'])->name('fitness');
//     Route::get('elevate-customer-experience', [SolutionsController::class, 'elevate'])->name('elevate');
// 	Route::get('unify-brand-operations', [SolutionsController::class, 'unify'])->name('unify');
// 	Route::get('automate-with-ai', [SolutionsController::class, 'automate'])->name('automate');
// });
Route::get('solutions', [SolutionsController::class, 'solutions'])->name('solutions');
Route::prefix('solutions')->group(function () {
	Route::get('appointment-booking', [SolutionsController::class, 'appointment_booking'])->name('appointment_booking');
	Route::get('billing-payments', [SolutionsController::class, 'billing_payment'])->name('billing_payment');
	// Route::get('business-intelligence', [ProductsController::class, 'business_intelligence'])->name('business_intelligence');
	Route::get('business-management', [SolutionsController::class, 'business_management'])->name('business_management');
	Route::get('marketing-sales', [SolutionsController::class, 'marketing_sales'])->name('marketing_sales');
	// Route::get('mobile-solutions', [ProductsController::class, 'mobile_solutions'])->name('mobile_solutions');
});

Route::get('get-free-demo', [FreeDemosController::class, 'index'])->name('get_free_demo.index');
Route::post('get-free-demo', [FreeDemosController::class, 'submit'])->name('get_free_demo.submit');
Route::get('about', [CompanyController::class, 'about'])->name('about');
Route::get('careers', [CompanyController::class, 'careers'])->name('careers');
Route::get('pricing/old', [CompanyController::class, 'pricingOld'])->name('pricing.old');

Route::get('pricing', [PricingController::class, 'index'])->name('pricing');
Route::get('pricing/payment/{plan}', [PricingController::class, 'payment'])->name('pricing.payment');
Route::get('start-trial/{plan}', [PricingController::class, 'startTrial'])->name('pricing.start_trial');

Route::post('pricing/payment/capture', [PricingController::class, 'capturePayment'])->name('capture.payment');

Route::get('payment/success',[PricingController::class, 'paymentSuccessView'])->name('payment.success');

Route::get('contacts', [CompanyController::class, 'contact'])->name('contacts');
Route::post('sendContact', [CompanyController::class, 'sendContact'])->name('sendContact');
Route::get('blog', [BlogController::class, 'blog'])->name('blog');
// Route::get('company', [CompanyController::class, 'company'])->name('company');
// Route::get('resources', [RourcesController::class, 'resource'])->name('resources');
// Route::get('customers', [CustomersController::class, 'customers'])->name('customers');

Route::get('signup', [FrontUserController::class, 'signup'])->name('customer.signup');
Route::post('signup', [FrontUserController::class, 'store'])->name('customer.store');

Route::get('signin', [FrontUserController::class, 'loginForm'])->name('customer.loginForm');
Route::post('customer/login', [FrontUserController::class, 'login'])->name('customer.login');
Route::get('customer/logout', [FrontUserController::class, 'logout'])->name('customer.logout');

Route::get('customer/dashboard', [FrontUserController::class, 'customerDashboard'])->name('customer.dashboard');

Route::get('customer/dashboard/edit-profile', [FrontUserController::class, 'editProfileDetailsView'])->name('customer.dashboard.edit-profile');
Route::post('customer/dashboard/update-profile', [FrontUserController::class, 'updateProfileDetails'])->name('customer.dashboard.update-profile');

Route::get('customer/dashboard/manage-solution', [FrontUserController::class, 'manageSolutionView'])->name('customer.dashboard.manage-solution');

#NewsLetter Route
Route::post('customer/newsletter', [FrontUserController::class, 'storeNewsletter'])->name('customer.newsletter');
Route::get('customer/newsletter/unsubscribe/{email}', [FrontUserController::class, 'storeNewsletterUnsubscribe'])->name('customer.newsletter.unsubscribe');
Route::post('customer/newsletter/unsubscribe', [FrontUserController::class, 'removeNewsletterEmail'])->name('newsletter.unsubscribe');



#Mail Route
Route::post('SendEmail', [EmailController::class, 'Mail'])->name('ContactMail');

//Subscription Routes
Route::get('/subscription/create', [SubscriptionController::class, 'index'])->name('subscription.create');
Route::post('order-post', [SubscriptionController::class, 'orderPost'])->name('order-post');

//Admin Routes
Route::get('/admin', [AdminController::class, 'index'])->name('login');
Route::post('/admin', [AdminController::class, 'makeLogin']);

Route::group(['prefix' => 'admin', 'middleware' => 'auth:admin'], function () {
	Route::get('/logout', [AdminController::class, 'logout'])->name('admin.logout');
	Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
	//Home Add Page Routes
	Route::get('/home-add', [PageController::class, 'HomeAddPage'])->name('home.add');
	//Solution Add Page Routes
	Route::get('/solutions-add', [PageController::class, 'SolutionsAddPage'])->name('solutions.add');
	Route::get('/spa-add', [PageController::class, 'SpaAddPage'])->name('spa.add');
	Route::get('/medspa-add', [PageController::class, 'MedSpaAddPage'])->name('medspa.add');
	Route::get('/salon-add', [PageController::class, 'SalonAddPage'])->name('salon.add');
	Route::get('/fitness-add', [PageController::class, 'FitnessAddPage'])->name('fitness.add');
	//Products Add Page Route
	Route::get('/appointments-and-booking-add', [PageController::class, 'AppointmentsAndBookingAddPage'])->name('appointments-and-booking.add');
	Route::get('/billing-and-payment-add', [PageController::class, 'BillingAndPayments'])->name('billing-and-payments.add');
	Route::get('/business-intelligence-add', [PageController::class, 'BusinessIntelligence'])->name('business-intelligence.add');
	Route::get('/business-management-add', [PageController::class, 'BusinessManagement'])->name('business-management.add');
	Route::get('/marketing-and-sales-add', [PageController::class, 'MarketingAndSales'])->name('marketing-and-sales.add');
	Route::get('/mobile-solutions-add', [PageController::class, 'MobileSolutions'])->name('mobile-solutions.add');
	// Company Add Page Route
	Route::get('/company-add', [PageController::class, 'CompanyAddPage'])->name('company.add');
	//Page Create
	Route::post('/page-create', [PageController::class, 'CreatePage'])->name('page.create');
	// FAQ Routes
	Route::resource('faq', FaqController::class);
	//Post Routes
	Route::resource('posts', PostController::class);
	//Testimonial Routes
	Route::resource('testimonials', TestimonialController::class);
	//Plan Routes
	Route::resource('plans', PlanController::class);
	//Leaders Routes
	Route::resource('leaders', LeaderController::class);
	//History Routes
	Route::resource('history', HistoryController::class);
	//Social Media Routes
	Route::resource('socialmedia', SocialMediaController::class);
	//Contact
	Route::resource('contact', ContactController::class);
	//Blog Add Page Route
	Route::get('/blog-add', [PageController::class, 'BlogAdd'])->name('blog.add');

	// User
	Route::resource('users', UserController::class);

	// User Plan List view 
	Route::get('/userplan-list', [PlanController::class, 'userPlanListview'])->name('userplan.list');
	Route::delete('/userplan-list-delete/{userplan}', [PlanController::class, 'userPlanDelete'])->name('userplan.delete');

	// NewsLetter List
	Route::get('/newsletter-list', [AdminController::class, 'newsLetterList'])->name('newsletter.list');
	Route::delete('/newsletter-destroy/{newsletter}', [AdminController::class, 'newsletterDestroy'])->name('newsletter.delete');

	// Careers Page Add/Edit
	Route::get('/careers-add', [PageController::class, 'CareersAddPage'])->name('Careers.add');

	//About Page Add/Edit
	Route::get('/about-add', [PageController::class, 'AboutAddPage'])->name('about.add');

	// Pricing Page Add/Edit
	Route::get('/pricing-add', [PageController::class, 'PricingAddPage'])->name('Pricing.add');


	// Get A Free Demo Routes
	Route::get('/gafd-list', [AdminController::class, 'applicantsList'])->name('gafd.list');
	Route::get('/gafd-add', [AdminController::class, 'addApplicant'])->name('gafd.add');
	Route::post('/gafd-save', [AdminController::class, 'saveApplicant'])->name('gafd.save');
	Route::get('/gafd-edit/{applicant}', [AdminController::class, 'editApplicant'])->name('gafd.edit');
	Route::put('/gafd-update/{applicant}', [AdminController::class, 'updateApplicant'])->name('gafd.update');
	Route::delete('/gafd-delete/{applicant}', [AdminController::class, 'deleteApplicant'])->name('gafd.delete');
});

Route::any('/ckfinder/connector', '\CKSource\CKFinderBridge\Controller\CKFinderController@requestAction')
	->name('ckfinder_connector');

Route::any('/ckfinder/browser', '\CKSource\CKFinderBridge\Controller\CKFinderController@browserAction')
	->name('ckfinder_browser');
