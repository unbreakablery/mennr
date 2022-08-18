<?php

namespace App\Http\Controllers;

use App\Helpers\TestimonialHelper;
use App\Mail\ContactEmail;
use App\Models\Contact;
use App\Models\ContactSave;
use App\Models\Faq;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;

use Illuminate\Support\Facades\Mail;
use PostHelper;

use App\Models\Page;
use App\Models\Leader;
use App\Models\History;
use Illuminate\Support\Facades\Log;
use UtilsHelper;

class CompanyController extends Controller
{
	/**
	 * Show company page
	 * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
	 */
	public function company()
	{

		$company = Page::where('page_title', 'Company')->get();

		$first_section 	= PostHelper::getPostData("Company", "1", "first_section");
		$forth_section 	= PostHelper::getPostData("Company", "1", "forth_section");
		$seventh_section = PostHelper::getPostData("Company", "6", "seventh_section");
		$ninth_section 	= PostHelper::getPostData("Company", "1", "ninth_section");

		$all_posts = new Collection;

		$all_posts = $all_posts->merge($first_section)
			->merge($forth_section)
			->merge($seventh_section)
			->merge($ninth_section);

		$leaders = Leader::where('group', 'Leader')->latest()->take(12)->get();
		$executives = Leader::where('group', 'Executive')->latest()->take(10)->get();
		$history = History::all();

		return view('pages/company', compact('company', 'all_posts', 'leaders', 'executives', 'history'));
	}

	/**
	 * Show about page
	 * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
	 */
	public function about()
	{
        $page_sections = Page::where('page_title', 'about')->get();
        $sections = new \stdClass();
        foreach ($page_sections as $section) {
            $section_title = $section->section_title;
            $sections->$section_title = $section->data;
        }

        return view('pages/about', compact('sections'));
	}

	/**
	 * Show careers page
	 * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
	 */
	public function careers()
	{
		$page_sections = Page::where('page_title', 'careers')->get();
		$sections = new \stdClass();
		foreach ($page_sections as $section) {
			$section_title = $section->section_title;
			$sections->$section_title = $section->data;
		}

		$section_1 = PostHelper::getPostData("careers", "1", "section_1");
		$section_2 = PostHelper::getPostData("careers", null, "section_2");
		$section_3 = PostHelper::getPostData("careers", null, "section_3");
		$section_4 = PostHelper::getPostData("careers", null, "section_4");
		$section_5 = PostHelper::getPostData("careers", null, "section_5");

		$all_posts = new Collection;

		$all_posts = $all_posts->merge($section_1)
			->merge($section_2)
			->merge($section_3)
			->merge($section_4)
			->merge($section_5);

		$testimonials = TestimonialHelper::getTestimonialData("careers");
		return view('pages/careers', compact('sections', 'all_posts', 'testimonials'));
	}

	/**
	 * Show contact page
	 * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
	 */
	public function contact()
	{
		$data['contact'] = Contact::where('id', 1)->first();
		return view('pages/contact', $data);
	}

	public function sendContact(Request $request)
	{
		$request->validate([
			'first_name' => 'required',
			'last_name' => 'required',
			'email' => 'required|email',
			'phone' => 'required|min:10',
			'business_type' => 'required',
			'employees_count' => 'required',
			'business_name' => 'required',
			'query_type' => 'required',
			'message' => 'required',
		]);
		$input = $request->all();
		ContactSave::create($input);

		try {
			$details = [
				'title' => 'You have subscribed to our Mailing List!',
				'body' => 'This is for testing email using Mailtrap smtp.'
			];
			foreach (config('app.support_emails') as $email) {
				Mail::to($email)->send(new ContactEmail($details));
			}
			//Mail::to(env('ADMIN_EMAIL'))->send(new ContactEmail($details));
			//$this->sendMail($request, 'contactTemplate');

			return redirect()->back()->with('message', 'Your contact message send to admin.');
		} catch (\Exception $e) {
			Log::info('Mail Send Exception In Contact ====>' . $e->getMessage());
			return redirect()->back()->with('danger', 'Oops! Something went wrong while submitting the form.');
		}
	}
}
