<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Support extends Model
{
    use HasFactory;
    protected $fillable = ['id','nom',"prenom",'email','motPs','role','admin_id'];

    
    public function admin()
    {
        return $this->belongsTo(Admin::class, 'admin_id');
    }
}
