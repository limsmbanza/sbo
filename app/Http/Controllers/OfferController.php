<?php

namespace App\Http\Controllers;

use App\ModelsOffer;
use Illuminate\Http\Request;
use App\Traits\ViewSwitcher;
use App\ModelsEtablishment;
use Illuminate\Support\Facades\Hash;
use App\ModelsUnity;
use App\ModelsSpeciaty;
use App\ModelsContry;

class OfferController extends Controller
{
    use ViewSwitcher;

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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ModelsOffer  $modelsOffer
     * @return \Illuminate\Http\Response
     */
    public function show(ModelsOffer $modelsOffer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ModelsOffer  $modelsOffer
     * @return \Illuminate\Http\Response
     */
    public function edit(ModelsOffer $modelsOffer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ModelsOffer  $modelsOffer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ModelsOffer $modelsOffer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ModelsOffer  $modelsOffer
     * @return \Illuminate\Http\Response
     */

    public function destroy(ModelsOffer $modelsOffer)
    {
        //
    }

    /**
     *Traite la souscription que le client  éffctue sur une offre donnée
     *
     *@param \Illuminate\Http\Request
     *@param \App\ModelsOffer $modelsOffer
     *@param string $abbr
     *@return Illuminate\Http\Response
    */

    public function subscribe(Request $request,ModelsOffer $modelsOffer,$abbr)
    {
	if($modelsOffer->offerExist(strtolower($abbr)))
		return redirect('/');
		
	$orderForType='';
	
	switch(strtolower($abbr))
	{
	   case 'free' :
		$orderForType='App\ModelsFree';
		break;
	   case 'entre':
		$orderForType='App\ModelsEntreprise';
		break;
	   case 'stand':
		$orderForType='App\ModelsStandard';
		break;	
	}
	
	if(session()->has('orderForType'))
	{
	    session()->forget('orderForType');
	}
	    session()->put(['orderForType'=>$orderForType]);	
	
	$unities=ModelsUnity::all();		
	$specialities=ModelsSpeciaty::all();
	$contries=ModelsContry::all();

	return $this->switchViewByOffer($abbr,$unities,$specialities,$contries);
    }

}
