<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Departement;

class ModelsEtablishment extends Model
{
    //
    
    public $fillable=['name','adresse','city','contry_id','speciality_id']; 	

    public function user()
    {
	return $this->morphOne(User::class,'account');
    }	

    public function departements()
    {
	return $this->hasMany('App\Departement','etablishment_id');
    }
}
