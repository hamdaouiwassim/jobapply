<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Condidature extends Model
{
    //
    public function Offre()
    {
        return $this->belongsTo('App\Offre','idoffer','id');
    }
    public function condidate()
    {
        return $this->belongsTo('App\Condidate','idcondidate','id');
    }
    
}
