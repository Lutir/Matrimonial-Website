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
use App\User_info;
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

    public function register(Request $request)
    {
    	Log::info($request);
    	$rules = array(
    			'firstName' => 'required',
    			'lastName' => 'required',
    			'email' => 'required',
    			'username' => 'required',
    			'password' => 'required',
    			'age' => 'required',
    			'sex' => 'required',
    			'religion' => 'required',
    			'mothertongue' => 'required',
    			'country' => 'required'
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
	 

    		if(count($auth)<1)
    		{
    			$user = new Users;
	    		$newUser = new User_Info();

	    		$user->userName = $request->input('username');
	    		$user->password = $request->input('password');

	    		$newUser->username = $request->input('username');
	    		$newUser->password = $request->input('password');
	    		$newUser->email = $request->input('email');
	    		$newUser->firstName = $request->input('firstName');
	    		$newUser->lastName = $request->input('lastName');
	    		$newUser->sex = $request->input('sex');
	    		$newUser->age = $request->input('age');
	    		$newUser->country = $request->input('country');
	    		$newUser->religion = $request->input('religion');
	    		$newUser->mothertongue = $request->input('mothertongue');

	    		$newUser->save();
	    		$user->save();
	    	}

			return view('welcome');    		
    	}
    }
}
