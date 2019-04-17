<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Directorio extends Model
{
    //
    protected $table = "directorios";

    protected $fillable = ['nombre', 'apepaterno', 'apematerno', 'direccion', 'email', 'departamento', 'cargo', 'telefonos', 'area', 'descripcion', 'foto'];
}
