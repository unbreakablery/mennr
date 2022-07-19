<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    
    public function Mail(Request $request){
    
     	
    	$first_name		=	$request->get('First-Name'); 	
    	$last_name		=	$request->get('Last-Name');
    	$email_id		=	$request->get('Email-ID');
    	$phone_no		=	$request->get('Phone-Number');
    	$company_name	=	$request->get('Company-Name');
    	$no_of_location	=	$request->get('Number-of-Locations');
    	$business_type	=	$request->get('Business-Type');
		  $no_of_provider	=	$request->get('Number-of-Providers-3');

		  $data = array('first_name'=>$first_name, 'last_name'=>$last_name, 'email_id'=>$email_id, 'phone_no'=>$phone_no, 'company_name'=> $company_name, 'no_of_location'=> $no_of_location, 'business_type'=> $business_type, 'no_of_provider'=> $no_of_provider);

		  $admin_email = env("MAIL_USERNAME");
		  
      try{
          Mail::send('Pages/contact_email', $data, function($message) use ($email_id, $admin_email)
               {
                  $message->from($email_id);
                  $message->to($admin_email)->subject("Demo Request");
               });
		       return redirect(url()->previous() . '#message-display')->with('success', 'Thank you! Your submission has been received!');
//          return redirect()->route('subscription.create')->with( ['data' => $data] );
      }
      catch(\Exception $e){
            return redirect(url()->previous() . '#message-display')->with('danger', 'Oops! Something went wrong while submitting the form.');
        
        }
	}     
}
