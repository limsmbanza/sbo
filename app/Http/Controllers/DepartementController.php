<?php

namespace App\Http\Controllers;

use App\Departement;
use Illuminate\Http\Request;
use App\Http\Requests\DepartementRequest;
use Illuminate\Support\Facades\DB;

class DepartementController extends Controller
{

    public function __construct()
    {

	$this->middleware('AccessManager');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
	$departements=Departement::whereNotNull('created_At')->get();

	
	return view('backend.departement.departements',compact('departements'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
	
	return view('backend.departement.departementCreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,DepartementRequest $departementRequest)
    {
        //

	$departementRequest->validated();

	DB::beginTransaction();
	try
	{
	     Departement::create([
		'name'=>$request->name,
		'etablishment_id'=>auth()->user()->first()->account_id
	     ]);
	DB::commit();
	     return back()->with('success','Le département a été crée avec succès');	
	}catch(\Exception $e)
	{
		DB::rollback();
		return back()->with('failed','Désolé!Nous n avons pas pu éfféctuer cette action.Veuillez réssayer!');
	}
		
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Departement  $departement
     * @return \Illuminate\Http\Response
     */
    public function show(Departement $departement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Departement  $departement
     * @return \Illuminate\Http\Response
     */
    public function edit(Departement $departement)
    {
        //
	
	if(!$departement=Departement::find($departement->id))
		return back();
	$departement=$departement->first()->id;
	
	return view('backend.departement.departementEdit',compact('departement'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Departement  $departement
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Departement $departement)
    {
        //
	//dd($departement->name,$request->id);
	DB::beginTransaction();
	try
	{
	     Departement::find($request->id)->update([
		'name'=>$request->name
	     ]);
	DB::commit();
	     return back()->with('success','Mise à jours éfféctué avec succès');	
	}catch(\Exception $e)
	{
		DB::rollback();
		return back()->with('failed','Désolé!Nous n avons pas pu éfféctuer cette action.Veuillez réssayer!');
	}
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Departement  $departement
     * @return \Illuminate\Http\Response
     */
    public function destroy(Departement $departement)
    {
        //
    }
}
