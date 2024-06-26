<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Notifications\CandidatureStatusChanged;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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

    protected static function booted()
    {
        static::updated(function ($candidature) {
            if ($candidature->isDirty('statut')) {
                $candidature->user->notify(new CandidatureStatusChanged($candidature, $candidature->statut));
            }
        });
    }
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function cohorte()
    {
        return $this->belongsTo(Cohorte::class);
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
