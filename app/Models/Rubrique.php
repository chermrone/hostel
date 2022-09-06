<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rubrique extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description'
    ];

    public function entreprise()
    {
        return $this->belongsTo(Entreprise::class);
    }

    public function photos()
    {
        return $this->hasMany(Photo::class);
    }
}
