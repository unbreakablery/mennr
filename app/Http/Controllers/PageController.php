<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;

use PostHelper;
use TestimonialHelper;

class PageController extends Controller
{
    /**
     * Show home add/edit page
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function HomeAddPage(Request $request)
    {
        $page = Page::where('page_title', 'home')->get();

        $posts = PostHelper::getPagePosts('home');
        $testimonials = TestimonialHelper::getTestimonialData('home');

        return view('admin.Pages.home', compact('page', 'posts', 'testimonials'));
    }

    /**
     * Show solutions add/edit page
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function SolutionsAddPage(Request $request)
    {
        $page = Page::where('page_title', 'solutions')->get();

        $posts = PostHelper::getPagePosts('solutions');
        $testimonials = TestimonialHelper::getTestimonialData('solutions');

        return view('admin.Pages.solutions', compact('page', 'posts', 'testimonials'));
    }

    /**
     * Create a page
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function CreatePage(Request $request)
    {
        $pagevalues['title'] = $request->title;
        $datavalues = array();

        if ($request->txt_name) {
            $field = $request->txt_name;
            if ($field) {
                for ($j = 0; $j < count($field); $j++) {
                    $text = $field[$j];
                    $tx = $request->$text;
                    $field_name = Page::where(['section_title' => $text, 'page_title' => $pagevalues['title']])->get();
                    if (count($field_name) > 0) {
                        $datavalues[$text] = $tx;
                    } else {
                        $newvalues[$text] = $tx;
                    }
                }
            }
        }

        if (!empty($datavalues)) {
            foreach ($datavalues as $key => $value) {
                $where = array('section_title' => $key, 'page_title' => $pagevalues['title']);
                $result = Page::where($where)->update(array('data' => $value));
                if ($result) {
                    $success = 1;
                }
            }
        }

        if (!empty($newvalues)) {
            foreach ($newvalues as $key => $value) {
                $data = array(
                    'page_title' => $pagevalues['title'],
                    'section_title' => $key,
                    'data' => $newvalues[$key]
                );
                Page::create($data);
            }
        }

        if ($datavalues) {
            return redirect()->back()->with(['success' => 'Page Updated Successfully']);
        } else {
            return redirect()->back()->with(['success' => 'Page Added Successfully']);
        }
    }

    /**
     * Show spa add/edit page
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function SpaAddPage(Request $request)
    {
        $page = Page::where('page_title', 'Spa')->get();
        return view('admin.Pages.spa', compact('page'));
    }

    /**
     * Show med spa add/edit page
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function MedSpaAddPage(Request $request)
    {
        $page = Page::where('page_title', 'MedSpa')->get();
        return view('admin.Pages.medspa', compact('page'));
    }

    /**
     * Show salon add/edit page
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function SalonAddPage(Request $request)
    {
        $page = Page::where('page_title', 'Salon')->get();
        return view('admin.Pages.salon', compact('page'));
    }

    /**
     * Show fitness add/edit page
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function FitnessAddPage(Request $request)
    {
        $page = Page::where('page_title', 'Fitness')->get();
        return view('admin.Pages.fitness', compact('page'));
    }

    /**
     * Show billing and payment add/edit page
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function CompanyAddPage(Request $request)
    {
        $page = Page::where('page_title', 'Company')->get();
        return view('admin.Pages.company', compact('page'));
    }

    /**
     * Show appointments and bookings add/edit page
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function AppointmentsAndBookingAddPage()
    {
        $page = Page::where('page_title', 'Appointment and Booking')->get();

        $posts = PostHelper::getPagePosts('Appointment and Booking');
        $testimonials = TestimonialHelper::getTestimonialData('Appointment and Booking');

        return view('admin.Pages.appointmentsAndBookingPage', compact('page', 'posts', 'testimonials'));
    }

    /**
     * Show billing and payment add/edit page
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function BillingAndPayments()
    {
        $page = Page::where('page_title', 'Billing and Payments')->get();

        $posts = PostHelper::getPagePosts('Billing and Payments');
        $testimonials = TestimonialHelper::getTestimonialData('Billing and Payments');

        return view('admin.Pages.billingAndPayments', compact('page', 'posts', 'testimonials'));
    }

    /**
     * Show Business Intelligence add/edit page
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function BusinessIntelligence()
    {
        $page = Page::where('page_title', 'Business Intelligence')->get();
        return view('admin.Pages.businessIntelligence', compact('page'));
    }

    /**
     * Show business management add/edit page
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function BusinessManagement()
    {
        $page = Page::where('page_title', 'Business Management')->get();

        $posts = PostHelper::getPagePosts('Business Management');
        $testimonials = TestimonialHelper::getTestimonialData('Business Management');

        return view('admin.Pages.businessManagement', compact('page', 'posts', 'testimonials'));
    }

    /**
     * Show mobile solutions add/edit page
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function MobileSolutions()
    {
        $page = Page::where('page_title', 'Mobile Solutions')->get();
        return view('admin.Pages.mobileSolutions', compact('page'));
    }

    /**
     * Show marketing and sales add/edit page
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function MarketingAndSales()
    {
        $page = Page::where('page_title', 'Marketing and Sales')->get();

        $posts = PostHelper::getPagePosts('Marketing and Sales');
        $testimonials = TestimonialHelper::getTestimonialData('Marketing and Sales');

        return view('admin.Pages.marketingAndSales', compact('page', 'posts', 'testimonials'));
    }

    /**
     * Show Careers add/edit page
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function CareersAddPage(Request $request)
    {
        $page = Page::where('page_title', 'careers')->get();

        $posts = PostHelper::getPagePosts('careers');
        $testimonials = TestimonialHelper::getTestimonialData('careers');

        return view('admin.Pages.careers', compact('page', 'posts', 'testimonials'));
    }

    /**
     * Show About add/edit page
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function AboutAddPage(Request $request)
    {
        $page = Page::where('page_title', 'about')->get();

        $posts = PostHelper::getPagePosts('about');
        $testimonials = TestimonialHelper::getTestimonialData('about');

        return view('admin.Pages.about', compact('page', 'posts', 'testimonials'));
    }

    /**
     * Show Pricing add/edit page
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function PricingAddPage(Request $request)
    {
        $page = Page::where('page_title', 'pricing')->get();

        $posts = PostHelper::getPagePosts('pricing');
        $testimonials = TestimonialHelper::getTestimonialData('pricing');

        return view('admin.Pages.pricing', compact('page', 'posts', 'testimonials'));
    }
}
