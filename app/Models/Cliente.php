<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Alquiler;

class Cliente extends Model
{
    use HasFactory;

    protected $fillable = [
        'codigo',
        'nombre_completo',
        'telefono',
        'correo_electronico',
        'direccion'
    ];

    public function alquileres(){
        return $this->hasMany(Alquiler::class);
    }
}
