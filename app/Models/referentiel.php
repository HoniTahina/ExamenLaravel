<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class referentiel extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'libelle',
        'validite',
        'horaire',      
    ];
    public function type(){
        return $this->hasOne(type::class);
    }
    public function formation(){
        return $this->belongsToMany(formation::class);
    }
}