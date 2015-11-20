<?php namespace GLITwebsite\Http\Requests;

use GLITwebsite\Http\Requests\Request;

class SideFormContactRequest extends Request {

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
			'email' => 'email|required_without:phone',
			'phone' => 'required_without:email'
		];
	}

}
