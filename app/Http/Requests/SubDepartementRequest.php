<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SubDepartementRequest extends FormRequest
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
    public function rules()
    {
        return [
             'name'=>'required|max:50',
	     'parent'=>'regex:/^[a-z]{5,15}[\-]{1}[0-9]{1,}$/'
        ];
    }

    public function messages()
    {
	return [
	   'name.required'=>'Le nom du sous departement ne doit pas être vide',
	   'name.max'	  =>'Le nom du sous departement doit avoir au maximum 50 caractères'	 	
	];
    }	
}
