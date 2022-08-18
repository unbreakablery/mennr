<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;
use Auth;
use PostHelper;
use TestimonialHelper;
use UtilsHelper;
use App\Models\Page;
use App\Models\Faq;
use App\Models\Plan;
use App\Models\Pricing;
use App\Models\UserPlan;

class PricingController extends Controller
{
    /**
     * Show Pricing page
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $page_sections = Page::where('page_title', 'pricing')->get();
        $sections = new \stdClass();
        foreach ($page_sections as $section) {
            $section_title = $section->section_title;
            $sections->$section_title = $section->data;
        }

        $section_1 = PostHelper::getPostData("pricing", "1", "section_1");

        $all_posts = new Collection;

        $all_posts = $all_posts->merge($section_1);

        $plans = UtilsHelper::getAllPlans();

        $testimonials = TestimonialHelper::getTestimonialData("pricing");

        $faqs = Faq::where('page_title', 'pricing')
            ->select('id', 'question', 'answer')
            ->get();

        return view('pages/pricing/pricing', compact('sections', 'all_posts', 'plans', 'testimonials', 'faqs'));
    }

    /**
     * Show pricing page
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function pricingOld()
    {
        return view('pages/pricing-old');
    }

    public function pricingButton(Request $request, $type)
    {
        if (Auth::check()) {
            // The user is logged in...
            if ($type == "free") {
                app('App\Http\Controllers\SubscriptionController')->checkout($type, 0);
            } else if ($type == "pro") {
                app('App\Http\Controllers\SubscriptionController')->checkout($type, 99);
            } else {
                app('App\Http\Controllers\SubscriptionController')->checkout($type, 299);
            }
            // $plan_name = $request->get('plan_name');
            // $plan_price = $request->get('plan_price');
        } else {
            // Redirect login/signup page...
            return redirect('login');
        }
    }

    public function startTrial(Request $request, $plan)
    {
        // dd($plan);
        if (Auth::check()) {
            return redirect()->route('pricing.payment', ['plan' => $plan]);
        } else {
            return view('pages/pricing/signup', compact('plan'));
        }
    }

    public function payment(Request $request, $plan)
    {
        //dd($plan);
        /** Edited by Rajnish - for creating payment page with final html */
        $planDetails = Plan::find($plan);
        if ($planDetails) {
            return view('pages.pricing.payment', compact('planDetails'));
        }

        return redirect()->back();
    }

    public function capturePayment(Request $request)
    {
        $data = $request->all();
        $planDetails = Plan::find($data['plan_id']);
        $user = Auth::user();

        if ($planDetails) {

            $userPlan = UserPlan::create([
                'user_id' => $user->id,
                'plan_id' => $planDetails->id,
                'previous_plan' => 0,
                'last_payment' => $planDetails->price,
            ]);
            return redirect()->route('payment.success');
        }

        return redirect()->back();
    }

    public function paymentSuccessView()
    {
        return view('pages.pricing.success');
    }
}
