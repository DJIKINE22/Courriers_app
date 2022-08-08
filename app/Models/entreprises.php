<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class entreprises extends Model
{
    use HasFactory;

    protected $fillable=[
        'nom',
        'structure',
        'adresse'
    ];


public function departements()
{
    return $this->hasMany('App\Models\departements', 'id', 'entreprise');
}

}