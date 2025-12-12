<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Avis extends Model
{
    protected $fillable = ['expediteur','rate','commentaire'];
    public function expediteur() { return $this->belongsTo(Users::class, 'expediteur'); }
    public function produit()    { return $this->belongsTo(Produit::class);}
}
