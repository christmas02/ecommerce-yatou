<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Taille extends Model
{
     //Table name
     protected $table = 'tailles';

     //Primary Key
     protected $primaryKey = 'id';

     //Timestamps
     public $timestamps = true;

     protected $guarded = [];




     public function produit()
     {
         return $this->belongsTo('App\Produit');
     }


}
