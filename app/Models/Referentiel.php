<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Referentiel extends Model
{
    use HasFactory;

    protected $fillable = [
        'libelle',
        'description',
        'type'
    ];

    public function competences()
    {
        return $this->belongsToMany(Competence::class);
    }

    public function cohorte()
    {
        return $this->belongsTo(Referentiel::class);
    }
}
