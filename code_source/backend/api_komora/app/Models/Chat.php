<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    protected $fillable = ['nom','message_entre','reponse'];
}