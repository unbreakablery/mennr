<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use PostHelper;

class RourcesController extends Controller
{
    /**
     * Show resource page
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
	public function resource() {

		$first_section 	= PostHelper::getPostData("Resource", "3", "first_section");

		return view('pages/resources', compact('first_section'));
	}
}
