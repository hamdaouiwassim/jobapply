<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stagaire extends Model
{
    protected $table="stagaires";
    //
      /**
     * Get the user of the society .
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function demandes()
    {
        return $this->hasMany('App\Demandesstage','userid','id');
    }
}
