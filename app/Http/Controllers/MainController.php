<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use View;
use Validator;
use Input;
use PDF;
use App\User;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Users;
use paginate;
use Session;
use Redirect;
use File;
use Log;

class MainController extends Controller
{
    public function login(Request $request)
    {
    	$rules = array(
    			'username' => 'required',
    			'password' => 'required'
    		);

    	$validator = Validator::make($request->all(), $rules);

    	if($validator->fails())
    	{
    		$message = "Please Fill all the details";
    		return view('error')->with('message', $message);
    	}
    	else
    	{
    		$username = $request->input('username');
    		$password = $request->input('password');

    		$auth = Users::where('username', $username)
    					->where('password', $password)
    					->first();

    		if(count($auth)>0)
    		{
    			Session::put('username', $username);    			
    			return view('welcome');
    		}
    		else
    		{
    			$message = 'Username or Password is Incorrect';
    			return view('error')->with('message', $message);
    		}
    	}

    }
}
