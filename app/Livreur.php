<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Livreur extends Model
{
     //Table name
     protected $table = 'livreurs';

     //Primary Key
     protected $primaryKey = 'id';

     //Timestamps
     public $timestamps = true;

     protected $guarded = [];

     public function commande()
     {
        return $this->hasMany('App\Commandes');
     }
}
