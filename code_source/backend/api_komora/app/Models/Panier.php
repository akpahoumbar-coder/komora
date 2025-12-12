<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Panier extends Model
{
    protected $fillable = ['produit_id','quantite','code_reduction','code_affilie','total','taxe_1','taxe_2','taxe_total'];
    public function produit() { return $this->belongsTo(Produit::class, 'produit_id');}
}