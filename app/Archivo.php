<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Archivo extends Model
{
    protected $fillable = ['fk_id_usuario','nombre_archivo','ruta_archivo'];
}
