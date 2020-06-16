<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Societe extends Model
{
    protected $table="societes";
    //
      /**
     * Get the user of the society .
     */
    public function user()
    {
        return $this->belongsTo('App\User','iduser','id');
    }

     //

     /**
     * Get the offers for the selected societs.
     */
    
    public function offers()
    {
        return $this->hasMany('App\Offre','userid','id');
    }

   
}
