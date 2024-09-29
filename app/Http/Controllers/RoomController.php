<?php
namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller; // Import the Controller class

class RoomController extends Controller
{
    public function index()
    {
        $rooms = Room::all(); // Retrieve all rooms
        return view('rooms.index', compact('rooms')); // Pass them to the view
    }
    

    public function show($room_id)
{
    $room = Room::where('room_id', $room_id)->firstOrFail(); // This will throw a 404 if not found
    return view('rooms.show', compact('room'));
}

    
}








