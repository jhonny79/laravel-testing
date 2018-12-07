<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Solicitud extends Model
{
    protected $fillable = [ 'de', 'para', 'asunto', 'cuerpo', 'message_id'];
}
