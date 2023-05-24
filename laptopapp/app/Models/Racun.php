<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Racun extends Model
{public $timestamps = false;
    use HasFactory;

    protected $fillable = [
        'datum',
        'adresaLokala',


    ];
    public function stavke()
    {
        return $this->hasMany(StavkaRacuna::class);
    }

}
