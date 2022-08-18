<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;

use PostHelper;
use TestimonialHelper;

use App\Models\Page;
use App\Models\Faq;

class SolutionsController extends Controller
{
    /**
     * Show spa salon appointment booking software page
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
	public function appointment_booking() {

        $page_sections = Page::where('page_title', 'Appointment and Booking')->get();
        $sections = new \stdClass();
        foreach ($page_sections as $section) {
            $section_title = $section->section_title;
            $sections->$section_title = $section->data;
        }

        $section_1 = PostHelper::getPostData("Appointment and Booking", "1", "section_1");
        $section_2 = PostHelper::getPostData("Appointment and Booking", "3", "section_2");
        $section_3 = PostHelper::getPostData("Appointment and Booking", "3", "section_3");
        $section_4 = PostHelper::getPostData("Appointment and Booking", "3", "section_4");
        $section_5 = PostHelper::getPostData("Appointment and Booking", "6", "section_5");
        $section_6 = PostHelper::getPostData("Appointment and Booking", "1", "section_6");
        $section_7 = PostHelper::getPostData("Appointment and Booking", "1", "section_7");
        $section_8 = PostHelper::getPostData("Appointment and Booking", "5", "section_8");

        $all_posts = new Collection;

        $all_posts = $all_posts->merge($section_1)
                                ->merge($section_2)
                                ->merge($section_3)
                                ->merge($section_4)
                                ->merge($section_5)
                                ->merge($section_6)
                                ->merge($section_7)
                                ->merge($section_8);

        $testimonials = TestimonialHelper::getTestimonialData("Appointment and Booking");

        $faq = Faq::where('page_title', 'Appointment and Booking')->get();

        return view('pages/solutions/appointment_booking', compact('sections', 'all_posts', 'testimonials', 'faq'));
    }

    /**
     * Show spa salon point of sale software page
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function billing_payment() {
        $page_sections = Page::where('page_title', 'Billing and Payments')->get();
        $sections = new \stdClass();
        foreach ($page_sections as $section) {
            $section_title = $section->section_title;
            $sections->$section_title = $section->data;
        }

        $section_1 = PostHelper::getPostData("Billing and Payments", "1", "section_1");
        $section_2 = PostHelper::getPostData("Billing and Payments", "3", "section_2");
        $section_3 = PostHelper::getPostData("Billing and Payments", "3", "section_3");
        $section_4 = PostHelper::getPostData("Billing and Payments", "4", "section_4");
        $section_5 = PostHelper::getPostData("Billing and Payments", "1", "section_5");
        $section_6 = PostHelper::getPostData("Billing and Payments", "8", "section_6");
        $section_7 = PostHelper::getPostData("Billing and Payments", "1", "section_7");
        $section_8 = PostHelper::getPostData("Billing and Payments", "5", "section_8");

        $all_posts = new Collection;

        $all_posts = $all_posts->merge($section_1)
                                ->merge($section_2)
                                ->merge($section_3)
                                ->merge($section_4)
                                ->merge($section_5)
                                ->merge($section_6)
                                ->merge($section_7)
                                ->merge($section_8);

        $testimonials = TestimonialHelper::getTestimonialData("Billing and Payments");

        $faq = Faq::where('page_title', 'Billing and Payments')->get();

        return view('pages/solutions/billing_payment', compact('sections', 'all_posts', 'testimonials', 'faq'));
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
        $page_sections = Page::where('page_title', 'Business Management')->get();
        $sections = new \stdClass();
        foreach ($page_sections as $section) {
            $section_title = $section->section_title;
            $sections->$section_title = $section->data;
        }

        $section_1 = PostHelper::getPostData("Business Management", "1", "section_1");
        $section_2 = PostHelper::getPostData("Business Management", "4", "section_2");
        $section_3 = PostHelper::getPostData("Business Management", "1", "section_3");
        $section_4 = PostHelper::getPostData("Business Management", "1", "section_4");
        $section_5 = PostHelper::getPostData("Business Management", "5", "section_5");
        $section_6 = PostHelper::getPostData("Business Management", "1", "section_6");
        
        $all_posts = new Collection;

        $all_posts = $all_posts->merge($section_1)
                                ->merge($section_2)
                                ->merge($section_3)
                                ->merge($section_4)
                                ->merge($section_5)
                                ->merge($section_6);

        $faq = Faq::where('page_title', 'Business Management')->get();

        return view('pages/solutions/business_management', compact('sections', 'all_posts', 'faq'));
    }

    /**
     * Show spa salon marketing software page
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function marketing_sales() {
        $page_sections = Page::where('page_title', 'Marketing and Sales')->get();
        $sections = new \stdClass();
        foreach ($page_sections as $section) {
            $section_title = $section->section_title;
            $sections->$section_title = $section->data;
        }

        $section_1 = PostHelper::getPostData("Marketing and Sales", "1", "section_1");
        $section_2 = PostHelper::getPostData("Marketing and Sales", "3", "section_2");
        $section_3 = PostHelper::getPostData("Marketing and Sales", "3", "section_3");
        $section_4 = PostHelper::getPostData("Marketing and Sales", "1", "section_4");
        $section_5 = PostHelper::getPostData("Marketing and Sales", "1", "section_5");
        $section_6 = PostHelper::getPostData("Marketing and Sales", "3", "section_6");
        $section_7 = PostHelper::getPostData("Marketing and Sales", "1", "section_7");
        $section_8 = PostHelper::getPostData("Marketing and Sales", "9", "section_8");
        $section_9 = PostHelper::getPostData("Marketing and Sales", "8", "section_9");

        $all_posts = new Collection;

        $all_posts = $all_posts->merge($section_1)
                                ->merge($section_2)
                                ->merge($section_3)
                                ->merge($section_4)
                                ->merge($section_5)
                                ->merge($section_6)
                                ->merge($section_7)
                                ->merge($section_8)
                                ->merge($section_9);

        $faq = Faq::where('page_title', 'Marketing and Sales')->get();

        return view('pages/solutions/marketing', compact('sections', 'all_posts', 'faq'));
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

    /**
     * Show spa page
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
	public function spa() {
		$spa = Page::where('page_title', 'Spa')->get();
        $sections = new \stdClass();
        foreach ($spa as $section) {
            $section_title = $section->section_title;
            $sections->$section_title = $section->data;
        }
        
		$section_1 = PostHelper::getPostData("Spa", "1", "section_1");
		$section_2 = PostHelper::getPostData("Spa", "3", "section_2");
		$section_3 = PostHelper::getPostData("Spa", "2", "section_3");
		$section_4 = PostHelper::getPostData("Spa", "4", "section_4");
		$section_5 = PostHelper::getPostData("Spa", "4", "section_5");
		$section_6 = PostHelper::getPostData("Spa", "5", "section_6");
		$section_7 = PostHelper::getPostData("Spa", "1", "section_7");

		$all_posts = new Collection;

		$all_posts = $all_posts->merge($section_1)
                                ->merge($section_2)
                                ->merge($section_3)
                                ->merge($section_4)
                                ->merge($section_5)
                                ->merge($section_6)
                                ->merge($section_7);

		$faq = Faq::where('page_title', 'Spa')->get();

        // dd($all_posts);
        // dd($spa);

		return view('pages/solutions/spa', compact('sections', 'all_posts', 'faq'));
	}

    /**
     * Show medspa page
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
	public function medical_spa() {

		$medspa = Page::where('page_title', 'Medspa')->get();

		$first_section 	= PostHelper::getPostData("Medspa", "1", "first_section");
		$second_section = PostHelper::getPostData("Medspa", "2", "second_section");
		$third_section 	= PostHelper::getPostData("Medspa", "5", "third_section");
		$forth_section 	= PostHelper::getPostData("Medspa", "4", "forth_section");
		$fifth_section 	= PostHelper::getPostData("Medspa", "5", "fifth_section");
		$fifth_section 	= PostHelper::getPostData("Medspa", "5", "fifth_section");

		$all_posts = new Collection;

		$all_posts = $all_posts->merge($first_section)->merge($second_section)->merge($third_section)->merge($forth_section)->merge($fifth_section);

		$faq = Faq::where('page_title', 'Medspa')->get();

		return view('pages/solutions/medspa', compact('medspa', 'all_posts', 'faq'));
	}

    /**
     * Show salon page
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
	public function salon() {

		$salon = Page::where('page_title', 'Salon')->get();

		$first_section 	= PostHelper::getPostData("Salon", "1", "first_section");
		$second_section = PostHelper::getPostData("Salon", "3", "second_section");
		$forth_section 	= PostHelper::getPostData("Salon", "5", "forth_section");
		$fifth_section 	= PostHelper::getPostData("Salon", "5", "fifth_section");
		$sixth_section 	= PostHelper::getPostData("Salon", "5", "sixth_section");

		$all_posts = new Collection;

		$all_posts = $all_posts->merge($first_section)->merge($second_section)->merge($forth_section)->merge($fifth_section)->merge($sixth_section);

		$faq = Faq::where('page_title', 'Salon')->get();

		return view('pages/solutions/salon', compact('salon', 'all_posts', 'faq'));
	}

    /**
     * Show fitness page
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
	public function fitness() {

		$fitness = Page::where('page_title', 'Fitness')->get();

		$first_section 	= PostHelper::getPostData("Fitness", "1"," first_section");
		$second_section = PostHelper::getPostData("Fitness", "7", "second_section");
		$third_section 	= PostHelper::getPostData("Fitness", "5", "third_section");
		$forth_section 	= PostHelper::getPostData("Fitness", "6", "forth_section");
		$fifth_a_section = PostHelper::getPostData("Fitness", "1", "fifth_a_section");
		$fifth_b_section = PostHelper::getPostData("Fitness", "1", "fifth_b_section");
		$sixth_section 	= PostHelper::getPostData("Fitness", "6", "sixth_section");

		$all_posts = new Collection;

		$all_posts = $all_posts->merge($first_section)->merge($second_section)->merge($third_section)->merge($forth_section)->merge($fifth_a_section)->merge($fifth_b_section)->merge($sixth_section);

		$faq = Faq::where('page_title', 'Fitness')->get();

		return view('pages/solutions/fitness', compact('fitness', 'all_posts', 'faq'));
	}

	/**
     * Show elevate your customer experience page
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
	public function elevate() {
		return view('pages/solutions/elevate');
	}

	/**
     * Show unify your brand and operations page
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
	public function unify() {
		return view('pages/solutions/unify');
	}

	/**
     * Show automate with AI page
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
	public function automate() {
		return view('pages/solutions/automate');
	}

    /**
     * Show solutions
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
	public function solutions() {
        $section_1 = PostHelper::getPostData("solutions", "1", "section_1");
        $section_2 = PostHelper::getPostData("solutions", "1", "section_2");
        $section_3 = PostHelper::getPostData("solutions", "1", "section_3");
        $section_4 = PostHelper::getPostData("solutions", "1", "section_4");
        $section_5 = PostHelper::getPostData("solutions", "1", "section_5");
        $section_6 = PostHelper::getPostData("solutions", "1", "section_6");
        $section_7 = PostHelper::getPostData("solutions", "1", "section_7");
        $section_8 = PostHelper::getPostData("solutions", "1", "section_8");
        $section_9 = PostHelper::getPostData("solutions", "1", "section_9");
        $section_10 = PostHelper::getPostData("solutions", "1", "section_10");
        $section_11 = PostHelper::getPostData("solutions", "1", "section_11");
        $section_12 = PostHelper::getPostData("solutions", "1", "section_12");
        $section_13 = PostHelper::getPostData("solutions", "1", "section_13");
        $section_14 = PostHelper::getPostData("solutions", "1", "section_14");

        $all_posts = new Collection;

        $all_posts = $all_posts->merge($section_1)
                                ->merge($section_2)
                                ->merge($section_3)
                                ->merge($section_4)
                                ->merge($section_5)
                                ->merge($section_6)
                                ->merge($section_7)
                                ->merge($section_8)
                                ->merge($section_9)
                                ->merge($section_10)
                                ->merge($section_11)
                                ->merge($section_12)
                                ->merge($section_13)
                                ->merge($section_14);

		return view('pages/solutions/index', compact('all_posts'));
	}
}
