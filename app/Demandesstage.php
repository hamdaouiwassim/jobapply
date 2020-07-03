<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Demandesstage extends Model
{
    //
    public function societe()
    {
        return $this->belongsTo('App\Societe','societeid','id');
    }
    public function stagaire()
    {
        return $this->belongsTo('App\Stagaire','userid','id');
    }
}
