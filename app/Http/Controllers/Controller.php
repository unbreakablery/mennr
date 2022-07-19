<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function fileUpload(Request $request, $image_key, $upload_path = ""){
    	$filename = "";
    	if($upload_path == ""){
    		$upload_path = public_path('/upload');
    	}

    	if($request->hasFile($image_key)){
    		$rand = rand(0,100);
    		$image = $request->file($image_key);
    		$fileName = $name = date('dmY').time().$rand.'.'.$image->getClientOriginalExtension();
    		$image->move($upload_path, $name);

    		return $fileName;
    	}
    	else{
    		
    	}

    }
}
