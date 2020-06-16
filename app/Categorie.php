<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    //
    /**
     * Get the society for the selected user.
    */
    public function offers()
    {
        return $this->hasMany('App\Offre','category','id');
    }
  
}
