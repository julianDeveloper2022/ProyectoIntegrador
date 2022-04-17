<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    use HasFactory;
    public $timestamps= false;
    protected $fillable= ['documento_identidad','nombre_est','apellido_est','genero','grado_cursa','nombre_madre','nombre_padre','email','telefono_acudiente'];
}
