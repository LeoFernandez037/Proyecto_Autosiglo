<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class persona extends Model
{
    use HasFactory;
    protected $fillable = ['NOMBRES', 'AP_PATERNO', 'AP_MATERNO', 'FECHA_NACIMIENTO'];
}
