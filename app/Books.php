<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    public function status(){
        return $this->belongsTo(Status::class);
    }

    public function authors(){
        return $this->belongsToMany('App\Authors', 'book_author');
    }

    public function checkouts(){
        return $this->belongsTo('App\checkouts');
    }
}
