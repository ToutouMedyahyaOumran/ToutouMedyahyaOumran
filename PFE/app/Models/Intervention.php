<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Intervention extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = ['id','Date', 'vehicules_id','support_id'];

    public function vehicule(){
        return $this->belongsTo(Vehicule::class, 'vehicules_id');
    }
    public function support(){
        return $this->belongsTo(Vehicule::class, 'support_id');
    }
}
