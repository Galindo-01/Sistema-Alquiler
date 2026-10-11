<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Cliente;
use App\Models\Empleado;
use App\Models\AlquilerEquipo;

class Alquiler extends Model
{
    use HasFactory;

    protected $fillable = [
        'fecha_solicitud',
        'fecha_inicio',
        'fecha_finalizacion',
        'estado',
        'cliente_id',
        'id_empleado'
    ];

    public function cliente(){
        return $this->belongsTo(Cliente::class);
    }

    public function empleado(){
        return $this->belongsTo(Empleado::class);
    }


    public function alquilerEquipos(){
        return $this->hasMany(AlquilerEquipo::class);
    }


}
