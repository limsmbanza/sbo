<?php

namespace App\Http\Controllers;

use App\SubDepartement;
use Illuminate\Http\Request;
use App\Http\Requests\SubDepartementRequest;
use App\Departement;
use Illuminate\Support\Facades\DB;
use App\ClassManager\RecursiveSubDepartement;

class SubDepartementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index( )
    {
        //
 
	
	$subDepartements=SubDepartement::whereNotNull('created_At')
				 	->where('departement_type','App\SubDepartement')->get();
	
	$departements=auth()->user()->userEtablishment()->departements()->get();
	//dd(new RecursiveSubDepartement($departements));	
	if($departements->isEmpty())
		return redirect('/departement/create')
					->with('subDepartement',"Vous ne disposez d'aucun departement créé");	
	return view('backend.subDepartement.subDepartements',compact('departements'));
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
	$subdepartements=collect();

	if($departements->isEmpty())
		return redirect('/departement/create')
					->with('departement',"Vous ne disposez d'aucun departement créé");

	foreach($departements as $departement)
	{
		//dd($departement);
		
	}
        return view('backend.subDepartement.subDepartementCreate',compact('departements'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,SubDepartementRequest $subDepartement)
    {
       	
	$subDepartement->validated();
	$parent=explode('-',$subDepartement->parent);
	$id=$parent[1];
	
	if('departement' == $parent[0] or 'subdepartement' == $parent[0]) 
         {
		if('departement' === $parent[0])
		{
			if(!Departement::find($id))
				return back()->with('warning','Le departement renseigné n existe pas');
		  DB::beginTransaction();
			try
			{
			  $sub=SubDepartement::create([
				'name'=> $request->name,
				'departement_id'=>$id,
				'departement_type'=>Departement::class
			  ]);
			
			DB::commit();
				return back()->with('success','Sous département créé avec succès');
			}catch(\Exception $e)
			{
			   DB::rollback();	
			    	return back()->with('success','Sous département créé avec succès');
			}
		}
		if('subdepartement' === $parent[0])
		{
			if(!SubDepartement::find($id))
				return back()->with('warning','Le departement renseigné n existe pas');
		     DB::beginTransaction();
			try
			{	
		 	   $sub=SubDepartement::create([
				'name'=>$request->name,
				'departement_id'=>$id,
				'departement_type'=>SubDepartement::class
			]);

		     DB::commit();
				return back()->with('success','Sous département créé avec succès');
			}catch(\Exception $e)
			{
			   DB::rollback();	
			    	return back()->with('success','Sous département créé avec succès');
			}
		}
	 }else
	{
	   return back();
	}
	
	
	
		
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SubDepartement  $subDepartement
     * @return \Illuminate\Http\Response
     */
    public function show(SubDepartement $subDepartement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SubDepartement  $subDepartement
     * @return \Illuminate\Http\Response
     */
    public function edit(SubDepartement $subDepartement)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SubDepartement  $subDepartement
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SubDepartement $subDepartement)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SubDepartement  $subDepartement
     * @return \Illuminate\Http\Response
     */
    public function destroy(SubDepartement $subDepartement)
    {
        //
    }

    public function subGroup($parentNameSpace,$id)
    {
	
    }
}
