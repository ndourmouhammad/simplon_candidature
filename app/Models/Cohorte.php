<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cohorte extends Model
{
    use HasFactory;

    protected $fillable = [
        'libelle',
        'description',
        'date_debut',
        'date_fin',
        'lieu_formation',
        'nombre_participants',
        'referentiel_id'
    ];

    public function candidature()
    {
        return $this->belongsTo(Candidature::class);
    }

    public function referentiels()
    {
        return $this->hasMany(Referentiel::class);
    }
}
