<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class PartenaireStat extends Model
{
    protected $fillable = ['partenaire_id','total_vente','total_montant_vente','total_commission','total_vente_week','total_montant_vente_week','total_commission_week','total_vente_jour','total_montant_vente_jour','total_commission_jour','total_vente_mois','total_montant_vente_mois','total_commission_mois'];
    public function partenaire() { return $this->belongsTo(Partenaire::class);}
}
