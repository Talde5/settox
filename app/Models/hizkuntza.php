<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class hizkuntza extends Model
{
    protected $table = 'hizkuntza';

    protected $primaryKey = 'email';

    protected $fillable = ['email', 'hizkuntza', 'maila'];
}
