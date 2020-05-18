<?php

namespace App;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    protected $fillable = ['devide_id','latitude', 'longitude'];

    public static function getPreviousPositions(){
          $value=DB::table('positions')->orderBy('id', 'asc')->get(); 
        return $value;
      
      }
}
