<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GeneroPelicula extends Model
{
    //
    protected $table = 'generoPelicula';
    protected $fillable = [
        'fechaEstreno',
        'esEstreno', ];
}
