<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Authors extends Model
{
    public function books(){
        return $this->belongsToMany('App\Books', 'book_author');
    }

    

}
