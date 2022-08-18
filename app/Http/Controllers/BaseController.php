<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;

use App\Models\Page;
use App\Models\Post;
use App\Models\Faq;
use App\Models\Leader;
use App\Models\History;

use PostHelper;

use TestimonialHelper;

class BaseController extends Controller
{
    /**
     * Show home page
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function home()
	{
		// $home = Page::where('page_title', 'home')->get();
		// $post = Post::where('page_title', 'home')->get();

		// $third_section = Post::where('page_title', 'home')->where('section_title','third_section')->take(3)->get();

		$page_sections = Page::where('page_title', 'home')->get();
        $sections = new \stdClass();
        foreach ($page_sections as $section) {
            $section_title = $section->section_title;
            $sections->$section_title = $section->data;
        }

		$section_1 = PostHelper::getPostData("home", "1", "section_1");
        $section_2 = PostHelper::getPostData("home", null, "section_2");
        $section_3 = PostHelper::getPostData("home", null, "section_3");
        $section_4 = PostHelper::getPostData("home", null, "section_4");
        $section_5 = PostHelper::getPostData("home", null, "section_5");

        $all_posts = new Collection;

        $all_posts = $all_posts->merge($section_1)
                                ->merge($section_2)
                                ->merge($section_3)
                                ->merge($section_4)
                                ->merge($section_5);

		$testimonials = TestimonialHelper::getTestimonialData("home");
		
		return view('pages/home', compact('sections', 'all_posts', 'testimonials'));
	}
}
