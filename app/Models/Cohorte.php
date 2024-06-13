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

    public function candidatures()
    {
        return $this->hasMany(Candidature::class);
    }

    public function referentiel()
{
    return $this->belongsTo(Referentiel::class);
}

public function users()
    {
        return $this->hasManyThrough(User::class, Candidature::class);
    }
    public function competences()
    {
        return $this->referentiel->competences();
    }
}
