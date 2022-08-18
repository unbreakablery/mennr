<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Stripe;
use Illuminate\Support\Str;
use Session;


class SubscriptionController extends Controller
{
    public function index()
    {
     	$session_data = Session::get('data');
     	// dd($session_data);
     	// dd($session_data['first_name']);

        return view('subscription.create', compact('session_data'));
    }

    /**
     * Create a subscription
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function orderPost(Request $request)
    {

            $user_name = $request->card_holder_name;
            $random_password = Str::random(40);

            $data['name'] = $user_name;
            $data['email'] = $request->email;
            $data['password'] = $random_password;

            $user_exist = User::where('name', $user_name)->first();

            if($user_exist == null){
            	User::create($data);
            }

            $user = User::where('name', $user_name)->first();

            $input = $request->all();

            $token =  $request->stripeToken;

            $paymentMethod = $request->paymentMethod;

            try {

                Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

                if (is_null($user->stripe_id)) {
                    $stripeCustomer = $user->createAsStripeCustomer();
                }

                \Stripe\Customer::createSource(
                    $user->stripe_id,
                    ['source' => $token]
                );

                $user->newSubscription('test',$input['plan'])
                    ->create($paymentMethod, [
                    'email' => $user->email,
                ]);

                return redirect('/')->with('success', 'Thank you! Your submission has been received!');
            } catch (Exception $e) {
                return back()->with('danger',$e->getMessage());
            }

    }

    public function checkout($plan_name, $plan_price) {
        return view('pages/subscription/checkout', compact('plan_name', 'plan_price'));
    }
}
