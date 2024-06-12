<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    use HasFactory;

    protected $fillable = [
        'objet',
        'message',
        'user_id',
        'candidature_id'
    ];

   

    public function candidatures()
    {
        return $this->hasMany(Candidature::class);
    }
}
