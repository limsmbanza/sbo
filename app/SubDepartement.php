<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubDepartement extends Model
{
    //

    protected $fillable=['name','created_at','updated_at','delated_at','departement_id','departement_type'];
   
    public function users()
    {
	return $this->morphMany('App\User','departement');;
    }

    public function subDepartement()
   {
	
	return SubDepartement::where('departement_type','App\SubDepartement')->where('departement_id',$this->id);

   }
	
   public function log()
   {
	return $this;
   }

   public function haveSub($id)
   {
	//dd($id);
	return  SubDepartement::where(['departement_type'=>'App\SubDepartement','departement_id'=>$id]);
			      
   }

}
