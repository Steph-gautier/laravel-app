<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OthersController extends Controller
{
    public function notifications(){
        return view('layouts/others/notifications');
    }
    public function transactions(){
        return view('layouts/others/transactions');
    }
    public function history(){
        return view('layouts/others/history');
    }
}
