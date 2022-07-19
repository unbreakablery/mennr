<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;
use App\Models\Post;
use App\Models\Faq;
use App\Models\Leader;
use App\Models\History;

class BaseController extends Controller
{
    /**
     * Show home page
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function home()
	{
		$home = Page::where('page_title', 'home')->get();
		$post = Post::where('page_title', 'home')->get();

		$third_section = Post::where('page_title', 'home')->where('section_title','third_section')->take(3)->get();

		return view('Pages/home',compact('home','post','third_section'));
	}

    /**
     * Show spa page
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
	public function Spa()
	{
		$spa = Page::where('page_title', 'Spa')->get();

		$first_section 	= $this->PostData("Spa","1","first_section");
		$second_section = $this->PostData("Spa","3","second_section");
		$third_section 	= $this->PostData("Spa","2","third_section");
		$forth_section 	= $this->PostData("Spa","4","forth_section");
		$fifth_section 	= $this->PostData("Spa","4","fifth_section");
		$sixth_section 	= $this->PostData("Spa","5","sixth_section");

		$all_posts = new \Illuminate\Database\Eloquent\Collection;

		$all_posts = $all_posts->merge($first_section)->merge($second_section)->merge($third_section)->merge($forth_section)->merge($fifth_section)->merge($sixth_section);

		$faq = Faq::where('page_title', 'Spa')->get();


		return view('Pages/spa', compact('spa', 'all_posts', 'faq'));
	}


    /**
     * Show medspa page
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
	public function medspa(){

		$medspa = Page::where('page_title', 'Medspa')->get();

		$first_section 	= $this->PostData("Medspa","1","first_section");
		$second_section = $this->PostData("Medspa","2","second_section");
		$third_section 	= $this->PostData("Medspa","5","third_section");
		$forth_section 	= $this->PostData("Medspa","4","forth_section");
		$fifth_section 	= $this->PostData("Medspa","5","fifth_section");
		$fifth_section 	= $this->PostData("Medspa","5","fifth_section");

		$all_posts = new \Illuminate\Database\Eloquent\Collection;

		$all_posts = $all_posts->merge($first_section)->merge($second_section)->merge($third_section)->merge($forth_section)->merge($fifth_section);

		$faq = Faq::where('page_title', 'Medspa')->get();

		return view('Pages/medspa', compact('medspa', 'all_posts', 'faq'));
	}

    /**
     * Show salon page
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
	public function Salon(){

		$salon = Page::where('page_title', 'Salon')->get();

		$first_section 	= $this->PostData("Salon","1","first_section");
		$second_section = $this->PostData("Salon","3","second_section");
		$forth_section 	= $this->PostData("Salon","5","forth_section");
		$fifth_section 	= $this->PostData("Salon","5","fifth_section");
		$sixth_section 	= $this->PostData("Salon","5","sixth_section");

		$all_posts = new \Illuminate\Database\Eloquent\Collection;

		$all_posts = $all_posts->merge($first_section)->merge($second_section)->merge($forth_section)->merge($fifth_section)->merge($sixth_section);

		$faq = Faq::where('page_title', 'Salon')->get();

		return view('Pages/salon', compact('salon', 'all_posts', 'faq'));
	}

    /**
     * Show fitness page
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
	public function Fitness(){

		$fitness = Page::where('page_title', 'Fitness')->get();

		$first_section 	= $this->PostData("Fitness","1","first_section");
		$second_section = $this->PostData("Fitness","7","second_section");
		$third_section 	= $this->PostData("Fitness","5","third_section");
		$forth_section 	= $this->PostData("Fitness","6","forth_section");
		$fifth_a_section = $this->PostData("Fitness","1","fifth_a_section");
		$fifth_b_section = $this->PostData("Fitness","1","fifth_b_section");
		$sixth_section 	= $this->PostData("Fitness","6","sixth_section");

		$all_posts = new \Illuminate\Database\Eloquent\Collection;

		$all_posts = $all_posts->merge($first_section)->merge($second_section)->merge($third_section)->merge($forth_section)->merge($fifth_a_section)->merge($fifth_b_section)->merge($sixth_section);

		$faq = Faq::where('page_title', 'Fitness')->get();

		return view('Pages/fitness', compact('fitness', 'all_posts', 'faq'));
	}

    /**
     * Show company page
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
	public function Company(){

		$company = Page::where('page_title', 'Company')->get();

		$first_section 	= $this->PostData("Company","1","first_section");
		$forth_section 	= $this->PostData("Company","1","forth_section");
		$seventh_section = $this->PostData("Company","6","seventh_section");
		$ninth_section 	= $this->PostData("Company","1","ninth_section");

		$all_posts = new \Illuminate\Database\Eloquent\Collection;

		$all_posts = $all_posts->merge($first_section)->merge($forth_section)->merge($seventh_section)->merge($ninth_section);

		$leaders = Leader::where('group', 'Leader')->latest()->take(12)->get();
		$executives = Leader::where('group', 'Executive')->latest()->take(10)->get();
		$history = History::all();

		return view('Pages/company', compact('company', 'all_posts', 'leaders', 'executives', 'history'));
	}

    /**
     * Show resource page
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
	public function Resource(){

		$first_section 	= $this->PostData("Resource","3","first_section");

		return view('Pages/resource', compact('first_section'));
	}

    /**
     * Query a post resource
     * @param $page_title
     * @param $show_post
     * @param $section_title
     * @return mixed
     */
	public static function PostData($page_title, $show_post, $section_title)
	{
		$post_data = Post::where('page_title', $page_title)->where('section_title', $section_title)->latest()->take($show_post)->get();

		return $post_data;
	}

    /**
     * Show contact us page
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
	public function contact_us()
	{
		return view('Pages/contact');
	}

    /**
     * Show spa salon appointment booking software page
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
	public function spa_salon_appointment_booking_software(){

        $appointmentsAndBooking = Page::where('page_title', 'Appointments and Booking')->get();

        $first_section 	= $this->PostData("Appointment and Booking","1","first_section");
        $second_section = $this->PostData("Appointment and Booking","3","second_section");
        $third_section = $this->PostData("Appointment and Booking","3","third_section");
        $forth_section 	= $this->PostData("Appointment and Booking","3","forth_section");
        $fifth_section 	= $this->PostData("Appointment and Booking","6","fifth_section");
        $sixth_section 	= $this->PostData("Appointment and Booking","1","sixth_section");
        $seventh_section 	= $this->PostData("Appointment and Booking","1","seventh_section");
        $eight_section 	= $this->PostData("Appointment and Booking","5","eight_section");

        $all_posts = new \Illuminate\Database\Eloquent\Collection;

        $all_posts = $all_posts->merge($first_section)->merge($second_section)->merge($third_section)->merge($forth_section)->merge($fifth_section)->merge($sixth_section)->merge($seventh_section)->merge($eight_section);

        $faq = Faq::where('page_title', 'Appointment and Booking')->get();

        return view('Pages/spa_salon_appointment_booking_software', compact('appointmentsAndBooking', 'all_posts', 'faq'));
    }

    /**
     * Show spa salon point of sale software page
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function spa_salon_point_of_sale_software(){

        $billingAndPayments = Page::where('page_title', 'Billing and Payments')->get();

        $first_section 	= $this->PostData("Billing and Payments","1","first_section");
        $second_section = $this->PostData("Billing and Payments","3","second_section");
        $third_section = $this->PostData("Billing and Payments","3","third_section");
        $forth_section 	= $this->PostData("Billing and Payments","4","forth_section");
        $fifth_section 	= $this->PostData("Billing and Payments","1","fifth_section");
        $sixth_section 	= $this->PostData("Billing and Payments","8","sixth_section");
        $seventh_section 	= $this->PostData("Billing and Payments","1","seventh_section");
        $eight_section 	= $this->PostData("Billing and Payments","5","eight_section");

        $all_posts = new \Illuminate\Database\Eloquent\Collection;

        $all_posts = $all_posts->merge($first_section)->merge($second_section)->merge($third_section)->merge($forth_section)->merge($sixth_section)->merge($fifth_section)->merge($seventh_section)->merge($eight_section);

        $faq = Faq::where('page_title', 'Billing and Payments')->get();

        return view('Pages/spa_salon_point_of_sale_software', compact('billingAndPayments', 'all_posts', 'faq'));
    }

    /**
     * Show spa salon reporting analytics page
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function spa_salon_reporting_analytics() {

        $businessIntelligence = Page::where('page_title', 'Business Intelligence')->get();

        $first_section 	= $this->PostData("Business Intelligence","1","first_section");
        $second_section = $this->PostData("Business Intelligence","1","second_section");
        $third_section = $this->PostData("Business Intelligence","7","third_section");
        $forth_section 	= $this->PostData("Business Intelligence","4","forth_section");
        $fifth_section 	= $this->PostData("Business Intelligence","1","fifth_section");
        $sixth_section 	= $this->PostData("Business Intelligence","6","sixth_section");
        $seventh_section 	= $this->PostData("Business Intelligence","1","seventh_section");
        $eight_section 	= $this->PostData("Business Intelligence","1","eight_section");
        $ninth_section 	= $this->PostData("Business Intelligence","1","ninth_section");
        $tenth_section 	= $this->PostData("Business Intelligence","3","tenth_section");

        $all_posts = new \Illuminate\Database\Eloquent\Collection;

        $all_posts = $all_posts->merge($first_section)->merge($second_section)->merge($third_section)->merge($forth_section)
                    ->merge($sixth_section)->merge($fifth_section)->merge($seventh_section)
                    ->merge($eight_section)->merge($ninth_section)->merge($tenth_section);

        $faq = Faq::where('page_title', 'Billing and Payments')->get();

        return view('Pages/spa_salon_reporting_analytics', compact('businessIntelligence', 'all_posts', 'faq'));
    }

    /**
     * Show business management page
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function business_management() {

        $businessManagement = Page::where('page_title', 'Business Management')->get();

        $first_section = $this->PostData("Business Management","1","first_section");
        $second_section = $this->PostData("Business Management","4","second_section");
        $third_section = $this->PostData("Business Management","1","third_section");
        $forth_section 	= $this->PostData("Business Management","1","forth_section");
        $fifth_section 	= $this->PostData("Business Management","5","fifth_section");
        $sixth_section 	= $this->PostData("Business Management","1","sixth_section");

        $all_posts = new \Illuminate\Database\Eloquent\Collection;

        $all_posts = $all_posts->merge($first_section)->merge($second_section)->merge($third_section)->merge($forth_section)
            ->merge($sixth_section)->merge($fifth_section)->merge($sixth_section);

        $faq = Faq::where('page_title', 'Business Management')->get();

        return view('Pages/business_management', compact('businessManagement', 'all_posts', 'faq'));
    }

    /**
     * Show spa salon marketing software page
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function spa_salon_marketing_software() {

        $marketingAndSales = Page::where('page_title', 'Marketing and Sales')->get();

        $first_section = $this->PostData("Marketing and Sales","1","first_section");
        $second_section = $this->PostData("Marketing and Sales","3","second_section");
        $third_section = $this->PostData("Marketing and Sales","3","third_section");
        $forth_section 	= $this->PostData("Marketing and Sales","1","forth_section");
        $fifth_section 	= $this->PostData("Marketing and Sales","1","fifth_section");
        $sixth_section 	= $this->PostData("Marketing and Sales","3","sixth_section");
        $seventh_section = $this->PostData("Marketing and Sales","1","seventh_section");
        $eight_section 	= $this->PostData("Marketing and Sales","9","eight_section");
        $ninth_section 	= $this->PostData("Marketing and Sales","9","ninth_section");

        $all_posts = new \Illuminate\Database\Eloquent\Collection;

        $all_posts = $all_posts->merge($first_section)->merge($second_section)->merge($third_section)->merge($forth_section)
            ->merge($sixth_section)->merge($fifth_section)->merge($seventh_section)->merge( $eight_section)->merge($ninth_section);

        $faq = Faq::where('page_title', 'Marketing and Sales')->get();

        return view('Pages/spa_salon_marketing_software', compact('marketingAndSales', 'all_posts', 'faq'));
    }

    /**
     * Show mobile solutions page
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function mobile_solutions() {

        $mobileSolutions = Page::where('page_title', 'Mobile Solutions')->get();

        $first_section = $this->PostData("Mobile Solutions","1","first_section");
        $second_section = $this->PostData("Mobile Solutions","3","second_section")->reverse();
        $third_section = $this->PostData("Mobile Solutions","1","third_section");
        $forth_section 	= $this->PostData("Mobile Solutions","1","forth_section");
        $fifth_section 	= $this->PostData("Mobile Solutions","5","fifth_section");
        $sixth_section 	= $this->PostData("Mobile Solutions","1","sixth_section");
        $seventh_section = $this->PostData("Mobile Solutions","6","seventh_section");

        $all_posts = new \Illuminate\Database\Eloquent\Collection;

        $all_posts = $all_posts->merge($first_section)->merge($second_section)->merge($third_section)->merge($forth_section)
            ->merge($sixth_section)->merge($fifth_section)->merge($seventh_section);

        $faq = Faq::where('page_title', 'Mobile Solutions')->get();

        return view('Pages/mobile-solutions', compact('mobileSolutions', 'all_posts', 'faq'));
    }
}
