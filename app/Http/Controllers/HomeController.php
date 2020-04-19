<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
    public function addVehicle(){
        return view('add-vehicle');
    }
}
