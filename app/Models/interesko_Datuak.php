<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class interesko_Datuak extends Model
{
    protected $table = 'interesko_Datuak';

    protected $primaryKey = 'email';

    public $timestamps = false;

    protected $fillable = ['email', 'lan_Esperientzia', 'gida_Baimena','kotxea','erabilgarritasuna','zure_Deskripzioa'];
}
