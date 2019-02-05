<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class titulazioa extends Model
{
     protected $table = 'titulazioa';

    protected $primaryKey = 'email';

    protected $fillable = ['email', 'titulazio_Izena'];
}
