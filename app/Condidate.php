<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Condidate extends Model
{
    protected $table="condidates";
    //
      /**
     * Get the user of the society .
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
