<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class uploadcontroller extends Controller
{
    //

    public function upload(Request $request){
    	if ($request->hasFile('photo')) {
    		
    		$path = $request->photo->store('images');
    		return "Done";
		}

		return "error";
    }
}
