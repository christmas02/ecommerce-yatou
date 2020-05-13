<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produits extends Model
{
    protected $fillable = ['nom', 'montant', 'ettat', 'description', 'detail', 	'taille', 'marque', 'categorie', 'slug', 'image'];
}
