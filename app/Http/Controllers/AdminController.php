<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Models\Admin;
use Session;
use Auth;

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
    		return redirect('dashboard');
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
        return redirect('/admin');
    }
}
