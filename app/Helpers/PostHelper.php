<?php

namespace App\Helpers;

use App\Models\Post;

class PostHelper
{
    /**
     * Query a post resource
     * @param $page_title
     * @param $show_post
     * @param $section_title
     * @param $latest
     * @return mixed
     */
	public static function getPostData($page_title, $show_post = null, $section_title, $latest = false)
	{
        if ($latest === true)
		    $post_data = Post::where('page_title', $page_title)->where('section_title', $section_title)->latest()->take($show_post)->get();
        else
            $post_data = Post::where('page_title', $page_title)->where('section_title', $section_title)->take($show_post)->get();

		return $post_data;
	}

    /**
     * Query a post resource
     * @param $page_title
     * @return mixed
     */
	public static function getPagePosts($page_title)
	{
        $post_data = Post::where('page_title', $page_title)->get();
        
		return $post_data;
	}
}