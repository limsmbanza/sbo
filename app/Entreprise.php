<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entreprise extends Model
{
    //
    public $fillable = ['denomination','coordonee','secteur_activite'];
}
