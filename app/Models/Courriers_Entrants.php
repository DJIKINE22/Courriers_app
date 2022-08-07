<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Courriers_Entrants extends Model
{
    use HasFactory;
    protected $fillable = ['ref','objet', 'status','expediteur','pieces_jointe','date_recept','libelle','user'];
    
    
    public function User()
    {
        return $this->belongsTo(User::class, 'user', 'id');
    }
    
}
