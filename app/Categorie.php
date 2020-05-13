<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    public function sousCategorie(){
        return $this->hasMany(Souscategories::class);
    }
}
