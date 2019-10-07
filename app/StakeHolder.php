<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Departement;

class StakeHolder extends Model
{
    //
   protected $fillable=['name','lastname','firstname','adresse','phone_number','departement_id','departement_type','user_id'];
	
   public function departement()
   {
	return $this->morphTo();
   }

   public static function stakeHoldersByD($departementsId)
   {
	return  StakeHolder::whereIn('id',$departementsId)->get();
	
   }

   public function user()
   {
	return $this->belongsTo(User::class);

   }
	
   public function etablishmentDepartementAndSubDepartement()
   {
	if($this->departement_type == Departement::class)
	{
		
		$departements=Departement::find($this->departement_id)->etablishment()
						    ->departements()
						    ->get();
		return $departements;	     
	}
	
   }


}
