<?php

namespace App\Http\Controllers;

use App\Models\Rooms;

use Illuminate\Http\Request;

class RoomsController extends Controller
{
    public function index(Request $requestRooms){
        $roomList = Rooms::where('id','>',0);
        
        $whatToGet = $requestRooms->all();

        if(array_key_exists('room_name', $whatToGet)){
            $roomList->where('room_name', 'like','%'.$whatToGet['room_name'].'%');
        }

        $roomList->orderby('id', 'asc');

        $roomList = $roomList->paginate(config('constants.RECORD_PER_PAGE'));
        return view('./dashboard', compact(('roomList')));
    }
}