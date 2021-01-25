<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produits extends Model
{
    //Table name
    protected $table = 'produits';

    //Primary Key
    protected $primaryKey = 'id';

    protected $guarded = [];

    //Timestamps
    public $timestamps = true;

    public function panier()
    {
        return $this->hasMany('App\Panier');
    }

    public function taille()
    {
        return $this->hasMany('App\Taille');
    }

}
