<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Partenaire extends Model
{
    protected $fillable = ['user_id','adresse','expertise','nombre_follower','produit_partenaire_id','est_verifie','rate_combine','date_ajout','emploi_du_temps','patenaire_stat_id'];
    public function user() { return $this->belongsTo(Users::class);}
}