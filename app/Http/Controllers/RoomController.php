<?php
namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller; // Import the Controller class

class RoomController extends Controller
{
    public function index()
    {
        $rooms = Room::where('book', false)->get(); 
        return view('rooms.index', compact('rooms'));
    }
    


    public function show($id)
    {
        $room = Room::findOrFail($id); // Get the room by ID or fail
        
        return view('rooms.show', compact('room')); // Pass the correct variable
    }
    
}








