<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'roles' , 'city' , 'phone' , 'age' , 'socialcituation' , 'cv' , 'avatar'
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

   

      //

     /**
     * Get the society for the selected user.
     */
    public function admin()
    {
        return $this->hasOne('App\Admin','iduser','id');
    }
    public function society()
    {
        return $this->hasOne('App\Societe','iduser','id');
    }

    //

     /**
     * Get the condidate for the selected user.
     */
    public function condidate()
    {
        return $this->hasOne('App\Condidate','iduser','id');
    }
         //

     /**
     * Get the stagaire for the selected user.
     */
    public function stagaire()
    {
        return $this->hasOne('App\Stagaire','iduser','id');
    }
}
