<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    public function user(){
        
        return $this->belongsTo(User::class);
    }

    public function category(){

        return $this->hasOne(Category::class);
        
    }
}
