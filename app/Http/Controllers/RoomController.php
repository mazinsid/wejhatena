<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\Room;
use App\Models\Setting;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function getUserRooms($id)
    {

        $setting = Setting::first();
        $rooms = Room::where('user_id', $id)->get();
        if ($rooms == null) {
            $rooms = Room::where('advertiser_id', $id)->get();
        }
        $messages =  Message::where('room_id', $rooms->first())->get();
        return view('ads.messages', compact('rooms', 'messages', 'setting'));
    }


    public function messages($id)
    {
        $messages = Message::where('room_id', $id);

        return back()->with('messages', $messages);
    }
}
