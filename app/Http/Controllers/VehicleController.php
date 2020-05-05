<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator, Redirect,Response;
use App\Vehicle;

class VehicleController extends Controller
{
    public function addtrial(Request $request){
        request() -> validate([
            //'owner' => 'required|string','min:8|max:255',
            'brandname' => 'required|min:8|string|max:255',
            'version' => 'required|string|max:255',
            'matriculationNbr' => 'required|string|min:8|max:255|unique:vehicles',
            'color' => 'required|string|max:255',
            /*'deviceId' => 'required|integer|min:12|max:255|unique:vehicles',
            'subcribedPlan' => 'required|string|max:255',
            'addedvia' => 'required|string|min:8|confirmed',*/
        ]);

        $data = $request->all();
        $check = $this->create($data);
        //return Redirect::to("pricing")->withSuccess('Vehicle added!');
    }
    public function create(array $data){
        return Vehicle::create([
            //'owner' => $data['owner'],
            'brandname' => $data['brandname'],
            'version' => $data['version'],
            'matriculationNbr' => $data['matriculationNbr'],
            'color' => $data['color'],
            /*'deviceId' => $data['deviceId'],
            'subcribedPlan' => $data['subscribedPlan'],
            'addedvia' => $data['addedvia'],*/
        ]);
    }
}
