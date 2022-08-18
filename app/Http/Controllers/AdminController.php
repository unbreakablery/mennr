<?php

namespace App\Http\Controllers;

use App\Mail\GetFreeDemoEmail;
use Illuminate\Http\Request;
use Validator;
use App\Models\Admin;
use App\Models\Newsletter;
use App\Models\FreeDemo;
use Session;
use Auth;
use Illuminate\Support\Facades\Mail;

class AdminController extends Controller
{
    public function index()
    {
    	return view('admin.login');
    }
    public function makeLogin(Request $request)
    {
    	$validator = Validator::make($request->all(),
    		[
    			'username'	=> 	'requried',
    			'password'	=>	'requried',
    		]);

    	$data = array(
    		'username' => $request->username,
    		'password' => $request->password
    	);
    	if(Auth::guard('admin')->attempt($data)){
    		return redirect(route('admin.dashboard'));
    	}
    	else{
    		return back()->withErrors(['message'=> 'Invalid User name or Password']);
    	}
    	
    }

    public function dashboard(){
    	return view('admin.dashboard');
    }

    public function logout(Request $request) {
        
        Auth::logout();
        return redirect()->route('login');
    }

	/* newsletter function */
	public function newsLetterList()
	{
		$emailList = Newsletter::orderBy('id','DESC')->paginate(20);

		return view('admin.newsletter.index',compact('emailList'));
	}
	public function newsletterDestroy(Newsletter $newsletter)
	{
		$newsletter->delete();
        return redirect()->route('newsletter.list')
            ->with('success', 'Email deleted successfully');
	}

	// Get A Free Demo actions 
	public function applicantsList() {
		$applicants = FreeDemo::paginate(20);
        return view('admin.free_demos.index', compact('applicants'));
	}
	public function addApplicant() {
		return view('admin.free_demos.create');
	}
	public function saveApplicant(Request $request) {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'business_name' => 'required',
            'business_type' => 'required',
            'employees' => 'required'
        ]);

        $free_demos = FreeDemo::where('email', $request->get('email'))
                            ->where('business_type', $request->get('business_type'))
                            ->where(function($query) {
                                $query->where('status', 'pending')
                                    ->orWhere('status', 'accepted');
                            })
                            ->get();

        if (count($free_demos) > 0) {
            return redirect()->route('gafd.add')->with('danger', 'You already required to get a free demo!');
        }
        
        $data = $request->all();
        $data['status'] = 'pending';
        
        $result = FreeDemo::create($data);

        foreach (config('app.support_emails') as $email) {
            Mail::to($email)->send(new GetFreeDemoEmail($data));
        }
        
        if ($result) {
            return redirect()->route('gafd.list')->with('success', 'Your request has been sent successfully!');
        } else {
            return redirect()->route('gafd.list')->with('danger', 'Error on operation, please re-try!');
        }
    }
	public function editApplicant(FreeDemo $applicant) {
		return view('admin.free_demos.edit', compact('applicant'));
	}
	public function updateApplicant(Request $request, FreeDemo $applicant)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'business_name' => 'required',
            'business_type' => 'required',
            'employees' => 'required',
			'status' => 'required'
        ]);

        $data['first_name'] = $request->get('first_name');
		$data['last_name'] = $request->get('last_name');
		$data['email'] = $request->get('email');
		$data['phone'] = $request->get('phone');
		$data['business_name'] = $request->get('business_name');
		$data['business_type'] = $request->get('business_type');
		$data['employees'] = $request->get('employees');
		$data['status'] = $request->get('status');
		
        $applicant->update($data);

        return redirect()->route('gafd.list')->with('success', 'Applicant updated successfully');
    }
	public function deleteApplicant(FreeDemo $applicant) {
		$applicant->delete();
		return redirect()->route('gafd.list')->with('success', 'Applicant deleted successfully');
	}
}
