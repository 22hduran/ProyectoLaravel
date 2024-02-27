<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pichichi extends Model
{
    use HasFactory;

    protected $fillable = ['jugador_id', 'goles'];

    public function jugador()
    {
        return $this->belongsTo(Jugador::class);
    }
}
