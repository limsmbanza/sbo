<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\ModelsEtablishment;
use App\ModelsAccessList;
use App\StakeHolder;

class User extends Authenticatable
{
    use Notifiable;
         
    public $etablishment;
 
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public $fillable = [
        'name', 'email', 'password','account_type','account_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function userEtablishment()
    {
	return $this->etablishement=ModelsEtablishment::find($this->account_id)->first();
    }

   public function profil()
   {
	return $this->morphTo();

   }

   public function accessList()
   {
	return $this->hasOne(ModelsAccessList::class);
   }

   public function stakeHolder()
   {
	return $this->HasOne(StakeHolder::class);
   }

  // public function stakeHolderDepartement
}
