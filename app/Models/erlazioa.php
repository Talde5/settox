<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class erlazioa extends Model
{
    protected $table = 'erlazioa';

    protected $primaryKey = ['email', 'idEskaintzak'];

    public $timestamps = false;

    protected $fillable = ['email', 'idEskaintzak', 'interes_Data'];
}
