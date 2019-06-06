<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\RoomType;
use App\Room;

class Search extends Controller
{
    public function index()
    {

        return view('front.index');
    }


    public function check(Request $request)
    {
        $session = [ 
            'check_in' =>  request('check_in'),
            'check_out' =>  request('check_out'), 
            'adult' =>  request('adult'), 
            'child' =>  request('child'), 
        ];
        $request->session()->put('key', $session);

        $rooms = Room::all();

        return view('front.room', ['rooms' => $rooms]);
    }

    public function checkRoom()
    {
      
        
        
    }

}
