<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class persona extends Model
{
    public $timestamps = false;
    use HasFactory;
    protected $table = "Persona";
    protected $fillable = [
        'ID_PERSONA',
        'NOMBRES',
        'AP_PATERNO',
        'AP_MATERNO',
        'CORREO_ELECTRONICO',
        'FECHA_NACIMIENTO',
        'TELEFONO'
    ];
}
