<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class titulazioa extends Model
{
     protected $table = 'titulazioa';

    protected $primaryKey = 'email';

    public $timestamps = false;

    protected $fillable = ['email', 'titulazio_Izena'];
}
