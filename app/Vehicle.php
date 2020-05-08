<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    public $table = 'vehicles'; 
    protected $fillable = [
        'brandname', 'version', 'matriculationNbr','color'
    ];
}
