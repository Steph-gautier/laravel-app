<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Command;
use App\Device;

class CommandsController extends Controller
{
    public function lockVehicle(){
            request() -> validate([
                'device_id' =>'required',
                'command' => 'required|string|max:255',
            ]);
    
            $data = $request->all();
            $check = $this->create($data);
            //return Redirect::to("pricing")->withSuccess('Vehicle added!');
    }
    public function create(array $data){
        return Command::create([
            'user_id' => Device::find($data['device_id'])->id,
            'message' => $data['command'],
        ]);
    }
    public function loader(){
        return view('layouts/components/preloader');
    }
}
