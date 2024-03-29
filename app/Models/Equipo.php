<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    use HasFactory;

    protected $table = 'equipos';

    protected $fillable = ['nombreEquipo', 'escudo'];

    public function jugadores()
    {
        return $this->hasMany(Jugador::class);
    }

    public function entrenador()
    {
        return $this->hasOne(Entrenador::class);
    }

    public function partidosLocal()
    {
        return $this->hasMany(Partido::class, 'local_equipo_id');
    }

    public function partidosVisitante()
    {
        return $this->hasMany(Partido::class, 'visitante_equipo_id');
    }

    public function clasificacion()
    {
        return $this->hasOne(Clasificacion::class);
    }

    public function clasificaciones()
    {
        return $this->hasMany(Clasificacion::class, 'equipo_id');
    }

    public function pichichi()
    {
        return $this->hasMany(Pichichi::class);
    }
}
