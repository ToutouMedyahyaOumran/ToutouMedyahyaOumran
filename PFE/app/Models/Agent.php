<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;
use Laravel\Scout\Searchable;
class Agent extends Model
{
    use HasFactory,HasApiTokens;
    protected $fillable = ['id','nom',"prenom",'phone','email','motPs','departement_id'];

    public function deppartemnt()
    {
        return $this->belongsTo(Departement::class, 'departement_id');
    }

    // use Searchable;
    // protected $guarded =[''];
    // public function toSearchableArray()
    // {
    //     $searchArray =[
    //         'id'=>$this->id,
    //     ];
    //     return $searchArray ;
    // }
}
