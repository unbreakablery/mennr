<?php

namespace App\Http\Controllers;

use App\Mail\SubscribeEmail;
use App\Models\Admin;
use App\Models\Newsletter;
use App\Models\Plan;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\UserPlan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class FrontUserController extends Controller
{
    public function signup()
    {
        return view('pages.signup');
    }

    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'mobile' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'password' => 'required|min:6',
            'company' => 'required',
            'business_type' => 'required',
            'employees_count' => 'required',
        ]);

        $data = $request->all();

        $data['user_level'] = config('app.role_customer'); // assign as customer

        //$data['password'] = bcrypt($request->password);

        $check = User::create($data);

        $credentials = ['email' => $request->email, 'password' => $request->password];

        if (Auth::guard('web')->attempt($credentials)) {
            //return redirect()->route("about")->with('success','You have signed-in');

            return redirect()->route('customer.dashboard')->with('success', 'You have successfully registered!');
        } else {
            return redirect()->route("customer.signup")->with('danger', 'Invalid Credentials!');
        }
    }

    // Log in form
    public function loginForm()
    {
        return view('pages.login');
    }

    // Log in User
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::guard('web')->attempt($credentials)) {

            return redirect()->route('customer.dashboard');
        } else if (Auth::guard('admin')->attempt($credentials)) {
            //return redirect('/');
            return redirect('dashboard');
        }

        return redirect()->route("customer.loginForm")->with('danger', 'Login details are not valid');
    }

    // Log out User
    public function logout()
    {
        Auth::guard('web')->logout();
        return redirect()->route("customer.loginForm")->with('success', 'You have logged out!');
    }

    public function customerDashboard()
    {
        if (Auth::check()) {
            return view('pages.customer.dashboard');
        } else {
            return redirect()->route("customer.loginForm");
        }
    }

    /** Edit customer profile details view */
    public function editProfileDetailsView()
    {
        if (Auth::check()) {
            return view('pages.customer.edit-profile');
        } else {
            return redirect()->route("customer.loginForm");
        }
    }
    /** Update customer Profile Details */
    public function updateProfileDetails(Request $request)
    {
        if (Auth::check()) {
            //validation rules
            $user = Auth::user();

            $request->validate([
                'name' => 'required',
                'email' => 'required|email|unique:users,email,' . $user->id,
                'mobile' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
                'company' => 'required',
                'business_type' => 'required',
                'location' => 'required',
                'locations_count' => 'required',
                'employees_count' => 'required',
            ]);


            $user->name = $request['name'];
            $user->email = $request['email'];
            $user->mobile = $request['mobile'];
            $user->company = $request['company'];
            $user->business_type = $request['business_type'];
            $user->location = $request['location'];
            $user->locations_count = $request['locations_count'];
            $user->employees_count = $request['employees_count'];

            $user->save();

            return back()->with('success', 'Profile details updated successfully!');
        } else {
            return redirect()->route("customer.loginForm");
        }
    }

    /** Manage Solution View function for customer */
    public function manageSolutionView()
    {
        if (Auth::check()) {

            $user = Auth::user();

            $activePlan = $user->currentPlan;

            $plans = [];
            $selectedplan = [];
            if ($activePlan) {
                $selectedplan = $activePlan->plan;
            } else {
                $plans = Plan::all();
            }

            return view('pages.customer.manage-solution', compact('plans', 'activePlan', 'selectedplan'));
        } else {
            return redirect()->route("customer.loginForm");
        }
    }

    // News Letter store action
    public function storeNewsletter(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
        ]);

        $data = $request->all();

        $email = Newsletter::whereEmail($data['email'])->first();
        if ($email) {

            if ($email->status == 1) {
                // already subscribed email
                return response()->json(['success' => 'You have already Subscribed!']);
            } else {
                // emali exist but status was 0
                $check = Newsletter::whereId($email->id)->update(['status' => '1']);
                return response()->json(['success' => 'You have Subscribed successfully!']);
            }
        }

        Newsletter::create($data);
        // sent email
        $details = [
            'title' => 'You have subscribed to our Mailing List!',
            'body' => '',
            'link' => route('customer.newsletter.unsubscribe', ['email' => encrypt($data['email'])])
        ];
        foreach (config('app.support_emails') as $email) {
            Mail::to($email)->send(new SubscribeEmail($details));
        }
        //Mail::to(config('app.support_emails'))->send(new SubscribeEmail($details));

        return response()->json(['success' => 'You have Subscribed successfully!']);
    }
    // Newsletter UnSubscribe page
    public function storeNewsletterUnsubscribe($email)
    {
        $data['email'] = decrypt($email);
        return view('pages.emailunsubscribe', $data);
    }
    // Newsletter Remove Email
    public function removeNewsletterEmail(Request $request)
    {
        //dd($request->all());
        $data = $request->all();
        $request->validate([
            'email' => 'required|email',
            'removeemail' => 'required'
        ]);

        if ($data['removeemail'] == 'on') {
            // update status 0 for this email
            $email = Newsletter::whereEmail($data['email'])->first();
            if ($email) {
                if ($email->status == 1) {
                    // already subscribed email
                    $check = Newsletter::whereEmail($email->email)->update(['status' => '0']);
                    return redirect()->back()->with('success', 'You have successfully unsubscribed!');
                } else {
                    // emali exist but status was 0
                    return redirect()->back()->with('success', 'You have already unsubscribed!');
                }
            } else {
                return redirect()->back()->with('danger', 'Email not found!');
            }
        }

        return redirect()->back()->with('danger', 'Something went wrong!');
    }
}
