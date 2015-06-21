<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class SignupFormRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			'first_name' => 'required',
			'last_name' => 'required',
			'address_line_1' => 'required',
			'state' => 'required',
			'zip_code' => 'required',
			'email' => 'required',
			'gender' => 'required',
			'age' => 'required',
			'how_you_heard_about_us' => 'required'
		];
	}

}
