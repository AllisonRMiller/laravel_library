<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;

class checkouts extends Pivot
{
    public function users(){
        return $this->belongsTo('App\Users');
    }

    public function books(){
        return $this->belongsTo('App\Books');
    }
}
