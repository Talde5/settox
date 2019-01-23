<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class perfila extends Model
{
    protected $table = 'perfila';

    protected $primaryKey = 'email';

    public $timestamps = false;

    protected $fillable = ['email', 'dni', 'izena','apellidos','jaiotze_Data','helbidea','kontaktua'];
}
