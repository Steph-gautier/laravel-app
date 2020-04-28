<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    protected $fillable = [
        'owner','brandname', 'version', 'matriculationNbr','color','deviceId','lastposition','subscribedPlan','distance','addedvia'
    ];
}
