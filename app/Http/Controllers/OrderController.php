<?php

namespace App\Http\Controllers;

use App\ModelsOrder;
use Illuminate\Http\Request;
use App\User;
use App\ModelsEtablishment;
use App\ModelsItems;
use App\ModelsType;
use App\ModelsSpeciality;
use App\Http\Middleware\CheckOrderSession;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\ModelsOffer;
use App\ModelsUnity;
use App\ModelsEmailVerification;
use Illuminate\Support\Facades\Mail;
use App\Mail\EmailVerification;
use App\Models\Profil;
use App\ModelsAccessList;

class OrderController extends Controller
{

     public $orderForType='';
     public $rules	 =[];
     public $messages	 =[
	    'App\ModelsFree' => [
		'name.required' 	=> 'Le nom ne doit pas être vide',
		'name.string'   	=> 'Le nom ne doit contenir que des caractères admisent',
		'name.max'      	=> 'Le nom ne doit contenir au maximum que 30 caractères',
		'name.min'      	=> 'Le nom ne doit contenir au minimum que 3 caractères',
		'email.required'	=> 'Le email ne doit pas être vide',
		'email.email'   	=> 'Le email ne doit contenir qu une adresse email valide',
		'email.unique' 		=> 'Il semblerait que l adresse que vous avez indiquée ait été déjà prise',
		'password.required'     => 'Le mot de passe ne doit pas être vide',
		'password.max'		=> 'Le mot de passe ne doit contenir au maximum que 40 caractères',
		'password.min'		=> 'Le mot de passe ne doit contenir au minimum que 10 caractères',
		'password.confirmed'	=> 'Le mot de passe doit être égal au mot de passe de confirmation'
	   ],
	   ModelsEtablishment::class =>[
		'name.required'		=> 'Le nom ne doit pas être vide',
		'name.string'		=> 'Le nom ne doit contenir que des caractères admisent',
		'name.max'		=> 'Le nom ne doit contenir au maximum que 30 caractères',
		'name.min'      	=> 'Le nom ne doit contenir au minimum que 3 caractères',
		'email.required'	=> 'Le email ne doit pas être vide',
		'email.email'   	=> 'Le email ne doit contenir qu une adresse email valide',
		'email.unique' 		=> 'Il semblerait que l adresse que vous avez indiquée ait été déjà prise',
		'password.required'     => 'Le mot de passe ne doit pas être vide',
		'password.max'		=> 'Le mot de passe ne doit contenir au maximum que 40 caractères',
		'password.min'		=> 'Le mot de passe ne doit contenir au minimum que 10 caractères',
		'password.confirmed'	=> 'Le mot de passe doit être égal au mot de passe de confirmation',
		'city.required'		=> 'La ville ne doit pas être vide',
		'city.min'		=> 'La ville doit avoir plus de 3 caractères',
		'city.max'		=> 'La ville doit avoir au maximum 50 caractères',
		'postal_code.regex'	=> 'Le code postal ne doit contenir que des chiffres',
		//'postal_code.max'	=> 'Le code postal ne doit pas avoir plus de 15 chiffres',
		'adresse.required'	=> 'L adresse ne doit pas être vide',
		'adresse.max'		=> 'L adresse ne doit pas avoir plus de 50 caractères',
		'contry.required'	=> 'Le pays ne doit pas être vide',
		'contry.integer'	=> 'Le pays spécifier n est pas valide',
		'contry.exists'		=> 'Le pays indiqué n est pas valide',
		'speciality.required'	=> 'Le domaine d activité indiqué ne doit pas être vide',
		'speciality.integer'	=> 'Le domaine d activité indiqué n est pas valide',
		'speciality.exists'	=> 'Le domaine d activité indiqué 2 n est pas valide',
		'etablishment_name.required' => 'La denomination sociale n est doit pas être vide',
		'etablishment_name.max'	=> 'La denomination sociale doit avoir au maximum 30 caractères',
		'unity.required'	=> 'L unité de paiement ne doit pas être vide',
		'unity.integer'		=> 'L unité de paiement fournie n est pas valide',
		'unity.exists'		=> 'L unité de paiement n est pas valide'
		
	   ]
     ];

     public $messagesKey ='';
     

     public function  __construct(Request $request)
     {
	    $this->middleware(CheckOrderSession::class)->only('store');
	
	    $this->orderForType = session()->get('orderForType');
     }
	
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
	
	
        if(session()->get('orderForType') === 'App\ModelsEntreprise')
	{
		
	      $request->validate( [
		 	'email'=>'required|email|unique:users',
			'password'=>'required|max:40|min:8',
			'name'=>'required|string|max:80|min:3',
			//'telephone'=>'required|regex:/^[0-9]{3}[0-9]{10,}$/',
			'city'=>"required|alpha|min:4|max:50",
			'contry'=>'required|integer|exists:models_contries,id',
			'postal_code'=>'regex:/[0-9]{4,50}$/|required',
			'speciality'=>'required|integer|exists:models_speciaties,id',
			'adresse'=>'required|max:80',
			'etablishment_name'=>'required|max:30',
			'unity'=>'required|integer|exists:models_unities,id'	
	      ],$this->messages[ModelsEtablishment::class]);
		
	      
	     DB::beginTransaction();
		try{
	 
		 $etablishment=ModelsEtablishment::create([
		 	'name'=>$request->etablishment_name,
		  	'adresse'=>$request->adresse,
			'city'	=>$request->city,
			'contry_id'=>$request->contry,
			'speciality_id'=>$request->speciality 	
		 ]);
		
		$order=ModelsOrder::create([
			'customer_type'=>ModelsEtablishment::class,
			'customer_id'  =>$etablishment->id
		]);
		
		ModelsItems::create([
			'order_id'=>$order->id,
			'offer_id'=>ModelsOffer::find(3)->id,
			'unity_id'   =>$request->unity 
		]);

		 $user=User::create([
			'name'=>$request->name,
			'email'=>$request->email,
			'password'=>Hash::make($request->password),
			'account_type'=>ModelsEtablishment::class,
			'account_id'=>$etablishment->id,
		  ]);
		  ModelsAccessList::create(['user_id'=>$user->id,'access_list'=>"[1,2,3,4,5,6,7,8,9,10,11,12,13,14]"]);
		  		  
		  $emailToken=Hash::make(12346789);
  
		  ModelsEmailVerification::create([
			'user_id' => $user->id,
			'verification_token'=> $emailToken
		  ]);		 		
		  //Mail::to($request->email)->send(new EmailVerification($emailToken));
		  		
		DB::commit();
		   return back()->with('success','Votre compte a été créé avec succès')
			   	->with('showLoginBtn','Se connecter');		
		}catch(\Exception $e)
		{
		 	DB::rollback();	
			return back()->with('failed','Désolé! Nous avons pas pu éfféctuer cette action.Prière de réssayer');
		}		  	
	      
	}
	
	
	if(session()->get('orderForType') === 'App\ModelsFree')
	{	
		
		$request->validate([
			'name'=>'required|string|max:30|min:3',
		     	'email'=>'required|unique:users',
			'password'=>'required|min:9|max:50|confirmed'
		],$this->messages['App\ModelsFree']);
		
			    	
	       DB::beginTransaction();
		  
		 try
		   {
		        
			$user=User::create([
				'name'=>$request->name,
				'email'=>$request->email,
				'password'=> Hash::make($request->password),
				'account_type'=>ModelsProfil::class
			]);
			
			$orderId=ModelsOrder::create([
				'customer_id'=>$user->id,
				'customer_type'=> ModelsProfil::class
			])->id;
		
			$offerId=ModelsOffer::find(1)->id;
			
			$unityId=ModelsUnity::find(1)->id;
		
			ModelsItems::create([
				'order_id'=>$orderId,
				'offer_id'=>$offerId,
				'unity_id'=>$unityId
			]);

		  $emailToken=Hash::make(12346789);
  
		  ModelsEmailVerification::create([
			'user_id' => $user->id,
			'verification_token'=> $emailToken
		  ]);		 		
		  //Mail::to($request->email)->send(new EmailVerification($emailToken));
		  		


		DB::commit();
		   
		   return back()->with('success','Votre compte a été créé avec succès')
			   	->with('showLoginBtn','Se connecter');		
			
		   }catch(\Exception $e)
		   {
	             DB::rollback();
		     return back()->with('failed','Désolé! Nous avons pas pu éfféctuer cette action.Prière de réssayer');				
		  }
	}	
	/*
	if(session()->get('orderForType') === 'App\ModelslStandard')
	{
		$this->rules = [
			'email'=>'required|email|unique:users',
			'password'=>'required|max:40|min:10',
			'name'=>'required|string|max:40|min:10',
			'lastname'=>'required|max:40|min:10',
			'adresse'=>'required|string|max:80'
		];
	    
            $this->messageKey='App\ModelsStandard';
	      
	}       
	*/
	// $request->validate($this->rules,$this->messages[$this->messagesKey]);
	
	//dd($this->rules);
	
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ModelsOrder  $modelsOrder
     * @return \Illuminate\Http\Response
     */
    public function show(ModelsOrder $modelsOrder)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ModelsOrder  $modelsOrder
     * @return \Illuminate\Http\Response
     */
    public function edit(ModelsOrder $modelsOrder)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ModelsOrder  $modelsOrder
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ModelsOrder $modelsOrder)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ModelsOrder  $modelsOrder
     * @return \Illuminate\Http\Response
     */
    public function destroy(ModelsOrder $modelsOrder)
    {
        //
    }
}
