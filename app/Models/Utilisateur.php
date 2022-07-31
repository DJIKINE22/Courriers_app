<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Utilisateur;

class Utilisateur extends Model
{
    use HasFactory;
    protected $fillable = ['nom','prenom', 'adresse','poste','email','mot_de_pass','telephone'];
     public function roles(){
        return $this->belongsToMany('App\Role');
    }
}

