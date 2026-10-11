<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Alquiler;
use App\Models\Equipo;

class AlquilerEquipo extends Model
{
    use HasFactory;

    protected $fillable = [
        'alquiler_id',
        'equipo_id',
        'cantidad'
    ];

    public function alquiler(){
        return $this->belongsTo(Alquiler::class);
    }

    public function equipo(){
        return $this->belongsTo(Equipo::class);
    }
}
