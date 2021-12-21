<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rooms = Room::orderByDesc("created_at")->paginate(10);
        return response()->json([
            "status" => 200,
            "message" => $rooms,
        ]);
    }

    public function room($roomid)
    {
        $room = Room::where("id", $roomid)->first();
        return response()->json([
            "status" => 200,
            "message" => $room,
        ]);
    }

    public function specific($numberRooms)
    {
        $rooms = Room::all()->random($numberRooms);
        return response()->json([
            "status" => 200,
            "message" => $rooms,
        ]);
    }


    public function getProductsOfRoom($room_id)
    {
        $room = Room::findOrFail($room_id);
        return response()->json([
            "status" => 200,
            "message" => $room->products,
        ]);
    }
}
