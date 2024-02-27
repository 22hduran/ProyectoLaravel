<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entrenador extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'equipo_id'];

    public function equipo()
    {
        return $this->belongsTo(Equipo::class);
    }

    public function liga()
    {
        return $this->belongsTo(Liga::class);
    }

}
