<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Affilie extends Model
{
    protected $fillable = ['user_id','photo','code_promo','code_parain','lien','clic_week','clic_mois','clic','commission_week','commission_mois','commission','rang','nbr_aff','solde'];
    public function user() { return $this->belongsTo(Users::class);}
}