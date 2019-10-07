<?php
namespace App\ClassManager;
use App\SubDepartement;

class RecursiveSubDepartement
{
	
	protected $departements;
	protected $foundedSub = [];
	protected $foundedSubBy=[];

	public function __construct($departements)
	{
		$this->departements= $departements;
		$this->foundSubByParent();
		$this->recursiveSub($this->foundedSub);
		//dd($this->foundedSub);
	}

	public function foundSubByParent()
	{
		foreach($this->departements as $departement)
		{
			if($found=$departement->subDepartements())
			{
			 	array_push($this->foundedSub,$found->first()); 
			}
		}

		$this->removeNullIndex();
	}

	public function removeNullIndex()
	{
		foreach($this->foundedSub as $key => $found)
		{
			if($found === null)
			{
				unset($this->foundedSub[$key]);
			}
		}
	}

	public function convertToCollect()
	{
	
	
	}

	public function recursiveSub($subDepartement)
	{
		$subs=null;		
		//$subDs=$subDepartement;
		
		foreach($subDepartement as $key => $founded)
		{
			
			if(!is_array($subDepartement) && $subDepartement instanceof SubDepartement)
			{
				if($sub=$subDepartement->haveSub($subDepartement->id))
				{
					//print_r($sub->get());
					$subD[]=$sub->first();
					$this->recursiveSub($sub->first());
				}else{
					continue;
				}
			}else
			{
				if($sub=$founded->haveSub($founded->id))
				{
					$subs[]=$sub->first();
					$this->recursiveSub($sub->first());		
				}
			}
				
		}	

		dd(count($subs));
	}

}
