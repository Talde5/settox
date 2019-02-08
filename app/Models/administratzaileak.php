<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class administratzaileak extends Model
{
    //
    protected $table = 'administratzaileak';

    protected $primaryKey = 'email';

    public $timestamps = false;

    protected $fillable = ['email', 'pasahitza', 'mota','departamentua','egoera'];
}
