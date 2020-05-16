<?php

namespace App;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable= ['user_id','message'];

    public static function getAllMessage(){
        $value=DB::table('messages')->orderBy('id', 'asc')->get(); 
        return $value;
    }
}
