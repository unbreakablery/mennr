<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;

use PostHelper;

use App\Models\Page;
use App\Models\Faq;

class ProductsController extends Controller
{
    /**
     * Show spa salon appointment booking software page
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
	public function appointment_booking() {

        $appointmentsAndBooking = Page::where('page_title', 'Appointments and Booking')->get();

        $first_section 	= PostHelper::getPostData("Appointment and Booking", "1", "first_section");
        $second_section = PostHelper::getPostData("Appointment and Booking", "3", "second_section");
        $third_section = PostHelper::getPostData("Appointment and Booking", "3", "third_section");
        $forth_section 	= PostHelper::getPostData("Appointment and Booking", "3", "forth_section");
        $fifth_section 	= PostHelper::getPostData("Appointment and Booking", "6", "fifth_section");
        $sixth_section 	= PostHelper::getPostData("Appointment and Booking", "1", "sixth_section");
        $seventh_section 	= PostHelper::getPostData("Appointment and Booking", "1", "seventh_section");
        $eight_section 	= PostHelper::getPostData("Appointment and Booking", "5", "eight_section");

        $all_posts = new Collection;

        $all_posts = $all_posts->merge($first_section)
                                ->merge($second_section)
                                ->merge($third_section)
                                ->merge($forth_section)
                                ->merge($fifth_section)
                                ->merge($sixth_section)
                                ->merge($seventh_section)
                                ->merge($eight_section);

        $faq = Faq::where('page_title', 'Appointment and Booking')->get();

        return view('pages/products/spa_salon_appointment_booking_software', compact('appointmentsAndBooking', 'all_posts', 'faq'));
    }

    /**
     * Show spa salon point of sale software page
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function billing_payment() {

        $billingAndPayments = Page::where('page_title', 'Billing and Payments')->get();

        $first_section 	= PostHelper::getPostData("Billing and Payments", "1", "first_section");
        $second_section = PostHelper::getPostData("Billing and Payments", "3", "second_section");
        $third_section = PostHelper::getPostData("Billing and Payments", "3", "third_section");
        $forth_section 	= PostHelper::getPostData("Billing and Payments", "4", "forth_section");
        $fifth_section 	= PostHelper::getPostData("Billing and Payments", "1", "fifth_section");
        $sixth_section 	= PostHelper::getPostData("Billing and Payments", "8", "sixth_section");
        $seventh_section 	= PostHelper::getPostData("Billing and Payments", "1", "seventh_section");
        $eight_section 	= PostHelper::getPostData("Billing and Payments", "5", "eight_section");

        $all_posts = new Collection;

        $all_posts = $all_posts->merge($first_section)
                                ->merge($second_section)
                                ->merge($third_section)
                                ->merge($forth_section)
                                ->merge($sixth_section)
                                ->merge($fifth_section)
                                ->merge($seventh_section)
                                ->merge($eight_section);

        $faq = Faq::where('page_title', 'Billing and Payments')->get();

        return view('pages/products/spa_salon_point_of_sale_software', compact('billingAndPayments', 'all_posts', 'faq'));
    }

    /**
     * Show spa salon reporting analytics page
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function business_intelligence() {

        $businessIntelligence = Page::where('page_title', 'Business Intelligence')->get();

        $first_section 	= PostHelper::getPostData("Business Intelligence", "1", "first_section");
        $second_section = PostHelper::getPostData("Business Intelligence", "1", "second_section");
        $third_section = PostHelper::getPostData("Business Intelligence", "7", "third_section");
        $forth_section 	= PostHelper::getPostData("Business Intelligence", "4", "forth_section");
        $fifth_section 	= PostHelper::getPostData("Business Intelligence", "1", "fifth_section");
        $sixth_section 	= PostHelper::getPostData("Business Intelligence", "6", "sixth_section");
        $seventh_section = PostHelper::getPostData("Business Intelligence", "1", "seventh_section");
        $eight_section 	= PostHelper::getPostData("Business Intelligence", "1", "eight_section");
        $ninth_section 	= PostHelper::getPostData("Business Intelligence", "1", "ninth_section");
        $tenth_section 	= PostHelper::getPostData("Business Intelligence", "3", "tenth_section");

        $all_posts = new Collection;

        $all_posts = $all_posts->merge($first_section)
                                ->merge($second_section)
                                ->merge($third_section)
                                ->merge($forth_section)
                                ->merge($sixth_section)
                                ->merge($fifth_section)
                                ->merge($seventh_section)
                                ->merge($eight_section)
                                ->merge($ninth_section)
                                ->merge($tenth_section);

        $faq = Faq::where('page_title', 'Billing and Payments')->get();

        return view('pages/products/spa_salon_reporting_analytics', compact('businessIntelligence', 'all_posts', 'faq'));
    }

    /**
     * Show business management page
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function business_management() {

        $businessManagement = Page::where('page_title', 'Business Management')->get();

        $first_section = PostHelper::getPostData("Business Management", "1", "first_section");
        $second_section = PostHelper::getPostData("Business Management", "4", "second_section");
        $third_section = PostHelper::getPostData("Business Management", "1", "third_section");
        $forth_section 	= PostHelper::getPostData("Business Management", "1", "forth_section");
        $fifth_section 	= PostHelper::getPostData("Business Management", "5", "fifth_section");
        $sixth_section 	= PostHelper::getPostData("Business Management", "1", "sixth_section");

        $all_posts = new Collection;

        $all_posts = $all_posts->merge($first_section)
                                ->merge($second_section)
                                ->merge($third_section)
                                ->merge($forth_section)
                                ->merge($sixth_section)
                                ->merge($fifth_section)
                                ->merge($sixth_section);

        $faq = Faq::where('page_title', 'Business Management')->get();

        return view('pages/products/business_management', compact('businessManagement', 'all_posts', 'faq'));
    }

    /**
     * Show spa salon marketing software page
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function marketing_sales() {

        $marketingAndSales = Page::where('page_title', 'Marketing and Sales')->get();

        $first_section = PostHelper::getPostData("Marketing and Sales", "1", "first_section");
        $second_section = PostHelper::getPostData("Marketing and Sales", "3", "second_section");
        $third_section = PostHelper::getPostData("Marketing and Sales", "3", "third_section");
        $forth_section 	= PostHelper::getPostData("Marketing and Sales", "1", "forth_section");
        $fifth_section 	= PostHelper::getPostData("Marketing and Sales", "1", "fifth_section");
        $sixth_section 	= PostHelper::getPostData("Marketing and Sales", "3", "sixth_section");
        $seventh_section = PostHelper::getPostData("Marketing and Sales", "1", "seventh_section");
        $eight_section 	= PostHelper::getPostData("Marketing and Sales", "9", "eight_section");
        $ninth_section 	= PostHelper::getPostData("Marketing and Sales", "9", "ninth_section");

        $all_posts = new Collection;

        $all_posts = $all_posts->merge($first_section)
                                ->merge($second_section)
                                ->merge($third_section)
                                ->merge($forth_section)
                                ->merge($sixth_section)
                                ->merge($fifth_section)
                                ->merge($seventh_section)
                                ->merge($eight_section)
                                ->merge($ninth_section);

        $faq = Faq::where('page_title', 'Marketing and Sales')->get();

        return view('pages/products/spa_salon_marketing_software', compact('marketingAndSales', 'all_posts', 'faq'));
    }

    /**
     * Show mobile solutions page
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function mobile_solutions() {

        $mobileSolutions = Page::where('page_title', 'Mobile Solutions')->get();

        $first_section = PostHelper::getPostData("Mobile Solutions", "1", "first_section");
        $second_section = PostHelper::getPostData("Mobile Solutions", "3", "second_section")->reverse();
        $third_section = PostHelper::getPostData("Mobile Solutions", "1", "third_section");
        $forth_section 	= PostHelper::getPostData("Mobile Solutions", "1", "forth_section");
        $fifth_section 	= PostHelper::getPostData("Mobile Solutions", "5", "fifth_section");
        $sixth_section 	= PostHelper::getPostData("Mobile Solutions", "1", "sixth_section");
        $seventh_section = PostHelper::getPostData("Mobile Solutions", "6", "seventh_section");

        $all_posts = new Collection;

        $all_posts = $all_posts->merge($first_section)
                                ->merge($second_section)
                                ->merge($third_section)
                                ->merge($forth_section)
                                ->merge($sixth_section)
                                ->merge($fifth_section)
                                ->merge($seventh_section);

        $faq = Faq::where('page_title', 'Mobile Solutions')->get();

        return view('pages/products/mobile-solutions', compact('mobileSolutions', 'all_posts', 'faq'));
    }
}
