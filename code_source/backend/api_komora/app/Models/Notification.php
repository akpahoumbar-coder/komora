<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    protected $fillable = ['expediteur','destinataire','type','message','info_cle'];
    public function expediteur()   { return $this->belongsTo(Users::class, 'expediteur'); }
    public function destinataire() { return $this->belongsTo(Users::class, 'destinataire');}
}