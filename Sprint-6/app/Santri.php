<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Santri extends Model
{
    protected $table = 'santri';

    protected $fillable = ['name', 'age', 'city'];
}
