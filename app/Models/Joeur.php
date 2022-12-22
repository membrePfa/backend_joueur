<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Joeur extends Model
{
   // protected $table = 'joueurs';
    protected $primaryKey = 'id';
    protected $fillable = ['nom', 'prenom', 'adresse', 'quartier','ville','email','telephone'];
}
