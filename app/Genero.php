<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genero extends Model
{
    //
    protected $table = 'generos';
    protected $primaryKey = 'idGenero';
    protected $fillable = [
        'nombre',

    ];
}
