<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\SubDepartement;
use App\ModelsEtablishment;

class Departement extends Model
{
    //
    protected $fillable=['name','etablishment_id','created_At'];

    public function users()
    {
	return $this->morphMany('App\User','departement');
    }

    public function subDepartements()
    {
	return $this->morphMany('App\SubDepartement','departement');
    }

    public function etablishment()
    {
	return $this->belongsTo(ModelsEtablishment::class)->first();
    }
}
