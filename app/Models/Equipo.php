<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Categoria;
use App\Models\AlquilerEquipo;


class Equipo extends Model
{
    use HasFactory;

    protected $fillable = [
        'codigo',
        'nomobre',
        'descripcion',
        'marca',
        'precio_alquiler_dia',
        'estodo',
        'categoria_id'
    ];

    public function categoria(){
        return $this->belongsTo(Categoria::class);
    }

    public function alquilerEquipos(){
        return $this->hasMany(AlquilerEquipo::class);
    }

}
