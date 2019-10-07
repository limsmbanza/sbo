<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelsOffer extends Model
{
    //
	/**
	*Permet de converture les données issues de l'attribut characteritic en un tableau 
	*return Array
	*/

	public function convertToArray()
	{
		 return json_decode($this->characteristic);
	}
	 
	/**
	*Permet de vérifier l'existence de l'offre qu'aurait choisie le client
	*@param string $abbr
	*@return boolean  
	*/

	public function offerExist($abbr)
	{
		return self::whereAbbr($abbr)->get()->isEmpty();
	}
}
