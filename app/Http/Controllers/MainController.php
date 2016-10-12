<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use View;
use Auth;
use Validator;
use Input;
use PDF;
use App\User;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Users;
use App\User_info;
use App\Personal_Info;
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

    			$users = DB::table('users')->get();
    			// Log::info($username);
    			// Log::info(sizeof($users));
    			

    			for($i=0;$i<sizeof($users);$i++)
    			{
    				// if($users[$i]['userName']==$username)
    				// 	$id = $users[$i]['id'];
    				Log::info('seperate');
    				$user = get_object_vars($users[$i]);
    				// Log::info($user);
    				if($user['userName']==$username)
    					Session::put('id', $user['id']);
    			}

    			// Session::put('id', $id);
    			Log::info(Session::get('id'));
    			return view('welcome')->with('message', Session('username'));
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
    			'country' => 'required',
    			'maritalStatus' => 'required'
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
	    		$newUser->marital_status = $request->input('maritalStatus');

	    		$newUser->save();
	    		$user->save();
	    	}

	    	$users = DB::table('users')->get();
    			// Log::info($username);
    			// Log::info(sizeof($users));
    			

    			for($i=0;$i<sizeof($users);$i++)
    			{
    				// if($users[$i]['userName']==$username)
    				// 	$id = $users[$i]['id'];
    				Log::info('seperate');
    				$user = get_object_vars($users[$i]);
    				// Log::info($user);
    				if($user['userName']==$username)
    					Session::put('id', $user['id']);
    			}

    			// Session::put('id', $id);
    			Log::info(Session::get('id'));

			return view('profile');    		
    	}
    }

    public function getLogout(){
        Auth::logout();
        Session::flush();
        return Redirect::to('/');
    }

    public function fetchProfileInfo(Request $request)
    {	

    	$userInfo = User_Info::where('id', Session::get('id'))
    					 ->first();
		$personalInfo = Personal_Info::where('id', Session::get('id'))
									 ->first();
											 
		Log::info(json_encode($userInfo));
		Log::info('hello');
		Log::info($personalInfo);									 



		Log::info('lol');


    	return json_encode('helloworld');
    }

    public function storeProfileInformation(Request $request)
    {
    	Log::info($request);
    	Log::info($request->input('firstName'));
    	DB::table('user_info')
    		->where('username', Session::get('username'))
    		->update(array
    			('firstName' => $request->input('firstName'),
    			 'lastName' => $request->input('lastName'),
    			 'email' => $request->input('email'),
    			 'religion' => $request->input('religion'),
    			 'country' => $request->input('country'),
    			 'mothertongue' => $request->input('mothertongue') 
    			 ));

    	$check = DB::table('personal_info')
    				->where('id', Session::get('id'));

		$check = Personal_Info::where('id', Session::get('id'))
								->first();
		Log::info(count($check));
		Log::info('lol');
		Log::info(json_encode($check));
		if(count($check)==0)
		{
			$personal = new Personal_Info();
			$personal->id = Session::get('id');
			$personal->occupation = $request->input('occupation');
    		$personal->income = $request->input('income');
    		$personal->raashi = $request->input('raashi');
    		$personal->company_name = $request->input('company');
    		$personal->diet = $request->input('diet');
    		$personal->smoke = $request->input('smoke');
    		$personal->drinks = $request->input('drink');
    		$personal->fathers_occupation = $request->input('fathers_occupation');
    		$personal->mothers_occupation = $request->input('mothers_occupation');
    		$personal->complexion = $request->input('complexion');	     			
    		$personal->save();
		}    				
		else
		{
			DB::table('personal_info')
				->where('id', Session::get('id'))
				->update(array
					('occupation' => $request->input('occupation'),
					 'income' => $request->input('income'),
					 'raashi' => $request->input('raashi'),
					 'company_name' => $request->input('company'),
					 'diet' => $request->input('diet'),
					 'smoke' => $request->input('smoke'),
					 'drinks' => $request->input('drink'),
					 'fathers_occupation' => $request->input('fathers_occupation'),
					 'mothers_occupation' => $request->input('mothers_occupation'),
					 'complexion' => $request->input('complexion'),	 
						));
				
		}
    	
    	return json_encode('hellobitch');

    }

    public function storeImage(Request $request)
    {

    	if($request->hasFile('image'))
    	{    		
    		Log::info($request);
    		$file = $request->file('image');
    		$name = Session::get('id');

    		$file->move(public_path().'/images/', $name);    		
    	}

    	return view('profile');
    }
}
