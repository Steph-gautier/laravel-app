<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Command extends Model
{
    protected $fillable = ['device_id', 'command'];
}
