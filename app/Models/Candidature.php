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
        'staut',
        'date_decision',
        'date_limit',
        'user_id',
        'cohorte_id'
    ];

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
}
