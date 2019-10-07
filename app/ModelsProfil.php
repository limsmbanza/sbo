<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelsProfil extends Model
{
    //

    public function user()
    {
	return $this->morphMany(App\User::class,'account');
    }
}
