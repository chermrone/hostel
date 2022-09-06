<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entreprise extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'address',
        'description'
    ];

    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function rubriques()
    {
        return $this->hasMany(Rubrique::class);
    }
}
