<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curriculum extends Model
{
    use HasFactory;

    protected $fillable =  [
        "matricule", "nom","contact","adresse","email","lieu","diplome","annee","information","pourcentage","texte","entreprise","description","langue"
    ];

}
