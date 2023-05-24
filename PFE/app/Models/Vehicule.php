<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Vehicule extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ["id","marque", "modele", "statut"];

    public function Vehicule()
    {
        return $this->belongsTo(Vehicule::class, 'vehicules_id');
      
   
    }
}


