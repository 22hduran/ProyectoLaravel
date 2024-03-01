<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entrenador extends Model
{
    use HasFactory;

    protected $table = 'entrenadores';
    protected $fillable = ['nombre', 'foto', 'equipo_id'];

    public function equipo()
    {
        return $this->belongsTo(Equipo::class);
    }

}
