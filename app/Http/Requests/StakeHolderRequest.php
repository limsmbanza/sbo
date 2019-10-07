<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
//use Illuminate\Http\Request;

class StakeHolderRequest extends FormRequest
{
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
    public function rules(Requests $request)
    {
	
        return [
	    'name'=>'required|string|max:80|min:3',
	    'lastname'=>'required|string|max:80|min:3',
	    'firstname'=>'required|string|max:80|min:3',
            'email'=>'required|email|unique:users',
	    'password'=>'required|max:40|min:8|confirmed',
	    'pseudo'=>'required|max:80|min:3',
			//'telephone'=>'required|regex:/^[0-9]{3}[0-9]{10,}$/',
	    'adresse'=>'required|max:80',
	    'parent'=> 'required'
        ];
    }

    public function messages()
    {
	return [

	];
    }
}
