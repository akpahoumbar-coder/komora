<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    protected $fillable = ['nom','photo_1','photo_2','photo_3','photo_4','rate','prix','reduction','mensuration','description','specification','nb_achat','avis_id','createur','lien','stock','quantite','categorie_id','taxe'];

    public function categorie() { return $this->belongsTo(Categorie::class); }
    public function createur()  { return $this->belongsTo(Users::class, 'createur'); }
    public function avis()      { return $this->belongsTo(Avis::class);}
}