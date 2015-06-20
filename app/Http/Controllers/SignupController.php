<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Signup;

use Illuminate\Http\Request;
use \Form;

class SignupController extends Controller {

	public function index()
	{	
		$signups = Signup::all();
		return view('register')->with('sign_ups', $signups);
	}

	public function create() {
		return view('register.create');
	}

	public function store()
	{
		$new_signup = new Signup;
		$new_signup->first_name = "Trogdor";
		$new_signup->save();
		return "created a new signup";
	}

}
