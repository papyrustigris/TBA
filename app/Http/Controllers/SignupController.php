<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Signup;
use App\Http\Requests;
use App\Http\Requests\SignupFormRequest;

use \Input;
use \Form;
use \Validator;
use \Redirect;

class SignupController extends Controller {

	public function index()
	{	
		$signups = Signup::all();
		return view('register')->with('sign_ups', $signups);
	}

	public function create() {
		return view('register.create');
	}

	public function store(SignupFormRequest $request)
	{
		$rules = $request->rules();

		$validator = Validator::make($request->all(), $rules);

		if ($validator->fails()) {
			return Redirect::back()->withErrors($validator);
		} else {
			Signup::create($request->all());
		};

	}

}
