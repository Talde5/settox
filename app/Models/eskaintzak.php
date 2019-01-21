<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class eskaintzak extends Model
{
  protected $table = 'eskaintzak';

    protected $primaryKey = 'idEskaintzak';

    public $timestamps = false;
   
    protected $fillable = ['idEskaintzak', 'enpresa_Izena', 'lan_Postua','hasierako_Data','amaierako_Data','deskripzioa','plaza_Hutsak','departamentua'];
}
