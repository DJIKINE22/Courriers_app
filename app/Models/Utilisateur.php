<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Utilisateur;

class Utilisateur extends Model
{
    use HasFactory;
    protected $fillable = ["nom","prenom","adresse","email","password","photo_profile","departement","role"];
    
    }


