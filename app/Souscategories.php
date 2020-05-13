<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Souscategories extends Model
{
    public function Caterogie(){
        return $this->belongsTo(Caterogie::class);
    }
}
