<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pricing extends Model
{
    protected $fillable = ['user_id', 'subscribedPlan', 'remaining_time', 'last_subscription', 'nbr_subscription'];
}
