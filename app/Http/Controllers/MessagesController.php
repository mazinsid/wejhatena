<?php

namespace App\Http\Controllers;

use App\Models\Ads;
use App\Models\Message;
use App\Models\Room;
use App\Models\Setting;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class MessagesController extends Controller
{
    public function adsMessage($id)
    {

        $setting = Setting::first();
        $ads = Ads::where('id', $id)->get();
        foreach ($ads as $ad) {
            $advertiser_id = $ad->user_id;
        }
        $user_id = Auth::user()->id;
        $room = Room::where('ads_id', $id)->where('user_id', Auth::user()->id)->first();

        if ($room == null) {
            $room = Room::create([
                'ads_id' => $id,
                'advertiser_id' => $advertiser_id,
                'user_id' => $user_id,
            ]);
        }
        $ads = Ads::where('id', $id)->get();
        $messages =  Message::where('room_id', $room->id)->get();
        // dd($messages);
        return view('ads.ads_message', compact('ads', 'room', 'messages', 'setting'));
    }

    public function messageRoom($id)
    {

        $messages = Message::where('room_id', $id)->get();
        $room = Room::where('id', $id)->first();
        if (Auth::user()->id == $room->advertiser_id) {
            $seeder_name = $room->advertiser->name;
        } else {
            $seeder_name = $room->user->name;
        }
        return response()->json([$messages, $seeder_name,]);
    }

    public function storeMessage(Request $request)
    {
        Message::create([
            'room_id' => $request->room_id,
            'sender_id' => $request->sender_id,
            'message' => $request->message,
            'status' => 0,
        ]);

        return back();
    }
}
