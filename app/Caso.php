<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Caso extends Model
{
    protected $fillable = ['correlativo', 'responsable', 'fecha_solicitud', 'solicitante', 'asunto', 'cuerpo', 'anotaciones', 'estado'];
}
