<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class users extends Model
{
    public function portefeuille()   { return $this->hasOne(Portefeuille::class); }
public function affilie()       { return $this->hasOne(Affilie::class); }
public function investisseur()  { return $this->hasOne(Investisseur::class); }
public function livreur()       { return $this->hasOne(Livreur::class); }
public function produits()      { return $this->hasMany(Produit::class, 'createur'); }
public function avis()          { return $this->hasMany(Avis::class, 'expediteur');}//
}
