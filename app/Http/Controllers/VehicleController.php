<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator, Redirect,Response;
use App\Vehicle;

class VehicleController extends Controller
{
    public function addtrial(Request $request){
        $data = $request->all();
        $validation = Validator::make($data, [
            'brandname' => 'required|min:4|string|max:255',
            'version' => 'required|string|max:255',
            'matriculationNbr' => 'required|string|min:8|max:255|unique:vehicles',
            'color' => 'required|string|max:255',
            'vehicle_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
        if ($validation->passes()){
            $data['vehicle_image'] = time().'.'.$request->vehicle_image->extension();
            $request->vehicle_image->move(public_path('images'), $data['vehicle_image']);
            $check = $this->create($data);
            return response()->json([
                'message'=> 'Image Upload Successfull',
                'class_name' => 'alert-success',
                'status' => 'Continue',
            ]);
        }
        else{
            return response()->json([
                'message'=> $validation->errors()->all(),
                'class_name' => 'alert-danger',
                'status' => 'Return',
            ]);
        }
    }
    public function create(array $data){
        return Vehicle::create([
            'brandname' => $data['brandname'],
            'version' => $data['version'],
            'matriculationNbr' => $data['matriculationNbr'],
            'color' => $data['color'],
            'vehicle_image' => $data['vehicle_image'],
        ]);
    }
}
