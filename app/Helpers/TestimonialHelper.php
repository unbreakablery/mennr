<?php

namespace App\Helpers;

use App\Models\Testimonial;

class TestimonialHelper
{
    /**
     * Query a Testimonial resource
     * @param $page_title
     * @param $show_count
     * @return mixed
     */
	public static function getTestimonialData($page_title, $show_count = null)
	{
		$testimonial_data = Testimonial::where('page_title', $page_title)
                                    ->latest()
                                    ->take($show_count)
                                    ->get();

		return $testimonial_data;
	}
}