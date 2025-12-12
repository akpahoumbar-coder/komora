<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Portefeuille extends Model
{
    protected $fillable = ['user_id', 'solde_courant', 'retrait_en_cours', 'retrait_effectue', 'peut_retirer'];
    public function user() { return $this->belongsTo(Users::class);}
}