<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class UserRequest extends Request {

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
		   'nickName'=>'required|unique:users|between:3,8',
		   'email'=>'required|email',
		   'password'=>'required',
		   'checkpassword'=>'required|same:password'
			//
		];
	}

}
