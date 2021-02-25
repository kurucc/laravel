<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Beers extends Model
{
    protected $table = 'soreim';
    protected $primaryKey = 'id';
    public $timestamps = false;
}
