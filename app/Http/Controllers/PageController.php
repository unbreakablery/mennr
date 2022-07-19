<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;

class PageController extends Controller
{
    /**
     * Show home add/edit page
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function HomeAddPage(Request $request){
    	$page = Page::where('page_title', 'home')->get();
        return view('admin.Pages.home',compact('page'));
    }

    /**
     * Create a page
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function CreatePage(Request $request){
    	$pagevalues['title'] = $request->title;
    	$datavalues = array();

    	if($request->txt_name){
    		$field = $request->txt_name;
    		if($field){
    			for($j=0;$j<count($field);$j++){
    				$text = $field[$j];
    				$tx = $request->$text;
    				$field_name = Page::where(['section_title'=>$text,'page_title'=>$pagevalues['title']])->get();
    				if(count($field_name) > 0){
    					$datavalues[$text] = $tx;
    				}
    				else{
    					$newvalues[$text] = $tx;
    				}
    			}
    		}
    	}

    	if(!empty($datavalues)){
    		foreach ($datavalues as $key => $value) {
    			$where = array('section_title' => $key, 'page_title' => $pagevalues['title']);
    			$result = Page::where($where)->update(array('data'=>$value));
    			if($result){
    				$success = 1 ;
    			}
    		}
    	}

    	if(!empty($newvalues)){
    		foreach ($newvalues as $key => $value) {
    			$data = array(
    				'page_title' => $pagevalues['title'],
    				'section_title' => $key,
    				'data' => $newvalues[$key]
    			);
    			Page::create($data);
    		}
    	}

        if($datavalues){
    	   return redirect()->back()->with(['success' => 'Page Updated Successfully']);
        }else{
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
        return view('admin.Pages.spa',compact('page'));
    }

    /**
     * Show med spa add/edit page
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function MedSpaAddPage(Request $request)
    {
        $page = Page::where('page_title', 'MedSpa')->get();
        return view('admin.Pages.medspa',compact('page'));
    }

    /**
     * Show salon add/edit page
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function SalonAddPage(Request $request)
    {
        $page = Page::where('page_title', 'Salon')->get();
        return view('admin.Pages.salon',compact('page'));
    }

    /**
     * Show fitness add/edit page
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function FitnessAddPage(Request $request)
    {
        $page = Page::where('page_title', 'Fitness')->get();
        return view('admin.Pages.fitness',compact('page'));
    }

    /**
     * Show billing and payment add/edit page
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function CompanyAddPage(Request $request)
    {
        $page = Page::where('page_title', 'Company')->get();
        return view('admin.Pages.company',compact('page'));
    }

    /**
     * Show appointments and bookings add/edit page
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function AppointmentsAndBookingAddPage(){
        $page = Page::where('page_title', 'Appointments and Booking')->get();
        return view('admin.Pages.appointmentsAndBookingPage', compact('page'));
    }

    /**
     * Show billing and payment add/edit page
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function BillingAndPayments(){
        $page = Page::where('page_title', 'Billing and Payments')->get();
        return view('admin.Pages.billingAndPayments',compact('page'));
    }

    /**
     * Show Business Intelligence add/edit page
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function BusinessIntelligence(){
        $page = Page::where('page_title', 'Business Intelligence')->get();
        return view('admin.Pages.businessIntelligence', compact('page'));
    }

    /**
     * Show business management add/edit page
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function BusinessManagement(){
        $page = Page::where('page_title', 'Business Management')->get();
        return view('admin.Pages.businessManagement', compact('page'));
    }

    /**
     * Show mobile solutions add/edit page
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function MobileSolutions(){
        $page = Page::where('page_title', 'Mobile Solutions')->get();
        return view('admin.Pages.mobileSolutions', compact('page'));
    }

    /**
     * Show marketing and sales add/edit page
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function MarketingAndSales(){
        $page = Page::where('page_title', 'Marketing and Sales')->get();
        return view('admin.Pages.marketingAndSales', compact('page'));
    }
}
