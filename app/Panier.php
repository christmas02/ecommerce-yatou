<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Panier extends Model
{
    //Table name
    protected $table = 'paniers';

    //Primary Key
    protected $primaryKey = 'id';

    //Timestamps
    public $timestamps = true;

    protected $guarded = [];

    protected $dates = ['date'];

    public function produit()
    {
        return $this->belongsTo('App\Produits');
    }

    public static function getPrice($price)
    {
        $price = floatVal($price);

        return number_format($price, 0, ' ', ' ').' FCFA';
    }
}
