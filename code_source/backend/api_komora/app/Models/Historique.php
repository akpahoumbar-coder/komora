<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Historique extends Model
{
    protected $fillable = ['user_id','client_id','nom','message','info_cle'];
    public function user()   { return $this->belongsTo(Users::class); }
    public function client() { return $this->belongsTo(Client::class);}
}
