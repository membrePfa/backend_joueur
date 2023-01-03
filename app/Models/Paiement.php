<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paiement extends Model
{
    // protected $table = 'paiements';
    protected $primaryKey = 'id';
    protected $fillable = ['joueur_id', 'numero_de_carte', 'date_expirationcarte', 'code_cvv'];
}
