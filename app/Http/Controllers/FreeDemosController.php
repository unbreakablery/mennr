<?php

namespace App\Http\Controllers;

use App\Mail\GetFreeDemoEmail;
use Illuminate\Http\Request;
use App\Models\FreeDemo;
use Illuminate\Support\Facades\Mail;

class FreeDemosController extends Controller
{
    public function index() {
        return view('pages/get_free_demo');
    }

    public function submit(Request $request) {
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
            return redirect()->route('get_free_demo.index')->with('danger', 'You already required to get a free demo!');
        }
        
        $data = $request->all();
        $data['status'] = 'pending';
        
        $result = FreeDemo::create($data);

        if ($result) {
            foreach (config('app.support_emails') as $email) {
                Mail::to($email)->send(new GetFreeDemoEmail($data));
            }
            
            $type = 'success';
            $message = 'Thanks for booking a demo';
            return view('pages/success', compact('type', 'message'));
        } else {
            return redirect()->route('get_free_demo.index')->with('danger', 'Error on operation, please re-try!');
        }
    }
}
