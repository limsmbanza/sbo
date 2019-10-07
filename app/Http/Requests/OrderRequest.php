<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use App\ModelsEtablishment;

class OrderRequest extends FormRequest
{

    public $orderForType='';
    public $rules = [];

    public function __constuct(Request $request)
    {
	$this->orderForType = $request->session()->get('orderForType');
    }

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
     * @param Illuminate\Http\Request
     * @return array
     */

    public function rules()
    {
	if($this->orderForType 
		           == ModelsEtablishment::class)
	{
	      $this->rules = [
		 	'email'=>'required|email|unique:users',
			'password'=>'required|max:40|min:15',
			'name'=>'required|string|max:80|min:10',
			'telephone'=>'required|regex:/^[0-9]{3}[0-9]{10,}$/',
			'city'=>"required|alpha|min:5|max:50",
			'contry'=>'required|integer:exist:models_contries.id',
			'postal_code'=>'integer|max:15',
			'speciality'=>'require|exist:models_specialities,id'	
	      ];
	}

	if($request->orderForType 
			    == 'App\ModelsFree')
	{
		$this->rules = [
			'name'=>'required|string|max:30|min:5'
			'email' =>'required|email|unique:users',
			'password'=>'required|max:40|min:10|confirmed'
		]
	}

	if($request->orderForType 
                            == 'App\ModelsStandard')
	{
		$this->rules = [
			'email'=>'required|email|unique:users',
			'password'=>'required|max:40|min:10',
			'name'=>'required|string|max:40|min:10',
			'lastname'=>'required|max:40|min:10',
			'adresse'=>'required|string|max:80'
		];
	}       

	return (array) $this->rules;
    }

    /**
     * Permet de personnaliser les messages de validation    
     * @return array
    */

    public function messages()
    {


    }
}

