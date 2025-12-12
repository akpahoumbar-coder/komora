<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Investisseur extends Model
{
    protected $fillable = ['user_id','investissement','plan_id','rendu'];
    public function user() { return $this->belongsTo(Users::class); }
    public function plan() { return $this->belongsTo(PlanInvestissement::class,'plan_id');}
}
