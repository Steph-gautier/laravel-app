<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
   protected $fillable = [
        'vehicle_id','deviceID', 'latitude', 'longitude', 'speed'
    ];
}
