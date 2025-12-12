<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class PlanInvestissement extends Model
{
    protected $fillable = ['nom','type','montant','periode','benefice'];
}
