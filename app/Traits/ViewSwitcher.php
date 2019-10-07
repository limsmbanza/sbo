<?php

namespace App\Traits;

use Illuminate\Support\Facades\View;
use App\ModelsContry;
use App\ModelsSpeciaty;

Trait ViewSwitcher
{
	
	private $basePathForView ='frontend';  // Emplacement de base  de toutes les vues utilisées pour la création du comptes de tout genre
	private $foundedView     =''; 	        // Contient la vue trouvée en fonction de l'offre choisie par le client  
	private $prefixView      ='orderFor'; //  Prefixe de toutes les vues utilisées pour la création des comptes de tout genre
	
	/**
	*Inclut le view ou page en fonction de l'offre qu'aurait choisie e client
	*
	*@param string $abbrName
	*@return  Illuminate\Support\Facades\View
	*/
	
 	protected function switchViewByOffer($abbrName,$unities,$specialities,$contries)
	{
	
		$unities=$unities;

		switch($abbrName)
		{
		  case 'free' :
				$this->foundedView =$this->prefixView.'Free';
				break;
		  case 'stand':
				$this->foundedView =$this->prefixView.'Standard';
				break;
		  case 'entre':
				$this->foundedView =$this->prefixView.'Entreprise';
				break;		
		}
		
		return view($this->basePathForView.'.'.$this->foundedView,compact('unities','specialities','contries'));
	}

	
}


	


?>
