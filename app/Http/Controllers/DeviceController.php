<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator, Redirect,Response;
use App\Device;
use App\Vehicle;

class DeviceController extends Controller
{
    public function adddeviceinfos(Request $request){
        request() -> validate([
            'deviceID' => 'required|string|min:12|max:255|unique:devices',
            'speed' => 'required|integer',
        ]);

        $data = $request->all();
        $check = $this->create($data);
        //return Redirect::to("pricing")->withSuccess('Vehicle added!');
    }

        public function create(array $data){
            return Device::create([
                'vehicle_id' => Vehicle::latest('id')->first()->id,
                'deviceID' => $data['deviceID'],
                'speed' => $data['speed'],
            ]);
        }
    }