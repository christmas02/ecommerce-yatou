<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commandes extends Model
{
    //Table name
    protected $table = 'commandes';

    //Primary Key
    protected $primaryKey = 'id';

    //Timestamps
    public $timestamps = true;

    protected $guarded = [];

    protected $dates = ['date'];

    public function produit()
    {
        return $this->hasMany('App\Produit');
    }

    public function livreur()
    {
        return $this->belongsTo('App\Livreur');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
