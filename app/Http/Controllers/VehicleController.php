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
            'vehicle_image' => 'required|image|mimes:jpeg,png,jpg|max:2048'
        ]);
        $imageName = time().'.'.request()->vehicle_image->getClientOriginalExtension();
        request()->image->move(public_path('images'), $imageName);
        $data = $request->all();
        $check = $this->create($data);
        
        return back()->with('success','You have successfully upload image.')->with('image',$imageName);
    }
    public function create(array $data){
        return Vehicle::create([
            //'owner' => $data['owner'],
            'brandname' => $data['brandname'],
            'version' => $data['version'],
            'matriculationNbr' => $data['matriculationNbr'],
            'color' => $data['color'],
        ]);
    }
}
