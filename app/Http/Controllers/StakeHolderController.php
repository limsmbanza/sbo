<?php

namespace App\Http\Controllers;

use App\StakeHolder;
use Illuminate\Http\Request;
//use App\Http\Requests\StakeHolderRequest;
use App\Http\Requests\StakeHolderRequest;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Departement;
use App\ModelsAccessList;
//use Illimunate\Support\Auth;
	
class StakeHolderController extends Controller
{
    
    public function __construct()
    {
//	$this->middleware(['AccessManager','auth']);
	
    }	

	
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
	$departements   =auth()->user()->userEtablishment()->departements()->get();
	$subDepartements;
	$departementsId=[];
	$mergeStakeHolders=collect();

	foreach($departements as $departement)
	{
		array_push($departementsId,$departement->id);
	}



	$stakeHoldersByD=StakeHolder::stakeHoldersByD($departementsId);
	
	return view('backend.stakeHolder.stakeHolder',compact('stakeHoldersByD'));	
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

	$departements=auth()->user()->userEtablishment()->departements()->get();
	if($departements->isEmpty())
		return redirect('/departement/create')->with('departement',"Vous ne disposez d'aucun departement crée");

	return view('backend.stakeHolder.stakeHolderCreate',compact('departements'));
    }	

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
	$request->validate([
	    'name'=>'required|string|max:80|min:3',
	    'lastname'=>'required|string|max:80|min:3',
	    'firstname'=>'required|string|max:80|min:3',
            'email'=>'required|email|unique:users',
	    'password'=>'required|max:40|min:8|confirmed',
	    'pseudo'=>'required|max:80|min:3',
			//'telephone'=>'required|regex:/^[0-9]{3}[0-9]{10,}$/',
	    'adresse'=>'required|max:80',
	    'parent'=> 'required'
	],[
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
		
	]);

	
	$departementId=explode('-',$request->parent);
	$id=$departementId[1];
	
	if('departement' == $departementId[0] or 'subdepartement' == $departementId[0]) 
         {
		if('departement' === $departementId[0])
		{
			if(!Departement::find($id))
				return back()->with('warning','Le departement renseigné n existe pas');	
	try
	{
	DB::beginTransaction();
	   $user=User::create([
		'name'=>$request->pseudo,
		'email'=>$request->email,
		'password'=>Hash::make($request->password),
		''
	   ]);		
		
	   ModelsAccessList::create(['user_id'=>$user->id,'access_list'=>'[6,7,8,9,10]']);	
	   StakeHolder::create([
		'user_id'=>$user->id,
		'name'=>$request->name,
		'lastname'=>$request->lastname,
		'firstname'=>$request->firstname,
		'adresse'=>$request->adresse,
		'phone_number'=>'243815854126',
		'departement_id'=>$departementId[1],
		'departement_type'=>Departement::class
	   ]);
	DB::commit();
		return back()->with('success','Utilisateur créé avec succès');
    	}catch(\Exception $e)
	{
		DB::rollback();
		return back()->with('failed','L opération n a pas pu avoir lieu');
	}
	}

	if('subdepartement' === $departementId[0])
	{
		if(!Departement::find($id))
			return back()->with('warning','Le departement renseigné n existe pas');	
		try
		{
		  DB::beginTransaction();
	   		$user=User::create([
			   'name'=>$request->pseudo,
		           'email'=>$request->email,
		           'password'=>Hash::make($request->password)
	  	  ]);		
			 ModelsAccessList::create(['user_id'=>$user->id,'access_lists'=>'[15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34]']);
	  		 StakeHolder::create([
			   'user_id'=>$user->id,
		 	   'name'=>$request->name,
		           'lastname'=>$request->lastname,
		           'firstname'=>$request->firstname,
		           'adresse'=>$request->adresse,
		           'phone_number'=>'243815854126',
		           'departement_id'=>$departementId[1],
		           'departement_type'=>Departement::class
	   ]);
	DB::commit();
		return back()->with('success','Utilisateur créé avec succès');
    	}catch(\Exception $e)
	{
		DB::rollback();
		return back()->with('failed','L opération n a pas pu avoir lieu');
	}
	}
	
	}
	
	
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\StakeHolder  $stakeHolder
     * @return \Illuminate\Http\Response
     */
    public function show(StakeHolder $stakeHolder)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\StakeHolder  $stakeHolder
     * @return \Illuminate\Http\Response
     */
    public function edit(StakeHolder $stakeHolder,Request $request,$id)
    {
        //
	
	return view('backend.stakeHolder.stakeHolderUpdate');

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\StakeHolder  $stakeHolder
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, StakeHolder $stakeHolder,$id)
    {
        //

	$authorizedKeys=["name","lastname","firstname",	"adresse","phone","parent","pseudo","password"];
	$unknownKey=false;
		
	foreach($request->all() as $key)
	{
		if(in_array($key,$authorizedKeys))
		{
			$unknowKey=false;
		}else
		{
			$unknownKey=true;
			
			return redirect(route('stakeholder.edit',['id'=>$id]))
					->with('status',"Désolé!Nous nous n'avons pas pu éfféctuer cette action");			
		}
	}

	//return views('backend.stakeHolder.stakeHolderUpdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\StakeHolder  $stakeHolder
     * @return \Illuminate\Http\Response
     */
    public function destroy(StakeHolder $stakeHolder)
    {
        //
    }

    public function __call($method,$arguments)
    {
	if(isset($this->{$method}) && is_callable($this->{$method}))
	{
		die('arrêt de l exécution');
	}
    }
}
