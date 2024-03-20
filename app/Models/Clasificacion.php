<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clasificacion extends Model
{
    use HasFactory;

    protected $table = 'clasificacion';

    protected $fillable = ['equipo_id', 'partidos', 'victorias', 'empates', 'derrotas', 'golesFavor', 'golesContra', 'puntos'];

    public function equipo()
    {
        return $this->belongsTo(Equipo::class, 'equipo_id');
    }

}
