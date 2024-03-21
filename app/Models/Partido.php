<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partido extends Model
{
    use HasFactory;

    protected $table = 'partidos';

    protected $fillable = ['local_equipo_id', 'visitante_equipo_id'];

    public function local()
    {
        return $this->belongsTo(Equipo::class, 'local_equipo_id');
    }

    public function visitante()
    {
        return $this->belongsTo(Equipo::class, 'visitante_equipo_id');
    }


    public function goles()
    {
        return $this->hasMany(Gol::class);
    }

    public function jornada()
    {
        return $this->belongsTo(Jornada::class);
    }
}
