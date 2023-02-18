<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class formation extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'nom',
        'duree',
        'description',
        'istarted',
        'dateDebut',       
    ];

    public function candidat(){
        return $this->BelongsToMany(candidat::class, 'candidat_formations');
    }
    public function referentiel(){
        return $this->belongsToMany(referentiel::class, 'formation_referentiels');
    }
}