<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class ProduitPartenaire extends Model
{
    protected $fillable = ['nom','photo_1','photo_2','photo_3','photo_4','rate','prix','reduction','mensuration','description','specification','nb_achat','lien','stock','quantite','taxe'];
}
