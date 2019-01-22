<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ikasleak extends Model
{
    protected $table = 'ikasleak';

    protected $primaryKey = 'email';

    protected $fillable = ['email', 'pasahitza', 'egoera'];

}
