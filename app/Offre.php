<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Offre extends Model
{
    
    protected $table="offres";
     /**
     * Get the post that owns the comment.
     */
    public function societe()
    {
        return $this->belongsTo('App\Societe','userid','id');
    }

      //
    /**
     * Get the post that owns the comment.
     */
    public function category()
    {
        return $this->belongsTo('App\Categorie','category','id');
    }
  
}
