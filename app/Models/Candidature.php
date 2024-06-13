<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidature extends Model
{
    use HasFactory;

    protected $fillable = [
        'biographie',
        'motivation',
        'statut',
        'cv_path',
        'user_id',
        'cohorte_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function cohortes()
    {
        return $this->hasMany(Cohorte::class);
    }

    public function notification()
    {
        return $this->belongsTo(Notification::class);
    }
    public function getCvPathAttribute()
    {
        if ($this->cv_professionnel) {
            return asset('storage/' . $this->cv_professionnel);
        }

        return null;
    }
}
