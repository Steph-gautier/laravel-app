<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;
use App\User;

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
    public function postMessage(Request $request){
            request() -> validate([
                'message' => 'required|string|max:255',
                'user_id' =>'required'
            ]);
    
            $data = $request->all();
            $check = $this->create($data);
            //return Redirect::to("pricing")->withSuccess('Vehicle added!');
    }
    public function create(array $data){
        return Message::create([
            'user_id' => User::find($data['user_id'])->id,
            'message' => $data['message'],
        ]);
    }
    //Getting message
    public function getMessage(){
        // Fetch all records
        $allMessage['data'] = Message::getAllMessage();
    
        echo json_encode($allMessage);
        exit;
      }
}
