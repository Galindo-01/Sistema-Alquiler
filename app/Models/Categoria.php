<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Equipo;

class Categoria extends Model
{
    use HasFactory;

    protected $fillable = [
        'nomnbre',
        'descrpcion'
    ];

    public function equipos(){
        return $this->hasMany(Equipo::class);
    }
}
