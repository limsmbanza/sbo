<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Entreprise;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/login';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
	//dd('test');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
	//dd($data);	
        return  Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
	    'telephone'=>['required','min:9','max:15','unique:users,telephone'],
	    'denomination'=>['required','max:30','unique:entreprises,denomination'],
	    'coordonnee'=>['required'],
	    'secteur'=>['required','exists:secteurs,id']
        ]);
	
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
	//dd($data);
	$id=Entreprise::create([
		 	'denomination'=>$data['denomination'],
			'coordonne' => $data['coordonnee'],
			'secteur_activite'=>$data['secteur']
	]);	
	
        $user=User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
	    'account_type'=>Entreprise::class,
	    'account_id'=>$id->id,
	    'telephone'=>$data['telephone']
        ]);
	
	session(['email'=>$user->email,'message'=>'Veuillez confirmer votre compte via un lien qui vous a été envoyé par mail.	']);

	return $user;
    }
    
    public function showRegistrationForm()
    {

		return view('frontend.register');
    }
}
