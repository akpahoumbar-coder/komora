<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = ['nom','numero','mail','adresse','solde','mot_de_passe','produits_preferes','categories_preferes','produits_suggeres','categories_suggerees'];
}