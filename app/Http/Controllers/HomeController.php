<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Position;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function login(){
        return view('auth/login');
    }
    public function manager(){
        return view('vehicle-manager');
    }
    public function pricing(){
        return view('pricing');
    }
    public function support(){
        return view('support');
    }
    public function setting(){
        return view('settings');
    }

    public function addvehicletrial(){
        return view('layouts/vehicle-relatives/add-vehicle-trial');
    }
    public function addvehicle(){
        return view('layouts/vehicle-relatives/add-vehicle');
    }
    public function addvehiclepremium(){
        return view('layouts/vehicle-relatives/add-vehicle-premium');
    }
    //verifiying pricing eligibility
    public function verifyEligibility(){
        $remaining_time = 2000;
        $current_plan ="standard";
        if ($remaining_time == 0){
            return view('pricing');
        }
        elseif($remaining_time != 0 && $current_plan == 'free'){
            return view('pricing');
        }
        elseif($remaining_time != 0 && $current_plan == 'standard'){
            return view('layouts/vehicle-relatives/add-vehicle');
        }
        elseif($remaining_time != 0 && $current_plan == 'premium'){
            return view('layouts/vehicle-relatives/add-vehicle-premium');
        }
    }

    //GETTING PREVIOUS POSITIONS
    public function getPositions(){
        // Fetch all records
        $positionData['data'] = Position::getPreviousPositions();
    
        echo json_encode($positionData);
        exit;
      }
}
